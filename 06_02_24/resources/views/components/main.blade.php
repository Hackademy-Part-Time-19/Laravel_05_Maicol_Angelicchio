<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: auto;
        }

        .card-title {
            padding: 10px;
            background-color: #f1f1f1;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <title>{{$title}}</title>
</head>
<body>
    {{$slot}}
</body>
</html>