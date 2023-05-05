<x-auth-layout>
  <x-slot:title>Login</x-slot:title>
  <div class="py-3 text-center">
    <h3>Masuk untuk Menulis Berita</h3>
  </div>
  <div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <div class="row justify-content-center">
    <div class="col-md-3">
      <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
          <input id="email" class="form-control" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
          <label for="email">Email Address</label>
        </div>
        <div class="form-floating mb-3">
          <input id="password" class="form-control" type="password" name="password" placeholder="Password" value="" required>
          <label for="password">Password</label>
        </div>
        <div class="mb-3">
          <button class="btn btn-dark w-100">Register</button>
        </div>
      </form>
    </div>
  </div>
</x-auth-layout>
