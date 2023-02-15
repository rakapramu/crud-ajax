<div class="modal fade" id="addModalPenduduk" tabindex="-1" aria-labelledby="addModalPendudukLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalPendudukLabel">Tambah Data Penduduk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                            <span class="text-center error-text name_error"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="number" class="form-control" name="no_hp">
                            <span class="text-center error-text name_error"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" cols="20" class="form-control"></textarea>
                            <span class="text-center error-text name_error"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
