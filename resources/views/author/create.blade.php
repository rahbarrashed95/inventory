@extends('main')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-info">
                <div class="card-header bg-primary text-white">Add New Author</div>


                  <div class="card-body">
                    {!! Form::open(['url' => '/author','method' => 'post','files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('', 'Name :') !!}
                            {!! Form::text('name', '',$attributes=['class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('name')  }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('', 'Email :') !!}
                            {!! Form::email('email', '',$attributes=['class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('email')  }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('', 'Password :') !!}
                            {!! Form::password('password',$attributes=['class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('password')  }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('', 'Address :') !!}
                            {!! Form::textarea('address', '',$attributes=['class'=>'form-control','rows' => 3]) !!}
                            <span class="text-danger">{{ $errors->first('address')  }}</span>
                        </div>
                      <div class="form-group">
                          {!! Form::label('', 'Photo :') !!}
                          {!! Form::file('photo', $attributes = []) !!}
                           </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>




@endsection


{{--{!! Form::open(['url' => "/unit/$data->id",'method'=>'PUT']) !!}--}}
