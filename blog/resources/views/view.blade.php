@extends('msg')

@section('content')
    <h3>{{$msg->title}}</h3>
    <h4>
        时间：{{$msg->updated_at}}
    </h4>
    <p>
        内容：<br/>
        &nbsp;&nbsp;{{$msg->body}}
    </p>


@endsection