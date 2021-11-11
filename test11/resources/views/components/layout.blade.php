<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <link rel="stylesheet" href="app1.css" type="text/css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('posts') }}"> Home </a>
                    </li>
                    <li>
                        @auth
                            <span>{{ auth()->user()->name }}</span>
                            <form action="{{ route('ses_des') }}" method="post">
                                @csrf

                                <button type="submit">Log Out</button>
                            </form>
                        @else
                            <a href="{{ route('register') }}"> Register </a>
                            <a href="{{ route('login') }}"> Log In </a>
                        @endauth
                    </li>
                </ul>
            </nav>
            </header>
        @if (session()->has('success'))
            <p class="alert">{{ session('success') }}</p>
        @endif
        {{ $slot }}
    </body>
</html>
