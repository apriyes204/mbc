<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Asset</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('asset.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-floating">
                            <input name="label_code" type="text" class="form-control" id="floatingLabel"
                                placeholder="Label Code">
                            <label for="floatingLabel">Label Code</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="id_type">
                                <option selected>Pilih Type</option>
                                @foreach ($typeasset as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Pilih Type Asset</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="serial_number" id="floatinSN"
                                placeholder="Serial Number">
                            <label for="floatinSN">Serial Number</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="model" id="floatingModel"
                                placeholder="Model">
                            <label for="floatingModel">Model</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-floating">
                            <input type="text" name="brand" id="floatingBrand" placeholder="Brand Series"
                                class="form-control">
                            <label for="floatingBrand">Brand Series</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-floating">
                            <input type="month" class="form-control" name="buy_of_date" id="floatingBuy"
                                placeholder="Date of Buy">
                            <label for="floatingBuy">Date of Buy</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="harga" id="floatingHarga"
                                placeholder="Estimasi Harga">
                            <label for="floatingHarga">Estimasi Harga</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Spesifikasi:</label>
                            <textarea class="form-control" id="message-text" rows="8" name="spesifikasi">&#9679 Processor:
&#9679 RAM:
&#9679 Disks Capacity:
&#9679 Display Size:
&#9679 Mouse:
&#9679 Keyboard:
&#9679 Operating System:
&#9679 VGA Card:
&#9679 Ports: </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">close</button>
                <button class="btn btn-primary" type="submit" value="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
