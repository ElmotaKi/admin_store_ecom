<?php
namespace App\service;

use App\Models\Category;
use App\Utils\ImageUpload;


 class CategoryService
{
public function store($parms){
    $parms['perant'] = $parms['perant']?? 0 ;


    if (isset($parms['image'])){
        $parms['image'] = ImageUpload::uploadImage($parms['image']);
    }
    return Category::create($parms);

}
public function getId($id){
$query =Category::where('id',$id)->firstOrFail();
return $query;
}

// public function getMainCategories(){
//     return Category::where('perant',0)->orwhere('perant,null')->get();
// }

public function updat($id,$parms){
   

    $category=$this->getId($id);
    $parms['perant'] = $parms['perant']?? 0 ;


    if (isset($parms['image'])){
        $parms['image'] = ImageUpload::uploadImage($parms['image']);
    }
    return $category->update($parms);

}



}