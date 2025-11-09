<div class="w-full md:w-3/4 md:max-w-3xl mt-12">
    <livewire:page-title
        title="Zdjęcia"
        subtitle=""/>
    <ul role="list" class="divide-y divide-gray-200">
        @forelse($photos as $photo)
            <li class="flex items-center justify-between gap-x-6 py-5">
                <div class="min-w-0">
                    <div class="flex items-start gap-x-3">
                        <p class="text-sm/6 font-semibold text-gray-900">{{$photo->title}}</p>
                        @if($photo->link)
                        <p class="mt-0.5 rounded-md bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 inset-ring inset-ring-green-600/20">Link</p>
                        @endif
                    </div>
                    <div class="mt-1 flex items-center gap-x-2 text-xs/5 text-gray-500">
                        <p class="whitespace-nowrap">{{$photo->photo_path}}</p>
                    </div>
                </div>
                <div class="flex flex-none items-center gap-x-4">
                    <flux:button
                        class="cursor-pointer"
                        wire:click="delete({{$photo->id}})"
                        wire:confirm="Czy napewno usunąć zdjecie?"
                    >Usuń</flux:button>
                </div>
            </li>
        @empty
            <flux:text size="lg">Brak zdjęć w bazie danych</flux:text>
        @endforelse
    </ul>

</div>
