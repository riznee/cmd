
    <div class="card">
        <div class="card-content">
            <div class="media-content">            
                @foreach($headers as $header)
                    
                <p class="title is-4"> {{$header['title']}}</p>
                <div class="content">
                        {{$item[$header['value']]}} 
                </div>
                              
                @endforeach     
            </div>
        </div>
        <footer class="card-footer">
            <a href="#" class="card-footer-item">Save</a>
            <a href="#" class="card-footer-item">Edit</a>
            <a href="#" class="card-footer-item">Delete</a>
        </footer>
    </div>

