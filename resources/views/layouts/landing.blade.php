<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 text-xl">
    @include('layouts._partials.menu')

    <div class="container p-2">

        @yield('content')

    </div>

</body>
</html>