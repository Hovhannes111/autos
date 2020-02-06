<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $user_id = Auth::user()->getAuthIdentifier();
        $user = User::find($user_id);
        $product = Product::where('user_id', $user->id)->first();
        return view('user.home', compact('user','product'));
    }

    public function addProduct(Request $request)
    {
        if ($request->method() === 'POST') {
            $request->validate([
                'name' => 'required|min:3',
                'year' => 'required|integer|min:4',
                'price' => 'required|integer',
                'engine' => 'required|string|regex:/^[a-zA-Z ]+$/',
                'power' => 'required|integer',
                'volume' => 'required',
                'millage' => 'required|integer',
                'color' => 'required|regex:/^[a-zA-Z ]+$/',
                'drive' => 'required|regex:/^[a-zA-Z ]+$/',
                'condition' => 'required|regex:/^[a-zA-Z ]+$/',
                'images' => 'max:1000|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $images = [];
            for ($i = 0; $i < count($request['image']); $i++) {
                $image = time() . rand(0, 99) . '.' . $request['image'][$i]->getClientOriginalExtension();
                $request['image'][$i]->move(public_path('images\auto_images'), $image);
                $images[] = $image;
            }
            $images = json_encode($images);

            $product = new Product();
            $product->user_id = $request->get('user_id');
            $product->name = $request->get('name');
            $product->year = $request->get('year');
            $product->price = $request->get('price');
            $product->engine = $request->get('engine');
            $product->power = $request->get('power');
            $product->volume = $request->get('volume');
            $product->millage = $request->get('millage');
            $product->color = $request->get('color');
            $product->drive = $request->get('drive');
            $product->condition = $request->get('condition');
            $product->description = $request->get('description');
            $product->images = $images;

            $product->save();

            session()->flash('added', 'Your product is already in the section cars');

            return redirect()->back();

        }

        $user_id = Auth::user()->getAuthIdentifier();
        return view('user.add-product', compact('user_id'));
    }

    public function editProfil(Request $request)
    {
        if ($request->method() === 'POST') {
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);

            $user->name = $request->get('name');
            $user->phone = $request->get('phone');

            $user->save();

            session()->flash('changed', 'Your information is changed');

            return redirect()->back();

        } else {
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);
            return view('user.edit-profil', compact('user'));
        }
    }

    public function changePassword(Request $request)
    {
        if ($request->method() === 'POST') {

            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);

            if ($request->get('password') !== $request->get('password_confirmation')) {
                session()->flash('error_pass', 'Your password not confirmed');
                return redirect()->to('change-password');
            }

            if (Hash::check($request->get('this_password'), Auth::user()->password) == false) {
                session()->flash('error_this', 'Your current password is entered incorrectly');
                return redirect()->to('change-password');

            }

            if (Hash::check($request->get('this_password'), Auth::user()->password)) {
                if (Hash::check($request->input('this_password'), $user->password)) {
                    $user->password = bcrypt(\request()->input('password'));
                    $user->save();
                    session()->flash('success', 'Your  password is changed');
                    return redirect()->to('change-password');
                }
            }

        }

        else {
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);
            return view('user.change-password', compact('user'));
        }
    }

    public function deleteProduct(Request $request){
        dd('asd');
    }

}
