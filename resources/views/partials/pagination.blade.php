{{-- <section class="section">
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
</section> --}}

{{-- <v-paginator :resource.sync="projects" :resource_url="resource_url"></v-paginator> --}}
{{-- <div class="pagination">
  <button @click="fetchProjects(pagination.prev_page_url)"
  :disabled="!pagination.prev_page_url"
  >
  Previous
  </button>
  <span>Page @{{ pagination.current_page }} of @{{ pagination.last_page }}</span>
  <button @click="fetchProjects(pagination.next_page_url)"
  :disabled="!pagination.next_page_url"
  >
  Next
  </button>
</div> --}}

<pagination></pagination>