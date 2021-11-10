<x-guest-layout>
    @section('content')

    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img
            aria-hidden="true"
            class="object-cover w-full h-full dark:hidden"
            src="{{ asset('img/forgot-password-office.jpeg') }}"
            alt="Office"
          />
          
          <img
            aria-hidden="true"
            class="hidden object-cover w-full h-full dark:block"
            src="{{ asset('img/forgot-password-office-dark.jpeg') }}"
            alt="Office"
          />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input
                        type="email" id="email" name="email" placeholder="Email" value="{{ old('email', $request->email) }}" required autofocus readonly
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Password"
                        name="password"
                        type="password"
                        required autocomplete="current-password"
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('Confirm Password') }}</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Confirm Password"
                        name="password_confirmation"
                        type="password"
                        id="password_confirmation"
                        required "
                    />
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button  class="block w-full px-4 py-2 mt-6 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
                    {{ __('Reset Password') }}
                </button>
            </form>
          </div>
        </div>
      </div>
    @endsection
</x-guest-layout>

