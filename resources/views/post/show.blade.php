
@foreach($posts as $post)
        @if ( $post->user_id == auth()->user()->id)
            <div class="container py-4">
            
                <div>
                    <div>
                        <div class="card shadow-sm flex flex-row" style="height:350px">
                            <img src="{{ $post->image }}" style="width:600px"></img>

                            <div class="card-body bg-white flex flex-col justify-between">
                                <h3>{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><img src="{{ asset('image/like.png') }}" alt="tag"></button>
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

