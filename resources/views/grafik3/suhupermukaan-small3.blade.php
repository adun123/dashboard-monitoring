<!-- Tambahkan link CDN untuk Chart.js dan Chart.js Gauge plugin -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-gauge@0.2.0/dist/chartjs-gauge.min.js"></script>

<section>
    <div>
        <div class="font-semibold text-lg text-gray-800 mb-4">
            Performance
        </div>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <span class="inline-block w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                <span class="text-gray-600 text-sm">Suhu Permukaan Sensor 3</span>
            </div>
            <div>
                <button class="text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded">
                    Today
                    <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex justify-center mb-6">
            <!-- Canvas untuk Gauge Chart -->
            <div class="w-24 h-24 mb-6 flex items-center justify-center">
                <canvas id="gaugeChart" width="200" height="200"></canvas>
            </div>
        </div>
        <div class="text-center text-gray-800">
            <span class="font-semibold text-lg">Suhu Permukaan</span>
            <span class="text-2xl font-bold">10°C</span>
        </div>
    </div>
</section>

<script>
    // Inisialisasi gauge chart menggunakan Chart.js
    const ctx = document.getElementById('gaugeChart').getContext('2d');
    const gaugeChart = new Chart(ctx, {
        type: 'gauge',
        data: {
            datasets: [{
                value: 95.91, // Nilai persentase (bisa diubah sesuai kebutuhan)
                minValue: 0,
                data: [0, 50, 100], // Range values (0 to 100)
                backgroundColor: ['#FF6347', '#FFA500', '#ad6c7f'], // Warna gradien
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Network Availability Rate'
            },
            layout: {
                padding: {
                    bottom: 20
                }
            },
            needle: {
                radiusPercentage: 2,
                widthPercentage: 3.2,
                lengthPercentage: 80,
                color: '#333'
            },
            valueLabel: {
                display: true,
                formatter: (value) => `${value.toFixed(2)} %`,
                color: '#333',
                fontSize: 18
            }
        }
    });
</script>
