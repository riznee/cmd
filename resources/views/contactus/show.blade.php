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
                View Message
            </p>

            @can($permisson . '-reply')
                <a class="card-header-icon" href="{{ route($permisson . '.reply', $id) }}" data-toggle="tooltip"
                    title="press to reply!">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </a>
            @endcan
        </header>

    </div>
    <div class="card" style=" margin: 10px">
        <div class="card-content">
            <div class="columns">
                <div class="column">
                    <p class="is-size-7">From : {{ $message->name }}</p>
                    <p class="is-size-7">email : {{ $message->email }}</p>
                </div>
                <div class="column">
                    <p class="is-size-7">Recived from : {{ $message->created_at }}</p>
                    @if ($message->read == 0)
                        <p class=" tag is-danger is-size-7">Status : unread</p>
                        <p class="is-size-7">Read on : -</p>
                    @else
                        <p class=" tag is-primary is-size-7">Status : Read</p>
                        <p class="is-size-7">Read on : {{ $message->updated_at }}</p>
                    @endif
                </div>
            </div>
            <p  > Subject : <strong>{{$message->subject}}</strong></p>
            <hr/>
            <p>{{$message->message}}</p>

        </div>

    </div>



@stop
