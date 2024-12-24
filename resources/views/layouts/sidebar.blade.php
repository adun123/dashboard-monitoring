<nav x-data="{ open: true }" class="bg-white border-b  border-gray-100">
    <!-- Sidebar Navigation Component -->
    <aside class="w-64 bg-white h-[calc(100vh-4rem)] sticky top-0 z-50left-0 border-r border-gray-100 overflow-y-auto transition-all duration-300"
           :class="{ 'w-16': open, 'w-64': !open }"> <!-- Sidebar fixed and not full screen -->
        <div class="flex items-center justify-between h-16 bg-white border-b border-gray-100 px-4">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                {{-- <x-application-logo class="h-9 w-auto fill-current text-gray-800" /> --}}
                <span :class="{ 'hidden': open, 'block': !open }" class="font-semibold text-lg text-gray-800">
                    {{ __('Dashboard Aqua Sigma') }}
                </span>
            </a>
            <!-- Toggle Button for Sidebar -->
            <button @click="open = !open" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div class="justify-between">
            <nav class="mt-5 space-y-4">
                <!-- Dashboard Link -->
                <a href="{{route('dashboard')}}" class="flex items-center space-x-3 px-4 py-2 transition-all duration-300" 
                    :class="{ 'justify-center': open, 'justify-start': !open }">
                    <img src="{{asset('icons/dashboard-icon.png')}}" class="w-5 h-5 shadow-md" alt="icon dashboard" >
                    <span  :class="{ 'hidden': open, 'block': !open }"  class="text-gray-800 text-sm">Dashboard</span>
                </a>

                <!-- Navigation for Analytics -->
                <a class="flex items-center space-x-3 px-4 py-2 transition-all duration-300"
                    :class="{ 'justify-center': open, 'justify-start': !open }">
                    <img src="{{asset('icons/icon-grafik.png')}}" class="w-5 h-5" alt="icon analytics">
                    <span :class="{ 'hidden': open, 'block': !open }" class="text-gray-800 text-sm">Analytics</span>
                </a>

                <!-- Navigation for Health Sensor -->
                <a href="{{route('health-sensor')}}" class="flex items-center space-x-3 px-4 py-2 transition-all duration-300"
                    :class="{ 'justify-center': open, 'justify-start': !open }">
                    <img src="{{asset('icons/health-sensor-icon.png')}}" class="w-5 h-5" alt="icon health sensor">
                    <span :class="{ 'hidden': open, 'block': !open }" class="text-gray-800 text-sm">Health Sensor</span>
                </a>

                <!-- Navigation for Location -->
                <a href="{{route('location')}}" class="flex items-center space-x-3 px-4 py-2 transition-all duration-300"
                    :class="{ 'justify-center': open, 'justify-start': !open }">
                    <img src="{{asset('icons/location-icon.png')}}" class="w-5 h-5" alt="icon location">
                    <span :class="{ 'hidden': open, 'block': !open }" class="text-gray-800 text-sm">Location</span>
                </a>

                <!-- Navigation for Settings -->
                <a href="{{route('setting')}}"  class="flex items-center space-x-3 px-4 py-2 transition-all duration-300"
                    :class="{ 'justify-center': open, 'justify-start': !open }">
                    <img src="{{asset('icons/setting.png')}}" class="w-5 h-5" alt="icon settings">
                    <span :class="{ 'hidden': open, 'block': !open }" class="text-gray-800 text-sm">Settings</span>
                </a>
            </nav>

            <!-- Log Out Section -->
            <div class="border-t border-gray-100 p-4 transition-all duration-300"
                :class="{ 'justify-center': open, 'justify-start': !open }">
                <div class="flex items-center space-x-3">
                    <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/300" alt="Profile Picture">
                    <div :class="{ 'hidden': open, 'block': !open }">
                        <div class="text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</nav>
