<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    <p>UserName is: {{ $name }}</p>
    <ul>
        <li>{{ $user['id'] }}</li>
        <li>{{ $user['name'] }}</li>
        <li>{{ $user['email'] }}</li>
        <li>{{ $user['phone'] }}</li>
    </ul>
</body>
</html>