<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

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

        if($request->hasFile('link'))
        {
            $raw  = $request->file('link')->getClientOriginalName();
            $ext  = $request->file('link')->getClientOriginalExtension();
            $name = pathinfo($raw, PATHINFO_FILENAME);
            $img  = $name.'.'.time().'.'.$ext;
            $path = $request->file('link')->storeAs('public/images/content', $img);
        }

        $image = new Image;
        $image->link   = $img;
        $image->gal    = $request->input('gal');
        $image->port   = $request->input('port');
        $image->header = $request->input('header');
        $image->save();

        return redirect('/admin/header')->with('success', 'New website header set!');
    }

    public function destroy($id)
    {
        //
    }
}
