
    Packets
    <form class="col-md-12" action="categorie/create" method="post" id="categorieFormAdd">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">categorie</span>
            </div>
            <input type="text" class="form-control" placeholder="categorie" aria-label="categorie"
                   name="cat"
                   aria-describedby="basic-addon1">

            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Ref</span>
            </div>
            <input type="text" class="form-control" placeholder="reference" aria-label="reference"
                   name="ref"
                   aria-describedby="basic-addon1">

            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Size</span>
            </div>
            <input type="text" class="form-control" placeholder="size" aria-label="size"
                   name="size"
                   aria-describedby="basic-addon1">
        </div>

        <div class="col-md-12">
            <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('categorieFormAdd').submit();">
                Ajouter</button>
        </div>
</form>
