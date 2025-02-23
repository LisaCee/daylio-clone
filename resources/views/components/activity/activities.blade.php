<fieldset>
    <div class="flex flex-col gap-6">
        <legend>What have you been up to?</legend>
        <div class="flex flex-wrap gap-4 justify-between">
            @foreach($activities as $activity)
                <div class="flex flex-col gap-2 items-center">
                    <input type="checkbox" id="{{$activity->id}}" name="activities[]" value="{{$activity->id}}"/>
                    <x-dynamic-component :component="$activity->icon" class="text-accent-purple h-5"/>
                    <label for="{{$activity->name}}">{{$activity->name}}</label>
                </div>
            @endforeach
        </div>
    </div>
</fieldset>

