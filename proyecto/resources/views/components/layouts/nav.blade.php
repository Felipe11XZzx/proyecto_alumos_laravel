<nav class="h-10v bg-nav flex flex-col md:flex-row justify-start items-center space-x-3 mx-4">
    <a class="btn btn-primary" href="#">Inicio</a>
    <a class="btn btn-secondary" href="#">Contacto</a>
    <a class="btn btn-warning" href="#">Sobre nosotros</a>
    <a class="btn btn-ghost" href="#"> Cuentale cuando estabas arrecha</a>
    @auth
        <a href="{{route("alumnos.index")}}" class="btn btn-sm btn-info">About</a>
    @endauth
    <!-- BOTONES EN ESTE APARTADO IRIAN LOS BOTONES CON LOS LINKS -->
</nav>
