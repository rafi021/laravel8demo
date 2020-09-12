<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <x-header/>
    <h1>User View</h1>
    <p>UserName is: {{ $name }}</p>
    <ul>
        <li>ID: {{ $user['id'] }}</li>
        <li>Name: {{ $user['name'] }}</li>
        <li>Email: {{ $user['email'] }}</li>
        <li>Phone: {{ $user['phone'] }}</li>
    </ul>
</body>
</html>