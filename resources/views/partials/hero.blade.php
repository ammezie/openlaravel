<section class="hero is-primary is-bold">
    <div class="hero-body has-text-centered">
      <div class="container">
        <h1 class="title is-fs22">A repository of over <span style="color: #ff8717; font-weight: bold">{{ $projectsCount }}</span> open source projects built using Laravel</h1>

        <search
            algolia-app-id={{ config('scout.algolia.id') }}
            algolia-key={{ config('scout.algolia.key') }}
        ></search>
      </div>
    </div>
</section>