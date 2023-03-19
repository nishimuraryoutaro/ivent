<div>
    <form wire:submit.prevent="register">
        <label for="name">名前</label>
        <input id="name"type="text" wire:model="name"><br>
        @error('name')<div>{{ $message }}</div>@enderror
        <label for="email">メール</label>
        <input id="email"type="email" wire:model="email"><br>
        @error('email')<div>{{ $message }}</div>@enderror
        <label for="password">パスワード</label>
        <input id="password"type="password" wire:model="password"><br>
        @error('password')<div>{{ $message }}</div>@enderror


    <button>登録する</button>
    </form>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
