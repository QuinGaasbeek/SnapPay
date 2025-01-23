<x-app-layout>
    <div id="app" class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC]">
        <x-dashboard-navigation />
        <x-mobile-dashboard-navigation />

        <!-- Page Content -->
        <main class="pt-16 pb-16 md:pb-0">
            <dashboard :user="{{ json_encode(auth()->user()) }}" :stats="{{ json_encode($stats) }}"></dashboard>
        </main>
    </div>

</x-app-layout>
