<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index(){
        $artikels = ArtikelModel::get_all();
        return view('items.artikel_index', compact('artikels'));
    }

    public function create() {
        return view ('items.artikel_form');
    }

    public function store(Request $request) {
        $article = $request->all();
        unset($article["_token"]);
        $article["slug"] = strtolower(str_replace(' ', '-', $article["judul"]));
        $artikels = ArtikelModel::add($article);
        if ($artikels) {
            return redirect('/artikel');
        }
        else {
            return view('items.artikel_null');
        }
    }

    public function show($id) {
        $article = ArtikelModel::find_by_id($id);
        return view('items.artikel_show', compact('article'));
    }

    public function edit($id) {
        $article = ArtikelModel::find_by_id($id);
        return view('items.artikel_edit', compact('article'));
    }

    public function update($id, Request $request) {
        $article = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}