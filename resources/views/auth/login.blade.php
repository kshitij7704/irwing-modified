@extends('layoutsAuth.app')

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="index.html" class="app-brand auth-cover-brand">
    <!-- (keep existing SVG logo here) -->
  </a>
  <!-- /Logo -->

      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-6">
                <a href="index.html" class="app-brand-link">
                  <span class="app-brand-logo demo">
                    <span class="text-primary">
                      <!-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                          fill="currentColor" />
                        <path
                          opacity="0.06"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                          fill="#161616" />
                        <path
                          opacity="0.06"
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                          fill="#161616" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                          fill="currentColor" />
                      </svg> -->
                    </span>
                  </span>
                  <!-- <span class="app-brand-text demo text-heading fw-bold">Vuexy</span> -->
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1">Welcome to IR WING! </h4>
              <p class="mb-6">Please sign-in to your account</p>

        <!-- Jetstream Validation Errors -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @if (session('status'))
          <div class="alert alert-success text-sm mb-4">
            {{ session('status') }}
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
          </div>

          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
              <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
              <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-4">
            <div class="form-check mb-0">
              <input class="form-check-input" type="checkbox" id="remember_me" name="remember" />
              <label class="form-check-label" for="remember_me">Remember me</label>
            </div>

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
          </div>

          <button class="btn btn-primary d-grid w-100">Log in</button>
        </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p>

              <div class="divider my-6">
                <div class="divider-text">or</div>
              </div>

              <div class="d-flex justify-content-center">
                
                  <button class="btn btn-success d-grid w-100">Login with Parichay</button>
              </div>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
    </div>
    </div>
    <!-- /Login Form -->
  </div>
</div>
@endsection
