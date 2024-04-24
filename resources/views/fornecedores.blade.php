<h1>Fornecedor</h1>

@php

    $fornecedores
    
    /*
    if(){

    }else if(){

    } else{

    }
    */

@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem maise de 10 fornecedores cadastrados</h3>
@else
    <h3>Existem não existem fornecedores cadastrados</h3>
@endif