<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Media;

class MediaController extends Controller
{
    public function index()
    {
        return Media::get();
    }

    public function destroy(Media $media) {

        if ($media->logo) {
            unlink(public_path('img/medias/' . $media->logo));
        }

        $media->delete();

        return response()->json(null, 204);
    }
}
