<div class="w-full md:w-[230px]">
     
    <select id="sensor-dropdown-sensor" class="w-full p-2.5 border border-gray-300 rounded-md text-gray-700 bg-white text-sm md:text-base lg:text-lg focus:ring-blue-500 focus:border-blue-500 form-select" onchange="location.href=this.value;">
        <option value="{{ route('location', 'sensor1') }}" {{ request()->routeIs('location') ? 'selected' : '' }}>Sensor 1</option>
        <option value="{{ route('location-sensor2', 'sensor2') }}" {{ request()->routeIs('location-sensor2') ? 'selected' : '' }}>Sensor 2</option>
        <option value="{{ route('location-sensor3', 'sensor3') }}" {{ request()->routeIs('location-sensor3') ? 'selected' : '' }}>Sensor 3</option>
    </select>
</div>
