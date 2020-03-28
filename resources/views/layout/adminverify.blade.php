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
                margin-top: -1%;
                font-size:60px;
                color:#45B39D;
                font-weight: 100;
                margin-bottom: 0.5%;
                font-family: Segoe UI;
            }
            p.error
            {
              text-align: center;
              padding: 0.5%;
              outline:1px solid powderblue;
              font-family: courier new;
              font-weight: bold;
              color:grey;
            }
            </style>
    </head><body>
            <div class="log"><span class="elogo">e</span>-banking</div>
            @if ($message = Session::get('warning'))
    <p class="error">{{$message}}</p>
            @endif
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                <p class="error">{{$error}}</p>
                    @endforeach
                    @endif
        @include('include.adminverify')
        </body>
</html>