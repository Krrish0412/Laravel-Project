<html>
    <head><title>Id</title>
        <style>
        html,body
        {
            height:100%;
            width:100%;
            margin-left: 0%;
            margin-top: 0%;
            background-color: #F4F6F7;
        }
 table
 {  
    padding-left: 3%;
    padding-right: 3%;
    padding: 1%;
    font-family: Segoe UI;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 3px;
    border:1px solid lightgrey;
 }
 td.txt
 {
     color:#2C3E50;
     font-family: verdana;
     font-size: 18px;

 }
 caption
 {
     color:#1C2833;
     font-family: Courier New;
     font-weight: bold;
 }
 input[type="submit"]
 {
     background-color: #F39C12;
     border:none;
     padding-left: 6%;
     padding-right: 6%;
    color:#F2F3F4;
    font-weight: normal;
    font-family: verdana;
    cursor: pointer;
    font-size: 18px;
    outline: none;
    margin-top: 2%;
    border-radius: 2px;
 }
 input[type="text"],input[type="date"]
 {
     padding-top: 3%;
     padding-left: 3%;
     border-radius: 2px;
     border:1px solid grey;
     outline: none;
 }
 span.elogo
            {
                font-size: 40px;
                color:#F39C12;
            }
            div.log
            {
                margin-top: 1%;
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
        <center><table cellpadding="8">
            <form>
            <caption>All feilds are mandatory <span style="color:red;">*</span></caption>
            <tr><td class="txt">Date of Birth &nbsp;&nbsp;</td><td><input type="date" name="dob1"></td></tr>
            <tr><td class="txt">Mobile</td><td><input type="text" name="mo1"></td></tr>
            <tr><th colspan="2"><input type="submit" value="SUBMIT" name="smit1" onclick="window.close()"></th></tr>
        </form>
        </table></center>
    </body>
</html>