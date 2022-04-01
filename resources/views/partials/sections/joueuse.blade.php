 {{-- Joueur femme --}}
 <section class="mx-auto m-3 col-5 border border-dark">
    <h3>5 joueurs <b class="text-dark"> "femme"</b> avec équipe</h3>
     <table class="table table-striped table-dark">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nom</th>
                 <th scope="col">Ville</th>
                 <th scope="col">Pays</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($femme as $player)
                 <tr>
                     <th scope="row">{{ $player->id }} </th>
                     <td>{{ $player->nom }} </td>
                     <td>{{ $player->prenom }} </td>
                     <td>{{ $player->club_id }} </td>
                 </tr>
             @endforeach

         </tbody>
     </table>
 </section>
