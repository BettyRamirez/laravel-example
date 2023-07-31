<header>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">home</a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}"
                    class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">cursos</a>
            </li>
            <li>
                <a href="{{ route('about-us') }}"
                    class="{{ request()->routeIs('about-us') ? 'active' : '' }}">nosotros</a>
            </li>
        </ul>
    </nav>
</header>
