<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ibank;
USE DB;
class VsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          
        $this->validate($request,[
            'adminame' => 'required | email'
        ],
    ['adminame.required' => 'enter your Admin id']);
    $this->validate($request,[
        'password' => 'required'
    ],
['password.required' => 'enter password']);
    if('123456' == $request->password)
    {
      return redirect('ibanks/create');
    }
    else
    {
      return back()->with('warning','invalid Admin id or Password!');
}
    }

    /**
     * Show the form for creating a new resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layout.admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ibanks = new ibank;
        $this->validate($request,[
            'fname' => 'required|regex:/^[\pL\s\-]+$/u|max:255'
        ],['fname.required' => 'first name and all the fields is required',
    'fname.regex' => 'first name is character not a digits ao special charcter'
    ]);
        $ibanks->fname = $request->fname;
        $this->validate($request,[
            'lname' => 'required |regex:/^[\pL\s\-]+$/u|max:255'
        ],['lname.required' => 'last name is required',
        'lname.regex' => 'last name is character not a digits ao special charcter'
        ]);
        $ibanks->lname  = $request ->lname;
        $this->validate($request,[
            'gender' => 'required'
        ],['gender.required' => 'you are female or male']);
        $ibanks->gender  = $request ->gender;
        $this->validate($request,[
            'dob' => 'required'
        ],['dob.required' => 'customer must be equal or above 18 years']);
        $ibanks->dob  = $request ->dob;
        $this->validate($request,[
            'account' => 'required| digits:11 | unique:ibanks'],
            ['account.required' => 'dear admin provide an account number',
            'account.digits' => 'account number must be equal to 11 numeric digits'
        ]);
        $ibanks->account  = $request ->account;
        $this->validate($request,[
            'debitcard' => 'required'
        ],['debitcard.required' => 'dear admin provide a visa card to the customer']);
        $ibanks->debitcard  = $request ->debitcard;
        $this->validate($request,[
            'balance' => 'required| numeric'
        ],['balance.required' => ' &#x20B9; balance can be zero but not empty']);
        $ibanks->balance  = $request ->balance;
        $this->validate($request,[
            'cif' => 'required| digits:8 | unique:ibanks'
        ],['cif.required' => 'without cif number online banking is not possible',
            'cif.digits' => 'cif number must be numeric with 8 digits'
        ]);
        $ibanks->cif  = $request ->cif;
        $this->validate($request,[
            'ipin' => 'required|digits:6'
        ],['ipin.required' => 'provide ipin',
        'ipin.digits' => 'ipin must be numeric with 6 secure digits']);
        $ibanks->ipin  = $request ->ipin;
        
        $this->validate($request,[
            'email' => 'required | email | unique:ibanks'],
        ['email.unique' => 'dear admin email which you try to entering is already exist please choose another']);
        $ibanks->email  = $request ->email;
        $this->validate($request,[
            'mobile' => 'required | digits:10'
        ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
        $ibanks->mobile  = $request ->mobile;
    
        /*$banks->user_id=auth()->user()->id;*/
        $ibanks->save();
        
        return redirect('/admin')->with('success','Congrates a new customer has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=trim($id,'ibank');
        
        $obj= ibank::find($id);
        return view('layout.profile')->with('bank',$obj);
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
        //
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
