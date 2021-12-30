<x-app-component>
      <div class="row justify-content-center mt-5">
            <div class="col col-md-6 ">
                  <div class="card shadow-sm bg-body">
                        <div class="card-body p-5">
                              <h1 class="text-center mb-3">Register</h1>
                              <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                          <input type="text" name="name" value="{{ old('name') }}" class="form-control rounded-0 @error('name') is-invalid @enderror" placeholder="Name">
                                          @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="mb-3">
                                          <input type="text" name="username" value="{{ old('username') }}" class="form-control rounded-0 @error('username') is-invalid @enderror" placeholder="Username">
                                          @error('username')<span class="invalid-feedback">{{ $message }}</span>@enderror

                                    </div>
                                    <div class="mb-3">
                                          <input type="text" name="email" value="{{ old('email') }}" class="form-control rounded-0 @error('email') is-invalid @enderror" placeholder="Email">
                                          @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror

                                    </div>
                                    <div class="mb-3">
                                          <input type="password" name="password"  class="form-control rounded-0 @error('password') is-invalid @enderror" placeholder="Password">
                                          @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror

                                    </div>
                                    <div class="mb-3">
                                          <input type="password" name="password_confirmation"  class="form-control rounded-0 @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                                          @error('password_confirmation')<span class="invalid-feedback">{{ $message }}</span>@enderror

                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-0">Register</button>
                                    <div class="mt-2 text-center">
                                          <small>Have account? <a href="{{ route('login') }}">Login</a></small>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</x-app-component>