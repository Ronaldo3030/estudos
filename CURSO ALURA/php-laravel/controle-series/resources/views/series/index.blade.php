<x-layout title="Séries">
  <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Add Série</a>
  <ul class="list-group">
  @foreach ($series as $serie)
    <li class="list-group-item">
      {{ $serie->nome }}
    </li>
    @endforeach
  </ul>
</x-layout>