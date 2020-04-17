<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('country_access')
                <li class="nav-item">
                    <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-flag nav-icon">

                        </i>
                        {{ trans('cruds.country.title') }}
                    </a>
                </li>
            @endcan
            @can('hourly_programming_access')
                <li class="nav-item">
                    <a href="{{ route("admin.hourly-programmings.index") }}" class="nav-link {{ request()->is('admin/hourly-programmings') || request()->is('admin/hourly-programmings/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.hourlyProgramming.title') }}
                    </a>
                </li>
            @endcan
            @can('seo_site_check_access')
                <li class="nav-item">
                    <a href="{{ route("admin.seo-site-checks.index") }}" class="nav-link {{ request()->is('admin/seo-site-checks') || request()->is('admin/seo-site-checks/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.seoSiteCheck.title') }}
                    </a>
                </li>
            @endcan
            @can('website_monitoring_access')
                <li class="nav-item">
                    <a href="{{ route("admin.website-monitorings.index") }}" class="nav-link {{ request()->is('admin/website-monitorings') || request()->is('admin/website-monitorings/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.websiteMonitoring.title') }}
                    </a>
                </li>
            @endcan
            @if(!auth()->user()->isAdmin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.billing.index') }}">
                        <i class="fas fa-fw fa-money nav-icon">
                        </i>
                        {{ trans('global.billing.menu') }}
                    </a>
                </li>
            @endif
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>