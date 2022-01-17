

@if ($message = Session::get('error'))
<div class="notification is-danger is-light is-overlay">
    <button class="delete" onclick="this.parentElement.style.display='none'" ></button>
        {{ $message }}
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="notification is-warning is-light is-overlay">
    <button class="delete" onclick="this.parentElement.style.display='none'" ></button>
        {{ $message }}
    </div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="notification is-info is-light is-overlay">
    <button class="delete" onclick="this.parentElement.style.display='none'" ></button>
        {{ $message }}
    </div>
</div>
@endif


@if ($errors->any())
<div class="notification is-link is-light is-overlay">
    <button class="delete" onclick="this.parentElement.style.display='none'" ></button>
        {{ $errors }}
    </div>
</div>
@endif



@if ($message = Session::get('success'))
<div class="notification  is-primary is-light">
    <button class="delete" onclick="this.parentElement.style.display='none'" ></button>
        {{ $message }}
    </div>
</div>
@endif