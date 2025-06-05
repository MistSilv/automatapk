<x-layout>
  <h2>Currently Available Automaty</h2>

  <ul>
    @foreach($vendingMachines as $VM)
      <li>
        <x-card :highlight="$VM['location'] == 'Warszawa'" href="/automaty/{{$VM['id']}}">
          <h3>{{ $VM['name'] }}</h3>
          <h3>{{ $VM['location'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>