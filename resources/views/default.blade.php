<div class="container mt-4">
    <h4>{{ $pageTitle }}</h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3
    border">
        @if (Route::currentRouteName() == 'home')
            <div class="bi-house-fill me-3 fs-1"></div>
        @elseif(Route::currentRouteName() == 'profile')
            <div class="bi-person-circle me-3 fs-1"></div>
        @endif
        <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
    </div>
</div>
