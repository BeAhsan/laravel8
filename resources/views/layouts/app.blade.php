
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Darzi</title>
</head>
<body>
<x-header/>
          @section('sidebar')
          <x-sidemenu/>
        @show

        <div class="container">
            @yield('content')
        </div>
</body>
</html>