<div class="w-[330px] h-[190px] bg-white rounded-lg shadow-md p-4 relative">
    <!-- Icon and Location Name -->
    <div class="flex items-center mb-10">
        <svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.134 2 5 5.134 5 9c0 6 7 13 7 13s7-7 7-13c0-3.866-3.134-7-7-7z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11a2 2 0 110-4 2 2 0 010 4z"></path>
        </svg>
        <span class="text-gray-700 font-semibold">Sensor 1, Tambak lele</span>
    </div>

    <!-- Status and Alarm Info -->
    <div class="flex justify-between mt-20">
        <!-- Alarm Status -->
        <div class="flex items-center">
            <span class="w-2 h-2 rounded-full bg-purple-600 mr-2"></span>
            <div>
                <p class="text-gray-500 text-sm font-medium">Alarm</p>
                <p class="text-black font font-bold">Aman</p>
            </div>
        </div>

        <!-- Sensor Status -->
        <div class="flex items-center">
            <span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>
            <div>
                <p class="text-gray-500 text-sm font-medium">Status Sensor</p>
                <p class="text-black font-bold">ONLINE</p>
            </div>
        </div>
    </div>

    <!-- Top Right Icons -->
    <div class="absolute top-2 right-2 flex space-x-2 text-gray-400">
        <button class="p-1 rounded-md hover:bg-gray-100">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.707 10.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-8-8a1 1 0 011.414-1.414L9 16.586V3a1 1 0 112 0v13.586l7.293-7.293a1 1 0 011.414 0z"></path>
            </svg>
        </button>
        <button class="p-1 rounded-md hover:bg-gray-100">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 3a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4zm12 12H4V5h12v10zm-9-1a1 1 0 100-2 1 1 0 000 2zm4 0a1 1 0 100-2 1 1 0 000 2z"></path>
            </svg>
        </button>
    </div>
</div>