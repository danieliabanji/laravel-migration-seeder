<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center py-3">Treni</h1>
    <div class="container py-5">
        <table class="table table-striped table-dark shadow">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr class="{{ $train['Cancellato'] ? 'text-success' : 'text-danger' }}">
                        <td class="text-capitalize">{{ $train['Azienda'] }}</td>
                        <td>{{ $train['Stazione_di_partenza'] }}</td>
                        <td>{{ $train['Stazione_di_arrivo'] }}</td>
                        <td>{{ $train['Orario_di_partenza'] }}</td>
                        <td>{{ $train['Orario_di_arrivo'] }}</td>
                        <td>{{ $train['codice_treno'] }}</td>
                        <td>{{ $train['numero_carrozze'] }}</td>
                        @if ($train['In_Orario'] && !$train['Cancellato'])
                            <td>Si</td>
                        @else
                            <td>No</td>
                        @endif
                        @if ($train['Cancellato'])
                            <td class="fw-bold">&check;</td>
                        @else
                            <td class="fw-bold">&cross;</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
