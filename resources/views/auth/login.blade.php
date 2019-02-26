@extends('layouts.app')

@section('style')
    <style>
        .form-sigin{
            width: 100%;
            max-width: 330px;
            margin: auto;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="POST" class="form-sigin mt-5 pt-5">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                @endif

                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                @if ($errors->has('password'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
        </form>
    </div>
@endsection
