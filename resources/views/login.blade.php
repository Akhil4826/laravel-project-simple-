<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #1a202c;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #1a202c;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 700;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 3px;
        }

        .alert {
            background: #FEE2E2;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 20px;
            border-left: 4px solid #DC2626;
        }

        .alert ul {
            list-style: none;
            color: #991B1B;
        }

        .alert li {
            margin-bottom: 4px;
        }

        .alert li:last-child {
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            margin-bottom: 16px;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        input::placeholder {
            color: #a0aec0;
        }

        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        button:active {
            transform: translateY(0);
        }

        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #4a5568;
        }

        .signup-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #764ba2;
        }

        .welcome-back {
            text-align: center;
        }

        .welcome-back h3 {
            color: #1a202c;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .welcome-back p {
            color: #4a5568;
            margin-bottom: 1.5rem;
        }

        .dashboard-link {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .dashboard-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        @guest
            <h2>Welcome Back</h2>

            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit">Login</button>
            </form>

            <p class="signup-link">
                Don't have an account? <a href="{{ route('signup') }}">Sign up here</a>
            </p>
        @endguest

        @auth
            <div class="welcome-back">
                <h3>Welcome back, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</h3>
                <p>You're logged in as {{ auth()->user()->username }}</p>
                <a href="{{ route('dashboard') }}" class="dashboard-link">Go to Dashboard</a>
            </div>
        @endauth
    </div>
</body>
</html>