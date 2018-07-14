<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Confirmation Link</title>
</head>
<body>
    <h1>Thank yout for registering on Blog 2 website!</h1>

    <p>
        Please click the following link to finish registration:
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        If you are not the person, please ignore this email.
    </p>
</body>
</html>