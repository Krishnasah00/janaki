<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail From {{ config('app.name') }} !</title>
    <style>
        .body {
            background-color: #edf2f7;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding-top: 50px;
            text-align: center;
        }

        .web-text {
            color: #3d4852;
            font-size: 19px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 25px;
        }

        .mail-body {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            padding-left: 50px;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            border-radius: 10px;
            text-align: justify;
        }

        .mail-tile {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .pd {
            margin-top: 25px;
        }

        .mail-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .copy-right {
            color: #3d4852;
            margin-top: 25px;
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>

<body class="body">
    <div class="container">
        <h1 class="web-text">{{ config('app.name') }} Accout Creation Mail !</h1>

        <div class="mail-body">
            <h2 class="web-text">User Account Creation Mail</h2>
            <p>Dear <strong>{{ $mailArray->name }},</strong> &nbsp;</p>

            <p class="mail-text">"Your account has been created successfully. Please use below creadentials to login"</p>
            <p class="mail-text"> <strong>Email Address :</strong> {{ $mailArray->email }}</p>
            <p class="mail-text"> <strong>Temporary Password :</strong> {{ $mailArray->password }} </p>&nbsp;&nbsp;

            <p class="mail-text">Click here 👉 <a href="{{ route('admin.login') }}"><strong>LOGIN</strong></a> </p>

            <p class="mail-text pd">Thanks, <strong>{{ config('app.name') }}</strong></p>

        </div>

        <p class="copy-right"> &copy; <?php echo date('Y'); ?> {{ config('app.name') }}.All rights reserved.</p>
    </div>
</body>

</html>
