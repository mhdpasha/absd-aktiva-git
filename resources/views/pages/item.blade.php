@extends('layouts.main', ['notification' => $dataRequest, 'caption' => $request])
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Item Code</h1>
                    <p></p>
                    <p></p>

                    <!-- Modal -->
                    @include('partials.assets.formItem')

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10px">No</th>
                                            <th width="200px">Kode Aset</th>
                                            <th width="200px">Jenis Aset</th>
                                            <th width="600px">Display</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach ($itemInventaris as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->kodeAset }} </td>
                                            <td> {{ $data->jenisAset }} </td>
                                            <td> {{ $data->kodeAset." - ".$data->jenisAset}}</td>
                                            <td class="d-flex justify-content-center items-center"">
                                                <form action="{{ route('delete.itemcode') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                                </form>
            
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#itemEdit{{ $data->id }}" class="btn btn-warning btn-sm mx-2">
                                                    <img src={{ asset("img/edit.png") }} width="20px" height="21px">
                                                </a>

                                                <form action="/update-item/{{ $data->id }}" method="POST">
                                                    @csrf
                                                    <div class="modal fade" id="itemEdit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                        <input class="form-control" type="text" name="kodeAset" autocomplete="off" value="{{ $data->kodeAset }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <label for="kodeAset">Jenis Aset</label>
                                                                        <input class="form-control" type="text" name="jenisAset" autocomplete="off" value="{{ $data->jenisAset }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                <br>
                                <hr class="my-4" style="border: 1px solid rgba(0, 0, 0, 0.5); border-radius: 20px">
                                <br>

                                <table class="table table-bordered text-center" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10px">No</th>
                                            <th width="200px">Kode Aset</th>
                                            <th width="200px">Jenis Aset</th>
                                            <th width="600px">Display</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach ($itemFurniture as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->kodeAset }} </td>
                                            <td> {{ $data->jenisAset }} </td>
                                            <td> {{ $data->kodeAset." - ".$data->jenisAset}}</td>
                                            <td class="d-flex justify-content-center items-center"">
                                                <form action="{{ route('delete.itemcode') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                                </form>
            
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#itemEdit{{ $data->id }}" class="btn btn-warning btn-sm mx-2">
                                                    <img src={{ asset("img/edit.png") }} width="20px" height="21px">
                                                </a>

                                                <form action="/update-item/{{ $data->id }}" method="POST">
                                                    @csrf
                                                    <div class="modal fade" id="itemEdit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                        <input class="form-control" type="text" name="kodeAset" autocomplete="off" value="{{ $data->kodeAset }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <label for="kodeAset">Jenis Aset</label>
                                                                        <input class="form-control" type="text" name="jenisAset" autocomplete="off" value="{{ $data->jenisAset }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                
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