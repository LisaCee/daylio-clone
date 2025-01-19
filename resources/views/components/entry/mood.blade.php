@props(['mood_level'])

<div>
    <div class="flex flex-row align-middle">
        <label for={{get_label($mood_level)}}>
            @switch($mood_level)
                @case(0)
                    <x-far-face-tired alt="{{get_label($mood_level)}}" class="h-8 text-{{get_color($mood_level)}}"/>
                    @break
                @case(1)
                    <x-far-face-frown alt="{{get_label($mood_level)}}" class="h-8 text-{{get_color($mood_level)}}"/>
                    @break
                @case(2)
                    <x-far-face-meh alt="{{get_label($mood_level)}}" class="h-8 text-{{get_color($mood_level)}}"/>
                    @break
                @case(3)
                    <x-far-face-smile alt="{{get_label($mood_level)}}" class="h-8 text-{{get_color($mood_level)}}"/>
                    @break
                @case(4)
                    <x-far-face-laugh-beam alt="{{get_label($mood_level)}}"
                                           class="h-8 text-{{get_color($mood_level)}}"/>
                    @break
            @endswitch
        </label>
        <p class="text-{{get_color($mood_level)}} align-middle">{{get_label($mood_level)}}</p>
    </div>
</div>
