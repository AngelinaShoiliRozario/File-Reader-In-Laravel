<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            width: 50%;
        }

        .nav-links {
            display: none;
        }

        .more {
            display: none;
        }

        .icon {
            font-size: 20px;
            cursor: pointer;
        }

        .search-container {
            display: flex;
        }

        .search-container input {
            padding: 10px;
            border: none;
            font-size: 16px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
    </style>
</head>

<body>
<form action="/upload" method="POST" enctype="multipart/form-data">
@csrf
<h1>Input your file here.</h1>
<input type="file" name="uploaded_file">
<button type="submit">Submit</button>
</form>
</body>

</html>
