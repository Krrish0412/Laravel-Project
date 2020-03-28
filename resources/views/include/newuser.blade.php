<html>
    <haed><title>new user</title>
    <style>
        html,body
        {
            height:100%;
            width:100%;
            margin-left: 0%;
        }
        span
        {
            color:red;
        }
        input{
            padding: 2%;
            outline: none;
        }
        select
        {
            padding:2%;
            outline:none;
            color:gray;
        }
        option
        {
            color:black;
        }
        table
        {
        border-radius: 5px;
        border :2px solid lightgrey;
        margin-top: 4%;
       padding: 1% 5% 1% 5%;
       background-color: rgb(0, 0, 0, 0.2);
        color:#212F3C;
       
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        input[type="submit"]
        {
            background-color: #F39C12;
            border:none;
            padding:1%;
            color:#F2F3F4;
            font-size: 16px;
           padding: 1% 10% 1% 10%;
            cursor: pointer;
            outline: none;
            border-radius: 2px;
        }
        input[tyoe="text"]
        {
            background-color: white;
            border: 1px solid lightgray;
            font-family: segoe ui;
        }
        footer
        {
            text-align:center;
            margin-top: 9%;
            background: lightgrey;
            padding: 1%;
            font-size: 16px;
            font-family: 'Courier New', Courier, monospace;
            color: white;
        }
    </style>
    </haed>
    <body>
        
        <center>
        <table cellpadding="7">
        <form action="{{url('pro')}}" method="POST">
            {{ csrf_field() }}
                <tr><td>account number <span>*</span></td><td><input type="text" name="account"></td></tr>
                
                <tr><td>mobile number <span>*</span></td><td><input type="text" name="mobile"></td></tr>

                <tr><td>username <span>*</span></td><td><input type="text" name="user_id"></td></tr>

                <tr><td>password <span>*</span></td><td><input type="password" name="pwd"></td></tr>

                <tr><td>confirm password <span>*</span></td><td><input type="password" name="cpwd"></td></tr>
                
                <tr><th colspan="2" align="right"><br><input type="submit" value="SUBMIT" name="smt"></th></tr>
        </form>
        </table>
    </center>
    <footer>
        e-banking limited 
    </footer>
    </body>
    </html>