<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tasks for Today</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f5fa;
            color: #292b3a;
        }

        header {
            background: #29213f;
            color: white;
            padding: 20px 8%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        nav a:hover {
            color: #c9b8ff;
        }

        .container {
            width: 84%;
            max-width: 1100px;
            margin: 40px auto;
            min-height: 65vh;
        }

        .page-title {
            margin-bottom: 10px;
            font-size: 28px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.05);
        }

        .task-title {
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            background: #fff0d5;
            color: #946200;
        }

        .completed {
            background: #dcfce7;
            color: #16733c;
        }

        .empty {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            color: #777;
        }

        footer {
            text-align: center;
            padding: 22px;
            color: #777;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">Tasks for Today</div>

            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('tasks') }}">Task List</a>
                <a href="{{ route('profile') }}">Profile</a>
                <a href="{{ route('about') }}">About</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        Tasks for Today Management System
    </footer>

</body>
</html>