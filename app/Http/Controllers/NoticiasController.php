<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function getAllNotice()
    {
        return Noticias::all();
    }
    public function getNotice()
    {
        # code...
    }
    public function createNotice(Request $request)
    {
        $newNoticia = new Noticias();
        $newNoticia->title = $request->title;
        $newNoticia->summary = $request->summary;
        $newNoticia->description = $request->description;
        $newNoticia->tags = $request->tags;
        $newNoticia->section = $request->section;
        $newNoticia->autor = $request->autor;
        $newNoticia->save();
        return $newNoticia;
    }
    public function updateNotice()
    {
        # code...
    }
    public function deleteNotice()
    {
        # code...
    }
}
