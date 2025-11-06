<div class="flex flex-col items-center gap-10">
    <flux:heading class="text-5xl! font-semibold! text-zink-700 mt-8">Marek Walica <span
            class="bg-gradient-to-br from-blue-500 to-sky-200 bg-clip-text text-transparent">Portfolio</span>
    </flux:heading>
    <flux:badge
        size="lg"
        color="sky"
        class="border-1 border-sky-300">Muzyka&nbsp;&nbsp;<div class="w-2 h-2 bg-sky-300 rounded-full"></div>&nbsp;&nbsp;Fotografia&nbsp;&nbsp;<div
            class="w-2 h-2 bg-sky-300 rounded-full"></div>&nbsp;&nbsp;
        Edukacja
    </flux:badge>
    <flux:container class="w-min">
        <img class="border-18 border-white max-w-2xl shadow-2xl" src="{{Storage::url($photo->photo_path)}}" alt="{{$photo->title}}">
    </flux:container>
</div>
