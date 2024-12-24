<body class="max-w-7xl mx-auto sm:px-6 lg:px-10 bg-gray-100 min-h-screen">

    <!-- Container untuk tabel -->
    <div class="w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-md">
        <!----Lokasi Anda--->
        <div class="flex items-center justify-between mb-6">
            <!----Lokasi Anda--->
            <div>
                <div class="font-bold text-xl text-">
                    Lokasi Anda
                </div>
                <div class="flex items-center">
                    <img src="{{asset('icons/location2-icon.png')}}" class="mr-2" alt="">
                    <p> Jl. Candi Roro Jonggrang no.2, Cakranegara Selatan Baru, Mataram</p>
                </div>
            </div>
            <!----Dropwodn Sensor---->
            <div class="w-full md:w-[230px]">
                @include('location_maps_sensor.dropdown-location-sensor')
            </div>
            
        </div>
        
        <!---Lokasi Sensor-->
        <div>
            <div class="font-bold text-xl ">
                Lokasi Sensor
            </div>
            <div class="flex items-center mb-6">
                <img src="{{asset('icons/location2-icon.png')}}" class="mr-2" alt="">
                <p> Tambak 3, Ki joko bandeng</p>
            </div>
        </div>

        <!---Googlemaps---->
        <div class="w-auto h-[420px] rounded-lg overflow-hidden">
            <iframe
                width="100%"
                height="100%"
                frameborder="0"
                style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=78CH+Q2Q, Margalaksana, Waduk Cirata, Kabupaten Bandung Barat, Jawa Barat 40558"
                allowfullscreen>
            </iframe>
        </div>
      
        
    </div>


</body>
<script>
    function changeSensor() {
        var selectedSensor = document.getElementById('sensorDropdown').value;
        var mapElement = document.getElementById('map');
        
        if (selectedSensor === 'sensor1') {
            mapElement.innerHTML = '<p class="text-center pt-5">Map for Sensor 1 Loading...</p>';
        } else if (selectedSensor === 'sensor2') {
            mapElement.innerHTML = '<p class="text-center pt-5">Map for Sensor 2 Loading...</p>';
        } else if (selectedSensor === 'sensor3') {
            mapElement.innerHTML = '<p class="text-center pt-5">Map for Sensor 3 Loading...</p>';
        }
    }
</script>