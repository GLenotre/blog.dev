@extends('layouts.master')

@section('top-script')
    <style type="text/css">
        .formmargin {
            margin-bottom: 10px;
        }
    </style>
@stop

@section('content')
    @include('partials.navbar')

    <div class="row">
        <div class="col-md-2 col-md-offset-8">
            
            {{ Form::open(array('action' => 'HomeController@postLogin')) }}
                <div class="row formmargin">
                    <div class="col-xs-12">
                        {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                        
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control formmargin', 'autofocus' => 'autofocus']) }}
                                  
                        {{ $errors->first('password', '<span class="help-block">:message</span>') }}    

                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                </div>
                
                
                <button class="btn btn-default formmargin" type="submit">Log In</button>
            {{ Form::close() }}

        </div> <!-- end col-md-2 -->
    </div> <!-- end row -->
@stop