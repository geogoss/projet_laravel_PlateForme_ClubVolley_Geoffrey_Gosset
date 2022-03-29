<section>
    @foreach ($photos as $photo)
    <a href="/photo/{{$photo->id}} ">
        <img class="m-2" style="width: 150px;" src="{{ asset('/storage/' . $photo->src) }} " alt="">
    </a>
    @endforeach
</section>
