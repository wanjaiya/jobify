<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\Models\Role;
use App\Models\User;
use Auth;

class SocialAuthController extends Controller
{
    //

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->stateless()->user();


            $check = User::where('email', $user->email)->first();

            if ($check) {

                Auth::login($check, true);

                $check->last_login_at = now();
                $check->save();

                if (!$check->profile_completed) {
                    
                    return redirect()->route('my-profile', ['user' => $check])->with('status', 'Kindly update your profile with the missing information');
                } else {


                    return redirect()->route('dashboard');
                }
            } else {

                $roleCandidate = Role::where('slug', 'candidate')->first();

                $user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'first_name' => $user->user['given_name'],
                    'last_name'=> $user->user['family_name'],
                    'google_id' => $user->id,
                    'published' => true,
                    'email_verified_at' => now(),
                ]);

                $user->roles()->attach($roleCandidate->id);


                Auth::login($user, true);

                $user->last_login_at = now();
                $user->save();

                return redirect()->route('my-profile', ['user' => $user])->with('status', 'Kindly update your profile with the missing information');
            }
        } catch (Exception $e) {

            return redirect('auth/google');
        }
    }
}
