<body >
    <!-- Container untuk tabel -->
    <div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md mt-6">
        

      
        <!-- Tabel -->
        <table class="min-w-full table-auto text-sm sm:text-base">
            <p class="mr-2 mb-2 font-semibold text-sm"> TABEL SENSOR SKIBIDI REALTIME</p>
            <!-- Header Tabel -->
            <thead>
                <tr >
                    <th class=" text-left">Date</th>
                    <th class=" text-left">Time</th>
                    <th class=" text-left">DO Sensor</th>
                    <th class=" text-left">Status Sensor</th>
                    <th class=" text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris Tabel -->
                <tr class="bg-white border-b text-sm">
                    <td class="">22/21/2024</td>
                    <td class="">12:30 PM</td>
                    <td class="">8.1</td>
                    <td class="">Aman</td>
                    <td class="">
                        <!-- Dropdown action -->
                        <div class="relative inline-block text-left">
                            <button class="inline-flex justify-center w-full rounded-md px-2 py-1 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                ⋮
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="dropdown-menu">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Hapus</a>
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Simpan</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Baris contoh lainnya -->
                <tr class="bg-white border-b text-sm">
                    <td class="">11/11/2025</td>
                    <td class="">1:00 PM</td>
                    <td class="">2.0</td>
                    <td class="">Aman</td>
                   
                    
                    <td class="">
                        <!-- Dropdown action -->
                        <div class="relative inline-block text-left">
                            <button class="inline-flex justify-center w-full rounded-md px-2 py-1 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none" id="menu-button-2" aria-expanded="true" aria-haspopup="true">
                                ⋮
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="dropdown-menu-2">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-2">
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Hapus</a>
                                    <a href="#" class="block  text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Simpan</a>
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

<script>
    // Fungsi untuk memuat data sensor dari server
        function loadSensorData() {
            fetch('/sensor-data')
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector('table tbody');
                    tbody.innerHTML = ''; // Kosongkan isi tabel sebelum diisi ulang
        
                    // Iterasi data dan tambahkan ke dalam tabel
                    data.forEach(sensor => {
                        const row = document.createElement('tr');
                        row.classList.add('bg-white', 'border-b', 'text-sm');
                        
                        row.innerHTML = `
                            <td>${new Date(sensor.created_at).toLocaleDateString()}</td>
                            <td>${new Date(sensor.created_at).toLocaleTimeString()}</td>
                            <td>${sensor.do}</td>
                            <td>${sensor.do >= 7.5 ? 'Aman' : 'Waspada'}</td>
                            <td>
                                <div class="relative inline-block text-left">
                                    <button class="inline-flex justify-center w-full rounded-md px-2 py-1 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none" onclick="toggleDropdown(this)">
                                        ⋮
                                    </button>
                                    <div class="origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                        <div class="py-1">
                                            <a href="#" class="block text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                            <a href="#" class="block text-sm text-gray-700 hover:bg-gray-100">Hapus</a>
                                            <a href="#" class="block text-sm text-gray-700 hover:bg-gray-100">Simpan</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        `;
                        
                        tbody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error:', error));
        }
        
        // Panggil fungsi loadSensorData setiap beberapa detik
        setInterval(loadSensorData, 5000); // Update setiap 5 detik
        
        // Fungsi untuk toggle dropdown
        function toggleDropdown(button) {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        }
        
        // Panggilan pertama untuk memuat data saat halaman dimuat
        loadSensorData();
    </script>
    

</body>
