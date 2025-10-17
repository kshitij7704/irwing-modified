
@extends('layoutsAuth.app')

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="index.html" class="app-brand auth-cover-brand">
    <span class="app-brand-logo demo">
      <span class="text-primary">
        <!-- SVG logo code (unchanged) -->
      </span>
    </span>
    <span class="app-brand-text demo text-heading fw-bold">Vuexy</span>
  </a>
  <!-- /Logo -->

  <div class="authentication-inner row m-0">
    <!-- Left Illustration -->
    <div class="d-none d-xl-flex col-xl-8 p-0">
      <div class="auth-cover-bg d-flex justify-content-center align-items-center">
        <img src="{{ asset('backend/assets/img/illustrations/auth-register-illustration-light.png') }}" alt="auth-register-cover" class="my-5 auth-illustration" />
        <img src="{{ asset('backend/assets/img/illustrations/bg-shape-image-light.png') }}" alt="auth-register-cover" class="platform-bg" />
      </div>
    </div>
    <!-- /Left Illustration -->

    <!-- Register -->
    <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        <h4 class="mb-1">Adventure starts here 🚀</h4>
        <p class="mb-6">Make your app management easy and fun!</p>

        <!-- Display Validation Errors -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="mb-4">
            <label for="name" class="form-label">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
          </div>

          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
          </div>

          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
              <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
              <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
          </div>

          <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <div class="input-group input-group-merge">
              <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
              <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
          </div>

          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mb-4 form-check ms-2">
              <input class="form-check-input" type="checkbox" name="terms" id="terms" required />
              <label class="form-check-label" for="terms">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">Terms of Service</a>',
                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">Privacy Policy</a>',
                ]) !!}
              </label>
            </div>
          @endif

          <button type="submit" class="btn btn-primary d-grid w-100">Register</button>
        </form>

        <p class="text-center mt-3">
          Already have an account?
          <a href="{{ route('login') }}">Sign in instead</a>
        </p>

        <div class="divider my-6">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-icon rounded-circle btn-text-facebook me-1_5">
            <i class="icon-base ti tabler-brand-facebook-filled icon-20px"></i>
          </a>
          <a href="#" class="btn btn-icon rounded-circle btn-text-twitter me-1_5">
            <i class="icon-base ti tabler-brand-twitter-filled icon-20px"></i>
          </a>
          <a href="#" class="btn btn-icon rounded-circle btn-text-github me-1_5">
            <i class="icon-base ti tabler-brand-github-filled icon-20px"></i>
          </a>
          <a href="#" class="btn btn-icon rounded-circle btn-text-google-plus">
            <i class="icon-base ti tabler-brand-google-filled icon-20px"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection


