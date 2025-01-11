<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Auth System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #667eea;
            background: #f7fafc;
        }

        .nav-brand {
            margin-right: auto;
            font-size: 1.25rem;
            font-weight: 600;
            color: #2d3748;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-brand:hover {
            color: #667eea;
        }

        .logout-button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .logout-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(102, 126, 234, 0.25);
        }

        .logout-button:active {
            transform: translateY(0);
        }

        main {
            flex-grow: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        main {
            animation: fadeIn 0.6s ease-out;
        }

        /* Mobile responsive design */
        @media (max-width: 768px) {
            nav {
                padding: 1rem;
            }

            nav ul {
                gap: 1rem;
            }

            main {
                padding: 1rem;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background: #1a202c;
                color: #e2e8f0;
            }

            header {
                background: #2d3748;
            }

            nav a {
                color: #e2e8f0;
            }

            nav a:hover {
                color: #667eea;
                background: #2d3748;
            }

            .nav-brand {
                color: #e2e8f0;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="nav-brand">
                    <a href="{{ route('home') }}" class="nav-brand">
                        <!-- You can add your logo here -->
                        Laravel Auth System
                    </a>
                </li>
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-button">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>