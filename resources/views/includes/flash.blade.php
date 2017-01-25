@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif