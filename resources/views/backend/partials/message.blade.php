@if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@elseif(session('error-message'))
    <div class="alert alert-danger">
        {{ session('error-message') }}
    </div>
@elseif(session('warning-message'))
    <div class="alert alert-warning">
        {{ session('warning-message') }}
    </div>
@endif