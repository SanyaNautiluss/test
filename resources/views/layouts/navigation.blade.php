<!-- libs for user script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li  id="toggleLinks" class="nav-item"><a href="#" class="nav-link"> <i class="fa fa-briefcase ml-2 mr-2"></i>User Management</a></li>
            <div class="nav nav-pills nav-sidebar flex-column hide-links" id="linksContainer">
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                        <i class="fa fa-briefcase"></i>
                        <p>
                            {{ __('Permissions') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class="fa fa-briefcase ml-2"></i>
                        <p>
                            {{ __('Roles') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="fa fa-user ml-4"></i>
                        <p>
                            {{ __('Users') }}
                        </p>
                    </a>
                </li>
            </div>

            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-microchip"></i>
                    <p>
                        {{ __('Categories') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.tests.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>
                        {{ __('Tests') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.questions.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        {{ __('Questions') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.answers.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Answers') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.results.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Results') }}
                    </p>
                </a>
            </li>
        </ul>
    </nav>

    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

<style>
    .hide-links {
        display: none;
    }
    .hide-link {
        display: none;
    }
</style>
<script>
    $(document).ready(function () {
        $("#toggleLinks").click(function () {
            $("#linksContainer").toggle();
        });
    });
    $(document).ready(function () {
        $("#toggleLink").click(function () {
            $("#linkContainer").toggle();
        });
    });
</script>
