
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            @foreach ($links as $linkName => $route)
                @if ($route == null)
                    <li class="breadcrumb-item">
                        {{ $linkName }}
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $route }}">{{ $linkName }}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</div>
{{-- @yield('breadcrumb-right') --}}

