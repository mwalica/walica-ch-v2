<div class="flex flex-col items-center gap-10">
    <h1 class="text-3xl md:text-5xl font-semibold text-zinc-700 mt-8">Marek Walica <span
            class="bg-gradient-to-br from-blue-500 to-sky-300 bg-clip-text text-transparent">Portfolio</span>
    </h1>
    <flux:badge
        size="lg"
        color="sky"
        class="border-1 border-sky-300">Muzyka&nbsp;&nbsp;<div class="w-2 h-2 bg-sky-300 rounded-full"></div>&nbsp;&nbsp;Fotografia&nbsp;&nbsp;<div
            class="w-2 h-2 bg-sky-300 rounded-full"></div>&nbsp;&nbsp;
        Edukacja
    </flux:badge>
    @if(isset($photo->photo_path))
        <div class="flex flex-col gap-2 justify-center items-center relative bg-blue-200 max-w-3xl">
            @if($photo->link)
                <a
                    href="{{$photo->link}}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="absolute top-2 start-2 md:top-4 md:start-5 text-white/85">
                    <flux:icon.external-link />
                </a>
            @endif
            <img class="border-0 md:border-12 border-white w-full shadow-2xl"
                 src="{{Storage::url($photo->photo_path)}}" alt="{{$photo->title}}">
        </div>
    @endif
</div>
