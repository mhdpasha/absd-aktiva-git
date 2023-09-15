@extends('layouts.main')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">


                    @if ($user == 'admin')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Incoming Request</h1>
                    <p></p>
                    <p></p>
                    
                    <!-- DataTales Example -->
                    <card-background class="card shadow mb-5" data-aos="fade-down" data-aos-delay="0" data-aos-duration="800">
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
                                            <td> {{ $data->user }} </td>
                                            <td> {{ $data->description }} </td>
                                            <td class="d-flex justify-content-center">
                                                <button class="btn btn-success btn-sm"><img src="img/correct.png" width="20px" height="19px"> </button>
                                                <button class="btn btn-danger btn-sm mx-2"><img src="img/X button.png" width="20px" height="21px"></button>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </card-background>


                    <h1 class="h3 mb-2 text-gray-800">History Request</h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-5" data-aos="fade-down" data-aos-delay="0" data-aos-duration="800">
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($history as $data)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $data->category }} </td>
                                            <td> {{ $data->itemcode }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->user }} </td>
                                            <td> {{ $data->description }} </td>
                                            @if ($data->status == 1) 
                                                <td><span class="badge text-bg-success">Accepted</span></td>
                                            @else
                                                <td><span class="badge text-bg-danger">Rejected</span></td>
                                            @endif
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </card-background>

                    @else
                    <h1 class="h3 mb-2 text-gray-800">Request</h1>
                    <p></p>
                    <p></p>

                    <card-background class="card shadow mb-4" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
                        
                        <form class="mt-3">
                            <section class="row px-4 mt-3">
                                <div class="col">
                                    <label for="exampleInputNamaBarang">Nama Barang <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Input nama barang">
                                  </div>
                                <div class="col">
                                    <label for="exampleInputKeterangan">Keterangan <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Input keterangan">
                                </div>
                            </section>
                            <section class="row mx-4 mt-3">
                                <label for="exampleInputUser">User <span style="color: red;">*</span></label>
                                <select class="form-control">
                                    <option value=" {{ $user }} "> {{ $user }} </option>
                                </select>
                            </section> 
                        </form> 
                        
                        <div class="form-group px-4 mt-4 mb-5">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
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
@endsection