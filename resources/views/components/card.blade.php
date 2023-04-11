<div class="card">
    @if( isset($title) || isset($options) )
    <div class="card-header">
        @isset($title)
        <div class="card-header-title">
            {{ $title }}
        </div>
        @endisset

        @isset($options)
        <div class="card-header-icon">
            {{ $options }}
        </div>
        @endisset
    </div>
    @endif

    @isset($image)
    <div class="card-image">
        {{ $image }}
    </div>
    @endisset

    <div class="card-content">
        {{ $slot }}
    </div>

    @isset($footer)
    <footer class="card-footer">
        {{ $footer }}
    </footer>
    @endisset
</div>
