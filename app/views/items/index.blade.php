@extends('...master')

@section('content')
    <h3>Items for sale</h3><br>

    <div class="row">
    @foreach($items as $item)
            <!-- item -->
            <div class="col-sm-4 col-md-3">
                <div class="thumbnail" style="height: 420px;">
                    <img src="http://placehold.it/300&text=placehold.it+rocks!" alt="...">
                    <div class="caption">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                        <p><a href="#" class="btn btn-primary pull-left" role="button">More info</a></p>
                        <!-- <a href="#" class="btn btn-default" role="button">Contact Seller</a></p> -->
                        <br>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@stop