<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      return view('welcome');
    }
/*
    public function createUser()
    {
      $user = new User();
      $user->name = Input::get('name');
      $user->email = Input::get('email');
      $user->save();

      return Redirect::route('userSuccess');
    }

    public function userSuccess()
    {
      return view('success');
    }
    */

}
