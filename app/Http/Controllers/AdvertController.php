<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdvertController extends Controller
{
    public function uploadAdvert(Request $request) 
    {
        $request->image->store('images', 'public');

        User::create([
            'name' => $request->name,
            'image' => $request->file('image'),
        ]);
        return 'uploaded';
    }
    public function index() 
    {
        return view('advert');;
    }

    public function test() 
    {
        return view('welcome');;
    }
}
