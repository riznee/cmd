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
                Replay Message
            </p>


        </header>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="content">
                <div class="columns">
                    <div class="column">
                        <p class="is-size-7">From : {{ $message->name }}</p>
                        <p class="is-size-7">email : {{ $message->email }}</p>
                    </div>
                    <div class="column">
                        <p class="is-size-7">Recived from : {{ $message->created_at }}</p>
                        <p class="is-size-7">Last update : {{ $message->updated_at }}</p>
                    </div>
                    <div class="column">
                        <div class="span">
                            @if ($message->read == 0)
                                <p class=" tag is-warning is-size-7">Status : unread</p>
                            @else
                                <p class=" tag is-primary is-size-7">Status : Read</p>
                            @endif
                        </div>
                    </div>
                </div>
                <p> {{ $message->subject }}</p>
            </div>
        </div>
    </div>
    <br/>
    <form class="box" method="post" action="{{route('contactus.mailto',$message->id)}}">
        {{ csrf_field() }}
        {{ method_field('POST') }}
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
        
        <div style="align-content: center">
            <button class="button is-secoundary" type="submit">Save</button>
        </div>

    </form>








@stop
