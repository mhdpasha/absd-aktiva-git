@extends('layouts.main', ['notification' => $dataRequest, 'caption' => $request])
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Maintenance</h1>
                    <p></p>
                    <p></p>

                    @php
                    $hargaTotal = 0;
                    foreach($aset as $data) {
                        $hargaItem = $data->price * 1.11;
                        $hargaTotal += $hargaItem;
                    }
                    @endphp
                    
                    <!-- Modal -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           Total valuasi aset (termasuk pajak PPN 11%): <strong>Rp {{ number_format($hargaTotal, 0, '', '.') }}</strong>
                        </div>  
                    

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10px">No</th>
                                            <th width="20px">Tipe</th>
                                            <th width="200px">Kategori Aset</th>
                                            <th width="200px">Jenis Aset</th>
                                            <th width="300px">Nama Aset</th>
                                            <th width="170px">Tanggal Perolehan</th>
                                            <th width="150px">Harga</th>
                                            <th width="300px">Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach ($aset as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            @if ($data->isFurniture == 1 )
                                                <td><span class="badge text-bg-success px-3 py-2">Furniture</span></td>
                                            @else 
                                                <td><span class="badge text-bg-primary px-3 py-2">Inventaris</span></td>
                                            @endif
                                            <td>{{ $data->category }}</td>
                                            <td>{{ $data->itemcode }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ date('d M Y', strtotime($data->date)) }}</td>
                                            <td>Rp {{ number_format($data->price, 0, '', '.') }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td class="d-flex justify-content-center items-center">
                                                <form action="{{ route('delete.aset') }}" method="POST" id="delete-form">
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
                                                                    <select class="form-select" name="itemcode" id="itemcode">
                                                                        <option value="{{ $data->itemcode }}" selected> {{ $data->itemcode }} (Selected)</option>
                                                                            @foreach ($itemInventaris as $item)
                                                                                <option value="{{ $item->kodeAset." - ".$item->jenisAset }}">{{ $item->kodeAset." - ".$item->jenisAset }}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputKategori">Nama Aset</label>
                                                                    <input type="namaAset" class="form-control" name="name" id="name" value="{{ $data->name }}" autocomplete="off">
                                                                </div>
                                                
                                                                <div class="form-group mt-2" style="width: 100%;">
                                                                    <label for="exampleInputCodeBarang">Kategori Aset</label>
                                                                    <select class="form-select" name="category" id="isFurniture">
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
                                                                    <label for="exampleInputKeterangan">Harga (Rp)</label>
                                                                    <input value="{{ $data->price }}" type="price" class="form-control" name="price" id="price" autocomplete="off">
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
                                                            <h5 class="mt-5"><strong>QR Code</strong>  |  {{ $data->name." (".date('Y', strtotime($data->date)).")" }} </h5>
                                                            
                                                            <div class="modal-body mb-1">
                                                                @php
                                                                    $nomor_urut = (strlen(strval($loop->iteration)) < 2) ? "0{$loop->iteration}" : $loop->iteration;
                                                                    $kode_cabang = '571A'; // $data->user->cabang
                                                                    $kategori_aset = explode(" ", $data->category);
                                                                    $departemen = 'A'; // $data->user->akses
                                                                    $jenis_aset = explode(" ", $data->itemcode);
                                                                    $tahun_perolehan = date('y', strtotime($data->date));

                                                                    $displayData = "{$kode_cabang} {$kategori_aset[0]} {$departemen} {$jenis_aset[0]} {$tahun_perolehan} {$nomor_urut}";
                                                                @endphp
                                                                {{ QrCode::format('svg')->size(300)->generate($displayData) }}
                                                            </div>

                                                            <h5 class="mt-3 mb-5"><strong>Kode: </strong>   {{ $displayData }} </h5>

                                                        </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach 
                                        
                                    </tbody>
                                </table>
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert" data-dismiss="alert" style="cursor: pointer;">
                                        <h4><strong>Field belum terisi :</strong></h4>
                                        <ul style="list-style-type: >">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @elseif (session()->has('added'))
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
    <style>
        .dt-button {
            border: none;
            margin-top: 20px;
            border-radius: 20px;
            padding: 10px 20px; 
        }

        .dt-button-collection button {
            transition: 0.3s ease;
            position: absolute;
            color: white;
            background: #adb5bd;
            top: 82px;
        }

        .dt-button-collection button:hover {
            background: #6c757d;
        }

        .dt-button-collection button:nth-child(1) {
            left: 400px
        }
        .dt-button-collection button:nth-child(2) {
            left: 505px
        }
        .dt-button-collection button:nth-child(3) {
            left: 610px
        }
        .dt-button-collection button:nth-child(4) {
            left: 715px
        }
    </style>
    
@endsection