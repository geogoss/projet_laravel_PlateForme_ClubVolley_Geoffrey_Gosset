<section class="text-center m-5">
    <img style="width: 300px;" src="{{asset('storage/'.$photo->src)}} " alt="">
    <form action="/photo/{{$photo->id}}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-5" >Delete</button>
    </form>
</section>