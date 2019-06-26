@extends('plantilla')

@section('titulo')
    Catálogo
@endsection

@section('contenido')
    <ul>
       @isset ($productos)
       @forelse($productos as $producto)
          <li>
             <a href="{{ route('producto.show', $producto) }}">
                      {{ $producto->nombre }}</a>
           </li>
      @empty
          <li>No hay productos para mostrar</li>
      @endforelse

           {{ $productos->links() }}
       @else
           <li>Catálogo no definido</li>
       @endisset
   </ul>
@endsection