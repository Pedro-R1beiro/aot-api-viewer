<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css'])

    <title>Wiki AOT</title>
</head>

<body class="min-h-screen overflow-x-hidden font-[Impact,_fantasy] tracking-[2px]">
    @include('components/layout/header')
    <div class="content">
        @yield('content')
    </div>
    @include('components/layout/footer')
</body>

</html>
