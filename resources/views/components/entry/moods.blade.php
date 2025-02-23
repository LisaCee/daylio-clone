<fieldset>
    <div class="flex flex-col gap-6">
        <legend>How are you feeling?</legend>
        <div class="flex flex-wrap w-full justify-between">
            <div class="flex flex-col space-y-4">
                <label for="0">
                    <x-far-face-tired alt="bad" class="h-8 text-accent-gray"/>
                </label>
                <input type="radio" id="0" value="0" name="mood_level"/>
            </div>
            <div class="flex flex-col space-y-4">
                <label for="1">
                    <x-far-face-frown alt="poor" class="h-8 text-accent-blue"/>
                </label>
                <input type="radio" id="1" value="1" name="mood_level"/>
            </div>
            <div class="flex flex-col space-y-4">
                <label for="2">
                    <x-far-face-meh alt="meh" class="h-8 text-accent-purple"/>
                </label>
                <input type="radio" id="2" value="2" name="mood_level"/>
            </div>
            <div class="flex flex-col space-y-4">
                <label for="3">
                    <x-far-face-smile alt="good" class="h-8 text-accent-green"/>
                </label>
                <input type="radio" id="3" value="3" name="mood_level"/>
            </div>
            <div class="flex flex-col space-y-4">
                <label for="4">
                    <x-far-face-laugh-beam alt="great" class="h-8 text-accent-orange"/>
                </label>
                <input type="radio" id="4" value="4" name="mood_level"/>
            </div>
        </div>
    </div>
</fieldset>

