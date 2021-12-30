<x-app-component>
      @if (session('status'))
      <div class="row justify-content-center mt-5">
            <div class="col col-md-6 text-center">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
            </div>
      </div>
      @endif
      <div class="row justify-content-center">
            <div class="col col-md-6 ">
                  <div class="card shadow-sm bg-body">
                        <div class="card-body p-5">
                              <h1 class="text-center mb-3">Login</h1>
                              <form method="POST">
                                    @csrf
                                    <div class="mb-3">
                                          <input type="text" name="email" value="{{ old('email') }}" class="form-control rounded-0 @error('email') is-invalid @enderror" placeholder="Email" required >
                                          @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="mb-3">
                                          <input type="password" required name="password" class="form-control rounded-0 @error('password') is-invalid @enderror"" placeholder="Password">
                                          @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror

                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-0">Login</button>
                                    <div class="mt-2">
                                          <small>Don't have account? <a href="{{ route('register') }}">Register</a></small>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</x-app-component>