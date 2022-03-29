<section>
    @foreach ($photos as $photo)
        <img class="m-2" style="width: 150px;" src="{{ asset('/storage/images/' . $photo->src) }} " alt="">
    @endforeach
</section>
