<a href="{{$link}}" target="_blank" rel="noreferrer" class="block">
    <div class="overflow-hidden rounded-lg bg-white shadow-xl">
        <img src="{{asset("images/$image")}}" alt="" class="w-full">
        <div class="px-4 py-5 sm:p-6 flex justify-center items-center">
            <h5 class="text-blue-800 font-semibold text-xl">{{$title}}</h5>
        </div>
        <div class="flex justify-center gap-2 p-2">
            @foreach($kinds as $kind)
                <flux:badge color="{{$colors[array_rand($colors)]}}" variant="pill">{{$kind}}</flux:badge>
            @endforeach
        </div>
    </div>
</a>
