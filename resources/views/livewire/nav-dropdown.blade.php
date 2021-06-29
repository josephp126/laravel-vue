<li class="{{$this->isActive}} nav-item dropdown">
    <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">
        {{$title}}
    </a>
    <ul class="dropdown-menu">
        @foreach($navItems as $href => $navProps)
            <livewire:nav-dropdown-item
                :label="$navProps['label']"
                :image="$navProps['image'] ?? false"
                :href="$href"
            />
        @endforeach
    </ul>
</li>
