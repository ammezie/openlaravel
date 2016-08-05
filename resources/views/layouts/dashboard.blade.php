<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="token" name="token" value="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A repository of open source Laravel projects.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

  <title>Open Laravel - Admin Dashboard</title>

  {{-- <link rel="shortcut icon" href="images/favicon.png"> --}}

  <script src="https://use.fontawesome.com/bd782fff25.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    .nav-item img {
        max-height: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <nav class="nav">
      <div class="nav-left">
        <a class="nav-item is-brand" href="{{ url('dashboard') }}">
          <img src="{{ asset('images/logo.png') }}">
        </a>
      </div>

      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>

      <div class="nav-right nav-menu">
        <span class="nav-item">
          <a class="button is-primary" href="{{ url('dashboard/logout') }}">
            <span class="icon">
              <i class="fa fa-sign-out"></i>
            </span>
            <span>LogOut</span>
          </a>
        </span>
      </div>
    </nav>

    <main id="project" class="">
      <h2 class="title">List of Projects</h2>

      <vuetable
          api-url="{{ url('/api/admin/projects') }}"
          :fields="columns"
          table-class="table is-bordered is-striped is-narrow"
          pagination-class="columns"
          pagination-info-class="column has-text-left"
          pagination-component-class="column"
          pagination-component="vuetable-pagination-bulma"
          :item-actions="itemActions"
          pagination-path=""
      ></vuetable>
    </main>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
