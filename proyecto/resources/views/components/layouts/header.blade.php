{{--
<header class="h-15v bg-header flex items-center justify-between px-4">
    <span>ESTOY EN HEADER</span>
    <div class="flex space-x-2">
        @guest
        <a class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg">Boton Responsive</a>
        <a class="btn btn-primary btn bg-buttons" href="#">Iniciar Sesión</a>
        <a class="btn btn-secondary btn" href="#">Registrarse</a>
        @endguest

        @auth
            {{ Auth::user()->name}}
                <a class="btn btn-primary btn bg-buttons" href="#">Cerrar Sesión</a>
            @endauth
    </div>
</header>
--}}

<header class="h-15v bg-header flex flex-row justify-between
 items-center  p-3
">
    <img  class ="h-16 max-h-full bg-white" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class ="text-5xl text-white " >GESTIÓN CENTRO</h1>
    <div>
        <form action="">
            <button class="btn btn-sm btn-primary btn-outline">Login</button>
            <button class="btn btn-sm">Register</button>
        </form>
    </div>

</header>
