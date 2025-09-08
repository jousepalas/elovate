<div>
    <form wire:submit.prevent="translateProduct">
        <label for="productId">Product ID:</label>
        <input type="text" id="productId" wire:model="productId">
        @error('productId') <span class="text-danger">{{ $message }}</span> @enderror
        <button type="submit">Translate</button>
    </form>

    @if($original)
        <h3>Original:</h3>
        <p>{{ $original }}</p>
    @endif

    @if($translated)
        <h3>Translated:</h3>
        <p>{{ $translated }}</p>
    @endif
</div>