<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Response;
use Input;

class UserController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(User::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        User::create(array(
            'name' => Request::get('name'),
            'email' => Request::get('email'),
            'phone' => Request::get('phone')
        ));

        return Response::json(array('success' => true));
    }


}
