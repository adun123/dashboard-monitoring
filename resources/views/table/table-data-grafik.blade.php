
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Container untuk tabel -->
    <div class="w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-md">
        
        <!-- Tabel -->
        <table class="min-w-full table-auto">
            <!-- Header Tabel -->
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Time</th>
                    <th class="px-4 py-2 text-left">pH Sensor</th>
                    <th class="px-4 py-2 text-left">DO Sensor</th>
                    <th class="px-4 py-2 text-left">Suhu K</th>
                    <th class="px-4 py-2 text-left">Suhu P</th>
                    <th class="px-4 py-2 text-left">Status Sensor</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris Tabel -->
                <tr class="bg-white border-b">
                    <td class="px-4 py-2">12:30 PM</td>
                    <td class="px-4 py-2">7.2</td>
                    <td class="px-4 py-2">8.1</td>
                    <td class="px-4 py-2">22°C</td>
                    <td class="px-4 py-2">25°C</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 text-sm bg-green-500 text-white rounded">Online</span>
                    </td>
                    <td class="px-4 py-2">
                        <!-- Dropdown action -->
                        <div class="relative inline-block text-left">
                            <button class="inline-flex justify-center w-full rounded-md px-2 py-1 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                ⋮
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="dropdown-menu">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Hapus</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Simpan</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Baris contoh lainnya -->
                <tr class="bg-white border-b">
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">7.0</td>
                    <td class="px-4 py-2">7.9</td>
                    <td class="px-4 py-2">21°C</td>
                    <td class="px-4 py-2">24°C</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 text-sm bg-red-500 text-white rounded">Offline</span>
                    </td>
                    <td class="px-4 py-2">
                        <!-- Dropdown action -->
                        <div class="relative inline-block text-left">
                            <button class="inline-flex justify-center w-full rounded-md px-2 py-1 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none" id="menu-button-2" aria-expanded="true" aria-haspopup="true">
                                ⋮
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="dropdown-menu-2">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-2">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Hapus</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Simpan</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Toggle dropdown
        document.querySelectorAll('button[id^="menu-button"]').forEach((button) => {
            button.addEventListener('click', function() {
                const menuId = this.id.replace('menu-button', 'dropdown-menu');
                const menu = document.getElementById(menuId);
                menu.classList.toggle('hidden');
            });
        });
    </script>

</body>

