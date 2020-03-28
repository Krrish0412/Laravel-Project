<html>
    <head>
        <style>
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
            @if ($message = Session::get('warning'))
    <p class="error">{{$message}}</p>
    @endif
            @if($errors->any())
            @foreach($errors->all() as $error)
        <p class="error">{{$error}}</p>
            @endforeach
            @endif
        @include('include.crete')
    </body>
</html>