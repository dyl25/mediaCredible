<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;
use App\Media;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::with('media')->limit(10)->get();

        return view('admin.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::get();

        return view('admin.content.create', compact('medias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'media' => 'bail|required|exists:medias,id|max:1',
            'title' => "bail|required|max:191|min:5",
            'contentUrl' => 'bail|required|url|unique:contents,url',
            'imageUrl' => 'required|url'
        ]);

        Content::create([
            'media_id' => request('media'),
            'title' => request('title'),
            'url' => request('contentUrl'),
            'url_image' => request('imageUrl')
        ]);

        session()->flash('notification', "Le contenu a bien été créé!");

        return redirect()->route('admin.contents.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $medias = Media::get();

        return view('admin.content.edit', compact('medias', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $this->validate($request, [
            'media' => 'bail|required|exists:medias,id|max:1',
            'title' => "bail|required|max:191|min:5",
            'contentUrl' => 'bail|required|url|unique:contents,url,'.$content->id,
            'imageUrl' => 'required|url'
        ]);

        $content->update([
            'media_id' => request('media'),
            'title' => request('title'),
            'url' => request('contentUrl'),
            'url_image' => request('imageUrl')
        ]);

        session()->flash('notification', 'Contenu mis à jour!');

        return redirect()->route('admin.contents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();

        session()->flash('notification', 'Le contenu à bien été supprimé!');

        return redirect()->route('admin.contents.index');
    }
}
