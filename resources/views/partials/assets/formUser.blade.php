<form action="{{ route('tambah.user') }}" method="POST">
    @csrf
    <div class="modal fade" id="mainAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left: 10px;">Tambahkan User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Fullname</label>
                        <input class="form-control" type="text" name="name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Username</label>
                        <input class="form-control" type="text" name="username" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Email</label>
                        <input class="form-control" type="text" name="email" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Password</label>
                        <input class="form-control" type="text" name="password" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Kode Cabang</label>
                        <select class="form-select" name="kode_cabang">
                            <option value="571A - OX Pekanbaru">571A - OX Pekanbaru</option>
                            <option value="572A - OX Denpasar">572A - OX Denpasar</option>
                            <option value="573A - OX Batam">573A - OX Batam</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="kodeAset">Akses</label>
                        <select class="form-select" name="isAdmin">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
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