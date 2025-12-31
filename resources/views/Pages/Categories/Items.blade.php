@extends('Layout.Master')

@section('content')

    <ul>
        @foreach($category->items as $item)
            <li><a href="">{{$item->code}}&nbsp;&nbsp;{{$item->title}}</a></li>
        @endforeach
    </ul>

@endsection
