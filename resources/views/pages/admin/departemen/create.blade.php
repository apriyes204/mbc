<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Departemen</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('departemen.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-floating mb-3">
                <input name="nama_departemen" type="text" class="form-control" id="floatingDepart"
                    placeholder="Nama Departemen">
                <label for="floatingDepart">Nama Departemen</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="Submit">Simpan</button>
        </div>
        </form>
    </div>
</div>
