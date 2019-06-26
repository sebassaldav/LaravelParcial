@extends('plantilla')

@section('titulo', 'Todos los mensajes')

@section('contenido')


    <h1>Todos los mensajes</h1>

   <table width="100%" border="1">
       <thead>
           <tr>
               <th>Nombre</th>
               <th>Correo</th>
               <th>Asunto</th>
               <th>Contenido</th>
               <th>Acciones</th>
           </tr>
       </thead>
      
       <tbody>
       foreach ($mensajes as $mensaje)
            <tr>
                <td>
                    <a href="{{ route('buscar-mensaje', $mensaje->id) }}">
                        {{ $mensaje->nombre}}
                    </a>
                </td>
                <td>{{ $mensaje->email}}</td>
                <td>{{ $mensaje->asunto}}</td>
                <td>{{ $mensaje->contenido}}</td>
                <td>
                  <a href="{{ route('editar-mensaje', $mensaje->id) }}">
                     Editar</a>

                  <form style="display:inline" 
                        method="POST" 
                        action="{{ route('eliminar-mensaje',
                                   $mensaje->id) }}">
                      @csrf
                      {!! method_field('DELETE') !!}
                      <button type="submit">Eliminar</button>
                  </form>
              </td>
b
            </tr>
        @endforeach
       </tbody>
   </table>

@endsection