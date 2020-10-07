
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cabify</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:100,700" rel="stylesheet" type="text/css">
    <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet"  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--link href="http://prospects.cabify.zarego.com/css/app.css" rel="stylesheet" type="text/css" -->
    <link href="http://prospects.cabify.zarego.com/css/cabify.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
  
  
    </style>


  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="logo">
          <img src="http://prospects.cabify.zarego.com/img/logo.png" border="0">
        </div>
      </div>

      @if(session('success'))
        <div class="row">
          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('success') }}
          </div>
        </div>
      @endif
      
      @yield('content')

    </div>

    <!-- jQuery library for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
