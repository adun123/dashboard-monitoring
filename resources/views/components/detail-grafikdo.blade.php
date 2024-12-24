<div class="p-4 text-gray-900 flex-1 bg-white rounded-lg shadow-md">
    <!---detail grafik sensor-->
    <div class="flex items-center mb-6">
        <img src="{{asset('icons/thermometer.png')}}" alt="logo termometer" class="mr-2 w-6 h-6">
        <p class="mr-2 font-semibold"> Detail Grafik Sensor Do</p> 
        <img src="{{asset('icons/info-icon.png')}}" alt="logo infomarsi" class="mr-2 w-6 h-6">
    </div>

    <div class="flex items-center mb-5">
        <!---teks suhu corrent-->
        <div class="mr-10">
            <span class=" text-gray-800 text-sm"> Suhu corrent</span>
            <p class="text-xl font-bold">10°C</p>
        </div>
        <!---teks suhu averages-->
        <div class="">
            <span class=" text-gray-800 text-sm"> Suhu Average</span>
            <p class="text-xl font-bold">10°C</p>
        </div>
    </div>

    <!---grafik sensor-->
    <div class=" h-full w-full ">
        <canvas id="SensorDoChart" class="w-full h-full"></canvas>
    <div >
</div>




<!-- Script untuk Chart.js -->
<script>
    const ctx = document.getElementById('SensorDoChart').getContext('2d');

    const sensorChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['', '', '', '', '', '', '', '','','',''], // Data labels (sumbu X)
            datasets: [
                {
                    label: 'Current Sensor',
                    data: [10, 0, 21, 67, 30, 45, 55, 100,22,54,32,12], // Data untuk grafik
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna bayangan
                    borderWidth: 3,
                    fill: true, // Mengaktifkan bayangan di bawah garis
                    tension: 0.2, // Membuat garis lebih halus
                },
                {
                    label: 'Average Sensor',
                    data: [18, 45, 20, 34, 18, 17,21,13,51,11,21], // Data untuk average sensor
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