<div>
    <form>
        <label>Title is</label>
        <input type="text" wire:model.live.debounce.500ms="hi"/>

        <h1>Current title: {{ $hi }}</h1>
    </form>
</div>
