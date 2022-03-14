<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uZerController extends Controller
{
    public function index()
    {
        return uZer::all();
    }

    public function show(uZer $uZer)
    {
        return $uZer;
    }

    public function store(Request $request)
    {
        $uZer = uZer::create($request->all());

        return response()->json($uZer, 201);
    }

    public function update(Request $request, uZer $uZer)
    {
        $uZer->update($request->all());

        return response()->json($uZer, 200);
    }

    public function delete(uZer $uZer)
    {
        $uZer->delete();

        return response()->json(null, 204);
    }
    //
}
