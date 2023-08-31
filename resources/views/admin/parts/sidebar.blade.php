<div>
    <div
        class="d-flex flex-column sidebar-left align-items-start justify-content-between mt-4">
        <ul class="admin-list">
            <li class="sidebar-item">
                <a href="{{ route('admin.home') }}">
                    <i
                        class="text-secondary fa-regular fa-compass"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.game.games') }}">
                    <i
                        class="text-success fa-solid fa-gamepad"></i>
                    <span>Games</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="">
                    <i
                        class="text-info fa-solid fa-user"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="">
                    <i
                        class="text-warning fa-solid fa-coins"></i>
                    <span>Benefit</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.genre.genres') }}">
                    <i
                        class="text-danger fa-solid fa-bars-staggered"></i>
                    <span>Genres</span>
                </a>
            </li>
        </ul>
    </div>
</div>




{{-- Home  --}}
{{-- Games  --}}
