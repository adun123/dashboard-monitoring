<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aqua Sigma') }}
        </h2>
    </x-slot> --}}

    <div class="max-w-7xl mx-auto ml-15 sm:px-6 lg:px-10"> <!-- Mengatur kontainer utama -->
        <h1 class="mt-2 font-semibold text-xl">
            Sensor 3
        </h1>
        <!-- Flexbox responsif yang menyusun secara horizontal pada layar besar, dan vertikal pada layar kecil -->
        <div class="flex flex-col md:flex-row mt-5  justify-between gap-6"> <!-- gap-6 untuk menjaga jarak yang rapi antar elemen -->
            <!-- Google Maps -->
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('components3.location-sensor3')
            </div>
            <!-- Informasi Sensor -->
            <div class="flex flex-col justify-between space-y-6 flex-1">
                <!-- Time Realtime Sensor -->
                <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                    @include('components3.time-realtime3')
                </div>
                <!-- Status Sensor Realtime -->
                <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                    @include('components3.status-sensor3')
                </div>
                <!-- Alarm Sensor Realtime -->
                <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                    @include('components3.alarm-sensor3')
                </div>
            </div>
            <!-- Dropdown Sensor -->
            <div class="">
                @include('components.dropdown-sensor')
            </div>
        </div>

        <!-- Bagian Grafik -->
        <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
            <!-- Grafik pH Sensor -->
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.phsensor-small3')
            </div>
            <!-- Grafik DO Sensor -->
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.dosensor-small3')
            </div>
            <!-- Grafik Suhu Kedalaman -->
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.suhukedalaman-small3')
            </div>
            <!-- Grafik Suhu Permukaan -->
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.suhupermukaan-small3')
            </div>
        </div>

        <!-- Grafik DO dan pH besar -->
        <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.dosensor-big3')
            </div>
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik3.pHsensor-big3')
            </div>
        </div>
        
        <!-- Grafik Suhu Kedalaman dan DO besar -->
        <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik2.suhukedalaman-big2')
            </div>
            <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
                @include('grafik2.suhupermukaan-big2')
            </div>
        </div> 

        <!-- Tabel Data Grafik -->
        {{-- <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md mt-6">
            @include('table.table-data-grafik')
        </div>    --}}
    </div>
</x-app-layout>
