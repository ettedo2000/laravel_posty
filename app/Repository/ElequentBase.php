<?php
namespace App\Repository;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class ElequentBase
{
    public static function findBy($id)
    {dd('@@@@');
        /* $returns = Post::when(isset($id),function ($query) use ($id){
             $query->where('user_id', '=', $id);
         });

          //return $returns->toSql();
          return $returns->get();*/
    }
}
