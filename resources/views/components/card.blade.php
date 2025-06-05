@props(['highlight' => false, 'product' => null])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    @if($product)
    <div class="grid grid-cols-3 gap-2 mt-4">
        <a href="{{ route('products.edit', $product) }}" class="btn">Edytuj</a>
        <a href="{{ route('products.show', $product) }}" class="btn">Detale</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Usuń</button>
        </form>
    </div>
    @endif
</div>
