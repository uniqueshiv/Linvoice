<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Image;
use File;
use Notify;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      if (Auth::user()->hasRole(['Owner', 'Admin'])){
          $rol=DB::table('roles')->get();
            $usr=DB::table('users')->get();
                
            $userRoles=DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')->select('users.*', 'roles.display_name', 'role_user.*')->get();

            
         

          return view('Users.Admin.dashboard')->with('data',$rol)->with('usrdata',$usr)->with('usrrol',$userRoles);

      }
      else
      {

       
        $usr=Auth::user();

      

        return view('Users.Client.dashboard' , compact('usr'));
      }
             
    }

     public function profileup(Request $request, $id){

            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $filename=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save( public_path('/images/profile' . $filename));

                $user=Auth::user();
                $user->profileimg= $filename;
                $user->save();
            }
             $usr=Auth::user();
             return view('Users.Client.dashboard', compact('usr'));

         }
}
