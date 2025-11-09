<div class="w-full md:w-3/4 md:max-w-3xl mt-12">
    <livewire:page-title
        title="Logowanie"
        subtitle=""/>
    <form wire:submit="authenticate()" class="w-full flex flex-col gap-6 mt-4">
        <flux:field>
            <flux:label>E-mail</flux:label>
            <flux:input type="email" wire:model="email" />
            <flux:error name="email"/>
        </flux:field>
        <flux:field>
            <flux:label>Password</flux:label>
            <flux:input type="password" wire:model="password" />
            <flux:error name="password" />
        </flux:field>
        <flux:button type="submit" class="w-fit cursor-pointer mt-2" variant="primary">Login</flux:button>
    </form>
    @if(isset($loginMessage))
        <flux:text color="blue">
            {{$loginMessage}}
        </flux:text>
    @endif
</div>
