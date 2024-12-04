<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gista Lenggana Website</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: #e0f7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .login-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            padding: 50px 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            border-top: 4px solid #4e73df;
        }

        .login-card h1 {
            font-size: 26px;
            font-weight: bold;
            color: #4e73df;
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #f4f8fc;
            border: 1px solid #cddbf5;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
            color: #333;
        }

        .form-control:focus {
            outline: none;
            border-color: #4e73df;
            box-shadow: 0 0 8px rgba(78, 115, 223, 0.5);
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: bold;
            color: #fff;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #3b5cb8;
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h1>Login to CrudGista</h1>
        <form action="{{ route('sesi.login') }}" method="POST">
            @csrf
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror

            <input type="password" name="password" class="form-control" placeholder="Password" required>
            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn-primary">Login</button>
        </form>
        <div class="footer">
            &copy; {{ date('Y') }} Gista Lenggana Website.
        </div>
    </div>

</body>

</html>
