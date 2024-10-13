<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('carros.index') }}">CRUD Carros</a>
        <a class="btn btn-success" href="{{ route('carros.create') }}">Adicionar Carro</a>
    </nav>
    <div class="container mt-4">
        <h2>Lista de Carros</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carros as $carro)
                    <tr>
                        <td>{{ $carro->id }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->ano }}</td>
                        <td>
                            <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
