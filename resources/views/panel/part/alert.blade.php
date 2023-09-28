@if(session('success'))
    <div class="alert alert-success p-3">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger p-3">{{ session('error') }}</div>
@endif
