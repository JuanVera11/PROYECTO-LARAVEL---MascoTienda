@extends('layouts.app')
@section('module', 'Inicio')

@section('content')

<h1 class="texto-medio">
   <strong>Tienda de Mascotas ubicada en la ciudad de Manizales en el Barrio de Palermo.</strong> 
   <hr>
   <br>
   <p class="parrafito">
   - Ofrecemos servicios como alimentos para perros, gatos, hamsters, loritos <br>
   - Tambíen juguetes o accesorios de diferentes diseños, tamaños y colores para uso de tu mascota. <br>
    -  Hay servicio de baño, de cuidado personal y de recreación para que tu mascota se sienta a gusto, en un lugar seguro
    y acompañado de profesionales que lo haran sentir como en casa.
   </p>
   <hr>

   <h1 class="alimentacion">Alimentos</h1>

<style>
    .texto-medio {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 28px; 
        font-weight: normal; 
        color: black;
    }

    .parrafito {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 22px; 
        font-weight: normal; 
    }

     .alimentacion{
        text-align: center;
        color: black;
     }

</style>
@endsection