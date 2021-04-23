<div class="d-flex justify-content-between">

    <div>
        <img width="40px" height="40px" style="border-radius: 50%" src="{{ Gravatar::src($discussion->author->email) }}" alt="Image de profil">
        <strong class="ml-2">{{ $discussion->author->name }}</strong>
    </div>

</div>
