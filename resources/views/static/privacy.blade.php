@extends('layouts.admin')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-3">
            <h5>
               User Privacy Notice
            </h5> 
        </div>
        
        <nav id="privacy" class="navbar navbar-light bg-light px-3">
            <a class="navbar-brand" href="#"> User Privacy Notice</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#fat">@fat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mdo">@mdo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#one">one</a></li>
                  <li><a class="dropdown-item" href="#two">two</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#three">three</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <div data-bs-spy="scroll" data-bs-target="#privacy" data-bs-offset="0" tabindex="0">
            <h4 id="fat">@fat</h4>
            <p>...</p>
            <h4 id="mdo">@mdo</h4>
            <p>...</p>
            <h4 id="one">one</h4>
            <p>...</p>
            <h4 id="two">two</h4>
            <p>...</p>
            <h4 id="three">three</h4>
            <p>...</p>
          </div>


    </div>
@stop