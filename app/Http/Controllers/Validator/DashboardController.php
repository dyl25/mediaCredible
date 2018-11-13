<?php

namespace App\Http\Controllers\Validator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class DashboardController extends Controller
{
    public function index() {
        $content = Content::latest();

        return view('validator.dashboard', compact('content'));
    }
}
