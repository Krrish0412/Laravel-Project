<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ibank;
USE DB;
class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'uid' => 'required'
        ],['uid.required' => 'enter user id']);
        $this->validate($request,[
            'pwd' => 'required'
        ],['pwd.required' => 'enter  password.']);
        $id =DB::TABLE('ibanks')->where('user_id','=',$request->uid)->pluck('id');
        $id = trim($id, '[]');
        
        if($id)
        {
           if($request->uid == 'user')
           {
               return redirect('/newuser')->with('warning','dear customer  register first yourself ');
           }
           else{
            $obj= ibank::find($id);
         $isOk  = password_verify($request->pwd,$obj->password);
         
            if($isOk)
            {
                session('success');
                $_SESSION['name']=$obj->balance;
                return view('layout.account')->with('bank',$obj);
            }
            else
            {
            
            return back()->with('warning','invalid password or user id');
            }
        }
    }
else
{
    return back()->with('warning','invalid user id or password');
}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id= trim($id,'bank');
        return view('layout.update')->with('bank',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = trim($id, 'bank');
        $obj= ibank::find($id);
        if(($request->email==null) && ($request->mobile == null))
        {
        return back()->with('warning','enter email or mobile');
        }
        else
        {
            if($request->email)
            {
                $this->validate($request,[
                    'email' => 'required | email | unique:ibanks'],
                ['email.unique' => 'dear customer email which you trying to enter is already exist!']);
                $obj->email  = $request ->email;
                
                $obj->save();
                return view('layout.account')->with('bank',$obj);
            }
            if($request->mobile)
            {
                $this->validate($request,[
                    'mobile' => 'required | digits:10 | unique:ibanks'
                ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
                
                $obj->mobile  = $request ->mobile;
                $obj->save();
                return view('layout.account')->with('bank',$obj);
            }
            if($request->email && $request->mobile)
            {
                $this->validate($request,[
                    'email' => 'required | email | unique:ibanks'],
                ['email.unique' => 'dear customer email which you trying to enter is already exist!']);
                $this->validate($request,[
                    'mobile' => 'required | digits:10 | unique:ibanks'
                ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
                
                $obj->email  = $request ->email;
                $obj->mobile  = $request ->mobile;
                $obj->save();
                return view('layout.account')->with('bank',$obj);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
