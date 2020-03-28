<html>
    <head><title>Data</title>
        <style>
            html,body
            {
                margin-top: 0%;
                margin-left: 0%;
                height:100%;
                width:100%;
                background-color: #F4F6F7;
            }
           
            table
            {
                border:1px solid lightgrey;
                margin-top: 5%;
                font-family: Segoe UI;
                border-radius: 5px;
                color:slategrey;
                background-color: rgba(0, 0, 0, 0.2);
                font-size: 18px;
                padding-left: 4%;
                padding-right: 4%;
                padding-top: 1%;
                padding-bottom: 1%; 
            }
            input[type="submit"],input[type="reset"]
            {
                border:none;
                background-color: #F39C12;
                color:#F2F3F4;
                cursor: pointer;
                padding-left: 6%;
                padding-right: 6%;
                font-size: 20px;
                font-family: Courier New;
                width:100%;
            }
            input
            {
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 3%;
                outline: none;
                border-radius: 2px;
                border:1px solid gray;
            }
            input[type="radio"]
            {
                border:1px solid red;
                font-size: 50px;
                background-color: red;
            }
            input[type="date"]
            {
                color:grey;
                text-transform:uppercase;
            }
        </style>
    </head>
    <body>
            
        <center>
        <form action="{{url('/ibanks')}}" method="POST">
            {{ csrf_field() }}
            <table cellpadding="9">
                <tr><td>First name</td><td><input type="text" name="fname"></td>
                    <td>Last name</td><td><input type="text" name="lname"></td></tr>
                <tr><td>e-mail address</td><td><input type="text" name="email"></td>
                <td>Mobile number</td><td><input type="text" name="mobile"></td></tr>
              <tr> <td>Gender</td><td>M <input type="radio" name="gender" value="M"> F <input type="radio" name="gender" value="F"> O <input type="radio" name="gender" value="N"></td>
                <td>Date of birth</td><td><input type="date" name="dob"></td></tr>
                <tr><td>Account number</td><td><input type="text" name="account"></td>
                    <td>Debit card no</td><td><input type="text" name="debitcard"></td></tr>
                   
                <tr><td>Balance</td><td><input type="text" name="balance"></td>
                    <td>Cif number</td><td><input type="text" name="cif"></td></tr> 
                    
                <tr><td>ipin</td><td><input type="password" name="ipin"></td>
                    <td>Address</td><td><input type="text" name="address"></td></tr> 
                <tr><th colspan="2"><input type="reset"></th><th colspan="2"><input type="submit" name="sumit" value="submit"></th></tr>
                
            </table>
        </form>
        
        </center>
    
    </body>
</html>