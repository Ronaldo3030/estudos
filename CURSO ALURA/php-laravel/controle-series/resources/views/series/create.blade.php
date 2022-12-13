<x-layout title="Nova série">
  <form method="post" action="/series/salvar">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="nome">Nome: </label>
      <input class="form-control" type="text" id="nome" name="nome">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</x-layout>