<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\AccountVerificationToken;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone_number' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $roleCandidate = Role::where('slug', 'candidate')->first();

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $user->roles()->attach($roleCandidate->id);

        // Generate account verification token
        $token = AccountVerificationToken::createTokenForUser($user->id);


        // Send verification email
        // $user->sendAccountVerificationEmail($token->token);

        Mail::send('emails.account-verification', ['name' => $user->name, 'token' => $token->token], function ($message) use ($user) {
            $message->from('info@staff-link.com', 'The Jobify Team');
            $message->to($user->email, $user->name);
            $message->subject('Verify Your Jobify Account');
        });


        return redirect()->route('verify.account')->with('status', 'Registration successful! Please check your email to verify your account.');
    }


    public function verifyAccount(Request $request): View
    {
        return view('auth.verify-account');
    }



    public function processAccountVerification(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'verification_code' => ['required', 'string'],
        ]);

        $verificationToken = AccountVerificationToken::where('token', $validated['verification_code'])->first();



        if (!$verificationToken) {
            return redirect()->route('verify.account')->with('error', 'Invalid verification token.');
        }

        if ($verificationToken->expires_at < now()) {

            $verificationToken->delete();

            return redirect()->route('verify.account')->with('error', 'The token has expired, Kindly request a new one');
        }

        $user = User::find($verificationToken->user_id);


        if (!$user) {
            return redirect()->route('verify.account')->with('error', 'User not found.');
        }

        $user->email_verified_at = now();
        $user->published = true;
        $user->save();

        // Delete the used token
        $verificationToken->delete();

        return redirect()->route('login')->with('status', 'Your account has been verified. You can now log in.');
    }


    public function showResendVerificationForm(): View
    {
        return view('auth.resend-verification-email');
    }


    public function resendVerificationEmail(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found.');
        }

        if ($user->email_verified_at) {
            return redirect()->route('login')->with('info', 'Your account is already verified. Please login');
        }

        // Generate a new verification token
        $token = AccountVerificationToken::createTokenForUser($user->id);

        // Send verification email
        Mail::send('emails.account-verification', ['name' => $user->name, 'token' => $token->token], function ($message) use ($user) {
            $message->from('info@j.com', 'The Jobify Team');
            $message->to($user->email, $user->name);
            $message->subject('Verify Your Jobify Account');
        });

        return redirect()->route('verify.account')->with('status', 'A new verification email has been sent to your email address.');
    }
}
