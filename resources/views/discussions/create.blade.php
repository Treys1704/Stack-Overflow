@extends('layouts.app')

@section('content')


    <div class="card mt-3">
        <div class="card-header bg-success text-white">Add Discussion</div>

        <div class="card-body">

            <form action="{{ route('discussions.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" value="" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Contenu</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
{{--                    <textarea class="form-control" name="content" id="content" rows="5" cols="5"></textarea>--}}
                </div>

                <div class="form-group">
                    <label for="channel">Channel</label>
                    <select name="channel" id="channel" class="form-control">
                        @foreach($channels as $channel)

                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>

                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Create Discussion</button>
            </form>

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
