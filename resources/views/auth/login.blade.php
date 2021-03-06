@extends('layouts.app')

@section('content')
    <div class='text-center'>
        <h1>Log in</h1>
    </div>
    
    <div class="row"></div>
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::label('email',old('email'),['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class' => 'btn btn-primary btn-block']) !!}
                </div>
                    
                    {!! Form::submit('Log in',['class' => 'btn btn-primary btn-block'])!!}
                {!! Form::close() !!}
                
                {{-- ユーザ登録ページへのリンク --}}
                <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection