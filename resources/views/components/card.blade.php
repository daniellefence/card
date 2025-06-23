@props([
    'title' => '',
    'buttons' => '',
    'image' => ''
])

{{-- Main container --}}
<div {{ $attributes->merge(['class' => 'card']) }}>

    {{-- Optional image --}}
    @if ($image)
        <figure>
            <img src="{{ $image }}" alt="{{ $title }}" />
        </figure>
    @endif

    {{-- Body section --}}
    @if ($slot || $buttons)
        <div class="card-body">

            {{-- Title --}}
            @if ($title)
                <div class="card-title">
                    {{ $title }}
                </div>
            @endif

            {{-- Slot content --}}
            {{ $slot ?: '' }}

            {{-- Action buttons --}}
            @if ($buttons)
                <div class="card-actions justify-end">
                    {!! $buttons !!}
                </div>
            @endif

        </div>
    @endif

</div>