<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новое сообщение с сайта</title>
</head>
<body>
    <h2>Новое сообщение с сайта</h2>
    
    <p><strong>Имя:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Тема:</strong> {{ $data['subject'] }}</p>
    
    <h3>Сообщение:</h3>
    <p>{{ $data['message'] }}</p>
</body>
</html> 