<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Product;
use App\Models\Category;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request){
        return view('list-category');
    }
    public function addNew(){
        $model = new Category();
        $product = Product::all();
        return view('category.add-form', compact('model', 'product'));
    }

    public function saveAddNew(CategoryRequest $request){
        $model = new Category();
        if($request->hasFile('image')){

            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homehome'));
    }

    public function editForm($id){
        $model = Category::find($id);
        if(!$model){
            return redirect()->route('homehome');
        }
        $product = Product::all();
        return view('category.edit-form', compact('model', 'product'));
    }
    public function saveEdit(CategoryRequest $request){
        $model = Category::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('homehome'));
    }

    public function getData()
    {
        $cates = Category::select([
            'id',
            'name',
            'status',
            'category_type',
            'description',
        ]);
        return DataTables::of($cates)->addColumn('action',function($data){
            $button = '<button class="btn btn-primary" name="edit" id="'.$data->id.'" >
                        <a href="'. route('category.edit', $data->id) .'">Edit</a>
                        </button>';
            $button .= '<button class="btn btn-danger btnDelete" name="delete" id="'.$data->id.'" >
                            <a href="'. route('category.remove', $data->id) .'">Delete</a>
                        </button>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    // Xóa
    // public function deletePost($id){
    //     $post= Category::find($id);
    //     $post->delete();
    //     return redirect(route('homehome'));
    // }
}
