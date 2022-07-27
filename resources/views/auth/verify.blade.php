@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Falta pouco agora! Precisamos apenas que você valide o seu e-mail.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Reenviamos um link para você com um link de validação.') }}
                        </div>
                    @endif

                    {{ __('Antes de utilizar os recursos da aplicação, por favor valide seu e-mail por meio do link de verificação que encaminhamos para o seu email.') }}
                    {{ __('Caso voc~e não tenha recebido o e-mail de verificação por favor clique no link abaixo.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para solicitar outro e-mail de verificação.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
