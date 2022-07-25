<h1>Configurações</h1>

<p>Meu nome é {{ $nome }} e tenho {{ $idade }}</p>

<form method="POST">
    @csrf

    Nome:<br>
    <input type="text" name="nome"><br>
    Idade:<br>
    <input type="text" name="idade"><br>
    <input type="submit" value="Enviar">
</form>

...
