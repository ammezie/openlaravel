<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A repository of open source Laravel projects.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  
  <title>Open Laravel</title>

  <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}" sizes="16x16">

  <script src="https://use.fontawesome.com/bd782fff25.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="header">
    <div class="logo">
      <a class="" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" height="100px">
      </a>
    </div>
  </header>

  <main id="project" class="section">
    <div class="container">

      @yield('content')

    </div>
  </main>
	
</body>
</html>