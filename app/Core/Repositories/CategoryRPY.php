<?php
namespace App\Core\Repositories;
use Illuminate\Http\Request;
use App\Core\Entities\Category;


class CategoryRPY{

    public function forSave(Request $request){
        $objCategory=new Category();
        $objCategory->fill($request->all());
        $objCategory->save();
    }

    public function forUpdate(Request $request,Category $objCategory){
        $objCategory->fill($request->all());
        $objCategory->save();
    }

    public function forAll(){
        return Category::all();
    }
}