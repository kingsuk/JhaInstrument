<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Application;
use Illuminate\Support\Facades\Storage;
use Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->imageUrl = 'public/images';
        $this->docUrl = 'public/docs';   
    }

    private function _getStorageFilePath($fielUrl,$fileContents)
    {
        $filename = time() . '.' . $fileContents->extension();
        Storage::putFileAs($fielUrl, $fileContents,$filename);
        
        $fileUrl = Storage::url($filename);
        return $fileUrl;
    }
    public function index()
    {
        return $this->imageUrl;
    }

    public function create()
    {
        $applications['applications'] = Application::all();
        $categories['categories'] = Category::all();
        //dd($categories);
        return view('admin.products.add',$applications,$categories);
    }

    public function createPost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:products|max:255',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        //dd($request);
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->rating = $request->rating;
        $product->status = $request->status;
        $product->category_id_fk = $request->category_id_fk;
        $product->application_id_fk = $request->application_id_fk;
        
        $product->data_sheet_url = $this->_getStorageFilePath($this->docUrl,$request->file('data_sheet_url'));

        $product->image1 = $this->_getStorageFilePath($this->imageUrl,$request->file('image1'));

        $product->image2 = $this->_getStorageFilePath($this->imageUrl,$request->file('image2'));

        $product->image3 = $this->_getStorageFilePath($this->imageUrl,$request->file('image3'));

        $product->image4 = $this->_getStorageFilePath($this->imageUrl,$request->file('image4'));

        if($product->save())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'New product created successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while creating new product.']);
        }
    }
}
