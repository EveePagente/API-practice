<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cutie</title>
</head>
<body>
    <div style= "border: 2px solid purple;">
    <h2>Registration Form</h2> 
    <form action=" /register" method="POST">
        @csrf
        <input type="text" placeholder="name">
        <input type="text" placeholder="email">
        <input type="password" placeholder="password">
        <button>Register</button>
    </form>

</body>
</html>