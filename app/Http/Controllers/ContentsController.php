<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DB;

class ContentsController extends Controller
{
  
    public function index()
    {
        return view('contents.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        $about = Content::where('name', '=', 'about')->get();
        return view('contents.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about_title' => 'nullable',
            'about_body'  => 'nullable'
        ]);

        $content = Content::find($id);
        $content->about_title = $request->input('about_title');
        $content->about_body = $request->input('about_body');
        $content->save();

        return Session::flash('success', '$content updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
