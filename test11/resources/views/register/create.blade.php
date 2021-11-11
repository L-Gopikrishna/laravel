<x-layout>
    <main>
        <h1>Register!</h1>
        <form method="post" action="{{ route('storage') }}">
            @csrf
            <div>
                <label for="name">
                    Name
                </label><br>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required><br><br>
                @error('name')
                 <p>{{ $message }}</p>
                @enderror

                <label for="username">
                    Username
                </label><br>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required><br><br>
                @error('username')
                <p>{{ $message }}</p>
                @enderror

                <label for="email">
                    Email
                </label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>
                @error('email')
                <p>{{ $message }}</p>
                @enderror

                <label for="password">
                    Password
                </label><br>
                <input type="password" name="password" id="password" required><br><br>
                @error('password')
                <p>{{ $message }}</p>
                @enderror

            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </main>
</x-layout>
