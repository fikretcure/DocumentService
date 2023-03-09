<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {

        Storage::disk('public')->move("avatars/9N51q8FLGRfbGV7EFVXxvM8fSpCrP7TmDlwm2wxO.jpg","test/"."9N51q8FLGRfbGV7EFVXxvM8fSpCrP7TmDlwm2wxO.jpg" );


//        return Storage::deleteDirectory("public/avatars");

//        return   asset('storage') ;

        return $request->file('avatar')->store(
            'avatars', "public"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
