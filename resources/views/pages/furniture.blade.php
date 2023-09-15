@extends('layouts.main')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Furniture & Fixture</h1>
                    <p></p>
                    <p></p>

                    <!-- Modal -->
                    @include("partials.assets.formAset", ["itemsInventaris" => $itemInventaris, "itemsFurniture" => $itemFurniture])

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10px">No</th>
                                            <th width="200px">Kategori Aset</th>
                                            <th width="200px">Jenis Aset</th>
                                            <th width="300px">Nama Aset</th>
                                            <th width="150px">Tanggal Perolehan</th>
                                            <th width="300px">Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        @foreach ($aset as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->category }}</td>
                                            <td>{{ $data->itemcode }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ date('d M Y',strtotime($data->date)) }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td class="d-flex justify-content-center items-center">
                                                <form action="{{ route('delete.aset') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                                </form>
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#inventAdd{{ $data->id }}" class="btn btn-warning btn-sm mx-2">
                                                    <img src={{ asset("img/edit.png") }} width="20px" height="21px">
                                                </a>


                                                <form action="/update-aset/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal fade" id="inventAdd{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle" style="padding-left: 10px;">{{ ($title === "Inventaris") ? 'Edit Inventaris' : 'Edit Furniture & Fixture' }}</h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                                                <div class="form-group">
                                                                    <label for="exampleInputCodeBarang">Jenis Aset</label>
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
                                                                <div class="form-group">
                                                                    <label for="exampleInputKategori">Nama Aset</label>
                                                                    <input type="namaAset" class="form-control" name="name" id="name" value="{{ $data->name }}" autocomplete="off">
                                                                </div>
                                                
                                                                <div class="form-group mt-2" style="width: 100%;">
                                                                    <label for="exampleInputCodeBarang">Kategori Aset</label>
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
                                                                <div class="form-group mt-2" style="width: 100%;">
                                                                    <label for="exampleInputCodeBarang">Tanggal Perolehan (m/d/y)</label>
                                                                    <input value="{{ $data->date }}" type="date" data-provide="datepicker" id="datepicker" class="form-control" name="date" id="date" autocomplete="off">
                                                                </div>
                                                                <div class="form-group mt-2" style="width: 100%;">
                                                                    <label for="exampleInputKeterangan">Keterangan</label>
                                                                    <input value="{{ $data->description }}" type="Keterangan" class="form-control" name="description" id="description" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#showQR{{ $data->id }}" class="btn btn-primary btn-sm">
                                                    <img src={{ asset("img/Vector.png") }} width="20px" height="19px">
                                                </a>

                                                <div class="modal fade" id="showQR{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <h5 class="mt-4"><strong>QR Code</strong>  |  {{ $data->name }} </h5>
                                                            
                                                            <div class="modal-body mb-5">
                                                                {{ QrCode::format('svg')->size(300)->generate($data->name." - ".date('d M Y', strtotime($data->date))) }}
                                                            </div>
                                                        </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                @if (session()->has('added'))
                                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" data-dismiss="alert" style="cursor: pointer;">
                                        <strong class="d-flex items-center justify-content-center">
                                             {{ session('added') }}
                                        </strong>
                                    </div>
                            @elseif (session()->has('saved'))
                                    <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert" data-dismiss="alert" style="cursor: pointer;">
                                        <strong class="d-flex items-center justify-content-center">
                                             {{ session('saved') }}
                                        </strong>
                                    </div>
                            @elseif (session()->has('deleted'))
                                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert" data-dismiss="alert" style="cursor: pointer;">
                                        <strong class="d-flex items-center justify-content-center">
                                             {{ session('deleted') }}
                                        </strong>
                                    </div>
                            @endif

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
    <script src="{{ asset('js/alert.js') }}"></script>

@endsection