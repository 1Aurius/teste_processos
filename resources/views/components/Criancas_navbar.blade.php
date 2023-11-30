@component('Components.Navbar')

@slot('svg')
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
    <path d="M10.5 4H10.9344C13.9816 4 15.5053 4 16.0836 4.54729C16.5836 5.02037 16.8051 5.71728 16.6702 6.39221C16.514 7.17302 15.2701 8.05285 12.7823 9.81253L8.71772 12.6875C6.2299 14.4471 4.98599 15.327 4.82984 16.1078C4.69486 16.7827 4.91642 17.4796 5.41636 17.9527C5.99474 18.5 7.51836 18.5 10.5656 18.5H11.5M7 4C7 5.65685 5.65685 7 4 7C2.34315 7 1 5.65685 1 4C1 2.34315 2.34315 1 4 1C5.65685 1 7 2.34315 7 4ZM21 18C21 19.6569 19.6569 21 18 21C16.3431 21 15 19.6569 15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18Z" stroke="#525252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
@endslot

@slot('title')
    hello
@endslot

@slot('link1')
Visão geral
@endslot
@slot('route1')
 /
@endslot

@slot('link2')
Solitiações Atendimento
@endslot
@slot('route2')
 /
@endslot

@slot('link3')
Lista de Espera
@endslot
@slot('route3')
 /
@endslot
@endcomponent
