<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{ route('welcome') }}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('capital_amigo') }}/img/logo.png">
            </div>
        </a>
        <a href="{{ route('welcome') }}" class="simple-text logo-normal">
            {{ __('Capital Amigo') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'about' ? 'active' : '' }}">
                <a href="{{ route('about.show', 1) }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __('Acerca de') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'project' || $elementActive == 'grid_project' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#proyectos">
                    <i class="nc-icon nc-diamond"></i>
                    <p>
                        {{ __('Proyectos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="proyectos">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'project' ? 'active' : '' }}">
                            <a href="{{ route('project.show', 1) }}">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Texto') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'grid_project' ? 'active' : '' }}">
                            <a href="{{ route('grid_projects.index') }}">
                                <span class="sidebar-mini-icon">{{ __('I') }}</span>
                                <span class="sidebar-normal">{{ __(' Imágenes') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--<li class="{{ $elementActive == 'socios' ? 'active' : '' }}">
                <a href="{{ route('socios.index') }}">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>{{ __('Socios') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'teams' ? 'active' : '' }}">
                <a href="{{ route('teams.index') }}">
                    <i class="nc-icon nc-chat-33"></i>
                    <p>{{ __('Equipo') }}</p>
                </a>
            </li>--}}
            <li class="{{ $elementActive == 'contact' ? 'active' : '' }}">
                <a href="{{ route('contact.show', 1) }}">
                    <i class="nc-icon nc-send"></i>
                    <p>{{ __('Contacto') }}</p>
                </a>
            </li>
            {{--<li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('PU') }}</span>
                                <span class="sidebar-normal">{{ __(' Perfil de usuario') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}">
                                <span class="sidebar-mini-icon">{{ __('AU') }}</span>
                                <span class="sidebar-normal">{{ __(' Administrar usuarios ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>--}}
            {{--<li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>--}}
        </ul>
    </div>
</div>
