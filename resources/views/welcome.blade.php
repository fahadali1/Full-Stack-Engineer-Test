<!DOCTYPE html>
<html>
    <head>
      
        <title>Nuber</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">


      
       
    </head>
    <body>
        <br><br>
          
            <div class="content">
                <div id="app">
                
                <booking-list></booking-list>
                </div>
<script src="{{ asset('js/app.js') }}"></script>
             </div>
        

    </body>
</html>
