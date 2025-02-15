{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezato Restaurant - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
            text-align: center;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s ease-out;
        }
        .register-container .logo {
            width: 100px;
            margin-bottom: 1.5rem;
        }
        .register-container h1 {
            font-size: 1.8rem;
            color: #fff;
            margin-bottom: 1.5rem;
        }
        .input-group {
            text-align: left;
            margin-bottom: 1rem;
            position: relative;
        }
        .register-container label {
            font-size: 0.9rem;
            color: #fff;
            margin-bottom: 0.5rem;
            display: block;
        }
        .register-container input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            outline: none;
            transition: border 0.3s ease;
        }
        .register-container input:hover,
        .register-container input:focus {
            border-color: #f87f5e;
        }
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 65%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #f87f5e;
        }
        .register-container button {
            width: 100%;
            padding: 0.75rem;
            background: rgba(248, 127, 94, 1);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .register-container button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(248, 127, 94, 0.5);
        }
        .register-container a {
            color: #f87f5e;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 1.5rem;
        }
        .register-container a:hover {
            color: #f87f5e;
            text-decoration: underline;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg" alt="Lezato Restaurant Logo" class="logo">
        <h1>Create Your Account</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <a href="{{ route('login') }}">Already have an account? Login</a>
    </div>
    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
