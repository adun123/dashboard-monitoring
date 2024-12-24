<x-app-layout >

    <div class="max-w-7xl mx-auto ml-15 sm:px-6 lg:px-10">

        <div class="p-6 text-gray-900 flex-1">
            @include('components.detail-grafikdo')
        </div>
        <!--grafik kadar baik dan kadar buruk--->
    </div>

    <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
        <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
            @include('grafik.sensordo-high')
        </div>
        <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
            @include('grafik.sensordo-high')
        </div>
    </div>
    <div >
        @include('table.sensordo-table')
    </div> 
    
        
   
    


 
</x-app-layout>