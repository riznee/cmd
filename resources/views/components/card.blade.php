<table class="table   is-striped">
    <thead>
        <tr>
            <th>Field name</th>
            <th style="width:100%">Detials</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($headers as $header)
            <tr>
                <td>{{ $header['title'] }}</td>
                <td>
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
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
