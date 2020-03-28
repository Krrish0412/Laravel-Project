<html>
    <head><title>Password page</title>
        <style>
            body,html
            {
                height:100%;
                width:100%;
                margin-top: 0%;
                margin-left: 0%;
            
               background-color: #F7F9F9;
            }
            table
            {
                color: #283747;
                font-family:Segoe UI;
                padding-top: 1%;
            }
            input[type="text"],input[type="date"]
            {
                outline: none;
                border-radius: 2px;
                border:1px solid gray;
                padding-top: 3%;
                padding-left:3%;
                padding-bottom: 3%;

            }
            input[type="submit"]
            {
                cursor: pointer;
                background-color: #F39C12;
                border:none;
                padding-right: 6%;
                padding-left: 6%;
                outline: none;
                color:white;
                border-radius: 2px;
                font-family:Courier New;
                font-size: 20px;
            }
            div.table
            {
                padding-top: 3%;
                margin-top: 4%;
                width: 70%;
                margin-left: 0%;
                margin-right: 0%;
                padding-bottom: 2%;
                background-color: rgba(0, 0, 0, 0.2);
                border-radius: 5px;  
            }
            span.elogo
            {
                font-size: 40px;
                color:#F39C12;
            }
            div.log
            {
                margin-top: -1%;
                font-size:40px;
                color:#45B39D;
                font-weight: 100;
                margin-bottom: 0.5%;
                font-family: Segoe UI;
            }
        </style>
    </head>
    <body>
    <div class="log"><span class="elogo">e</span>-banking</div>
        <center>
            <div class="table">
            <form action="{{url('passreset')}}">
            <table cellpadding="8">
                <tr><td>Account number</td><td><input type="text" name="acc"></td></tr>
                <tr><td>Date of birth</td><td><input type="date" name="dob"></td></tr>
                <tr><td>Registered Mobile</td><td><input type="text" name="mo"></td></tr>
                <tr><td>Email-address</td><td><input type="text" name="eml"></td></tr>
                <tr><th colspan="2"><br><input type="submit" name="acc" value="Send otp"></th></tr>
            </table>
            </form>
            </div>
        </center>
    </body>
</html>