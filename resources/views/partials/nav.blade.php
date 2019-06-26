<nav>
    <pre> {{  dump(request()->path()) }} </pre>
       <ul>
        <li class="{{ seleccionado('welcome') }}">
            <a href="/">Inicio</a>
        </li>
        <li class="{{ seleccionado('acercade') }}">
            <a href="acercade">Acerca de...</a>
        </li>
        <li class="{{ seleccionado('productos.index') }}">
            <a href="{{ route('productos.index') }}">Productos</a>
        </li>
        <li class="{{ seleccionado('crear-mensaje') }}">
               <a href="{{ route('crear-mensaje') }}">Contacto</a>
        </li>

     
       </ul>
   </nav>