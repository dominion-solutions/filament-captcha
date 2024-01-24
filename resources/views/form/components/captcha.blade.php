<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}').defer }">
        <!-- Interact with the `state` property in Alpine.js -->
        @switch(config('filament-captcha.engine', 'mews'))
            @case('hcaptcha')
                {!! HCaptcha::display() !!}
                @break
            @case('mews')
            @default
                {!! Captcha::img() !!}
                @break
        @endswitch

        <x-filament::input
            :attributes="
                \Filament\Support\prepare_inherited_attributes($getExtraInputAttributeBag())
                    ->merge($extraAlpineAttributes, escape: false)
                    ->merge([
                        'x-model' => 'state',
                        'x-ref' => 'input',
                        'x-on:keydown.enter' => '$refs.input.dispatchEvent(new Event(\'change\'))',
                    ])
            "
            />
    </div>
</x-dynamic-component>
