@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $styles = null;
        $icon = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li class="{{ $isActive }}">
        <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
            {!! $icon !!}
            {{ $item->title }}
        </a>
        @if(!$originalItem->children->isEmpty())
            <ul class="submenu">
                @foreach($originalItem->children as $subItem)
                    @php
                        $isActive = null;
                        // Check if link is current
                        if(url($subItem->link()) == url()->current()){
                            $isActive = 'active';
                        }
                    @endphp
                    <li class="{{ $isActive }}">
                        <a href="{{ url($subItem->link()) }}" target="{{ $subItem->target }}">
                            {{$subItem->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
@guest
    <li>
        {{-- <a href="{{ route('login') }}">{{ __('Login') }}</a> --}}
        <a class="nav-link nav-link-mobile" style="cursor: pointer" data-toggle="modal" data-target="#loginModal" title="{{ __('Login') }}">
            <i class="fas fa-user-lock"></i> <span>{{ __('Login') }}</span>
        </a>
    </li>

    @if (Route::has('register'))
        <li>
            <a class="nav-link nav-link-mobile" style="cursor: pointer" data-toggle="modal" data-target="#registerModal" title="{{ __('Register') }}">
                <i class="fas fa-user-plus"></i> <span>{{ __('Register') }}</span>
            </a>
        </li>
    @endif
@else
    <li><a href="#">{{ Auth::user()->name }}</a>
        <ul class="submenu">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
@endguest

