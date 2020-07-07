<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            @if(Sentinel::getUser()->role_id == 4)
              <a class="dropdown-item" href="{{ URL::route('suppliers.show', [Sentinel::getUser()->id]) }}"><i class="fa fa-user fa-fw"></i> {{ trans('strings.user.profile') }}</a>
              <a class="dropdown-item" href="{{ URL::route('suppliers.edit', [Sentinel::getUser()->id]) }}"><i class="fa fa-gear fa-fw"></i> {{ trans('strings.user.settings') }}</a>
            @else
              <a class="dropdown-item" href="{{ URL::route('users.show', [Sentinel::getUser()->id]) }}"> <i class="fas fa-user fa-fw"></i> {{ trans('strings.user.profile') }}</a>
              <a class="dropdown-item" href="{{ URL::route('users.edit', [Sentinel::getUser()->id]) }}"> <i class="fas fa-cog fa-fw"></i> {{ trans('strings.user.settings') }}</a>
            @endif
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ URL::route('logout') }}"><i class="fas fa-sign-out-alt"></i> {{ trans('auth.title.logout') }}</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-flag fa-fw"></i> {{ \App::getLocale() == 'es' ? 'Esp' : 'Eng' }}</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                {{ \App::getLocale() == 'es' ? 'Eng' : 'Esp' }}
            </a>
        </div>
    </li>
</ul>
