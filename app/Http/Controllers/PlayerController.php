<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index() {
        return view('players');
    }

    public function store(Request $request) {
        $players = new Player();

        $players->name = $request->input('name');
        $players->surname = $request->input('surname');
        $players->email = $request->input('email');
        


        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/players/', $filename);
            $players->image = $filename;
        } else {
            return $request;
            $players->image = '';
        }
        $players->save();
        return view('players')->with('players', $players);
    }
}
