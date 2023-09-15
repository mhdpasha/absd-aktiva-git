@extends('layouts.main')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Maintenance</h1>
                    <p></p>
                    <p></p>

                    <!-- Modal -->
                    @include('partials.assets.formMaintenance')

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Barang</th>
                                            <th>Kategori</th>
                                            <th>Koneksi</th>
                                            <th>Computer Name/IP</th>
                                            <th>Sharing</th>
                                            <th>Tgl Inventaris</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>HW-001/UBINFRA/2022</td>
                                            <td>01</td>
                                            <td>Printer</td>
                                            <td>USB</td>
                                            <td>ABSD-BC-PC</td>
                                            <td>YA</td>
                                            <td>2023-03-23</td>
                                            <td>Kantor Korporat, General Affair, Lantai Basement</td>
                                            <td>Printer gaming</td>
                                            <td class="d-flex">
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                <button class="btn btn-warning btn-sm mx-2"><img src="img/edit.png" width="20px" height="21px"></button>
                                                <button class="btn btn-primary btn-sm"><img src="img/Vector.png" width="20px" height="19px"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HW-002/UBINFRA/2022</td>
                                            <td>02</td>
                                            <td>Printer</td>
                                            <td>USB</td>
                                            <td>ABSD-BC-PC</td>
                                            <td>YA</td>
                                            <td>2023-03-23</td>
                                            <td>Kantor Korporat, General Affair, Lantai Basement</td>
                                            <td>Printer gaming</td>
                                            <td class="d-flex">
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                <button class="btn btn-warning btn-sm mx-2"><img src="img/edit.png" width="20px" height="21px"></button>
                                                <button class="btn btn-primary btn-sm"><img src="img/Vector.png" width="20px" height="19px"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HW-003/UBINFRA/2022</td>
                                            <td>03</td>
                                            <td>Printer</td>
                                            <td>USB</td>
                                            <td>ABSD-BC-PC</td>
                                            <td>YA</td>
                                            <td>2023-03-23</td>
                                            <td>Kantor Korporat, General Affair, Lantai Basement</td>
                                            <td>Printer gaming</td>
                                            <td class="d-flex">
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                <button class="btn btn-warning btn-sm mx-2"><img src="img/edit.png" width="20px" height="21px"></button>
                                                <button class="btn btn-primary btn-sm"><img src="img/Vector.png" width="20px" height="19px"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HW-004/UBINFRA/2022</td>
                                            <td>04</td>
                                            <td>Printer</td>
                                            <td>USB</td>
                                            <td>ABSD-BC-PC</td>
                                            <td>YA</td>
                                            <td>2023-03-23</td>
                                            <td>Kantor Korporat, General Affair, Lantai Basement</td>
                                            <td>Printer gaming</td>
                                            <td class="d-flex">
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                <button class="btn btn-warning btn-sm mx-2"><img src="img/edit.png" width="20px" height="21px"></button>
                                                <button class="btn btn-primary btn-sm"><img src="img/Vector.png" width="20px" height="19px"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HW-005/UBINFRA/2022</td>
                                            <td>05</td>
                                            <td>Printer</td>
                                            <td>USB</td>
                                            <td>ABSD-BC-PC</td>
                                            <td>YA</td>
                                            <td>2023-03-23</td>
                                            <td>Kantor Korporat, General Affair, Lantai Basement</td>
                                            <td>Printer gaming</td>
                                            <td class="d-flex">
                                                <button class="btn btn-danger btn-sm"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                <button class="btn btn-warning btn-sm mx-2"><img src="img/edit.png" width="20px" height="21px"></button>
                                                <button class="btn btn-primary btn-sm"><img src="img/Vector.png" width="20px" height="19px"></button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
@endsection