
@foreach($posts as $post)
        @if ( $post->user_id == auth()->user()->id)
            <div class="container py-4 text-white">
            
                <div>
                    <div>
                        <div class="card shadow-sm flex flex-row">
                            <img src="{{ $post->image }}"></img>

                            <div class="card-body">
                                <h3>{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary bg-white"><img src="{{ asset('image/like.png') }}" alt="tag"></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Comments</button>
                                    </div>
                                    <small class="text-muted">posté le {{ $post->created_at}} par {{ $post->user_id}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        @endif
@endforeach

