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
                User
            </p>
        </header>
    </div>

    <x-card 
    :title="$title" 
    :headers="$headers" 
    :item="$user" 
    :permissionname="$permisson" 
    :action="$action">
    </x-card>
    <div class="card has-background" style=" margin-top: 10px">
        <header class="card-header has-text-info-light">

            <p class="card-header-title">
                Roles List
            </p>
        </header>
    </div>

    <div class="columns" style="padding: 10px">
        @foreach ($roles as $item)
            <div class="column is-2">
                <div class="card has-background-success-light">
                    <div class="card-content">
                        <div class="columns">
                          <div class="tag">
                            {{ $item['name'] }}
                          </div>

                            @if ($user->hasRole('' . $item->name . ''))
                                <form class="tag"" accept-charset="UTF-8" method="post"
                                    action="{{ route('user.role.remove', [$user->id, $item['id']]) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="tag  is-danger  is-inverted" style="border: none">
                                        <i class="fas fa-times" aria-hidden="true"></i>
                                    </button>
                                </form>
                            @else
                                <form accept-charset="UTF-8" method="post"
                                    action="{{ route('user.role.set', [$user->id, $item['id']]) }}">
                                    @csrf
                                    <button class="tag  is-success  is-inverted" style="border: none">
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@stop
