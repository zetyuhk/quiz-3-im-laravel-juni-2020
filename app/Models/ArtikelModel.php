<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class ArtikelModel {
  public static function get_all(){
    $artikels = DB::table('artikels')->get();
    return $artikels;
  }

  public static function add($data) {
    $new_artikels = DB::table('artikels')->insert($data);
    return $new_artikels;
  }

  public static function find_by_id($id) {
    $artikel = DB::table('artikels')->where('id', $id)->first();
    return $artikel;
  }

  public static function update($id, $request) {
    $artikel = DB::table('artikels')
                  ->where('id', $id)
                  ->update([
                    'judul' => $request["judul"],
                    'isi' => $request["isi"],
                    'tag' => $request["tag"],
                  ]);
    return $artikel;
  }

  public static function destroy($id) {
    $deleted = DB::table('artikels')->where('id', $id)->delete();
    return $deleted;
  }
}
?>