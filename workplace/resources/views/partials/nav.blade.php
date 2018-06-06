<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">WORK</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="/">INICIO</a>
                </li>


            <!-- Basic dropdown -->
                @else
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopuc="true" aria-expanded="false">{{ Auth::user()->name }} Configuracion</button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?c=Usuarios&a=">Config</a>
                        <a class="dropdown-item" href="#">Mi cuenta</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('cerrar session') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </ul>
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->