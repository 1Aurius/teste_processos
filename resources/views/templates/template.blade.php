<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite('resources/css/app.css')
   <title>Document</title>
</head>
<body class="flex ">

    <section class="w-1/5 h-screen">
    @component('components.CP_SideBar')
    @endcomponent
    </section>

    <main class="w-4/5 h-screen bg-slate-200">
        @component('Components.Criancas_navbar')
        @endcomponent

        <section class=" p-[32px]">
            @yield('main')
        </section>
    </main>
</body>
</html>
