<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    public static function getCategories(){
    	$query = DB::table('categories')->get();
    	return $query;
    }

    public static function getCategoriesById($categoryId){
    	$query = DB::table('categories')->where('uniqueId',$categoryId)->get();
    	return $query;
    }

    public static function insertIntoItems($data){
    	$uniqueid = uniqid(); 
    	$insert = array('categoryId'=>$data['category'], 'name'=>$data['name'], 'units'=>$data['units'], 'generalPrice'=>$data['generalPrice'], 'ourPrice'=>$data['ourPrice'], 'variety'=>$data['variety'], 'MRP'=>$data['MRP'], 'description'=>$data['description'], 'image'=>$data['image'], 'storableYN'=>$data['storableYN'], 'storageDuration'=>$data['storageDuration'], 'storageType'=>$data['storageType'], 'precautions'=>$data['precautions'],'uniqueid'=>$uniqueid);
    	$query = DB::table('items')->insert($insert);
    	
    }
}
