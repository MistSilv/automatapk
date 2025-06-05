<x-layout>
    <h1>Edytuj produkt</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Nazwa:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label>Kod:</label>
            <input type="text" name="code" value="{{ $product->code }}" required>
        </div>
        <div>
            <label>Ilość:</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        </div>
        <div>
            <label>Cena:</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        </div>
        <button type="submit">Zapisz</button>
    </form>
</x-layout>