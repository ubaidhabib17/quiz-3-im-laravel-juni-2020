<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class artikelModel{
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        $new_artikel = DB::table('artikel')->insert($data);
        return $new_artikel;
    }

    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id', $id)->first();
        return $artikel;
    }
    public static function update($id, $request){
        $artikel = DB::table('artikel')
                       ->where('id', $id)
                       ->update([
                           'judul' => $request["judul"],
                           'isi' => $request["isi"],
                           'slug' => $request["slug"],
                           'tag' => $request["tag"],
                       ]);

                       return $artikel;
    }

    public static function destroy($id){
        $delete = DB::table('artikel')
                     ->where('id', $id)
                     ->delete();
    }
}




?>
