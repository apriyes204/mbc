<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="uploadGambarLabel">Upload Foto</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('profile.foto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('PATCH') --}}
        {{-- @method('PUT') --}}
        <div class="modal-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group text-center mb-3">
                            <img src="" alt="Preview" class="img-fluid rounded" id="img" style="width: 150px; height: 150px">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" id="fileImg" accept="image/png, image/jpeg">
                        </div>
                        <script>
                            fileImg.onchange = evt => {
                                const [file] = fileImg.files
                                if (file) {
                                    img.src = URL.createObjectURL(file)
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button"
                data-bs-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit">Upload</button>
        </div>
        </form>
    </div>
</div>