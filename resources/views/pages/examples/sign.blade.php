<x-guest-layout>

    @slot('slot')
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">

                <div class="row justify-content-center form-bg-image"
                    data-background-lg="{{ asset('assets/img/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to our platform</h1>
                            </div>
                            <form action="#" class="mt-4">
                                <div class="form-group mb-4"><label for="email">Your Email</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1"> <i
                                                class="fas fa-envelope" aria-hidden="true"></i> </span><input type="email"
                                            class="form-control" placeholder="example@company.com" id="email" autofocus
                                            required></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group mb-4"><label for="password">Your Password</label>
                                        <div class="input-group"><span class="input-group-text" id="basic-addon2"> <i
                                                    class="fas fa-lock-alt"></i> </span><input type="password"
                                                placeholder="Password" class="form-control" id="password" required></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                                value="" id="remember">
                                            <label class="form-check-label mb-0" for="remember">Remember me</label>
                                        </div>
                                        <div><a href="./forgot-password.html" class="small text-right">Lost password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid"><button type="submit" class="btn btn-gray-800">Sign in</button></div>
                            </form>

                        </div>
                    </div>
                </div>
        </section>
    @endslot
</x-guest-layout>
