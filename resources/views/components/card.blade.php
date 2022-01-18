    <div class="card">
        <div class="card-content">
            @foreach ($headers as $header)
                <p> {{ $header['title'] }} :
                    @if (!empty($header['type']))
                        @if (!empty($option))

                            @if ($header['type'] == 'boolen')
                                @if ($item[$header['value']] == 1)
                                    {{ $option['true'] }}
                                @else
                                    {{ $option['false'] }}
                                @endif
                            @endif

                            @if ($header['type'] == 'userRole')
                                {{ $item->roles()->pluck('name')->implode(' ') }}
                            @endif
                        @else
                            No Option is define
                        @endif

                        @if ($header['type'] == 'variable')

                        @endif

                    @else
                        {{ $item[$header['value']] }}
                    @endif
                </p>

            @endforeach
        </div>
    </div>
