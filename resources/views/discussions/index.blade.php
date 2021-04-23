@extends('layouts.app')

@section('content')

    @foreach($discussions as $discussion)
        <div class="card my-3">
            <div class="card-header bg-primary text-white">

                <div class="d-flex justify-content-between">

                    <div>
                        <img width="40px" height="40px" style="border-radius: 50%" src="{{ Gravatar::src($discussion->author->email) }}" alt="Image de profil">
                        <strong class="ml-2">{{ $discussion->author->name }} --- {{ $discussion->created_at->diffForHumans() }}</strong>
                    </div>

                    <div>
                        <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn bg-white text-primary text-bold">View</a>
                    </div>

                </div>


                {{-- {{ $discussion->title }} --}}
            </div>

            <div class="card-body">

                <div class="text-center">
                    <strong>
                        <h4>{{ $discussion->title }}</h4>

                    </strong>
                </div>


            </div>

            <div class="card-footer">
                <span class="badge badge-primary">{{ $discussion->channel->name }}</span>
                <div class="float-right">
                    {{ $discussion->replies()->count() }} Reponse(s)
                </div>
            </div>
        </div>
    @endforeach

    <div class="text-center">
        {{ $discussions->links() }}
    </div>

@endsection
