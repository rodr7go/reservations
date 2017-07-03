<div id="breadcrumb">
    @foreach($breadCrumbs as $key => $breadCrumb)
        @if ($breadCrumb == end($breadCrumbs))
                <a href="#!"><strong>{{ $key }}</strong></a>
        @else
                <a href="{{ route($breadCrumb) }}" class="tip-bottom" data-original-title="Ir a {{ $key }}"> {{ $key }} > </a>
        @endif
    @endforeach
</div>