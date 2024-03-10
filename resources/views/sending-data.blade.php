<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Data</title>
</head>
<body>
    <h1>Sending Data</h1>
    <p>
        <?php echo 'Hello, ' . $user['name'] . '. Your email is ' . $user['email'] . '.'; ?>
    </p>
    <p>
        Hello, {{ $user['name'] }}. Your email is {{ $user['email'] }}.
    </p>
</body>
</html>