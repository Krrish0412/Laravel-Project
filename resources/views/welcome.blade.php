<html>
    <head><titke></titke>
        <script>
            function on1()
            {
                document.getElementById("ico").innerHTML="&#x21a3;";
            }
            function off2()
            {
                document.getElementById("ico").innerHTML=""; 
            }
        </script>
        <style>
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
        span{
            font-size: 20px;
        }
            body,html
            {
             height: 100%;
             width:100%;
             margin-top: 0%;
             margin-left: 0%;
             background-color:#F2F3F4;
            }
            img
            {
            margin-top:0.5%;
            border-radius: 1%;
            }
            div.hed
            {
                color:#F2F3F4;
                font-size:18px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align:center;
                background-color:#F39C12;
                padding: 0.5%;
            }
            button
            {
                padding:10px;
                margin-top: -13%;
                margin-left: 52%;
                font-size: 15px;
                color:#F2F3F4;
                background-color: #F39C12;
                border:none;
                position: absolute;
                font-family: verdana;
                cursor: pointer;
                box-shadow: 0 8px 6px -6px gray;
            }
            div.btm
            {
                background-color: rgb(189, 150, 150);
                padding-left: 3%;
                padding:1%;
                font-family: Courier New;
                color:darkslategrey;
                font-weight: bold;
            }
            div.btmc
            {
                padding-left: 4%;
                margin-top: 1%;
                padding-bottom: 1%;
                padding-top: 1%;
                background-color: lightgrey;
                font-family:Segoe UI;
            }
            input[type="submit"]
            {
                border:none;
                color:white;
                background-color:#F39C12;
                font-size: 15px;
                padding: 0.5% 2% 0.5% 2%;
                font-family: segoe UI;
                float: right;
                margin-right: 3%;
                margin-top: -5.5%;
                outline: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
       <div class="log"><span class="elogo">e</span>-banking</div>
    <form action="{{url('adminverify')}}"><input type="submit" value="Bank Admin" name="set">
    </form>
        <div class="hed">e-banking portal</div>
        <center><img src="images\adv.jpg" height="350" width="800"> </center>
<form action="{{url('log')}}" target="_blank">
            <button onmouseover="on1()" onmouseout="off2()">
                CONTINUE LOGIN <span id="ico"> </span>
            </button>
        </form>
        <div class="btm"><sapn style="color:red;">*</sapn> Conditions</div>
        <div class="btmc">
            <ol>
            <li> "Authorized Representative" refers to a person with authority (with respect to the account).<br>
            <li>"Bill Payment" is the online service that enables the scheduling of bill payments using a personal computer.<br>
            <li>"ISP" refers to your Internet Service Provider.</li>
            <li> "Online Banking" is the internet-based service providing access to your Bank account(s).</li>
            <li>"Online Account" means the Bank account from which you will be conducting transactions using a Service;</li>
            <li>"Password" is the customer-generated code selected by you for use during the initial sign-on, or the codes you select after the initial sign-on, that establishes your connection to the Service.</li>
            <li>"PC" means your personal computer which enables you, with the Internet browser and ISP, to access your Online Account.</li>
            <li>"Time of day" references are to Central Standard Time.</li>
            <li>"User ID" is the Bank-generated identification code assigned to you for your connection to the Service.</li>
            <li>"We", "us", or "Bank" refer to the First National Bank of Wakefield which offers the Services and which holds the accounts accessed by the Services and</li>
            <li>"You" or "your" refers to the owner of the account or the authorized representative.</li>
</ol>
        </div>
    </body>
</html>