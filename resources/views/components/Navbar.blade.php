<header class=" p-[32px] flex-col gap-[12px] bg-white">
<div class="flex items-center gap-[16px]">
    <div class="w-[22px] h-[22px] ">{{ $svg }}</div>
    <h1 class=" text-[24px] ">{{ $title }}</h1>
</div>
<div class="flex w-full gap-[8px] p-[8px] bg-gray-50 rounded-[12px] border-[1px] border-gray-200">
    @if(isset($route1))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route1 }}">{{ $link1 }}</a>@endif
    @if(isset($route2))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route2 }}">{{ $link2 }}</a>@endif
    @if(isset($route3))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route3 }}">{{ $link3 }}</a>@endif
    @if(isset($route4))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route4 }}">{{ $link4 }}</a>@endif
    @if(isset($route5))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route5 }}">{{ $link5 }}</a>@endif
    @if(isset($route6))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route6 }}">{{ $link6 }}</a>@endif
    @if(isset($route7))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route7 }}">{{ $link7 }}</a>@endif
    @if(isset($route8))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route8 }}">{{ $link8 }}</a>@endif
    @if(isset($route9))<a class="hover:bg-white hover:shadow-sm hover:text-[#1570EF] rounded-[6px] pt-[8px] pb-[8px] pr-[16px] pl-[16px] text-[16px]" href="{{ $route9 }}">{{ $link9 }}</a>@endif
</div>
</header>
