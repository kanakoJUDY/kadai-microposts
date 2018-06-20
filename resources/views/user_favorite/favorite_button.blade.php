@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favorites($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('❤', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('❤', ['class' => "btn btn-outline-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif