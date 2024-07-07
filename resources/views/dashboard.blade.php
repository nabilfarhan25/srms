<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @auth
                    @if (Auth::user()->isAdmin())
                    <h1>Welcome, Administrator!</h1>
                    @elseif (Auth::user()->isInspector())
                    <h1>Welcome, Inspector!</h1>
                    @else
                    <h1>Welcome, User!</h1>
                    @endif
                    @else
                    <h1>Welcome, Guest!</h1>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>