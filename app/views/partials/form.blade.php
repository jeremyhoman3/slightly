    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sellerEmail', 'Your Email:') !!}
        {!! Form::text('sellerEmail', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('item-image', 'Item Image (1 image required):') !!}
        <br><br>
        {!! Form::file('image1') !!}<br>
        <!-- {!! Form::file('image2') !!}<br>
          {!! Form::file('image3') !!}<br> -->
    </div>

    <div class="form-group">
        {!! Form::submit('Submit Item', ['class' => 'btn btn-primary']) !!}
    </div>