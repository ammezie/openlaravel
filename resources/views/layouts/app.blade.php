<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A repository of open source Laravel projects.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Open Laravel</title>

  {{-- <link rel="shortcut icon" href="images/favicon.png"> --}}

  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> --}}
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <style>
    .card-header-title {
      justify-content: center;
      color: #00b0db;
      /*font-weight: normal;*/
    }
    .card-content {
      padding: 50px;
    }
    .card-content .title {
      color: #00b0db;
    }
    .logo {
      align-items: stretch;
      display: flex;
      justify-content: center;
    }
    .hero.is-primary .subtitle {
      color: #fff;
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="logo">
      <a class="" href="">
        <img src="images/logo.png" height="100px">
      </a>
    </div>
  </header>

  <section class="hero is-primary is-bold">
    <div class="hero-body has-text-centered">
      <div class="container">
        <h2 class="subtitle">
          A repository of open source projects built using Laravel
        </h2>

        <a class="button is-secondary is-medium" href="{{ url('submit-project') }}">
          Submit Project
        </a>
      </div>
    </div>
  </section>

  <main class="section">
    <div class="container">
      <section class="section content has-text-centered">
        <h3>Filters:</h3>
        <a class="button is-primary" href="#">Recently Added</a>
        <a class="button is-primary" href="#">Most Starred</a>
        <a class="button is-primary" href="#">Recent Activities</a>
      </section>

      <div class="columns">
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <a href="#">
            <div class="card-content has-text-centered">
              <div class="content">
              <h3 class="title">
                PyroCMS
              </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <div class="card-content has-text-centered">
              <div class="content">
                <h3 class="title">
                  October CMS
                </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <div class="card-content has-text-centered">
              <div class="content">
                 <h3 class="title">
                  Open Laravel
                </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <div class="card-content has-text-centered">
              <div class="content">
                <h3 class="title">
                  Project Title
                </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <div class="card-content has-text-centered">
              <div class="content">
                <h3 class="title">
                  Project Title
                </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="card is-fullwidth">
            <div class="card-content has-text-centered">
              <div class="content">
                <h3 class="title">
                  Project Title
                </h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="section">
        <nav class="pagination">
          <ul>
            <li>
              <a class="button">1</a>
            </li>
            <li>
              <span>...</span>
            </li>
            <li>
              <a class="button">45</a>
            </li>
            <li>
              <a class="button is-primary">46</a>
            </li>
            <li>
              <a class="button">47</a>
            </li>
            <li>
              <span>...</span>
            </li>
            <li>
              <a class="button">86</a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <a href="https://github.com/ammezie/openlaravel">OpenLaravel</a> itself is an open source project built using <a href="https://laravel.com">Laravel</a>. Pull requests are greatly welcomed!
        </p>
      </div>
      
    </div>
  </footer>
    
  {{-- <script src="js/app.js"></script> --}}
</body>
</html>
