@extends('layouts.app')

@section('content')

    <div class="card mt-3">
        <div class="card-header bg-primary text-white">

            @include('partials.discussion-header')

            {{-- {{ $discussion->title }} --}}
        </div>

        <div class="card-body">
            <div class="text-center">
                <strong>
                    <h4>{{ $discussion->title }}</h4>
                </strong>
            </div>

            <hr>

            {!! $discussion->content !!}

            @if($discussion->BestReply)
                <div class="card bg-success my-4 text-white">
                    <div class="card-header font-weight-bold">
                        <div class="d-flex justify-content-between">

                            <div>
                                <img width="40px" height="40px" style="border-radius: 50%;" src="{{ Gravatar::src($discussion->BestReply->owner->email) }}" alt="">
                                <span class="ml-2">{{ $discussion->BestReply->owner->name }}</span>
                            </div>

                            <strong>Best Reply</strong>

                        </div>
                    </div>
                    <div class="card-body">
                        {!! $discussion->BestReply->content !!}
                    </div>
                </div>
            @endif

        </div>
    </div>

    @foreach($discussion->replies()->paginate(13) as $reply)
        <div class="card my-4">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <img width="50px" height="50px" style="border-radius: 50%;" src="{{ Gravatar::src($reply->owner->email) }}" alt="">
                        <span class="font-weight-bold ml-2">{{ $reply->owner->name }}</span>
                    </div>

                    <div>
{{--                        <button type="submit" class="btn btn-dark text-white">Best reply</button>--}}
                        @if(auth()->user()->id == $discussion->user_id)
                            <form action="{{ route('discussions.best-reply', ['discussion' => $discussion->slug, 'reply'=> $reply->id]) }}" method="POST">
                                @csrf
                                
                                <button type="submit" class="btn btn-success text-white">Best reply</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body">
                {!! $reply->content !!}
            </div>

            <div class="card-footer">
                @if($reply->is_liked_by_auth_user())
                    <a href="{{ route('reply.unlike', ['id' => $reply->id]) }}" class="btn btn-danger btn-sm">Unlike &nbsp;<span class="badge badge-light">{{ $reply->likes->count() }}</span></a>
                @else
                    <a href="{{ route('reply.like', ['id' => $reply->id]) }}" class="btn btn-primary btn-sm">Like &nbsp;<span class="badge badge-light">{{ $reply->likes->count() }}</span></a>
                @endif
            </div>
        </div>

    @endforeach

    <div class="text-center">
        {{ $discussion->replies()->paginate(17)->links() }}
    </div>

    <div class="card my-4">

        <div class="card-header bg-success text-white">
            Add a Reply
        </div>

        <div class="card-body">
            @auth()
                <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">

                    @csrf
                    <input type="hidden" name="content" id="content">
                    <trix-editor input="content"></trix-editor>
                    <button type="submit" class="btn btn-success mt-2">Reply</button>

                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-info text-white">Sign In to Add Reply</a>
            @endauth

        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
@endsection
