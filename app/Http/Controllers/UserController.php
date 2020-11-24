<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meme;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function submit()
    {
        return view('submit');
    }

    public function save(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->url.'.json';
        $json = json_decode(file_get_contents($url), false);

        $result = $json[0]->data->children[0];

        //dd($url, $result, $json);

        $file = Meme::create([
            'name' => $result->data->title,
            'subreddit' => $result->data->subreddit,
            'image' => $result->data->url_overridden_by_dest,
            'user_id' => auth()->user()->id
        ]);
        $file->save();

        $data = $file->fresh();

        return redirect()->route('show', ['id' => $data->id]);
    }
}
