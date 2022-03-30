<section>
    <h1 class="text-center m-5">Photos des joueurs : </h1>
    @foreach ($photos as $photo)
        <a href="/photo/{{ $photo->id }} ">
            <img class="my-2 " style="width: 150px;" src="{{ asset('/storage/'. $photo->src) }} " alt="">
        </a>
    @endforeach
</section>
