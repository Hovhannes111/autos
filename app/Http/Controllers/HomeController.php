<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function addProduct(Request $request)
    {
        if ($request->method() === 'POST') {
            $request->validate([
                'name' => 'required|min:3',
                'year' => 'required|integer|min:4',
                'price' => 'required|integer',
                'engine' => 'required|string',
                'power' => 'required|integer',
                'volume' => 'required',
                'millage' => 'required',
                'color' => 'required',
                'drive' => 'required',
                'condition' => 'required',
                'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            dd('asd');
            $imageName = time() . '.' . $request->images->extension();
//            $request->images->move(public_path('images'), $imageName);
            dump($imageName);
            dd($request->all());
        } else {
            $user_id = Auth::user()->getAuthIdentifier();

            return view('user.add-product', compact('user_id'));
        }
    }
}
