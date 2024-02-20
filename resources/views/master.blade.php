<!DOCTYPE html>
<html lang="en">

<head>
    @include('header.head-meta')
    @include('header.head-link')
    <title>WorldCraft</title>
</head>

<body>

    @include('components.header')


    @include('components.hero')

    <div id="root">
        @yield('content')
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @include('components.footer')

    @include('footer.footer-link')

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('.loading').fadeOut(100);
            }, 200);
            setTimeout(() => {
                $('html').animate({
                    scrollTop: $(window).height()
                }, 200)
            }, 5000);
        });
    </script>

    @stack('scripts')
</body>

</html>
