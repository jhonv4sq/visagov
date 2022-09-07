<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(MessageRequest $request)
    {
        $data = $request->validated();

        // Mail::to('thedioskira@gmail.com')->queue(new MessageReceived($data));

        return new MessageReceived($data);
    }
}
