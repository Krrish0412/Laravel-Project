<html>
    <head>
        <style>
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
        <div class="hed">Welcome new user</div>
            @if ($message = Session::get('warning'))
    <p>{{$message}}</p>
    @endif
    
            @if($errors->any())
            @foreach($errors->all() as $error)
        <p>{{$error}}</p>
            @endforeach
            @endif
        @include('include.newuser')
        
        
    </body>
    </html>