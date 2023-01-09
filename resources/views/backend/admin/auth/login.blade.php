<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('/backend/admin/css/login.css') }}"/>
</head>
<body>
<div class="login">
    <div class="form">
            <p>login</p>
            @if(session()->has('error'))
            <p style="color:red">{{ session()->get('error') }}</p>
            @endif
            <form action="{{ url('/admin/login') }}" method="POST" class="login-form">
            @csrf
            <input type="text" name="email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
            <input type="password" name="password" placeholder="password" required />
            <button type="submit">login</button>
        </form>  
    </div>
    </div>
</body>
</html>