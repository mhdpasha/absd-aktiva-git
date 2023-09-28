<form action="{{ route('tambah.aset') }}" method="POST">
    @csrf
    <div class="modal fade" id="inventAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left: 10px;">{{ ($title === "Inventaris") ? 'Tambahkan Inventaris Kantor' : 'Tambahkan Furniture & Fixture' }}</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="form-group">
                    <label for="exampleInputCodeBarang">Jenis Aset <span style="color: red;">*</span></label>
                    <select class="form-select" name="itemcode" id="itemcode">
                        @if ($title == "Inventaris")
                            @foreach ($itemInventaris as $item)
                                <option value="{{ $item->kodeAset." - ".$item->jenisAset }}">{{ $item->kodeAset." - ".$item->jenisAset }}</option>
                            @endforeach
                        @else
                            @foreach ($itemFurniture as $item)
                                <option value="{{ $item->kodeAset." - ".$item->jenisAset }}">{{ $item->kodeAset." - ".$item->jenisAset }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputKategori">Nama Aset <span style="color: red;">*</span></label>
                    <input type="namaAset" class="form-control" name="name" id="name" aria-describedby="nama aset" autocomplete="off">
                </div>

                    <select class="form-control" name="isFurniture" id="isFurniture" hidden>
                        <option value="1" {{ ($title === "Furniture") ? 'selected' : '' }}>Furniture</option>
                        <option value="0" {{ ($title === "Inventaris") ? 'selected' : '' }}>Inventaris</option>
                    </select>

                <div class="form-group" style="width: 100%;">
                    <label for="exampleInputCodeBarang">Kategori Aset <span style="color: red;">*</span></label>
                    <select class="form-select" name="category" id="isFurniture">
                        <option value="G - Gedung & Bangunan">G - Gedung & Bangunan</option>
                        <option value="K - KBM Operasional">K - KBM Operasional</option>
                        <option value="P - Peralatan & Perlengkapan">P - Peralatan & Perlengkapan</option>
                        <option value="I - Inventaris Kantor" {{ ($title === "Inventaris") ? 'selected' : '' }}>I - Inventaris Kantor</option>
                        <option value="F - Furniture & Fixture" {{ ($title === "Furniture") ? 'selected' : '' }}>F - Furniture & Fixture</option>
                        <option value="T - Tower & Fascia">T - Tower & Fascia</option>
                    </select>
                </div>
                <div class="form-group" style="width: 100%;">
                    <label for="exampleInputCodeBarang">Tanggal Perolehan <span style="color: red;">*</span></label>
                    <input type="date" data-provide="datepicker" id="datepicker" class="form-control" name="date" id="date" autocomplete="off">
                </div>
                <div class="form-group" style="width: 100%;">
                    <label for="exampleInputKeterangan">Harga (Rp) <span style="color: red;">*</span></label>
                    <input type="Harga" class="form-control" name="price" id="price" autocomplete="off">
                </div>
                <div class="form-group" style="width: 100%;">
                    <label for="exampleInputKeterangan">Keterangan <span style="color: red;">*</span></label>
                    <input type="Keterangan" class="form-control" name="description" id="description" autocomplete="off">
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
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-bs-toggle="modal" data-bs-target="#inventAdd">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
        </a>
    </div>