@php
    
    $classStr = "w-60 h-60 rounded-lg flex flex-col justify-around items-start p-8 bg-gradient-to-r shadow-lg shrink-0 hover:scale-105 transition-all duration-300 hover:cursor-pointer $shadowColor $startColor $endColor";

@endphp

<div class="{{$classStr}}" >

    <dl>
        <i class="text-white w-full flex justify-center items-center text-center">
            {{$slot}}
        </i>

        <div class="h-2"></div>

        <dt class="text-white text-lg flex justify-center items-center text-center">
            {{$title}}
        </dt>

        <div class="h-2"></div>

        <dd class="text-white  text-xs flex justify-center items-center text-center">
            {{$content}}
        </dd>

    </dl>

    <div class=" bg-white w-full h-[2px]"></div>


    

</div>