<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index($category = null){
    	$datay = [];
    	$data['category'] = $category;
    	$categoryId = Shop::getIdByCategoryName($category);
    	$items = Shop::getItemsByCategoryId($categoryId ); 
    	return view('main.shop-grid',$data);
    }
}


/// we need to create shop  model, there we have to implement these two functions 