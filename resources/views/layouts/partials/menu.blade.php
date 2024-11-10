<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('app.index') ? 'active' : '' }}">
        <a href="{{ route('app.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-smile"></i>
            <div class="text-truncate" data-i18n="หน้าหลัก">หน้าหลัก</div>
        </a>
    </li>
     <li class="menu-item {{ request()->routeIs('app.about') ? 'active' : '' }}">
        <a href="{{ route('app.about') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-smile"></i>
            <div class="text-truncate" data-i18n="หน้าหลัก">หน้าหลัก</div>
        </a>
    </li>
</ul>