<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Comment::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Comment::create(array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone')
        ));

        return Response::json(array('success' => true));
    }
}
