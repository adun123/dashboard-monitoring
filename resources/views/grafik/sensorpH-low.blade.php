<section>
    <div class="">
        <!-- Container utama dengan ukuran w-526 h-345 -->
        <div class="h-[200px]">
    
            <!-- Bagian atas: Sensor Ph dan Status -->
            <div class="flex justify-between items-center mb-4">
                <!-- Sensor Ph -->
                <p class="text-lg font-semibold text-gray-900">Low Grafik Sensor</p>
            </div>
            
            <!-- Bagian Tengah: Grafik Gelombang dan Info Sensor -->
            <div class="flex space-x-4  rounded-md p-4 ">
                <!-- Grafik Gelombang -->
                <div class="flex-1 flex items-center justify-center">
                    <!-- Canvas untuk grafik -->
                    <canvas id="sensorChartHigh" class="h-full w-full"></canvas>
                </div>
    
            </div>
    
        </div>
    
        <!-- Script untuk Chart.js -->
        <script>
            const ctx = document.getElementById('sensorChartHigh').getContext('2d');
    
            const sensorChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['07:00', '08.00', '09:00', '10:00', '11:00', '', ''], // Data labels (sumbu X)
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
    
        </script
    
    
    </div>
</section>


