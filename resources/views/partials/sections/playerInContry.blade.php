 {{-- Joueur femme --}}
 <section class="mx-auto m-3 col-5 border border-primary">
     <h3>Joueurs venant du <b class="text-primary"> "même"</b>pays que son équipe</h3>
     <table class="table table-striped table-primary">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nom joueur</th>
                 <th scope="col">Pays joueur</th>
                 <th scope="col">Nom équipe du joueur</th>
                 <th scope="col">Pays équipe du joueur</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($clubs as $club)
                 @foreach ($players as $player)
                     @if ($player->club_id != null)
                         @if ($club->pays == $player->pays)
                             <tr>
                                 <th scope="row">{{ $player->id }} </th>
                                 <td>{{ $player->nom }} </td>
                                 <td>{{ $player->pays }} </td>
                                     <td>{{ $club->nom }} </td>
                                     <td>{{ $club->pays }} </td>
                             </tr>
                         @endif
                     @endif
                 @endforeach
             @endforeach
         </tbody>
     </table>
 </section>


