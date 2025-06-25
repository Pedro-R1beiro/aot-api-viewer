@if (Route::is('episodes'))
    <div class="flex flex-col">
        <label for="season" class="text-zinc-400">Season</label>
        <select class="bg-white p-2 w-fit rounded-lg" name="season" id="season">
            <option value="">All</option>
            <option value="S1">Season 1</option>
            <option value="S2">Season 2</option>
            <option value="S3">Season 3</option>
            <option value="S4">Season 4</option>
        </select>
    </div>
@endif
@if (Route::is('titans'))
    <div class="flex flex-col">
        <label for="allegiance" class="text-zinc-400">Allegiance</label>
        <select class="bg-white p-2 w-fit rounded-lg" name="allegiance" id="allegiance">
            <option value="">All</option>
            <option value="Marley">Marley</option>
            <option value="Eldia">Eldia</option>
            <option value="None">None</option>
        </select>
    </div>
@endif
@if (Route::is('characters'))
    <div class="flex flex-col">
        <label for="gender" class="text-zinc-400">Gender</label>
        <select class="bg-white p-2 w-fit rounded-lg" name="gender" id="gender">
            <option value="">All</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="unknown">Unknown</option>
        </select>
    </div>
    <div class="flex flex-col">
        <label for="status" class="text-zinc-400">Status</label>
        <select class="bg-white p-2 w-fit rounded-lg" name="status" id="status">
            <option value="">All</option>
            <option value="alive">Alive</option>
            <option value="deceased">Deceased</option>
            <option value="unknown">Unknown</option>
        </select>
    </div>
    <div class="flex flex-col">
        <label for="occupation" class="text-zinc-400">Occupation</label>
        <select class="bg-white p-2 w-fit rounded-lg" name="occupation" id="occupation">
            <option value="">All</option>
            <option value="soldier">Soldier</option>
            <option value="thug">Thug</option>
            <option value="etc">Etc</option>
        </select>
    </div>
@endif
