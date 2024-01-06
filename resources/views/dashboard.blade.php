<x-app-layout>
    <x-slot name="header">
        <x-header>
            {{ __('Vote for a question') }}
        </x-header>
    </x-slot>

    <x-container>
        {{-- Listagem  --}}
        <div class="dark:text-gray-400 uppercase font-bold mb-1 mt-1">List of Questions</div>

        <div class="dark:text-gray-400">
            @foreach($questions as $item)
                <x-question :question="$item" />
            @endforeach
        </div>

    </x-container>

</x-app-layout>
