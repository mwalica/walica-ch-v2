<div>
    <flux:heading>Login</flux:heading>
    <form wire:submit="authenticate()">
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
        <flux:button type="submit" class="w-fit cursor-pointer" variant="primary">Login</flux:button>
    </form>
    @if(isset($loginMessage))
        <flux:text color="blue">
            {{$loginMessage}}
        </flux:text>
    @endif
</div>
