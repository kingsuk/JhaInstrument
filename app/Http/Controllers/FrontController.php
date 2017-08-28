<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Application;
use Illuminate\Support\Facades\Storage;
use Validator;

class FrontController extends Controller
{

    

    public function index()
    {
        $products['products'] = Product::paginate(6);
        return view('front.index',$products);
    }

    public function viewProductById($id)
    {
        $product['product'] = Product::find($id);
        //dd($product);
        return view('front.product',$product);
    }

    public function viewProductByCategoryId($id)
    {
        $items['items'] = Product::where('category_id_fk',$id)->paginate(12);
        return view('front.products',$items);
    }

    public function viewProductByApplicationId($id)
    {
        $items['items'] = Product::where('application_id_fk',$id)->paginate(12);
        return view('front.products',$items);
    }
}
