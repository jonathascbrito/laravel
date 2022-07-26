@component('mail::message')
# Introdução

Corpo da mensagem.

@component('mail::button', ['url' => 'https://irdeb.ba.gov.br'])
Texto do Botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
