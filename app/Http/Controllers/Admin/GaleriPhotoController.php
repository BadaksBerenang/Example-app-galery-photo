<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Helpers\Category;

class GaleriPhotoController extends Controller
{
    public function index() {

        // dd(Post::all());
        return view ('admin.galeri-photo.index',[
            'pageTitle' => 'Galeri-Photo',
            'listPost' => Post::first(),
        ]);
            
    }

    public function create() {
        // dd('rencana rencana dan rencana');
        return view('admin.galeri-photo.create', [
            'pageTitle' => 'Create Galeri',
            'listCategory' => Category::categories
        ]);
    }

    public function store(Request $request) {
        dd($request);
    }
}
