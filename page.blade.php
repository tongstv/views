@extends('app')


@section('title',$data->page_title)
@section('des', $data->page_des)
@section('content')

    @if (isset($data->page_title))

        <div class="text-box">
            <div class="post-detail">
                <strong style="color: blue;">{{$data->page_title}}</strong>
                {!!$data->page_detail!!}
            </div>
        </div>



        @else


    @endif





@endsection

@section('right')

    @include("right")
    @endsection