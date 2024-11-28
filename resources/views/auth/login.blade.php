<x-layout>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6 loginContainer">
                <form action="{{ route('login') }}" method="POST" class="rounded shadow p-5 bg-light">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ old('email') }}" type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input value="{{ old('password') }}" type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <p class="text-danger fst-italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-custom">Login</button>
                    </div>
                    <div>
                        <p>Non sei ancora registrato?</p>
                        <div class="text-center">
                        <a href="{{route('register')}}"  class="btn btn-custom"> Registrati! </a> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>