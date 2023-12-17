<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nama Lengkap') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Alamat Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('Nomor Handphone') }}" />
                <x-input id="phone" class="block w-full mt-1" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Alamat Lengkap') }}" />
                <x-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required autocomplete="username" />
            </div>
            
            <div class="mt-3">
                <x-label for="nationality" value="{{ __('Nationality') }}" />
                <select name="nationality" onchange='checkvalue(this.value)'> 
                    <option>Pilih kewarganegaraan</option>  
                    <option value="WNI_asli" {{ old('nationality') === 'WNI_asli' ? 'selected' : '' }}>WNI Asli</option>
                    <option value="WNI_keturunan" {{ old('nationality') === 'WNI_keturunan' ? 'selected' : '' }}>WNI Keturunan</option>
                    <option value="others" {{ old('nationality') === 'other' ? 'selected' : '' }}>Others</option>
                </select> 
            </div>
            
            <div id="otherNationalityContainer" class="w-1/3 mt-3"  style="display: none;">
                <x-label for="other_nationality" value="{{ __('Other Nationality') }}" />
                <x-input id="other_nationality" class="block w-full mt-1" type="text" name="other_nationality" :value="old('other_nationality')" required autocomplete="username"/>
            </div>

            <script>
                function checkvalue(val) {
                    var otherNationalityContainer = document.getElementById('otherNationalityContainer');
                    var otherNationalityInput = document.getElementById('other_nationality_input');

                    if (val === "others") {
                        otherNationalityContainer.style.display = 'block';
                        otherNationalityInput.style.display = 'block';
                    } else {
                        otherNationalityContainer.style.display = 'none';
                        otherNationalityInput.style.display = 'none';
                    }
                }
            </script>

            <div class="flex mt-4 space-x-4">
                <div class="w-1/2">
                    <x-label for="tempat_lahir" value="{{ __('Tempat Lahir') }}" />
                    <x-input id="tempat_lahir" class="block w-full mt-1" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required autocomplete="username" />
                </div>
                <div class="w-1/2 ml-2">
                    <x-label for="tanggal_lahir" value="{{ __('Tanggal Lahir') }}" />
                    <x-input id="tanggal_lahir" class="block w-full mt-1" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autocomplete="username" />
                </div>
            </div>
            <div class="flex mt-4 space-x-4">
                <div class="w-1/3">
                    <x-label for="gender" value="{{ __('Gender') }}" />
                    <select id="gender" name="gender" class="block w-full mt-1" required>
                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <x-label for="religion" value="{{ __('Religion') }}" />
                    <x-input id="religion" class="block w-full mt-1" type="text" name="religion" :value="old('religion')" required />
                </div>
                <div class="w-1/3">
                    <x-label for="status_menikah" value="{{ __('Status Menikah') }}" />
                    <select id="status_menikah" name="status_menikah" class="block w-full mt-1" required>
                        <option value="single" {{ old('status_menikah') === 'single' ? 'selected' : '' }}>Single</option>
                        <option value="married" {{ old('status_menikah') === 'married' ? 'selected' : '' }}>Married</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

    </x-authentication-card>
</x-guest-layout>
