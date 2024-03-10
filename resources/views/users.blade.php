@foreach($users as $user)

    @if($loop->first)
        <p>This is the first iteration</p>
    @endif

    @if($loop->last)
        <p>This is the last iteration</p>
    @endif

    <p>{{ $user->name . ' Index: ' . $loop->index }}</p>
@endforeach

@forelse($users as $user)
    <p>{{ $user->name }}</p>
@empty
    <p>List of users are empty</p>
@endforelse