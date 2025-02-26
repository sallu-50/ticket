<div class="navbar-nav flex-row order-md-last">
    <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
            <div class="ps-2">
                <div>salman</div>
                <div class="mt-1 small text-secondary">UI Designer</div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

            <a href="{{ route('information') }}" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Interested Events</a>
            <a href="#" class="dropdown-item">Notifications</a>
            <a href="{{ route('myticket') }}" class="dropdown-item">My Teckets</a>
            <a href="#" class="dropdown-item">Ticket History</a>

            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
        </div>
    </div>
</div>
