<html>
    <head><title>Account</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
    html,body
            {
                height:100%;
                width:100%;
                margin-left: 0%;
                margin-top: 0%;
            }
            span.elogo
            {
                font-size: 60px;
                color:#F39C12;
                
            }
            div.log
            {
                
                margin-top: 1%;
                font-size:60px;
                color:#45B39D;
                font-weight: 100;
                font-family: Segoe UI;
                position: :absolute;
            }
            table.info
            {
                border:1px solid lightgrey;
                font-family: segoe ui;
                color:black;
                margin:10% 0% 0% 40%;
                  
                font-size: 18px;
            }
            th{
                font-weight: 500;
            }
   button.lgt
            {
               position: absolute;
                border:none;
                padding:1%;
                cursor: pointer;
                margin-top: -7.2%;
                font-family: Courier New;
                 margin-left: 85%;
                color:#F2F3F4;
                outline: none;
                background-color: #34495E;
            }
            table.wel
            {
                position: absolute;
                font-family: segoe ui;
                margin: 1% 0% 0% 2%;
            }
        div.icon
            {
                border: 1px solid lightgray;
                padding: 2%;
                margin-top: 10%;
                color: #F39C12;
                font-size: 36px;
                margin-top: 8%;
                
                border-radius: 360px;
                box-shadow: 5px 2px 5px lightgrey;
            }
    div.had
           {
                background-color: #F39C12;
                text-align:center;
                font-family: verdana;
                color:#F2F3F4;
           }
          
  .dropbtn 
           {
                background-color:transparent;
                color: white;
                padding:4% 0% 4% 0%;
                outline: none;
                font-size: 15px;
                border: none;
           }
.dropdown
          {
                position: relative;
                display: inline-block;
          }

.dropdown-content 
          {
               display: none;
               position: absolute;
               background-color: #f1f1f1;
               width:100px;
               border-left: 1px solid lightgrey;
               border-right: 1px solid lightgrey;
               border-bottom: 1px solid lightgrey;
               z-index: 1;
               padding: 0% 8% 0% 8%;
               margin-top: 2%;
          }
               td
               {
                   text-align: center;
               }
.dropdown-content a
          {
               font-size: 11px;
               color: black;
               padding-top:5px;
               padding-bottom: 5px;
               border-bottom: 1px solid lightgrey;
               text-decoration: none;
               display:block;
          }
.dropdown:hover .dropdown-content
          {
               display: block;
          }
          .dropdown-content a:hover
          {
               color: #F39C12;
          }
        </style>
    </head>
    <body>
        <div class="log"><span class="elogo">e</span>-banking</div>
            <button class="lgt" onclick="window.close()">LOG OUT <i class="fa fa-power-off"></i></button>
            <a href="#" style="position: absolute; margin-left:70%; margin-top: -3%;text-decoration: none; color: darkslategrey; font-family:Segoe UI;">ATM/branch</a>
        <div class="had">
                
                      <div class="dropdown">
                            <button class="dropbtn">TRANSFER</button>
                            <div class="dropdown-content">
                              <a href="#">fund transfer</a>
                              <a href="#">quick transfer</a>
                              <a href="#">manage payee</a>
                              <a href="#">add payee</a>
                              <a href="#">pay-bills</a>
                            </div>
                          </div>&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="dropdown">
                                <button class="dropbtn">POLICY</button>
                                <div class="dropdown-content">
                                        <a href="#">Genrel insurance</a>
                        <a href="#">My details</a>
                        <a href="#">Investment online</a>
                        <a href="#">Personal details</a>
                                </div>
                              </div>&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="dropdown">
                                    <button class="dropbtn">ACCOUNT</button>
                                    <div class="dropdown-content">
                                    <a href="{{url('ibanks/ibank').$bank->id}}">profile</a>
                                    <a href="{{url('pro/pro').$bank->id}}">change password</a>
                                    <a href="{{url('banks/bank').$bank->id}}">update profile</a>
                                      <a href="#">change userid</a>
                                      <a href="#">add information</a>
                                    </div>
                                  </div>&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="dropdown">
                                    <button class="dropbtn">SERVICES</button>
                                    <div class="dropdown-content">
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                  </div>
        </div>
        <table class="wel">
            <tr><th><i class="fa fa-user-circle-o" aria-hidden="true" style="color:lightgray; font-size:100px;"></i></th></tr>
        <tr><th>welcome {{$bank->Fname}}</th></tr>
        </table>
        <table cellpadding="8" class="info">
            <tr bgcolor="grey">
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            </tr>
        <tr bgcolor="lightgrey"><td><i class="fa fa-google-wallet"> </i> {{$bank->balance}}</td><td>{{$bank->account}}</td><td>{{$bank->mobile}}</td><td>{{$bank->email}}</td></tr>
        </table>
        
    <center><div class="icon"><i class="fa fa-bank"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-shield-alt"></i>
        <i class="fa fa-money" aria-hidden="true"></i>

</div></center>
    </body>
</html>