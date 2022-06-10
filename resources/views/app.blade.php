<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>World Wish Game</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .form-check-input {
            display: none;
        }

        label img {
            height: 170px;
            cursor: pointer;
        }

        .form-check-input:checked+label img {
            transform: scale(1.5)
        }

        .button {
            padding: 12px;
            margin: 0 14px 12px 14px;
            border-radius: 6px;
            background: #432232;
            color: white;
            border: none;
            cursor: pointer;
        }

        .hidden_input {
            display: none;
        }

    </style>
</head>

<body class="antialiased" onload="startGame()">
    <!-- Header -->
    @include('header')
    <!-- Content -->
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
