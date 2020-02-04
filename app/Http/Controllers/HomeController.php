<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

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
                'name' => 'required|min:3|regex:/^[a-zA-Z ]+$/',
                'year' => 'required|integer|min:4',
                'price' => 'required|integer',
                'engine' => 'required|string|regex:/^[a-zA-Z ]+$/',
                'power' => 'required|integer',
                'volume' => 'required',
                'millage' => 'required|integer',
                'color' => 'required|regex:/^[a-zA-Z ]+$/',
                'drive' => 'required|regex:/^[a-zA-Z ]+$/',
                'condition' => 'required|regex:/^[a-zA-Z ]+$/',
                'images' => 'mimes:jpeg,png,jpg,gif,svg',
            ]);
            $images = [];
            foreach ($request->image as  $value){
                $images[] = $value->getClientOriginalName();
            }
            dd($images);

//            $imageName = time() . '.' . $request->image->extension();
//            $request->images->move(public_path('auto_images'), $imageName);

        }
        $user_id = Auth::user()->getAuthIdentifier();
        return view('user.add-product', compact('user_id'));
    }

}
