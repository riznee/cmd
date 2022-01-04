
    <div class="card" style="width: 75%">
        <div class="card-body text-dark">
            <ul class="list-group list-group-flush">
                @foreach($headers as $header)
                    <li class="list-group-item">
                        <strong> 
                            {{$header['title']}}:
                        </strong>
                        {{$item[$header['value']]}} 
                    </li>            
                @endforeach     
            </ul>
        </div>
    </div>

