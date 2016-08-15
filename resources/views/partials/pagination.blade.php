<section class="section">
  <nav class="pagination">
    {{ with(new App\Pagination\BulmaPresenter($paginator))->render() }}
  </nav>
</section>