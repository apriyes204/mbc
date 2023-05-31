<div class="modal-dialog modal-dialog-scrollable">

    <div class="modal-content">
        <form action="#" method="POST">
            @csrf

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Lending Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto; position: relative;">
                <div class="container" id="row-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 align-center">
                            <label for="exampleFormControlInput1" class="form-label">Asset</label>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <select class="form-select my-2" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-sm-12 col-md-2 ms-auto d-grid gap-2">
                            <button type="button" class="btn btn-success btn-sm d-md-block" id="add-col-button">
                                <i class="bi bi-file-earmark-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="Submit">Simpan</button>
                </div>

        </form>

    </div>


</div>

@include('pages.admin.lending.script')
