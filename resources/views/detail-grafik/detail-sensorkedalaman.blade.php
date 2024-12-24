<x-app-layout >
    
    <div class="max-w-7xl mx-auto ml-15 sm:px-6 lg:px-10">
        <h1 class="mt-2 p-6 font-semibold text-xl">
            Detail Sensor Kedalaman
        </h1>
        <div class="p-6 text-gray-900 flex-1">
            @include('components.detail-grafikkedalaman')
        </div>
        <!--grafik kadar baik dan kadar buruk--->
    </div>

    <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
        <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
            @include('grafik.sensorkedalaman-high')
        </div>
        <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
            @include('grafik.sensorkedalaman-low')
        </div>
    </div>
    <div >
        @include('table.sensor-kedalaman-table')
    </div> 
</x-app-layout>