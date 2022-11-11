<x-guest-layout>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
          
               
       
    

        <!-- Session Status -->
      
 
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <a class="text-center" href="{{ route('dashboard') }}">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                            <h1 class="mb-0 h3">Sign in to our platform</h1>
                        </div>

                        <x-auth-session-status class="mb-4 " :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div class="form-group mb-4">
                                <x-label for="email" :value="__('Email')" />
                                <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                            class="fas fa-envelope" aria-hidden="true"></i> </span>
                                    <x-input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <div class="form-group mb-4">
                                    <x-label for="password" :value="__('Password')" />
                                    <div class="input-group"><span class="input-group-text" id="basic-addon2"> <i
                                                class="fas fa-lock-alt"></i> </span>
                                        <x-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                    </div>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                        @include('include.footer')
                    </div>
                  
                </div>
            </div>

</section>
</x-guest-layout>
