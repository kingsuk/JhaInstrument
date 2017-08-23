<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\Application;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {
      //echo "Hello world";
      return view('admin.home');
    }

    public function categories()
    {
        $categories['data'] = Category::paginate(4);
        //dd($categories);
        return view('admin.allcategories',$categories);
    }

    public function addCategory(){
        return view('admin.categories');
    }

    public function categoriesPost(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        $category->image1 = $this->_getStorageFilePath($request->file('image1'));

        if($category->save())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'New category created successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while creating new category.']);
        }
       
        
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        //dd($category);
        return view('admin.editcategory',$category);
    }

    public function editCategoryPost(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->image1 = $this->_getStorageFilePath($request->file('image1'));

        if($category->update())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'New category updated successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while updating category.']);
        }
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if($category->delete())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'Category deleted successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while deleting category.']);
        }
    }

    //application crud
    public function application()
    {
        $categories['data'] = Application::paginate(4);
        //dd($categories);
        return view('admin.application.allcategories',$categories);
    }

    public function addApplication(){
        return view('admin.application.categories');
    }

    public function applicationPost(Request $request)
    {
        $category = new Application();
        $category->name = $request->name;
        $category->description = $request->description;

        $category->image1 = $this->_getStorageFilePath($request->file('image1'));

        if($category->save())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'New category created successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while creating new category.']);
        }
       
        
    }

    public function editApplication($id)
    {
        $category = Application::find($id);
        //dd($category);
        return view('admin.application.editcategory',$category);
    }

    public function editApplicationPost(Request $request)
    {
        $category = Application::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->image1 = $this->_getStorageFilePath($request->file('image1'));

        if($category->update())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'New category updated successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while updating category.']);
        }
    }

    public function deleteApplication($id)
    {
        $category = Application::find($id);
        if($category->delete())
        {
            return redirect()->back()->with(['alart'=> 'success','message'=>'Category deleted successfully.']);
        }
        else
        {
            return redirect()->back()->with(['alart'=> 'danger','message'=>'Error while deleting category.']);
        }
    }

    private function _getStorageFilePath($fileContents)
    {
        $filename = time() . '.' . $fileContents->extension();
        Storage::putFileAs('public', $fileContents,$filename);
        
        $fileUrl = Storage::url($filename);
        return $fileUrl;
    }
}
