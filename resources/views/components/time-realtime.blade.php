
<script>
    // Function to update the time every second
    function updateTime() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;
    }

    setInterval(updateTime, 1000);  // Update the time every second
    window.onload = updateTime;     // Set the initial time when the page loads
</script>
<script src="https://cdn.tailwindcss.com"></script>

<div class="">

<div class=" rounded-md flex flex-col items-center justify-center">
    <p class="text-lg font-semibold">Time</p>
    <p id="time" class="text-2xl font-mono mt-2"></p>
</div>

</div>


