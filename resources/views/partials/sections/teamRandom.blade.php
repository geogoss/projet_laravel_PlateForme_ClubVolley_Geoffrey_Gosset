
{{-- 2 équipes avec joueurs --}}
<section class="mx-auto m-3 col-5 border border-warning">
    <h3>2 équipes <b class="text-warning">avec</b> joueurs </h3>
    <table class="table table-striped table-warning">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
                <th scope="col">Pays</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $club)
            @if (count($club->players) && $loop->iteration <=2)
            <tr>
                        <th scope="row">{{ $club->id }} </th>
                        <td>{{ $club->nom }} </td>
                        <td>{{ $club->ville }} </td>
                        <td>{{ $club->pays }} </td>
                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>

</section>
