<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 500px;
            
            background: #ccc;
            
        }
        .message{
            width: 300px;
            margin: 0 auto;
            color: #1d1d1d;
            padding: 30px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="message">
                <h1>Name: {{ $name }}</h1>
                <p>Email: {{ $email }}</p>
                <p>Phone: {{ $phone }}</p>
                <p>Company: {{ $company}}</p>
                <p>Message: {{ $user_message}}</p>
                <p>Url: {{ $url}}</p>
                <p>Street: {{ $street}}</p>
                <p>Country: {{ $country}}</p>
                                
                <p>Sending Mail from Contact.</p>
            </div>
        </div>
    </div>
</body>
</html>

