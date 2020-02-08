<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    public function dashboard_get(){
        return view('dashboard.dashboard');
    }

    public function add_listing_get()
    {
        return view('dashboard.add-listing');
    }

    public function add_listing_post(Request $request)
    {

        $user_id = Auth::user()->id;

        $request->validate([
            'category'    => ['required', 'integer'],
            'title'       => ['required', 'string', 'max:255'],
            'phone'       => ['required', 'string'],
            'email'       => ['required', 'string'],
            'image'       => ['required', 'string'],
            'review'      => ['required', 'integer'],
            'rate'        => ['required', 'integer'],
            'location'    => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'address'     => ['required', 'string'],
        ]);

        Listing::create([
            'user_id'     => $user_id,
            'category_id' => $request -> input('category'),
            'title'       => $request -> input('title'),
            'phone'       => $request -> input('phone'),
            'email'       => $request -> input('email'),
            'image'       => $request -> input('image'),
            'review'      => $request -> input('review'),
            'rate'        => $request -> input('rate'),
            'location'    => $request -> input('location'),
            'description' => $request -> input('description'),
            'address'     => $request -> input('address'),
            'active'      => 1,
        ]);

        return redirect(route('add.listing'))->with('message', 'Success');

    }
}
