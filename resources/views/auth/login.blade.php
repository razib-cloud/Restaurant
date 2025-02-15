{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezato Restaurant - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Overlay for readability */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        /* Glass Morphism Login Container */
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        /* Logo */
        .logo {
            width: 100px;
            margin-bottom: 1.5rem;
        }

        /* Heading */
        h1 {
            font-size: 2rem;
            color: #fff;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Input Group */
        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .input-group label {
            display: block;
            color: white;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            outline: none;
            transition: border 0.3s ease;
        }

        .input-group input:hover,
        .input-group input:focus {
            border-color: #f87f5e;
        }

        /* Login Button */
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #f87f5e, #f53804);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 0, 0, 0.3);
        }

        /* Forgot Password Link */
        a {
            color: #ff6b6b;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 1rem;
        }

        a:hover {
            color: #f87f5e;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg" alt="Lezato Restaurant Logo" class="logo">
        <h1>Welcome Back</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>

        <a href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
</body>
</html>
