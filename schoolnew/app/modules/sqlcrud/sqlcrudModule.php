<?php

namespace App\modules\sqlcrud;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class sqlcrudModule extends Model
{
  public static function show($table)
  {
    return $users = DB::table($table)->get();
  }
  public static function insertdata($data,$table)
  {
    DB::table($table)->insert($data);
  }
  public static function deletedata($data,$table,$id)
  {
    DB::table($table)->where($id,'=',$data)->delete();
  }
  public static function updateData($data,$id,$table,$ColumnsIDname)
  {
    DB::table($table)->where($ColumnsIDname,'=',$id)->update($data);
  }
}
