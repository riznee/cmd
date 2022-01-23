<div class="columns">


    @if ($message = Session::get('error'))
        <div class="box  column notification is-danger is-light is-overlay is-6">
            <button class="delete" onclick="this.parentElement.style.display='none'"></button>
            {{ $message }}
        </div>

    @endif

    @if ($message = Session::get('warning'))
        <div class=" box column notification is-warning is-light is-overlay is-6">
            <button class="delete" onclick="this.parentElement.style.display='none'"></button>
            {{ $message }}
        </div>

    @endif

    @if ($message = Session::get('info'))
        <div class=" box column notification is-info is-light is-overlay is-6">
            <button class="delete" onclick="this.parentElement.style.display='none'"></button>
            {{ $message }}
        </div>

    @endif


    @if ($errors->any())
        <div class=" box  column notification is-link is-light is-overlay is-6">
            <button class="delete" onclick="this.parentElement.style.display='none'"></button>
            {{ $errors }}
        </div>

    @endif



    @if ($message = Session::get('success'))
        <div class=" box column notification  is-primary is-light is-6">
            <button class="delete" onclick="this.parentElement.style.display='none'"></button>
            {{ $message }}
        </div>

    @endif
</div>
