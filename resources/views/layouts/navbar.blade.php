<nav id="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <h3>Menu</h3></div>


    <!-- Sidebar Links -->
    <ul class="list-unstyled components">
        <li >
            <a  class="dropdown-item active" href="/">Scanner</a></li>
        <li>
            <a href="#"></a>
        </li>
        <li><!-- Link with dropdown items -->
            <a class="dropdown-item " href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Options</a>
            <ul class="collapse list-unstyled show" id="homeSubmenu">
                <li><a class="dropdown-item " href="{{ URL::asset('categories/') }}">Categories</a></li>
                <li><a  class="dropdown-item " href="{{ URL::asset('palettes/') }}">Palettes</a></li>
                <li><a class="dropdown-item " href="{{ URL::asset('packets/') }}">Packets</a></li>
                <li><a class="dropdown-item " href="{{ URL::asset('categories/download') }}">Telecharger</a></li>
            </ul>

    </ul>
</nav>
