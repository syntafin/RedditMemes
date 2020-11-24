<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meme;

class Prime extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function show($id)
    {
        $meme = Meme::where('id', $id)->first();

        return view('show', [
            'meme' => $meme
        ]);
    }

    public function random()
    {
        $img = Meme::all()->random(1)->first();

        return redirect()->route('show', ['id' => $img->id]);
    }
    
    public function all()
    {
        $data = Meme::paginate(15);

        return view('all', [
            'data' => $data
        ]);
    }
}
