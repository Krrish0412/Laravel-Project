<html>
    <head><title>Profile</title>
        <style>
            table
            {
                margin-top: 4%;
            width: 70%;
            border:1px solid  #F39C12;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            }
              div.hed
            {
                
                background-color: #F39C12;
                color:#F2F3F4;
margin-bottom: 2%;
                margin-top: 1%;
                text-align: center;
                font-size: 20px;
                font-family:Segoe UI;
                padding:0.5%;
            
            } 
            th
            {
                text-align: left;
            }
            </style>
    </head>
    <body>
            <div class="log"><span class="elogo">e</span>-banking</div>
            <div class="hed">customer profile</div>
       <center>     
        <table cellpadding="7" rules="rows">
    <tr><th>Fname</th><td>{{$bank->Fname}}</td></tr>
        <tr><th>Fname</th><td>{{$_SESSION['name']}}</td></tr>
    <tr><th>Lname</th><td>{{$bank->Lname}}</td></tr>
    <tr><th>Email</th><td>{{$bank->email}}</td></tr>
    <tr><th>Mobile</th><td>{{$bank->mobile}}</td></tr>
    <tr><th>Dob</th><td>{{$bank->dob}}</td></tr>
    <tr><th>Account number</th><td>{{$bank->account}}</td></tr>
    <tr><th>Cif number</th><td>{{$bank->cif}}</td></tr>
    <tr><th>Debit card</th><td>{{$bank->gender}}</td></tr> 
        </table>
       </center>
    </body>
</html>