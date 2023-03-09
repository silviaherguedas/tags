<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplicación para la gestión de etiquetas</title>
</head>

<body>
    <form action="tags" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="submit" value="Agregar">
    </form>
    <h1>Lisatdo de etiquetas</h1>
    <table>
        @forelse($tags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td>
                <form action="tags/{{ $tag->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>No hay etiquetas</td>
        </tr>
        @endforelse
    </table>
</body>

</html>
