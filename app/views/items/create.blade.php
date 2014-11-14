@extends('...master')

@section('content')
    <div class="container">
    <h3>Submit your item</h3>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach


    {!! Form::open(['route' => 'items.store', 'files' => 'true']) !!}

        @include('partials.form')

    {!! Form::close() !!}
    <p>By clicking submit, you agree to the<a href="#"> Slightly Used Terms and Conditions.</a></p>

    <br><br><br><br>
    </div>
@stop