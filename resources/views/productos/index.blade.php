@extends('plantilla')

@section('titulo')
    Catálogo
@endsection

@section('contenido')
    <ul>
       @isset ($productos)
           @forelse($productos as $producto)
               <li>
                <a href="{{ route('productos.show', $producto) }}">
                {{ $producto->id }} {{ $producto->nombre }} 
                <br>
                {{ $producto->created_at->diffForHumans()}}
                </a>
                </li>
               
           @empty
               <li>No hay proyectos para mostrar</li>
           @endforelse
           {{ $productos->links() }}
       @else
           <li>Catálogo no definido</li>
       @endisset
   </ul>
@endsection