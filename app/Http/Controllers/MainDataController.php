<?php

namespace App\Http\Controllers;

use App\Models\MainData;
use Illuminate\Http\Request;

class MainDataController extends Controller
{
    public function index()
    {
        $mainData = MainData::get();
        return view('pages.main.index', compact('mainData'));
    }
    public function store(Request $request)
    {
            // validate the request...
        $request->validate([
            'description' => 'required',
        ]);
        MainData::create([
            'description' => $request->description,
        ]);

        return redirect()->route('main-data.index');
    }
}
