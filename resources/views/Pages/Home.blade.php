@extends('Layout.Master')

@section('content')

<ul>
    @foreach($categories as $cat)
        <li><a href="{{route('categories.items',$cat->id)}}">{{$cat->title}}</a></li>
    @endforeach
</ul>
@endsection
