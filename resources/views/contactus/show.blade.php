@extends('layouts.admin')
@section('content')

    <div class="columns">

        <div class="column">

            <div class="box card">
                <div class="top">
                    <div class="address">
                        <div class="has-text-weight-light is-size-6">From:John Smith</div>
                        <div class="has-text-weight-light is-size-6">Email:someone@gmail.com</div>
                    </div>
                    <hr>
                    <div class="content">
                        <p class="has-text-weight-semibold">Subbject</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="column is-6 message hero is-fullheight " id="message-pane"">
                <div class=" box">
            <div class="columns">
                <div class="column">
                    <p class="has-text-weight-light is-size-6">From:John Smith</p>
                    <p class="has-text-weight-light is-size-6">Email:someone@gmail.com</p>
                </div>
                <div class="column">
                    <span></span>
                   

                </div>
                <div class="column">
                    <p class="has-text-weight-light is-size-6">created:12-oct-2022</p>
                    <p class="has-text-weight-light is-size-6">replayed on :12-oct-2022</p>
                    <a class="tag is-warning is-inverted" href="" data-toggle="tooltip" title="press to reply!">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <hr>
            <p>Subbject</p>
            <div class="content">

            </div>
        </div>
    </div>

    </div>
@stop
