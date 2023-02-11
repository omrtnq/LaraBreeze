<x-guest-layout>
    <form method="POST" action="{{ route('register.artist') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Contact Number -->
        <div>
            <x-input-label for="contact_number" :value="__('Contact Number')" />
            <x-text-input id="contact_number" class="block mt-1 w-full" type="text" name="contact_number" :value="old('contact_number')" required autofocus autocomplete="contact_number" />
            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="pass" :value="__('Password')" />

            <x-text-input id="pass" class="block mt-1 w-full"
                            type="password"
                            name="pass"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('pass')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="pass_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="pass_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="pass_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('pass_confirmation')" class="mt-2" />
        </div>

        <!-- Street Address -->
        <div class="mt-4">
            <x-input-label for="street_address" :value="__('street_address')" />
            <x-text-input id="street_address" class="block mt-1 w-full" type="street_address" name="street_address" :value="old('street_address')" required autocomplete="street_address" />
            <x-input-error :messages="$errors->get('street_address')" class="mt-2" />
        </div>

         <!-- District -->
         <div class="mt-4">
            <x-input-label for="district" :value="__('district')" />
            <x-text-input id="district" class="block mt-1 w-full" type="district" name="district" :value="old('district')" required autocomplete="district" />
            <x-input-error :messages="$errors->get('district')" class="mt-2" />
        </div>

        <!-- barangay -->
        <div class="mt-4">
            <x-input-label for="barangay" :value="__('barangay')" />
            <x-text-input id="barangay" class="block mt-1 w-full" type="barangay" name="barangay" :value="old('barangay')" required autocomplete="barangay" />
            <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
        </div>

        <!-- city -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('city')" />
            <x-text-input id="city" class="block mt-1 w-full" type="city" name="city" :value="old('city')" required autocomplete="city" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <!-- province -->
        <div class="mt-4">
            <x-input-label for="province" :value="__('province')" />
            <x-text-input id="province" class="block mt-1 w-full" type="province" name="province" :value="old('province')" required autocomplete="province" />
            <x-input-error :messages="$errors->get('province')" class="mt-2" />
        </div>

        <!-- postal_code -->
        <div class="mt-4">
            <x-input-label for="postal_code" :value="__('postal_code')" />
            <x-text-input id="postal_code" class="block mt-1 w-full" type="postal_code" name="postal_code" :value="old('postal_code')" required autocomplete="postal_code" />
            <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register as Artist') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
