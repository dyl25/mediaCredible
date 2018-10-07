<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::get();

        return view('admin.media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
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
            'mediaName' => 'bail|required|min:2|max:191',
            'mediaUrl' => 'bail|required|url|unique:medias,website',
            'logo' => 'required|image'
        ]);

        //store logo in img folder
        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move('img/medias/', $fileName);

        Media::create([
            'name' => request('mediaName'),
            'website' => request('mediaUrl'),
            'logo' => $fileName
        ]);

        session()->flash('notification', "Nouveau média créé");

        return redirect()->route('admin.medias.index');
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
    public function edit(Media $media)
    {
        return view('admin.media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $this->validate($request, [
            'mediaName' => 'bail|required|min:2|max:191',
            'mediaUrl' => 'bail|required|url',
            'logo' => 'nullable|image'
        ]);

        if($request->hasFile('logo')) {
            $mediaDir = 'img/medias/';

            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move($mediaDir, $fileName);

            unlink(public_path($mediaDir.$media->logo));
            $media->logo = $fileName;
        }

        $media->name = request('mediaName');
        $media->website = request('mediaUrl');

        $media->save();

        session()->flash('notification', "Média mis à jour!");

        return redirect()->route('admin.medias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        if($media->logo) {
            unlink(public_path('img/medias/'.$media->logo));
        }

        $media->delete();

        session()->flash('notification', 'Le média a bien été supprimé!');

        return redirect()->route('admin.medias.index');
    }
}
