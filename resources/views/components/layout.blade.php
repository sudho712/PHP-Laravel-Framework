<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header ul {
            list-style: none;
            padding: 0;
        }
        .header li {
            display: inline;
            margin-right: 15px;
        }
        .header a {
            text-decoration: none;
            color: blue;
        }
        .footer {
            margin-top: 30px;
            padding: 10px;
            background-color: #f0f0f0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>

    <div class="main-content">
        {{ $main }}
    </div>

    <div class="footer">
        This is the footer
    </div>
</body>
</html>
