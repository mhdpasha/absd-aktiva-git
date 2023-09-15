<form action="" method="">
    <div class="modal fade" id="mainAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left: 10px;">Tambahkan inventaris Kantor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="form-group">
                    <label for="exampleInputID">ID <span style="color: red;">*</span></label>
                    <input type="ID" class="form-control" id="exampleInputID" aria-describedby="ID" placeholder="Input ID">
                </div>
                <div class="form-group ">
                    <label for="exampleInputCodeBarang">Kode Barang <span style="color: red;">*</span></label>
                    <select class="form-control" id="exampleInputCodeBarang">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputKategori">Kategori <span style="color: red;">*</span></label>
                    <input type="Kategoti" class="form-control" id="exampleInputKategori" aria-describedby="Kategori" placeholder="Kategori">
                </div>
                <div class="form-group">
                    <label for="exampleInputKoneksi">Koneksi <span style="color: red;">*</span></label>
                    <input type="Koneksi" class="form-control" id="exampleInputKoneksi" placeholder="Koneksi">
                </div>
                <div class="form-group">
                    <label for="exampleInputComputerName">Computer Name/IP <span style="color: red;">*</span></label>
                    <input type="ComputerName" class="form-control" id="exampleInputComputerName" placeholder="Computer Name/IP">
                </div>
                <div class="form-group">
                    <label for="exampleInputSharing">Sharing <span style="color: red;">*</span></label>
                    <select class="form-control" id="exampleInputSharing">
                    <option value="YA">YA</option>
                    <option value="TIDAK">TIDAK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDate">Tgl Inventaris <span style="color: red;">*</span></label>
                    <input type="Date" class="form-control" id="exampleInputDate" placeholder="Tgl Inventaris">
                </div>
                <div class="form-group">
                    <label for="exampleInputLokasi">Lokasi <span style="color: red;">*</span></label>
                    <input type="Lokasi" class="form-control" id="exampleInputLokasi" placeholder="Lokasi">
                </div>
                <div class="form-group" style="width: 100%;">
                    <label for="exampleInputKeterangan">Keterangan <span style="color: red;">*</span></label>
                    <input type="Keterangan" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan">
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