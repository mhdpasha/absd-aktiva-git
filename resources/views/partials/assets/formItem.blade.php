<form action="{{ route('tambah.itemcode') }}" method="POST">
    @csrf
    <div class="modal fade" id="mainAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left: 10px;">Tambahkan Itemcode</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Kode Aset</label>
                        <input class="form-control" type="text" name="kodeAset" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Jenis Aset</label>
                        <input class="form-control" type="text" name="jenisAset" autocomplete="off">
                    </div>
                </div>
                <div class="form-group" style="width: 100%">
                    <div>
                        <label for="kodeAset">Kategori Aset</label>
                        <select class="form-select" name="isFurniture">
                            <option value="0">Inventaris</option>
                            <option value="1">Furniture</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </div>
</form>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-bs-toggle="modal" data-bs-target="#mainAdd">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
        </a>
    </div>