<div class="modal-dialog modal-dialog-scrollable modal-sm">

    
    
    <div class="modal-content">
        <form action="{{ route('type.store') }}" method="POST">
        @csrf
        
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Type Asset</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nama_type" id="floatingNamaType" placeholder="Nama Type">
                        <label for="floatingNamaType">Nama Type</label>
                    </div>
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
