@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-success text-white">Edit Channel: {{ $channel->name }}</div>

        <div class="card-body">

            <form action="{{ route('channels.update', ['channel'=>$channel->id]) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <input type="text" value="{{ $channel->name }}" name="channel" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Edit</button>
                </div>
            </form>

        </div>
    </div>

@endsection
