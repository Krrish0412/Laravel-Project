<html>
    <head><title>Login</title>
        <script>
            function open1()
            {
            window.open("{{url('forgetid')}}","myname","height=300 width=500");
            }
            </script>
                <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML = 
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,body
            {
                width:100%;
                height:100%;
                margin-left: 0%;
                margin-right: 0%;
                background-color: #F4F6F7;
            }
            th
            {
                font-weight: normal;
            }
            div.hed
            {
                background-color: #F39C12;
                color:#F2F3F4;
                text-align:center;
                font-size: 20px;
                font-family:Segoe UI;
                padding:0.5%;
                font-weight: 300;
            } 
           input[type="submit"]
           {
               border-radius: 2px;
               border: none;
               outline: none;
               padding:1%;
               cursor: pointer;
               padding-left: 2%;
               padding-right: 2%;
               color:#F2F3F4;
           }
           input
           {
               outline:none;
               font-size: 16px;
               padding-top: 0.5%;
               padding-bottom: 0.5%;
           }
           input:hover{
               background-color: white;
           }
           table.t1
           {
               position:absolute;
               margin-top: 2%;
               margin-left: 25%;
               border:2px solid lightgrey;
               border-radius: 1px;
               font-family: Segoe UI;
               color: #212F3D;
               box-shadow:0px 15px 10px -15px gray; 
           }
           a
           
           {
             text-decoration: none;
             color:#212F3C;  
           }
           
           table.t2
           {
              
               border-top:1px solid lightgrey;
               border-bottom:1px solid lightgrey;
               box-shadow: 
        inset 0px 11px 8px -10px #CCC,
        inset 0px -11px 8px -10px #CCC; 
        padding-left:5%;
        padding-right: 5%;
        padding-top: 2.2%;
       margin-left:50%;
      margin-top: 2%;
        padding-bottom: 2%;
           }
           span.elogo
            {
                font-size: 60px;
                color:#F39C12;
            }
            div.log
            {
                margin-top: -1%;
                font-size:60px;
                color:#45B39D;
                font-weight: 100;
                margin-bottom: 0.5%;
                font-family: Segoe UI;
            }
            span.text
            {
                color:#282e34;
                position: absolute;
                margin-left: 34%;
                margin-top: 1%;
                font-family: 'Courier New', Courier, monospace;
                font-size: 16px;
            }
            </style>
    </head>
    <body onload="startTime()">
    <div class="log"><span class="elogo">e</span>-banking</div>
        <span id="txt" style='color:#2C3E50; position:absolute; margin-top: -5%; font-family:Segoe UI; font-weight:bold;  margin-left:75%; font-size: 20px;'></span>
        <?php
        date_default_timezone_get();
        echo "<span style='color:#2C3E50;font-weight:bold; position:absolute; margin-top:-5%; absolute; font-family:Segoe UI; margin-left: 82%; font-size:20px;'>".date("d-M-y")."</span>";
        ?>
        <div class="hed">PERSONAL BANKING</div>
       @if ($message = Session::get('warning'))
    <span class="text">{{$message}}</span>
    @endif
    
            @if($errors->any())
            @foreach($errors->all() as $error)
        <span class="text">{{$error}}</span>
            @endforeach
            @endif
     
            <br>
    <form action="{{url('/banks')}}" method="POST">
        {{ csrf_field() }}
    <table cellpadding="10" class="t1">
    <tr><th colspan="2" style="background-color: lightgrey;"><i class="fa fa-lock" style="color:#F39C12; font-size:18px;"></i>&nbsp;&nbsp; Enter your credentials</th></tr>

    <th>UserId</th><td><input type="text" name="uid"></td></tr>
    <th>Password</th><td><input type="password" name="pwd"></td></tr>
    <tr><th></th><td><input type="checkbox" value="check"><span style="color:#273746;font-family: Verdana, Geneva, Tahoma, sans-serif;">Rememeber id</span></td></tr>
    <tr>
    <th colspan="2">
    <input type="submit" value="Log in &#x279B;" name="smit" style="background-color: #F39C12;"></th></tr>
                </table>
        </form>
        <table cellpadding="5" class="t2">
            <tr><th style="color:#F39C12;">May i help you <span style="color:blue;">?</span></th></tr>
        <tr><th><i class="fa fa-user icon" style="color:#F1C40F;"></i> <a href="{{url('newuser')}}">New user</a> <span style="color:blue">?</span></th></tr>
        <tr><th> <a href="#" onclick="window.open('{{url('passforget')}}','myname','height=500 width=800')">&#128273; Forgot password </a><span style="color:blue;">?</span></th></tr>
        <tr><th><i class="fa fa-id-card" style="color:#F1C40F;"></i> <a href="#" onclick="open1()"> Forgot userId </a> <span style="color:blue">?</span></th></tr>
        <tr><th><i class="fa fa-mobile-phone" style="color:#F1C40F; font-size: 24px;"> </i> <a href="#">Customer care </a></th></tr>
        </table>
      <center>  <img src="images\banking3.png" alt="not found" style="margin-top:5%; margin-bottom:4%;"></center>
    </body>
</html>