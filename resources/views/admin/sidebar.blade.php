<!-- resources/views/admin/partials/sidebar.blade.php -->
<div class="bg-light border-right" id="sidebar-wrapper" style="min-width: 250px;">
    <div class="sidebar-heading bg-primary text-white py-3 text-center">
        <strong>ADMIN PANEL</strong>
    </div>

    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
            <i class="fas fa-home mr-2"></i> Dashboard
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-users mr-2"></i> Users
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-blog mr-2"></i> Blog Posts
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-envelope mr-2"></i> Messages
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-gear mr-2"></i> Settings
        </a>
    </div>
</div>