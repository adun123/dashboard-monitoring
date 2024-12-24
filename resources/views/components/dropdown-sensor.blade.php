<section>
    <div class="">
        <div class="w-[120px] h-10 mx-auto">
            <select id="sensor-dropdown" class="w-full p-2.5 border border-gray-300 rounded-md text-gray-700 bg-white text-sm md:text-base lg:text-lg focus:ring-blue-500 focus:border-blue-500" onchange="location.href=this.value;">
                <option value="{{ route('dashboard', 'sensor1') }}" {{ request()->routeIs('dashboard') ? 'selected' : '' }}>Sensor 1</option>
                <option value="{{ route('dashboard-sensor2', 'sensor2') }}" {{ request()->routeIs('dashboard-sensor2') ? 'selected' : '' }}>Sensor 2</option>
                <option value="{{ route('dashboard-sensor3', 'sensor3') }}" {{ request()->routeIs('dashboard-sensor3') ? 'selected' : '' }}>Sensor 3</option>
            </select>
        </div>
    </div>
</section>
