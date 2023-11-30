
@vite('resources/css/app.css')

@component('components.CP_SideBar')
@endcomponent


@if(isset($test))
    {{ $test }}
@endif
