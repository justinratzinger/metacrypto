@props(['cardHeader'])

<div class="card">
    <div {{ $attributes->class(['card-header h2 p-4']) }}>{{ $cardHeader }}</div>
    <div class="p-5 card-body">
        {{ $slot }}
    </div>
</div>

