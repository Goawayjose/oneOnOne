@extends('layouts.app')
@section('content')

<div class="col-12 col-md-5 mx-auto">
    <div class="card p-5">

        <h1 class="page-title text-extra-bold text-primary mb-2">Account</h1>

        {!! Form::model($user, [
            'method' => 'PUT',
            'url' => ['profile'],
            'files' => true
            ]) !!}
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>


            <div class="form-group">
                <label for="name">Name</label>
                {!! Form::file('image') !!}
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <div class="form-group">
                <label for="Password">Reset Password</label>
                {!! Form::password('Password', ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>


        {!! Form::submit('Update', ['class' => 'btn btn-bold btn-primary']) !!}
        {!! Form::close() !!}

    </div>

</div>
@stop
