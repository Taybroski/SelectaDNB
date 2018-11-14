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
            $name = pathinfo($raw, PATHINFO_FILENAME);
            $ext  = $request->file('link')->getClientOriginalExtension();
            $img  = $name.'.'.time().'.'.$ext;
            $path = $request->file('link')->storeAs('public/images/content', $img);
        }

        $image = new Image;
        $image->link   = $img;
        $image->port   = $request->input('port');
        $image->gal    = $request->input('gal');
        $image->header = $request->input('header');
        $image->save();

        return redirect('/admin/header')->with('success', 'New website header set!');
    }

    public function update(Request $request, $id)
    {
        $img = Image::find($id);
        $img->updated_at = \DB::raw('NOW()');
        $img->save();

        return redirect('/')->with('success', 'New header image set');
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        \Storage::delete('/public/images/content/'.$image->link);   
        $image->delete();
        if(!$image) {
            return redirect('/admin/header')->with('error', 'No File Found');
        } else {
            return redirect('/admin/header')->with('success', 'Image Deleted!');
        }
    }
}
