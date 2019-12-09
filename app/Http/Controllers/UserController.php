<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $users = User::paginate(5);
        }else{
            $kw = $request->keyword;
            $users = User::where('name', 'like', "%$kw%")->orwhere('role', 'like', "%$kw%")
                            ->paginate(5);
            $users->withPath("?keyword=$kw");
        }
        return view('list-user', [
                        'taikhoan' => $users
                    ]);
    }
    public function addNew(){
        $model = new User();
        $users = User::all();
        return view('user.add-form',compact('model', 'users'));
    }
    public function saveAddNew(Request $request){
        $model = new User();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $model->create($input);

        return redirect(route('adminsuper'));
    }
    public function editForm($id){
        $model = User::find($id);
        if(!$model){
            return redirect()->route('adminsuper');
        }
        $users = User::all();
        return view('user.edit-form',compact('model', 'users'));
    }
    public function saveEdit(Request $request){
        $model = User::find($request->id);
        $dt = Carbon::now();
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->date == null){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('adminsuper'));
    }

    // Xóa
    public function deletePost($id){
        $post= User::find($id);
        if($post->role < 900){
        $post->delete();
        return redirect(route('adminsuper'));
        }
        else{
        return redirect(route('adminsuper'));
        }
    }
}