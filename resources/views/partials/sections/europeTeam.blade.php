{{-- equipe  europe --}}
<section class="mx-auto m-3 col-5 border border-danger">
    <h3>Equipe <b class="text-danger">en</b> europe</h3>
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
                <th scope="col">Pays</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($europeClub as $club)
                <tr>
                    <th scope="row">{{ $club->id }} </th>
                    <td>{{ $club->nom }} </td>
                    <td>{{ $club->ville }} </td>
                    <td>{{ $club->pays }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</section>
