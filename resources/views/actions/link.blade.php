<a
    @if ($isInternal() && $navigate) wire:navigate @endif
    {{ $attributes
        ->cssClass([
            'layer' => 'inline-flex shrink-0 cursor-pointer items-center hover:text-primary-400',
            'active' => 'text-primary-400 hover:text-primary-300',
        ])
        ->classMerge([
            'layer',
            'active' => $active || $isRoute() || $isRequest(),
        ])
        ->merge([
            'rel' => ! $isInternal() ? 'external noopener noreferrer' : '',
        ])
    }}
>
    {{ $slot }}
</a>
