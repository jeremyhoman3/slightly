@extends('master')

@section('content')
    <h3>Edit your item</h3>

    {!! Form::model($item, ['route' => ['items.store', $item->id]]) !!}

    @include('partials.form')

    {!! Form::close() !!}
@stop