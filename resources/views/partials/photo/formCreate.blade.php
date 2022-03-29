

<section class="w-50 mx-auto m-5">
    <div class="bg-primary py-5">

        <h1 class="text-center text-white">Créer un membre</h1>

        <form class="w-75 mx-auto" action="/photo" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SRC</label>
                <input type="file" name="src" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-info mt-3">Créer</button>
        </form>
    </div>
</section>
