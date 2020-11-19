@extends('main')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-primary text-white">
                    Edit {{ $data->name }}
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => "/admin/$data->id",'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('', 'Name :') !!}
                        {!! Form::text('name',$data->name,$attributes=['class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('name')  }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('', 'Email :') !!}
                        {!! Form::email('email',$data->email,$attributes=['class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email')  }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('', 'Password :') !!}
                        {!! Form::text('password',$data->password,$attributes=['class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password')  }}</span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('', 'Address :') !!}
                        {!! Form::textarea('address',$data->address,$attributes=['class'=>'form-control','rows' => 3]) !!}
                        <span class="text-danger">{{ $errors->first('address')  }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>




@endsection


{{--{!! Form::open(['url' => "/unit/$data->id",'method'=>'PUT']) !!}--}}
