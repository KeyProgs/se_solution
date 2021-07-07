









    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Ajouter Novelle Categorie
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle Categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">




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


                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success"
                            onclick="document.getElementById('categorieFormAdd').submit();">
                        Ajouter</button>
                </div>
            </div>
        </div>
    </div>
