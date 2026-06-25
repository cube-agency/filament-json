<x-filament::fieldset>
    <x-slot name="label">
        {{ $getLabel() }}
    </x-slot>

    {{ $getChildSchema() }}
</x-filament::fieldset>
