<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css\app.css')}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title ">
                Storage
            </div>      

            <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <label for="Titre">Titre</label>
            <input type="text" name="leTitre" id="Titre">

            <label for="Image">Image</label>
            <input type="file" id="Image" alt="Login"
           src="" name="lUrl" /> <br>
            <button type="submit" class="btn btn-success">Envoyer</button>
            </form>    
            @foreach($table as $item)
            <h1>{{$item->titre}}</h1>   
            <img src="{{Storage::url($item->url)}}" alt="">
            @endforeach  
        </div>
        
    </body>
</html>
