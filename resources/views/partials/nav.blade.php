<header class="header">
    <div class="logo">
        <a href="/account"><img src="{{ asset(Auth::user()->image_user) }}" alt="Imagen de Perfil"></a>
    </div>
    <nav>
        <ul class="nav-links">
            <li><a class="nav-link" href="/collections"><i class="bi bi-house-door-fill"></i>&nbsp;&nbsp;<strong>Colecciones</strong></a></li>
            <li><a class="nav-link" href="/news"><i class="bi bi-newspaper"></i>&nbsp;&nbsp;<strong>Noticias</strong></a></li>
            <li><a class="nav-link" href="/collections/create"><i class="bi bi-plus-circle"></i>&nbsp;&nbsp;<strong>Añadir</strong></a></li>
        </ul>
    </nav>
    <a class="btn" href="/chat"><button>Chat</button></a>
    <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
    <div id="mobile-menu" class="overlay">
        <a onclick="closeNav()" href="#" class="close">&times;</a>
        <div class="overlay-content">
            <br><br><br><br><br>
            <a href="#">Noticias</a>
            <a href="/collections">Colecciones</a>
            <a href="/collections/create">Añadir</a>
            <a href="/chat">Chat</a>
            <br><br><br><br><br><br><br><br><br><br>
            <a href="/logout">Cerrar sesión</a>
        </div>
    </div>
</header>



