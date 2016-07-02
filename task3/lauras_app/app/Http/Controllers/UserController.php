<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function createUser()
    {
      $user = new User;
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      $user->save();

      return Redirect::route('userSuccess');
    }

    public function userSuccess()
    {
      return view('success');
    }
}
