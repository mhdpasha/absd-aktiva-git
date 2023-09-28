@extends('layouts.main', ['notification' => $dataRequest, 'caption' => $request])
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

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


                    @if ($user->isAdmin == 1)
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Incoming Request <span class="badge text-bg-primary px-3 py-2 ml-2">Admin</span></h1>
                    <p></p>
                    <p></p>
                    
                    <!-- DataTales Example -->
                    <card-background class="card shadow mb-5">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Aset</th>
                                            <th>Jenis Aset</th>
                                            <th>Nama Aset</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($request as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->category }} </td>
                                            <td> {{ $data->itemcode }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td><strong> {{ $data->user }} </strong></td>
                                            <td> {{ $data->description }} </td>
                                            <td> Rp {{ number_format($data->price, 0, '', '.') }} </td>
                                            <td><span class="badge text-bg-warning px-3 py-2">Pending</span></td>
                                            <td class="d-flex justify-content-center">
                                                <form action="{{ route('accept.request') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <input type="hidden" name="category" value="{{ $data->category }}">
                                                    <input type="hidden" name="itemcode" value="{{ $data->itemcode }}">
                                                    <input type="hidden" name="name" value="{{ $data->name }}">
                                                    <input type="hidden" name="description" value="{{ $data->description }}">
                                                    <input type="hidden" name="price" value="{{ $data->price }}">
                                                    <input type="hidden" name="isFurniture" value="{{ $data->isFurniture }}">

                                                    <button type="submit" class="btn btn-success btn-sm"><img src="img/correct.png" width="20px" height="19px"> </button>
                                                </form>
                                                <form action="{{ route('reject.request') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button class="btn btn-danger btn-sm mx-2"><img src="img/X button.png" width="20px" height="21px"></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </card-background>


                    <h1 class="h3 mb-2 text-gray-800">History Request <span class="badge text-bg-primary px-3 py-2 ml-2">Admin</span></h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-5">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Aset</th>
                                            <th>Jenis Aset</th>
                                            <th>Nama Aset</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($historyAdmin as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->category }} </td>
                                            <td> {{ $data->itemcode }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td><strong> {{ $data->user }} </strong></td>
                                            <td> {{ $data->description }} </td>
                                            <td> Rp {{ number_format($data->price, 0, '', '.') }} </td>
                                            @if ($data->status == 1) 
                                                <td><span class="badge text-bg-success px-3 py-2">Accepted</span></td>
                                            @else
                                                <td><span class="badge text-bg-danger px-3 py-2">Rejected</span></td>
                                            @endif
                                            <td width="20px">
                                                <form action="{{ route('delete.request') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </card-background>

                    <h1 class="h3 mb-2 text-gray-800">Request</h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-4">
                        
                        <form action="{{ route('tambah.request') }}" method="POST" class="mt-3">
                            @csrf
                            <section class="row mx-4 mt-3">
                                <label>Tipe aset (Inventaris / Furniture) <span style="color: red;">*</span></label>
                                <select class="form-select" name="isFurniture">
                                    <option value="0" selected>Inventaris</option>
                                    <option value="1">Furniture</option>
                                </select>
                            </section>
                            <section class="row px-4 mt-3">
                                <div class="col">
                                    <label>Kategori Aset <span style="color: red;">*</span></label>
                                        <select class="form-select" name="category">
                                            <option value="G - Gedung & Bangunan">G - Gedung & Bangunan</option>
                                            <option value="K - KBM Operasional">K - KBM Operasional</option>
                                            <option value="P - Peralatan & Perlengkapan">P - Peralatan & Perlengkapan</option>
                                            <option value="I - Inventaris Kantor" selected>I - Inventaris Kantor</option>
                                            <option value="F - Furniture & Fixture">F - Furniture & Fixture</option>
                                            <option value="T - Tower & Fascia">T - Tower & Fascia</option>
                                        </select>
                                  </div>
                                <div class="col">
                                    <label>Jenis Aset <span style="color: red;">*</span></label>
                                        <select class="form-select" name="itemcode" id="itemcode">
                                                @foreach ($dataItem as $item)
                                                    <option value="{{ $item->kodeAset." - ".$item->jenisAset }}">{{ $item->kodeAset." - ".$item->jenisAset }}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </section>
                            <section class="row px-4 mt-3">
                                <div class="col">
                                    <label>Nama Aset <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="name" autocomplete="off">
                                  </div>
                                <div class="col">
                                    <label>Keterangan <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="description" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label>Harga (Rp)<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="price" autocomplete="off">
                                </div>
                            </section>
                            
                                {{-- hidden input --}}
                                <input type="hidden" name="user" value="{{ $user->name }}">
                                <input type="hidden" name="isHistory" value="0">
                                <input type="hidden" name="status" value="1">
                            
                            <div class="form-group px-4 mt-4 mb-5">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </form> 
                        
                        

                    </card-background>





















                    @else
                    <h1 class="h3 mb-2 text-gray-800">Request</h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-4">
                        
                        <form action="{{ route('tambah.request') }}" method="POST" class="mt-3">
                            @csrf
                            <section class="row mx-4 mt-3">
                                <label>Tipe aset (Inventaris / Furniture) <span style="color: red;">*</span></label>
                                <select class="form-select" name="isFurniture">
                                    <option value="0" selected>Inventaris</option>
                                    <option value="1">Furniture</option>
                                </select>
                            </section>
                            <section class="row px-4 mt-3">
                                <div class="col">
                                    <label>Kategori Aset <span style="color: red;">*</span></label>
                                        <select class="form-select" name="category">
                                            <option value="G - Gedung & Bangunan">G - Gedung & Bangunan</option>
                                            <option value="K - KBM Operasional">K - KBM Operasional</option>
                                            <option value="P - Peralatan & Perlengkapan">P - Peralatan & Perlengkapan</option>
                                            <option value="I - Inventaris Kantor" selected>I - Inventaris Kantor</option>
                                            <option value="F - Furniture & Fixture">F - Furniture & Fixture</option>
                                            <option value="T - Tower & Fascia">T - Tower & Fascia</option>
                                        </select>
                                  </div>
                                <div class="col">
                                    <label>Jenis Aset <span style="color: red;">*</span></label>
                                        <select class="form-select" name="itemcode" id="itemcode">
                                                @foreach ($dataItem as $item)
                                                    <option value="{{ $item->kodeAset." - ".$item->jenisAset }}">{{ $item->kodeAset." - ".$item->jenisAset }}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </section>
                            <section class="row px-4 mt-3">
                                <div class="col">
                                    <label>Nama Aset <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="name" autocomplete="off">
                                  </div>
                                <div class="col">
                                    <label>Keterangan <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="description" autocomplete="off">
                                </div>
                                <div class="col">
                                    <label>Harga (Rp)<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="price" autocomplete="off">
                                </div>
                            </section>
                            
                                {{-- hidden input --}}
                                <input type="hidden" name="user" value="{{ $user->name }}">
                                <input type="hidden" name="isHistory" value="0">
                                <input type="hidden" name="status" value="1">
                            
                            <div class="form-group px-4 mt-4 mb-5">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </form> 
                        
                        

                    </card-background>

                    <h1 class="h3 mb-2 text-gray-800">History Request</h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-5">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Aset</th>
                                            <th>Jenis Aset</th>
                                            <th>Nama Aset</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($historyUser as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->category }} </td>
                                            <td> {{ $data->itemcode }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->user }} </td>
                                            <td> {{ $data->description }} </td>
                                            @if ($data->status == 1) 
                                                <td><span class="badge text-bg-success px-3">Accepted</span></td>
                                            @else
                                                <td><span class="badge text-bg-danger px-3">Rejected</span></td>
                                            @endif
                                            <td width="20px">
                                                <form action="{{ route('delete.request') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </card-background>

                    @endif

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
            top: 18px;
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