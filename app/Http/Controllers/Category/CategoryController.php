<?php

namespace App\Http\Controllers\Category;

use App\Core\Entities\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Repositories\CategoryRPY;

class CategoryController extends Controller
{

	private $objCategoryRPY;

    public function __construct(CategoryRPY $objCategoryRPY)
    {
    	$this->objCategoryRPY=$objCategoryRPY;
    	$this->middleware('auth:admin');
    }

    public function index()
    {
    	$table = $this->objCategoryRPY->forAll();
    	return view('admin.categories.index')->with(['table'=>$table]);
    }

 	public function store(Request $request)
 	{
 		$this->validate($request,
        ['name'=>'required|unique:categories,name','description'=>'required'],
        ['name.required'=>'El nombre es obligatorio',
         'description.required'=>'La descripcion es obligatoria']);
         $this->objCategoryRPY->forSave($request);
         return redirect()->route('catalogos.categories.index');
 	}
}
