<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function cars()
    {
        return view('cars');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact(Request $request)
    {
        if ($request->method() === 'POST') {

            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'subject' => 'max:255',
                'message' => 'required|min:8|max:255',
            ]);

            $contact = new Contact();

            $contact->name = $request->get('name');
            $contact->email = $request->get('email');
            $contact->subject = $request->get('subject');
            $contact->message = $request->get('message');

            $contact->save();

            session()->flash('send', 'Your message is send');

            return redirect()->back();

        } else {
            return view('contact');
        }
    }

    public function carSingle()
    {
        return view('car-single');
    }

    public function error()
    {
        return view('/error')->withErrors(['error' => 'this link is invalid']);
    }

}
