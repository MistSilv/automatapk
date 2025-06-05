<x-layout>
    <h1>Produkty</h1>
    <a href="{{ route('products.create') }}">Dodaj produkt</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div class="mt-4">
      @foreach($products as $product)
          <x-card :product="$product">
              <div>Nazwa:</div>
              <div>{{ $product->name }}</div>
          </x-card>
      @endforeach
    </div>
</x-layout>