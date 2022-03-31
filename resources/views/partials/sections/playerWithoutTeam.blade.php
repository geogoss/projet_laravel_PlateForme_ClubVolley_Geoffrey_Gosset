 {{-- 4Joueurs sans equipes --}}
 <section class="mx-auto m-3 col-5 border border-success">
     <h3>4 Joueurs <b class="text-success">sans</b> équipe</h3>
     <table class="table table-striped table-success">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nom</th>
                 <th scope="col">Prenom</th>
                 <th scope="col">Nom de l'équipe</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($noClubRandom as $item)
                 <tr>
                     <th scope="row">{{ $item->id }} </th>
                     <td>{{ $item->nom }} </td>
                     <td>{{ $item->prenom }} </td>
                     <td>{{$item->club_id}} </td>

                 </tr>
             @endforeach

         </tbody>
     </table>

 </section>
