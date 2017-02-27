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
  
  <style>
    span.algolia-autocomplete {
      display: block !important;
    }
    .aa-input-container {
      display: block;
      position: relative; }
    .aa-input-search {
      width: 100%;
      padding: 12px 28px 12px 12px;
      border: 1px solid #e4e4e4;
      border-radius: 4px;
      -webkit-transition: .2s;
      transition: .2s;
      font-size: 11px;
      box-sizing: border-box;
      color: #333;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none; }
      .aa-input-search::-webkit-search-decoration, .aa-input-search::-webkit-search-cancel-button, .aa-input-search::-webkit-search-results-button, .aa-input-search::-webkit-search-results-decoration {
        display: none; }
      .aa-input-search:focus {
        outline: 0;
        border-color: #3a96cf;
        box-shadow: 4px 4px 0 rgba(58, 150, 207, 0.1); }
    .aa-input-icon {
      height: 16px;
      width: 16px;
      position: absolute;
      top: 50%;
      right: 16px;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      fill: #e4e4e4; }
    .aa-hint {
      color: #e4e4e4; }
    .aa-dropdown-menu {
      background-color: #fff;
      border: 1px solid rgba(228, 228, 228, 0.6);
      border-top-width: 1px;
      font-family: "Montserrat", sans-serif;
      width: 100%;
      margin-top: 10px;
      font-size: 11px;
      border-radius: 4px;
      box-sizing: border-box; }
    .aa-suggestion {
      padding: 12px;
      border-top: 1px solid rgba(228, 228, 228, 0.6);
      cursor: pointer;
      -webkit-transition: .2s;
      transition: .2s;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center; }
      .aa-suggestion:hover, .aa-suggestion.aa-cursor {
        background-color: rgba(241, 241, 241, 0.35); }
      .aa-suggestion > span:first-child {
        color: #333; }
      .aa-suggestion > span:last-child {
        text-transform: uppercase;
        color: #a9a9a9; }
    .aa-suggestion > span:first-child em, .aa-suggestion > span:last-child em {
      font-weight: 700;
      font-style: normal;
      background-color: rgba(58, 150, 207, 0.1);
      padding: 2px 0 2px 2px; }
  </style>

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
  
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

  <script>
    var client = algoliasearch("2GYTVF3ONU", "37b9d6d0533db465aab5d9bf4a4253f2");
    var index = client.initIndex('projects');
    autocomplete('#aa-search-input',
    { hint: false }, {
        source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
        //value to be displayed in input control after user's suggestion selection
        displayKey: 'title',
        //hash of templates used when rendering dataset
        templates: {
            //'suggestion' templating function used to render a single suggestion
            suggestion: function(suggestion) {
              return '<span>' +
                suggestion._highlightResult.title.value + ' - <small>' + suggestion._highlightResult.short.value + '</small>' + '</span>';
            },
            footer: '<div class="branding">Powered by <img src="https://www.algolia.com/assets/algolia128x40.png" /></div>'

        }
    });
  </script>
  @stack('scripts')

</body>
</html>
