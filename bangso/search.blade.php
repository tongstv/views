@extends("app")

@section('content')

    @include("bangso.loc")


    <div class="table-head">


        <h3 class="title text-center">{{@$check->title}}</h3>
    </div>


    @include("bangso.table")

        @include("bangso.loc")
    @endsection


@section("right")

    @include ("right")
    @endsection