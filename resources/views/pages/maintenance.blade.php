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
                                <table class="table table-bordered text-center" id="dataTableExport" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10px">No</th>
                                            <th width="20px">Tipe</th>
                                            <th>Kategori Aset</th>
                                            <th>Jenis Aset</th>
                                            <th>Nama Aset</th>
                                            <th>Tanggal Perolehan</th>
                                            <th>Harga</th>
                                            <th>User</th>
                                            <th>Keterangan</th>
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
                                            <td>{{ $data->user->name?? "Deleted User" }}</td>
                                            <td>{{ $data->description }}</td>
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