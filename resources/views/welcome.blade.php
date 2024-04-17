<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="inline-flex rounded-full flex w-full h-screen items-center justify-center">
    <a
        href="{{route('wyswietl')}}"
        class="border-primary bg-primary bg-gray-500 hover:border-primary hover:bg-primary inline-flex items-center justify-center rounded-l-full border py-[11px] px-[12px] text-center text-base font-medium text-white transition-all hover:text-white sm:px-6"
    >
        wyświetl
    </a>
    <a
        href="{{route('dodawanie')}}"
        class="border-stroke dark:border-dark-3 bg-gray-500 hover:border-primary hover:bg-primary inline-flex items-center justify-center border-y py-[11px] px-[12px] text-center text-base font-medium text-dark dark:text-white transition-all hover:text-white sm:px-6 sm:text-base"
    >
        dodaj
    </a>
    <a
        href="{{route('aktualizowanie')}}"
        class="border-stroke dark:border-dark-3 bg-gray-500 hover:border-primary hover:bg-primary inline-flex items-center justify-center rounded-r-full border py-[11px] px-[12px] text-center text-base font-medium text-dark dark:text-white transition-all hover:text-white sm:px-6 sm:text-base"
    >
        aktualizuj
    </a>
</div>
</body>
</html>
