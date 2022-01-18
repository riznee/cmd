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
        <form class="box is-two-thirds" method="post" action="{{ route('settings.store') }}">
            {{ csrf_field() }}
            {{ method_field('POST') }}

            <div class="field">
                <label class="label">Site Name </label>
                <div class="control">
                    <input class="input" name="site_name" id="name" type="text">
                </div>
            </div>

            <div class="field">
                <label class="label">Email </label>
                <div class="control">
                    <input class="input" name="email" id="name" type="email">
                </div>
            </div>

            <div class="field">
                <label class="label">Facebook Page ID </label>
                <div class="control">
                    <input class="input" name="facebook" id="name" type="text">
                </div>
            </div>

            <div class="field">
                <label class="label">Twitter ID </label>
                <div class="control">
                    <input class="input" name="twitter" id="name" type="text">
                </div>
            </div>

            <div class="field">
                <label class="label">Instergram </label>
                <div class="control">
                    <input class="input" name="inster" id="name" type="text">
                </div>
            </div>
            <br />
            <div class="file">
                <label class="file-label">
                    <input class="file-input" type="file" name="logo">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose Logo
                        </span>
                    </span>
                </label>
            </div>
            <br />
            <hr>
                <div class="columns">
                    <div class="column">
                        <label class="checkbox">
                            Display Website Name
                            <input type="checkbox" name="disqus_shortname">
                        </label>
                    </div>
                    <div class="column">
                        <label class="checkbox">
                            Disable login form
                            <input type="checkbox" name="display_login_buttion">
                        </label>
                    </div>
                    <div class="column">
                        <label class="checkbox">
                            Disable Artile title
                            <input type="checkbox" name="display_title_site">
                        </label>
                    </div>
                    <div class="column">
                        <label class="checkbox">
                            Disable Artile descriptions
                            <input type="checkbox" name="display_article_descirption">
                        </label>
                    </div>
                </div>
            <br/>
            <hr>
       
                <div class="columns">
                    <div class="column">
                        <label class="checkbox">
                            Disable Main Page Carasoule
                            <input type="checkbox" name="carasoule">
                        </label>
                    </div>
                    <div class="column">
                        <label class="checkbox">
                            Disable Login form
                            <input type="checkbox" name="display_login_buttion">
                        </label>
                    </div>
                    
                </div>
            <br/>
            <hr>

            <div style="align-content: center">
                <button class="button is-primary" type="submit">Save</button>
            </div>



        </form>



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
