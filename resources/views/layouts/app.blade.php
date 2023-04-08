<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&family=DM+Sans:wght@400;700&family=Inter:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;700&family=Oswald&family=Poppins:wght@400;500&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500;700&display=swap" 
    rel="stylesheet">
    {{-- Bootstrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- TailwindCSS --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Fontawesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')

    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.head')
    @yield('content')
    @include('layouts.footer')
</body>
@yield('script')
{{-- TailwindCSS --}}
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('[data-collapse-toggle]').click(function() {
            var target = $(this).attr('data-collapse-toggle');
            $('#' + target).toggleClass('hidden');
            $(this).attr('aria-expanded', function (i, attr) {
                return attr == 'true' ? 'false' : 'true'
            });
        });
    });
</script>
</html>