<x-auth-layout>
  <x-slot:title>Login</x-slot:title>
  <div>
    <form action="{{ route('auth.login') }}" method="post">
      @csrf
    </form>
  </div>
</x-auth-layout>
