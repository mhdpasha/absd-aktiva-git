<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ABSD Aktiva | {{ $title }} </title>
    <link rel="icon" href="{{ asset("img/logo icon.png") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
    <body
    style="
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;">
    <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 700px">
                <div class="card-body py-2">
        <div class="row py-4">
            <div class="col">
                <label class="form-label">Jenis Aset <span style="color: red">*</span></label>
                <select class="form-control" name="itemcode" id="itemcode">
                        @if ($data->isFurniture === 0)
                            <option value="{{ $data->itemcode }}" selected> {{ $data->itemcode }} (Selected)</option>
                            <option value="01 - Komputer">01 - Komputer</option>
                            <option value="01 - Server">01 - Server</option>
                            <option value="01 - Notebook">01 - Notebook</option>
                            <option value="01 - Handphone">01 - Handphone</option>
                            <option value="01 - Tablet">01 - Tablet</option>
                            <option value="01 - Laptop">01 - Laptop</option>
                            <option value="02 - Printer">02 - Printer</option>
                            <option value="02 - Scanner">02 - Scanner</option>
                            <option value="02 - UPS">02 - UPS</option>
                            <option value="02 - Telephone">02 - Telephone</option>
                            <option value="02 - Modem">02 - Modem</option>
                            <option value="02 - CD Raw">02 - CD Raw</option>
                            <option value="02 - Fax">02 - Fax</option>
                            <option value="02 - External Memory">02 - External Memory</option>
                            <option value="02 - Barcode Portable">02 - Barcode Portable</option>
                            <option value="02 - HT">02 - HT</option>
                            <option value="02 - Mikrotik">02 - Mikrotik</option>
                            <option value="03 - Mesin Ketik">03 - Mesin Ketik</option>
                            <option value="03 - Mesin Absensi">03 - Mesin Absensi</option>
                            <option value="03 - Mesin Hitung Uang">03 - Mesin Hitung Uang</option>
                            <option value="03 - Alat Sensor Uang">03 - Alat Sensor Uang</option>
                            <option value="03 - Mesin Label">03 - Mesin Label</option>
                            <option value="04 - Air Conditioner">04 - Air Conditioner</option>
                            <option value="04 - Kipas Angin">04 - KipasAngin</option>
                            <option value="04 - Air Purifier">04 - Air Purifier</option>
                            <option value="05 - Televisi">05 - Televisi</option>
                            <option value="05 - VCD">05 - VCD</option>
                            <option value="05 - Tape/Radio">05 - Tape/Radio</option>
                            <option value="05 - Infocus">05 - Infocus</option>
                            <option value="05 - OHP">05 - OHP</option>
                            <option value="05 - Kamera">05 - Kamera</option>
                            <option value="05 - CCTV">05 - CCTV</option>
                            <option value="05 - TOA">05 - TOA</option>
                            <option value="05 - Ampli">05 - Ampli</option>
                            <option value="05 - SoundSystem">05 - SoundSystem</option>
                            <option value="05 - Drone">05 - Drone</option>
                            <option value="05 - Alat Webinar">05 - Alat Webinar</option>
                            <option value="05 - Web Cam">05 - Web Cam</option>
                            <option value="06 - Alat Jilid">06 - Alat jilid</option>
                            <option value="06 - Tangga">06 - Tangga</option>
                            <option value="06 - Penghancur Kertas">06 - Penghancur Kertas</option>
                            <option value="06 - Lampu Meja">06 - Lampu Meja</option>
                            <option value="06 - Thermometer">06 - Thermometer</option>
                            <option value="07 - Kulkas">07 - Kulkas</option>
                            <option value="07 - Dispenser">07 - Dispenser</option>
                            <option value="07 - Kompor Gas">07 - Kompor Gas</option>
                            <option value="07 - Coffie Maker">07 - Coffie Maker</option>
                            <option value="08 - Pompa Air">08 - Pompa Air</option>
                            <option value="08 - Vacum Cleaner">08 - Vacum Cleaner</option>
                            <option value="08 - Tenda">08 - Tenda</option>
                            <option value="08 - Genset">08 - Genset</option>
                            <option value="08 - Mesin Cuci">08 - Mesin Cuci</option>
                            <option value="08 - Tabung Pemadam">08 - Tabung Pemadam</option>
                            <option value="09 - BOR">09 - BOR</option>
                            <option value="09 - Gerinda">09 - Gerinda</option>
                            <option value="10 - Perangkat Balon">10 - Perangkat Balon</option>
                            <option value="10 - Pohon Natal">10 - Pohon Natal</option>
                            <option value="11 - Lainnya">11 - Lainnya</option>
                        @else
                            <option value="{{ $data->itemcode }}" selected> {{ $data->itemcode }} (Selected)</option>
                            <option value="01 - Meja">01 - Meja</option>
                            <option value="01 - ID Tower">01 - ID Tower</option>
                            <option value="02 - Kursi">02 - Kursi</option>
                            <option value="03 - Sofa">03 - Sofa</option>
                            <option value="03 - Meja Lobby">03 - Meja Lobby</option>
                            <option value="03 - Meja Counter">03 - Meja Counter</option>
                            <option value="03 - Meja Kebinet">03 - Meja Kabinet</option>
                            <option value="04 - Almari">04 - Almari</option>
                            <option value="04 - Filing Carbinet">04 - Filing Carbinet</option>
                            <option value="04 - Brangkas">04 - Brangkas</option>
                            <option value="04 - Locker">04 - Locker</option>
                            <option value="04 - Rak Spare Part">04 - Rak Spare Part</option>
                            <option value="04 - Credenza">04 - Credenza</option>
                            <option value="05 - Elevator">05 - Elevator</option>
                            <option value="06 - Sign Board">06 - Sign Board</option>
                            <option value="06 - Papan Tulis">06 - Papan Tulis</option>
                            <option value="06 - Bookshelf">06 - Bookshelf</option>
                            <option value="06 - Tir-ai">06 - Tirai</option>
                            <option value="06 - Backdrop">06 - Backdrop</option>
                            <option value="07 - Rumput Sintetis">07 - Rumput Sintetis</option>
                            <option value="07 - Interior Backdrop">07 - Interior Backdrop</option>
                        @endif
                </select>
            </div>
            <div class="col">
                <label class="form-label">Nama Aset <span style="color: red">*</span></label>
                <input value="{{ $data->name }}" name="name" type="NamaAset" class="form-control" id="inputNamaAset" autocomplete="off">
            </div>
            <div class="pt-3">
                <label class="form-label" for="inputEmail">Kategori Aset <span style="color: red">*</span></label>
                <select class="form-control" name="category" id="isFurniture">
                    <option value="{{ $data->category }}"> {{ $data->category }} (Selected)</option>
                    <option value="G - Gedung & Bangunan">G - Gedung & Bangunan</option>
                    <option value="K - KBM Operasional">K - KBM Operasional</option>
                    <option value="P - Peralatan & Perlengkapan">P - Peralatan & Perlengkapan</option>
                    <option value="I - Inventaris Kantor">I - Inventaris Kantor</option>
                    <option value="F - Furniture & Fixture">F - Furniture & Fixture</option>
                    <option value="T - Tower & Fascia">T - Tower & Fascia</option>
                </select>
            </div>
            <div class="pt-3">
                <label class="form-label">Tanggal Perolehan (m/d/y) <span style="color: red">*</span></label>
                <input value="{{ $data->date }}" name="date" type="Date" class="form-control" id="inputTanggalPerolehan" placeholder="Kategori">
            </div>
            <div class="pt-3">
                <label class="form-label">Keterangan <span style="color: red">*</span></label>
                <input value="{{ $data->description }}" name="description" type="Keterangan" class="form-control" id="inputKeterangan" autocomplete="off">
            </div>
            <div class="row pt-3"> 
                <div class="col">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
          </div>
      
            </div>
        
        </div>
        </div>
    </form>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </html>