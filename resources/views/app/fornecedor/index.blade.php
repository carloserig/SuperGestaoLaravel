<h3> Fornecedores</h3>

{{-- comentário  --}}

@php

@endphp

@isset($fornecedores)
   @for($i = 0; isset($fornecedores[$i]); $i++) 
    Fornecedor: {{$fornecedores[$i]['nome']}}
    <br>
    Status: {{$fornecedores[$i]['status']}}
    <br>
    CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dados não foi preenchido'}}
    <br>
    Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}} {{$fornecedores[$i]['telefone'] ?? ''}})
    <hr>
   @endfor  
@endisset