<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <div class="header">
            <div class="icon__container">
                <a href="/"><img class="header__icon" src="/assets/home.svg" alt="home-icon"></a>
                <h2>Home</h2>
            </div>
            <div class="icon__container">
                <a href="/create"><img class="header__icon" src="/assets/add.svg" alt="home-icon"></a>
                <h2>New</h2>
            </div>       
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="footer__text">
            <h4>@Jekk0 2023</h4>
            <p>cesarfercerezuela@gmail.com</p>
        </div>
    </footer>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thank you!',
                text: "{{$message}}",
                confirmButtonColor: '#2E4F4F'
                })
        </script>
    @endif
</body>
</html>