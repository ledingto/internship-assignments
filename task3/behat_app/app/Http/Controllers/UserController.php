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
        $user = new User();

        $name = $email = "";
        $nameErr = $emailErr = "";

        // W3 schools
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
          echo($nameErr . ". Please try again. ");
        } else {
          $name = UserController::testInput($_POST["name"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed in name";
            echo($nameErr . ". Please try again. ");
          } else {
            $user->name = $name;
          }
        }
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
          echo($emailErr . ". Please try again. ");
        } else {
          $email = UserController::testInput($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            echo($emailErr . ". Please try again. ");
          } else {
            $user->email = $email;
          }
        }

        if (!($emailErr=="") || !($nameErr=="")) {
            // sleep gives user time to read error message on redirect page
            return Redirect::route('createUser');
        } else {
            $user->save();
            return Redirect::route('userSuccess');
        }
    }

    public function userSuccess()
    {
        return view('success');
    }

    public function testInput($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
}
