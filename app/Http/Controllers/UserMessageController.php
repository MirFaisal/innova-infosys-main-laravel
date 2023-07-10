<?php

namespace App\Http\Controllers;

use App\Models\UserMessage;
use Illuminate\Http\Request;



class UserMessageController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'contact_email' => 'required',
            'message' => 'required',
        ]);

        $userMessage = new UserMessage;
        $userMessage->name = $request->name;
        $userMessage->contact_email = $request->contact_email;
        $userMessage->message = $request->message;
        $userMessage->save();


        return redirect('contact')->with('status', 'Send Successfull');
    }

    public function messages()
    {
        $allMessages = UserMessage::query()->orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('allMessages'));
    }
}