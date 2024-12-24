<x-app-layout>

    <div class="ax-w-7xl mx-auto ml-15 sm:px-6 lg:px-10">

        <h1 class="mt-2 font-semibold text-xl">
            Health Sensor
        </h1>
        <div class="flex flex-col md:flex-row mt-5  justify-between gap-6">
            <div class="p-4 text-gray-900 flex-1">
                @include('component-status-sensor.health-sensor1')
            </div>
            <div class="p-4 text-gray-900 flex-1">
                @include('component-status-sensor.health-sensor2')
            </div>
            <div class="p-4 text-gray-900 flex-1">
                @include('component-status-sensor.health-sensor2')
            </div>
        </div>
        
    </div>
</x-app-layout>