<html>
    <head>
        <style>
           
            input[type="submit"]
            {
                background-color: #F39C12;
                font-family: courier new;
                font-size: 16px;
                color:white;
                border:none;
                cursor: pointer;
                padding: 1.5% 10% 1.5% 10%;
                border-radius: 2px;
            }
            html,body
            {
                width: 100%;
                margin-top: 0%;
                margin-left: 0%;
            }
            input[type="password"],input[type="text"]
            {
                font-family: segoe UI;
                border:1px solid lightgrey;
                padding: 2% 3% 2% 3%;
                border-radius: 2px;
                font-size: 16px;
                width: 100%;
            }
            table
            {
                
                padding: 1% 3% 1% 2%;
                border-radius: 5px;
                font-size: 16px;
                font-family: segoe UI;
                background-color: rgb(0, 0, 0, 0.2);
            }
          img.logo
          {
            transform: rotate(-25deg);
              border-radius: 150px;

          }
          img.center
          {
              border-radius: 5px;
          }
            </style>
    </head>
    <body>
           
        <center>
        <form action="{{url('ibanks')}}">
            
            <table cellpadding="0">
                <tr><td rowspan="2"><img src="kyu7.png" class="logo" height="150" width="150">&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Admin_Id &nbsp;</td><td><input type="text" name="adminame"></td></tr>
                <tr><td>Password &nbsp;</td><td><input type="password" name="password"></td></tr>
                <tr><th colspan="3" align="right"><br><input type="submit" name="aset" vlaue="GO to"></th></tr>
            </table>
            <br>
            <br>

            <img class="center" src="center.jpg" width="1000" height="300">
            </form>
        </center>
    </body>
</html>