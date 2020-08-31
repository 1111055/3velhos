@component('mail::message')
# {{$data->subject}}

Exº {{$data->nome}}

<center>
Acusa-mos a recepção do seu pedido de contacto. <br><br>
</center>

<center>
A equipa Feel Bit agradeçe o seu interesse, brevemente receberá noticias nossas. <br><br>
</center>

Os seus dados:

Nome: {{$data->nome}}
<hr>
Email: {{$data->email}}
<hr>
Assunto: {{$data->subject}}
<hr>
Descrição: {{$data->desc}}
<hr>

<br><br>


<center>
<strong>Até já.</strong> 
</center>

<br><br>


www.feelbit.pt<br>
Feel Bit
@endcomponent
