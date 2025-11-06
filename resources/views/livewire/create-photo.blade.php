<div class="flex flex-col items-center">
    <form wire:submit="save" class="w-1/2 flex flex-col gap-8">
        <flux:field>
            <flux:label>Tytuł</flux:label>
            <flux:input wire:model="form.title"/>
            <flux:error name="form.title"/>
        </flux:field>
        <flux:field>
            <flux:label>Link (opcjonalnie)</flux:label>
            <flux:input wire:model="form.link"/>
            <flux:error name="form.link"/>
        </flux:field>
        <flux:field>
            <flux:label>Zdjęcie</flux:label>
            <flux:input type="file" wire:model="form.photo"/>
            <flux:error name="form.photo"/>
            @if($form->photo)
                <img src="{{$form->photo->temporaryUrl()}}" alt="" class="w-1/4 py-2">
            @endif
        </flux:field>
        <flux:button type="submit" variant="primary" class="w-fit cursor-pointer">Dodaj</flux:button>
    </form>
</div>
