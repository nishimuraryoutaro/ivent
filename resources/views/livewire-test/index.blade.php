it's TEST
<html>
    <head>
        @livewireStyles
    </head>
    <body>
        ...it's TEST
        <livewire:counter />
        <div>
            @if (session()->has('message'))
                <div class="">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        {{-- @livewire('conter') --}}
        @livewireScripts
    </body>
</html>
