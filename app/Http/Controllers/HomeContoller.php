<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeContoller extends Controller
{
    //
const PAGE_HOMEPAGE = 'home';
protected $pageKey;

  public function __construct()
  {
    $this->homeKey = 'home';
  }

  public function index()
  {

    return view('welcome');

    // $itemPage = app(PageRepository::class)->getPage($this->homeKey);

    // if (!Auth::check()) {

    //   return view('site.pages.home', [
    //     'pageItem' => $itemPage,
    //   ]);
    // } else {

    //   $id = Auth::user()->company_id;

    //   $company = Company::where('id', $id)->first();
    //   return view('site.pages.home', [
    //     'pageItem' => $itemPage,
    //     'company' => $company,
    //   ]);
    // }
  }

  public function dashboard(){
    if (!Auth::user()->profile_completed) {
            return redirect()->route('my-profile')->with('status', 'Kindly update your profile with the missing information');
        }

    return view('dashboard');
      
  }









 

   

    // public function getPage($key, $with = [])
    // {
    //     return $this->getByKey($key, $with);
	// }
	// public function getByKey($key, $with = [])
    // {
    //     if (
    //         ($page = $this->model
    //             ->with($with)
    //             ->where('key', $key)
    //             ->first()) == null
    //     ) {
    //         if (isset($this->defaultTitle[$key])) {
    //             $title = $this->defaultTitle[$key];
    //         } else {
    //             $title = 'Untitled';
    //         }
    //     }
    //     return $page;
    // }

  
}
