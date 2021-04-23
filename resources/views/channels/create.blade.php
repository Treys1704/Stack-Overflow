@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-success text-white">Add a new Channel</div>

        <div class="card-body">

            <form action="{{ route('channels.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="text" placeholder="Enter a channel name" name="channel" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Create</button>
                </div>
            </form>

        </div>
    </div>

@endsection
