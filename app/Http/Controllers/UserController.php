<?php

namespace App\Http\Controllers;

use App\Position;
use App\User;
use Validator;
use Response;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

use Illuminate\Routing\RouteCollection;
class UserController extends Controller
{
    public function index(){
    	$users = User::orderBy('id', 'desc')->get();
        $positions = Position::all();
    	return view('admin.users.list',[
    		'users' => $users,
            'positions' => $positions,
    	]);
    }
    public function getListUser(){
    	$users = User::select(
            'users.id',
            'users.name',
            'users.email',
            'users.username',
            'users.avatar',
            'positions.name_pos',
            'positions.description'
        )
        ->join('positions', 'positions.id','=','users.position_id')
        ->orderBy('users.id','desc');
        // dd('ok');
    	return Datatables::of($users)
        	->addColumn('action', function($users){
        		return '<button class="btn btn-sm btn-success user-show" data-id="'.$users->id.'">Show</button>
                        <button class="btn btn-sm btn-info user-edit" data-id="'.$users->id.'">Edit</button>
                        <button class="btn btn-sm btn-danger user-delete" data-id="'.$users->id.'">Delete</button>';
        	})
            ->addColumn('photo', function($users){
                return '<img class="img-responsive img-thumbnail" style="width:150px; height:auto" src="'.$users->avatar.'">';
            })
    	    ->rawColumns(['action','photo'])
        	->toJson();

    }
    
    public function detail($id){
    	$users = User::with('position')->find($id);
        return response()->json(['data'=>$users],200);
    }
    public function store(Request $request){
        $data = $request->all();
        $data['password'] = md5($request->password);
        $data['position_id']= $request->position_id;
    	$user = User::create($data);
        return response()->json(['data'=>$user], 200);
    }
    public function edit($id){
    	return User::findOrFail($id);
    }
    public function update(Request $request, $id){
    	$user = User::findOrFail($id);
    	$update = $user->update($request->all());
    	return response()->json(['data'=>$user], 200);
    }

    public function destroy(Request $request, $id){
        $user_id = $request->all()['id'];
        User::destroy($user_id);
        // $product_detail = Product_Detail::find($id)->where('product_id', '=', $id);
        // $product_detail ->delete();
        // Product_Detail::where('product_id',$id)->delete();
        // Gallary_Image::where('product_id', $id)->delete();
        return \Response::json([
            'error' => false,
        ]);
    }
    // test Cropit
    public function index2(){
        return view('admin.users.cropit');
    }
    public function store2(){
        // do upload
    }
}
