<x-layout>
    <main>
        <h1>Log In!</h1>
        <form method="post" action="{{route('new_ses')}}">
            @csrf
            <div>

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
                <button type="submit">Log In</button>
            </div>
        </form>
    </main>
</x-layout>
