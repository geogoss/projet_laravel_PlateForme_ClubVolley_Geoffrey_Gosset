 {{-- 4Joueurs sans equipes --}}
 <section class="col-6 border border-success">
    <h3>4 Joueurs sans équipes random</h3>
    @foreach ($noClubRandom as $item)
        <p>{{$item->nom}} </p>        
    @endforeach
</section>
