<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mensaje Recibido</title>
</head>
<body>
    <h1>Recibiste un mensaje de: {{ $msg['email'] }}</h1>
    <p>
        {{ $msg['text'] }}
    </p>
    
</body>
</html>