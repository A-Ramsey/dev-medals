<?php

namespace App\Http\Controllers;

use App\Models\Medal;
use Illuminate\Http\Request;

class MedalController extends Controller
{
    public function index()
    {
        $medals = Medal::all();
        return view('medals.index', [
            'medals' => $medals,
        ]);
    }

    public function save()
    {
        $validated = request()->validate([
            'name' => 'required|string|min:3|max:20',
            'slug' => 'required|string|min:3|max:64|unique:App\Models\Medal,slug',
            'description' => 'required|string|min:1|max:500',
        ]);
        $medal = Medal::create($validated);
        $medal->save();
        return redirect(route('medals.home'));
    }

    public function show(Medal $medal)
    {
        return view('medals.show', ['medal' => $medal]);
    }
}
