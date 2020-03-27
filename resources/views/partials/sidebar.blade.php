<?php
    /**
     * Main sidebar template.
     * Contains user infos and links.
     */
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav mt-5" >
        <li class="nav-item nav-category"></li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
