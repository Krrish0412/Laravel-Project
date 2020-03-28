<html>
    <head><title>edit</title>
        <style>
            html,body
            {
                height: 100%;
                margin:0% 0% 0% 0%;
            }
              table
              {
                  border:1px solid lightgrey;
                  border-radius: 5px;
                  padding: 1% 5% 1% 5%;
                  font-family: segoe ui;
              }
              input[type="text"]
              {
                  padding: 2% 4% 2% 4%;
                  font-family: courier new;
              }
              input[type="submit"]
              {
                  padding: 1% 8% 2% 8%;
                  font-family: segoe ui;
                 font-size: 16px;
                  border-radius: 2px;
                  color:white;
                  border: none;
                  background-color: #F39C12;
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
            p{
                color:darkgray;
                border-top: 1px solid lightgray;
                border-bottom: 1px solid lightgray;
                padding:0.5%;
                text-align: center;
                font-family: 'Courier New', Courier, monospace;
            
            }
            </style>
    </head>
    <body>
            <div class="log"><span class="elogo">e</span>-banking</div>
            <div class="hed">updation !</div>
            @if ($message = Session::get('warning'))
            <p>{{$message}}</p>
            @endif
            
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                    @endforeach
                    @endif
        <center>
        <form action="{{url('banks/bank').$bank}}" method="POST">
            {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                <table cellpadding="8">
     
                <tr><td>e-mail</td><td><input type="text" name="email"></td></tr>
                   <tr> <th colspan="2">OR</th></tr>
                        <tr><td>mobile</td><td><input type="text" name="mobile"></td>       
                    </tr>
                    <tr><th colspan="2" align="right"><input type="submit" value="submit"></th></tr>
                </table>
            </form>
        </center>
    </body>
</html>