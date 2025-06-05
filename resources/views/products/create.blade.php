<x-layout>
    <h1>Dodaj produkt</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label>Nazwa:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Kod:</label>
            <input type="text" name="code" required>
        </div>
        <div>
            <label>Ilość:</label>
            <input type="number" name="quantity" required>
        </div>
        <div>
            <label>Cena:</label>
            <input type="number" step="0.01" name="price" required>
        </div>
        <button type="submit">Zapisz</button>
    </form>
</x-layout>