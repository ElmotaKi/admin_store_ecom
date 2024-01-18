<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use App\Http\Requests\dachbord\category\CategoryUpdateRequest as CategoryCategoryUpdateRequest;
use App\Http\Requests\dashbord\category\CategoryStoreRequest as CategoryCategoryStoreRequest;
use App\Models\Category;
use App\Http\Requests\dashbord\category\CategoryUpdateRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\service\CategoryService;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoreis = Category::paginate(10);
        return view('dashbord.category.index',compact('categoreis'));
    }

    // {
    //     // $mainCategories = Category::where('perant',0)->orwhere('perant',null)->get();
    //     // $products = Category::paginate(10); // Récupérez 10 produits par page
        
    //     // return view('dashbord.category.index', compact('products','mainCategories'));

       
    //     ]);
    // }

//     public function getall()
  

    
// {
//     $query = Category::select('*')->with('perant');
//     return DataTables::of($query)
//         ->addIndexColumn()
//         ->addColumn('action', function ($row) {`/             return $btn = '
//                 <a  href="' . route('category.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
//                 <button type="button" id="deleteBtn" data-id="'. $row->id .'" class="delete btn btn-danger btn-sm" data-toggle="modal" title="test" data-target="#deletemodal"><i class="fa fa-trash"></i></button>';
//             })
//         ->addColumn('perant', function ($row) {
//             return ($row->perant == 0) ? 'category' : $row->perant->name;
//         })
//         ->addColumn('image', function ($row) {
//             return '<img src="' . asset($row->image) . '" width="100px" height="100px">';
//         })
//         ->rawColumns(['action', 'image','perant']) // Utilisez rawColumns pour indiquer que 'action' et 'image' contiennent du HTML brut
//         // ->editColumn('perant', function ($row) {
//         //     return ($row->perant == 0) ? 'category' : $row->perant->name;
//         // })
//         // ->editColumn('image', function ($row) {
//         //     return '<img src="' . asset($row->image) . '" width="100px" height="100px">';
//         // })
//         // ->orderColumn('perant', 'perant $1')
//         // ->orderColumn('image', 'image $1')
//         ->make(true);
// }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     protected $categoryService; // Déclarez la propriété

     public function __construct(CategoryService $categoryService) // Injectez le service dans le constructeur
     {
         $this->categoryService = $categoryService; // Affectez le service à la propriété
     }

    public function store(CategoryCategoryStoreRequest $request)
    {
       
        

        $this->categoryService->store($request->validated());
        return redirect()->route('category.index')->with('success', 'product add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     $category =Category::findOrFail($id);

        $getMaincategory =Category::all();
        return view('dashbord.category.edit' ,compact('category','getMaincategory')); ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, $id)

    {

        $this->categoryService->updat($id,$request->validated());
        return redirect()->route('category.store')->with('success', 'product edit successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd($id);
       $category = Category::find($id);

       if ($category) {
           $category->delete();
           return redirect()->route('category.index')->with('success', 'product delete successfully');
        }
   
       return redirect()->route('category.index')->with('error', 'product not delete successfully');

    }

  

}
