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
                Roles
            </p>

        </header>
    </div>

    <x-card :headers="$headers" :item="$data[0]">
    </x-card>

    <div class="card has-background" style=" margin-top: 10px">
        <header class="card-header has-text-info-light">
            <p class="card-header-title">
                Permissions
            </p>
        </header>
    </div>


    <div class="columns is-multiline" style="padding: 10px">
        @foreach ($permissionList as $item)
            <div class="column is-3">
                <div class="card ">
                    <div class="card-content">
                        <div class="columns ">
                            <div class="column">

                                <p>
                                    {{ $item['name'] }}
                                </p>
                                <p>
                                    {{ $item['guard_name'] }}
                                </p>

                            </div>
                            <div class="column is-1">
                                @if ($data[0]->hasPermissionTo('' . $item->name . ''))
                                    <form accept-charset="UTF-8" method="post"
                                        action="{{ route('role.permission.remove', [$data[0]['id'], $item['id']]) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="tag  is-danger  is-inverted" style="border: none">
                                            <i class="fas fa-minus-square" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                @else
                                    <form accept-charset="UTF-8" method="post"
                                        action="{{ route('role.permission.set', [$data[0]['id'], $item['id']]) }}">
                                        @csrf
                                        <button class="tag  is-success  is-inverted" style="border: none">
                                            <i class="fas fa-plus-square" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@stop
