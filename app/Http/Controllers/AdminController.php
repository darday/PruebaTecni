<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Doctrine\Inflector\Rules\Spanish\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.admin-home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('Admin.admin-create-users')->with(compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 
    public function store(Request $data)
    {
       
        if($data->user_password == $data->user_confirm_password){
            User::create([
                'user_name' => $data['user_name'],
                'user_ci' => $data['user_ci'],
                'user_cellphone' => $data['user_cellphone'],
                'user_date' => $data['user_date'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'user_city_id'=>$data['user_city'],
                'user_rol'=>$data['user_rol'],
            ]);

            return redirect('/add-users')->with('Message2','Usuario Agregado Exitosamente');
            
        }else{
            $res ='Las contraseñas no coinciden';
            return redirect('/add-users')->with('Message','Las Contraseñas no coinciden');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        //$users['user']= User::where('user_rol',2)->get();
        $users['user']= DB::table('users')
        ->join('cities','users.user_city_id','=','cities.city_id')
        ->select('cities.city_description','users.user_name','users.user_ci','users.user_cellphone','users.user_date','users.email','users.id')
        ->where('user_rol',2)
        ->get();
        
        return view('Admin.admin-list-users',$users);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        $countries = Country::all();
        return view('Admin.admin-edit-user',compact('user','countries'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $email=$request->email;
        $user2 = request() ->except(['_token','_method']);
        $user=User::findOrFail(Auth::user()->id);
         $user2["password"] = Hash::make($user2['password']);
         $user->update($user2);

        $users['user']= DB::table('users')
        ->join('cities','users.user_city_id','=','cities.city_id')
        ->select('cities.city_description','users.user_name','users.user_ci','users.user_cellphone','users.user_date','users.email','users.id')
        ->where('user_rol',2)
        ->get();
        return view('Admin.admin-list-users',$users)->with('Messagge','Información guardada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        
        User::destroy($user);



        return redirect('/list-users')->with('Messagge','Usuario eliminada con Exito');
    }
}
