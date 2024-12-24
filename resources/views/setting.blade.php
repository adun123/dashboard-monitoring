<x-app-layout >

       <!-- resources/views/sensor/create.blade.php -->

    <form method="POST" action="{{ route('sensorscreate') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="sensor_id" :value="__('Sensor ID')" />
            <x-text-input id="sensor_id" class="block mt-1 w-full" type="text" name="sensor_id" :value="old('sensor_id')" required autofocus autocomplete="sensor_id" />
            <x-input-error :messages="$errors->get('sensor_id')" class="mt-2" />
        </div> 


        <div>
            <x-input-label for="ph" :value="__('pH Level')" />
            <x-text-input id="ph" class="block mt-1 w-full form-control" type="number" name="ph" :value="old('ph')" required autofocus autocomplete="ph" min="0" max="14" step="0.1" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="do" :value="__('Dissolved Oxygen (DO)')" />
            <x-text-input id="do" class="block mt-1 w-full form-control" type="number" name="do" :value="old('do')" required autofocus autocomplete="do" step="0.1" />
            <x-input-error :messages="$errors->get('do')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="temperature_surface" :value="__('temperature_surface')" />
            <x-text-input id="temperature_surface" class="block mt-1 w-full form-control" type="number" name="temperature_surface" :value="old('temperature_surface')" required autofocus autocomplete="temperature_surface" />
            <x-input-error :messages="$errors->get('temperature_surface')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="temperature_depth" :value="__('temperature_depth')" />
            <x-text-input id="temperature_depth" class="block mt-1 w-full form-control" type="number" name="temperature_depth" :value="old('temperature_depth')" required autofocus autocomplete="temperature_depth" />
            <x-input-error :messages="$errors->get('temperature_depth')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="location" :value="__('location')" />
            <x-text-input id="location" class="block mt-1 w-full " type="text" name="location" :value="old('location')" required autofocus autocomplete="location" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

       

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>



</x-app-layout>