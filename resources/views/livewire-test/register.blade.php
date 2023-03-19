it's TEST
<html>
    <head>

        @livewireStyles
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        ...it's TEST<span class="text-red-300">register</span>
       @livewire('register')

        @livewireScripts
    </body>
</html>
