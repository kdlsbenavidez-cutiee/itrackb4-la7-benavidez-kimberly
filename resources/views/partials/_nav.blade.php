<nav>
    <a href="{{ route('skincare.index') }}"
       class="{{ request()->is('skincare*') ? 'active' : '' }}">Skincare </a>

    <a href="{{ route('skincare.featured') }}"
    class="{{ request()->is('skincare/featured*') ? 'active' : '' }}">
     Featured
    </a>
</nav>