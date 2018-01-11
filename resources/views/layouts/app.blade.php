<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="token" name="token" value="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A repository of open source Laravel projects.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

  <title>@yield('title') | Open Laravel</title>

  <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}" sizes="16x16">

  <script src="https://use.fontawesome.com/bd782fff25.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @stack('styles')

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-2018687890447015",
      enable_page_level_ads: true
    });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-82057090-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
  <div id="app">
    <nav class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Open Laravel logo">
          </a>
        </div>
        <div class="nav-right">
          <span class="nav-item">
            <a class="button is-secondary is-medium" href="{{ url('submit-project') }}">
              Submit Project
            </a>
          </span>
        </div>
      </div>
    </nav>

    @stack('hero')

    <main id="project" class="section">
      <div class="container">
        @yield('content')
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <a class="handle" href="https://github.com/ammezie/openlaravel">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
            </a>
            <a class="handle" href="https://twitter.com/openlaravel">
              <span class="icon">
                <i class="fa fa-twitter"></i>
              </span>
            </a>
          </p>
          <p>
            <a href="{{ url('/contact') }}">Contact</a>
          </p>
          <p>
            <a href="https://github.com/ammezie/openlaravel">Open Laravel</a> itself is an open source project built using <a href="https://laravel.com">Laravel</a>. Pull requests are greatly welcomed!
          </p>
          <p>
            Proudly hosted with <a href="https://m.do.co/c/98e35d32e849">DigitalOcean</a>.
          </p>
        </div>
      </div>
    </footer>
  </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</body>
</html>
