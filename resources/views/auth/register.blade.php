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

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <div class="form-group mb-4">
                                <x-label for="name" :value="__('Name')" />
                                <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                            class="fas fa-user" aria-hidden="true"></i> </span>
                                    <x-input id="name" class="form-control" type="text" name="name"
                                        :value="old('name')" required autofocus />
                                </div>
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                class="fas fa-envelope" aria-hidden="true"></i> </span>
                            <x-input id="email" class="form-control" type="email" name="email"
                                :value="old('email')" required />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                class="fas fa-key" aria-hidden="true"></i> </span>
                            <x-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password" />
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                class="fas fa-key" aria-hidden="true"></i> </span>
                            <x-input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                    @include('include.footer')
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
