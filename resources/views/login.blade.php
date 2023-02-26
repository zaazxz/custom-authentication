<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Styling --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Custom Authentication</title>
</head>

<body>

    <div class="login-card" style="margin-top: 20vh;">
        <h1>Log-in</h1><br>
        <form>
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="login" class="login login-submit" value="login">
        </form>

        <div class="login-help">
            <a href="/create">Register</a>
        </div>
    </div>

    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

    {{-- Script JavaScript --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
