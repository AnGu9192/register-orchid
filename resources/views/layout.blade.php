<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark text-white border-bottom">
    <a href="/home" class="d-flex align-items-center link-body-emphasis text-decoration-none text-white">
        <span class="fs-4 p-2">Blog</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/">Home</a>
    </nav>
</div>
<div class="container">
    @yield('main_content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
