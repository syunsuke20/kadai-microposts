@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフォローボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {{-- フォローボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('favorite', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
