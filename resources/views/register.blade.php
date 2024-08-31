@extends('blueprint.master')

@section('title')
    Bank Sampah
@endsection


@section('content')
    <div class="container d-flex flex-wrap flex-row align-items-center">
        {{-- logo --}}
        <div>
            <img src="/frontend/beeverse.png" alt="beeverse">
            <p class="login-helper text-center">Already Registered</p> 
            <div class="text-center">
                <a href="/login" class="text-decoration-none text-white text-center"><button class="btn btn-primary ">Login</button></a>
            </div>
        </div>
        {{-- vertical line --}}
        <div class="vertical-line"></div>
        {{-- RegisterSection --}}
        <div style="width: 40%;margin:10px;"> 
            <h5 class="text-center register-title">@lang('register.regtit')</h5>
        </div>
    </div>


@endsection

<style>
    .login-helper{
        font-size: 1.2rem;
        color: #212529;
        margin:10px
    }

    .register-title{    
        font-size: 1.5rem;
        font-weight: 800;
        color: #212529;
        margin-bottom: 10px;
    }

    .vertical-line{
        border: 1px solid #8f969e;
        height: 63vh;
        margin: 5px;
    }
</style>