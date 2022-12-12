<x-layout title="Séries">
  <a href="/series/criar">Add Série</a>
  <ul>
  @foreach ($series as $serie)
    <li>
      {{ $serie }}
    </li>
    @endforeach
  </ul>
</x-layout>