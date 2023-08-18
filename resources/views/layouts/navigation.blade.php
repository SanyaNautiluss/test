<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li>

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
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->