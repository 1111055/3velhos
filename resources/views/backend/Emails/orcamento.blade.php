@component('mail::message')
# {{$data->subject}}

Exº {{$data->nome}}

<center>
Acusa-mos a recepção do seu pedido de orçamento. <br><br>
</center>

<center>
A equipa Ibero Brinde agradeçe o seu interesse, brevemente receberá a nossa melhor proposta. <br><br>
</center>

Os seus dados:

Nome: {{$data->nome}}
<hr>
Email: {{$data->email}}
<hr>
Telefone/Telemovel: {{$data->telemovel}}
<hr>
Empresa: {{$data->empresa}}
<hr>
Observações: {{$data->obs}}



@component('mail::button', ['url' => 'https://iberobrinde.com'])
Ibero Brinde
@endcomponent

<br><br>


<center>
<strong>Teste Mensagem</strong> 
</center>

<br><br>


www.iberobrinde.com<br>
{{ config('app.name') }}
@endcomponent
