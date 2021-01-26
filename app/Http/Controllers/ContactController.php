<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('contact');
    }

    public function sendContactMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('info@arss.solutions')
            ->send(new ContactMessage($request->only(['name', 'email', 'message'])));

        session()->flash('contact_success', true);

        return redirect('/contact');
    }
}
