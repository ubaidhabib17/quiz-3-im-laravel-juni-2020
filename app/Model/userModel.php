<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class userModel{
    public static function get_all(){
        $user = DB::table('user')->get();
        return $user;
    }

    public static function save($data){
        $new_user = DB::table('user')->insert($data);
        return $new_user;
    }

    public static function find_by_id($id){
        $user = DB::table('user')->where('id', $id)->first();
        return $user;
    }
    public static function update($id, $request){
        $user = DB::table('user')
                       ->where('id', $id)
                       ->update([
                           'judul' => $request["judul"],
                           'isi' => $request["isi"],
                           'slug' => $request["slug"],
                           'tag' => $request["tag"],
                       ]);

                       return $user;
    }

    public static function destroy($id){
        $delete = DB::table('user')
                     ->where('id', $id)
                     ->delete();
    }
}




?>
