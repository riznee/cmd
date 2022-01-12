@extends('layouts.admin')
@section('content')
    <div class="card has-background-success" style=" margin: 10px">
        <header class="card-header has-text-info-light">
            <a href="{{ url()->previous() }}" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </span>
            </a>
            <p class="card-header-title">
                Settings
            </p>

        </header>
    </div>

    @if ($setting == null)

    <button class="js-modal-trigger" data-target="modal-js-example" >
        Open JS example modal
     
    </button>
        <div class="modal" id="js-modal-trigger">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Modal title</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <!-- Content ... -->
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success">Save changes</button>
                    <button class="button">Cancel</button>
                </footer>
            </div>
        </div>
    @else
        <form class="box is-two-thirds" method="post" action="{{ route('settings.update') }}">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" name="name" id="name" type="text" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" name="email" id="email" type="email"
                        placeholder="e.g. example@example.com" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Subject</label>
                <div class="control">
                    <input class="input" name="subject" id="subject" type="text" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" name="message" id="message" type="text" row="10" required></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label">Captcha</label>
                <span>{!! captcha_img() !!}</span>
                <button class="button is-rounded" id="refresh-captcha">
                    &#x21bb;
                </button>
            </div>
            <div class="field">
                <input id="captcha" type="text" class="input" placeholder="Enter Captcha" name="captcha" required>
            </div>
            <div style="align-content: center">
                <button class="button is-secoundary" type="submit">Save</button>
            </div>

        </form>
    @endif





@stop
