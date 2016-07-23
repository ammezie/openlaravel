@if (session('message'))
    <div class="notification is-success">
        {{ session('message') }}
    </div>
@endif