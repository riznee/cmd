@if ($message = Session::get('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>
            {{ $message }}
        </strong>
        <button type="button" class="btn btn-outline-danger" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
            
        </button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="_11mpalert alert-light alert-dismissible fade show" role="alert">
        <strong>
            {{type}}
            {{ $message }}
        </strong>
        <button type="button" class="btn btn-outline-danger" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            {{ $message }}s
        </strong>
        <button type="button" class="btn btn-outline-danger" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>
            {{ $message }}
        </strong>
        <button type="button" class="btn btn-outline-danger" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            {{ $errors }}
        </strong>
        <button type="button" class="btn btn-outline-danger" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
    </div>
@endif