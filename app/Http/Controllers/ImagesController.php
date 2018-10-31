<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'link'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999',
            'gal'    => 'nullable',
            'port'   => 'nullable',
            'header' => 'nullable'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}
