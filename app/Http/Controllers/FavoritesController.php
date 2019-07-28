<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function store(Request $request, $micropost_id)
    {

//dd($micropost_id);

        \Auth::user()->favorite($micropost_id);
        return back();
    }


    public function destroy($id)
    {

//dd($id);

        \Auth::user()->unfavorite($id);
        return back();

    }
}
