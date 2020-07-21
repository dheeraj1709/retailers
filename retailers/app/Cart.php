<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    public static function getCartDetailsByUser($userid){
    	$query = DB::table('carts')->where('userid',$userid)->get();
        return $query;
    } 
}
