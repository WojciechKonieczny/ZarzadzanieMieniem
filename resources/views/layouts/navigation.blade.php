<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <x-application-logo width=32 height=32/>
        Title
      </a>
      <button class="navbar-toggler" type="button" 
          data-bs-toggle="collapse" data-bs-target="#navbar" 
          aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              Dashboard
          </x-nav-link>
        @can('manufacturers.index')
        <li class="nav-item">         
          <x-nav-link :href="route('manufacturers.index')" :active="request()->routeIs('manufacturers.index')">
            {{ __('translations.manufacturers.title') }}
          </x-nav-link>
        </li> 
        @endcan
        @can('manufacturers.index')
        <li class="nav-item">         
          <x-nav-link :href="route('models.index')" :active="request()->routeIs('models.index')">
            {{ __('translations.models_or_names.title') }}
          </x-nav-link>
        </li> 
        @endcan
        </li>            
        @can('log-viewer.index') 
        <li class="nav-item">
          <x-nav-link :href="route('log-viewer::dashboard')">
              {{ __('translations.menu.log-viewer') }}
          </x-nav-link>
        </li>             
        @endcan        
        <li class="nav-item">
          <x-nav-link class="disabled" aria-disabled="true">
              Disabled
          </x-nav-link>
        </li>
      </ul>
      <div class="navbar-nav dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="profile" 
            data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{url('/images/avatars/blank.png')}}" alt="USER_NAME" width="32" height="32" class="rounded-circle"/>
          {{ Auth::user()->email }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="profile">
          <li><a class="dropdown-item disabled" href="#" aria-disabled="true">Settings</a></li>
          <li><a class="dropdown-item disabled" href="#" aria-disabled="true">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Log out') }}</a></li>
        </ul>
        </div>        
      </div>
    </div>
  </nav>