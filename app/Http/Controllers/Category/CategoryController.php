<?php

namespace App\Http\Controllers\Category;

<<<<<<< HEAD
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
=======
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
>>>>>>> 9e563767f596c31b1587dcbfc5980e0c4e72940f
    	$this->middleware('auth:admin');
    }

    public function index()
    {
<<<<<<< HEAD
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
=======
    	return view('admin.categories.index');
    }
>>>>>>> 9e563767f596c31b1587dcbfc5980e0c4e72940f
}
