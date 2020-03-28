<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ibank;
USE DB;
class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
         
       
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
            'account' => 'required| digits:11 | numeric'
        ],['account.required' => 'Account number is required']);
        
        $id = DB::TABLE('ibanks')->where('account','=', $request->account)->pluck('id');
        $id = trim($id, '[]');
        $obj= ibank::find($id);
        
        
        $this->validate($request,[
            'mobile' => 'required | digits:10'
        ],['mobile.required' => 'please enter mobile number']);
        $this->validate($request,[
            'user_id' => 'required'
        ],['user_id.required' => 'create your user name']);
        $this->validate($request,[
            'pwd' => 'required'
        ],['pwd.required' => 'enter new password']);
        $this->validate($request,[
            'cpwd' => 'required'
        ],['cpwd.required' => 'renter the password']);
        
        if($request->account == $obj->account  && $request->mobile == $obj->mobile)
        {
                
            
                if($obj->user_id != 'user')
                {

                    return redirect('/newuser')->with('warning','you are not a new user');   
                }
                else{
                if($request->pwd != $request->cpwd)
                 {
                     return back()->with('warning','password not matching');
                 }
                 else{
                    $this->validate($request,[
                        'user_id' => 'unique:ibanks'
                    ],['user_id.unique' => 'choose another user id']);
                    $obj->user_id  = $request ->user_id;
                    $pass = bcrypt($request->pwd);
                    $obj->password  = $pass;
                    $obj->save();
                return back()->with('warning','all setteled');
                 }
                }
        }
        else
        {
            return redirect('/newuser')->with('warning','we are not finding your data');  
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
        $id= trim($id,'pro');
        return view('layout.pchange')->with('bank',$id);
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
        $id = trim($id,'pro');
       
        $this->validate($request,[
            'opwd' => 'required'
        ],['opwd.required' => 'enter old password']);
        $this->validate($request,[
            'pwd' => 'required'
        ],['pwd.required' => 'enter new password']);
        $this->validate($request,[
            'cpwd' => 'required'
        ],['cpwd.required' => 're-enter password']);
        $obj= ibank::find($id);
        $isOk  = password_verify($request->opwd,$obj->password);
        if($isOk)
        {
               if($request->pwd != $request->cpwd)
               {
                return back()->with('warning','password not matching');  
               }
               else
               {
                $pass =$request->pwd;
                $pass = bcrypt($pass);
                $obj->password = $pass;
                $obj->save();
                return redirect('/log')->with('warning','dear customer login again with new password');
               }
        }
        else
        {
            return back()->with('warning','invalid password');
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
