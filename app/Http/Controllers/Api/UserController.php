<?php

namespace App\Http\Controllers\Api;

//use Faker\Provider\Image;
use Image;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    Public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
      return User::latest()->paginate(10);
    }


    public function store(Request $request)
    {
    }

    public function searchResult(Request $request){
        $search=$request->input('q');
        if ($search){
            $user=User::where(function ($query) use ($search){
               $query->where('name', 'LIKE', "%$search%")
               ->orWhere('email', 'LIKE', "%$search%")
               ->orWhere('role', 'LIKE', "%$search%")
               ->orWhere('bio', 'LIKE', "%$search%");

            })->paginate(5);


        }else{
            $user=User::latest()->paginate(5);
        }
        return $user;



//        if ($search = \Request::get('q')) {
//            $users = User::where(function($query) use ($search){
//                $query->where('name','LIKE',"%$search%")
//                    ->orWhere('email','LIKE',"%$search%");
//            })->paginate(20);
//        }else{
//            $users = User::latest()->paginate(5);
//        }
//        return $users;

    }


    public function show($id)
    {
        //
    }

    public function getProfileData()
    {
        return auth('api')->user();
    }


    public function profile(Request $request)
    {

//        return $request->all();
//        return $request->image;
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255',
            'bio'=>'required|string|max:255',
//            'image'=>'image',
            'role'=>'required',
        ]);

        $user=auth()->user();
       if ($request->image){
           $existimage=$user->photo;

           $name=time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
           $directory=public_path('img/');
           if ($existimage){
               unlink($directory.$existimage);
           }
           Image::make($request->image)->save($directory.$name);
           $user->update(['photo'=>$name]);

       }
        $user->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'bio'=>$request->bio,
           'role'=>$request->role,


        ]);

        return 'ok';
    }


    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $this->validate($request,[
           'name'=>'required|string|max:255',
           'email'=>'required|string|email|max:255',
           'bio'=>'required|string|max:255',
           'image'=>'image',
           'role'=>'required',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' =>$request->bio,
            'role' => $request->role,
        ]);
        return 'ok';



    }


    public function destroy($id)
    {
        $user=User::find($id);
      $user->delete();
      return ['message'=>'user deleted successfully done !'];
    }
}
