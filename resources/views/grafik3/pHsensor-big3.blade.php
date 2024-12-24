<section>
    <div class="">

        <!-- Container utama dengan ukuran w-526 h-345 -->
        
        <a href="{{route('/detail-sensordo')}}">
    
            <!-- Bagian atas: Sensor Ph dan Status -->
            <div class="flex justify-between items-center mb-4">
                <!-- Sensor Ph -->
                <p class="text-lg font-semibold text-gray-900">ph  Sensor</p>
    
                <!-- Status Online/Offline -->
                <div class="w-[54px] h-[21px] bg-green-500 text-white flex items-center justify-center rounded-md text-sm">
                    Active
                </div>
            </div>
            
            <!-- Bagian Tengah: Grafik Gelombang dan Info Sensor -->
            <div class="flex space-x-4  rounded-md p-4 ">
                <!-- Grafik Gelombang -->
                <div class="flex-1 flex items-center justify-center">
                    <!-- Canvas untuk grafik -->
                    <canvas id="sensorChart" class="h-full w-full"></canvas>
                </div>
    
                <!-- Garis Pemisah yang lebih panjang -->
                <div class="border-l border-gray-300 h-[200px]"></div>
    
                <!-- Info Current dan Average Sensor -->
                <div class="flex flex-col space-y-6 justify-between">
                    <!-- Current Sensor -->
                    <div class="text-center">
                        <p class="text-gray-900 font-medium">Current Sensor</p>
                        <p class="text-xl font-semibold text-gray-700">10°C</p>
                    </div>
    
                    <!-- Garis Horizontal -->
                    <div class="border-t border-gray-300"></div>
    
                    <!-- Average Sensor -->
                    <div class="text-center">
                        <p class="text-gray-900 font-medium">Average Sensor</p>
                        <p class="text-xl font-semibold text-gray-700">19°C</p>
                    </div>
                </div>
            </div>
    
        </a>
    
        <!-- Script untuk Chart.js -->
        <script>
            const ctx = document.getElementById('sensorChart').getContext('2d');
    
            const sensorChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['', '', '', '', '', ''], // Data labels (sumbu X)
                    datasets: [
                        {
                            label: 'pH Sensor',
                            data: [10, 0, 21, 67, 30, 45, 55, 100], // Data untuk grafik
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna bayangan
                            borderWidth: 3,
                            fill: true, // Mengaktifkan bayangan di bawah garis
                            tension: 0.2, // Membuat garis lebih halus
                        },
                        {
                            label: 'Average Sensor',
                            data: [18, 45, 20, 34, 18, 17], // Data untuk average sensor
                            borderColor: 'rgba(153, 102, 255, 1)',
                            backgroundColor: 'rgba(153, 102, 255, 0.2)', // Warna bayangan di bawah garis
                            borderWidth: 2,
                            fill: true, // Mengaktifkan bayangan di bawah garis
                            tension: 0.4 // Membuat garis lebih halus
                        }
                    ]
                },
                options: {
                    scales: {
                        x: {
                            grid: {
                                display: false // Menyembunyikan gridlines pada sumbu X
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: false // Menyembunyikan gridlines pada sumbu Y
                            }
                        }
                    },
                    elements: {
                        line: {
                            borderWidth: 3, // Ukuran tebal garis
                            borderColor: 'blue', // Warna garis utama
                            backgroundColor: 'rgba(0, 0, 255, 0.2)' // Warna bayangan di bawah garis
                        }
                    }
                }
            });
    
        </script>
    
    
    </div>
</section>


