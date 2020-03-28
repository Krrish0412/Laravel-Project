<html>
    <head><title>password page</title>
        <script>
            function show()
            {
                var a = document.getElementById("pw");
                var b = document.getElementById("rpw");
                if(a.type == "password" || b.type == "password")
                {
                    a.type = "text";
                    b.type = "text";
                }
                else
                {
                    a.type = "password";
                    b.type = "password";
                }
            }
        </script>
        <style>
            html,body
            {
                height: 100%;
                width:100%;
                margin-top: 0%;
                margin-left: 0%;
                background-color: #F7F9F9;
            }
           
            table
            {
                margin-top: 5%;
                color: #283747;
                border-radius: 5px;
                font-family:Segoe UI;
                padding: 1% 3% 1% 3%;
                background-color: rgba(0, 0, 0, 0.2);
            }
            input[type="text"],input[type="password"]
            {
                outline: none;
                border-radius: 2px;
                border:1px solid gray;
                padding-top: 3%;
                border-radius: 2px;
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
            input[type="checkbox"]
            {
                color: red;
                border:1px solid red;
                background-color: red;
            }
            </style>
    </head>
    <body>
        <center>
         <table cellpadding="8">
                <form>
                    <tr><td>Enter new password</td><th><input type="password" id="pw" name="wd"></th></tr>
                    <tr><td>Re-enter password</td><th><input type="password" id="rpw" name="rwd"></th></tr>
                    <tr><td></td><td><input type="checkbox" onclick="show()" name="chk">show password</td></tr>
                    <tr><th colspan="2"><input type="submit" name="passubmit" value="submit"></th></tr>
                </form>
            </table>
    
        </center>
    </body>
    </html>