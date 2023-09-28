@extends('layouts.main', ['notification' => $dataRequest, 'caption' => $request])
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>
        <p></p>
        <p></p>

        <!-- Modal -->
        @include("partials.assets.formUser")

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTableMin" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th width="300px">Nama</th>
                                <th width="200px">Username</th>
                                <th width="300px">Email</th>
                                <th width="150px">Kode Cabang</th>
                                <th width="150px">Akses</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->kode_cabang }}</td>
                                @if ($user->isAdmin == 1)
                                    <td><span class="badge text-bg-primary px-3 py-2">Admin</span></td>
                                @else
                                    <td><span class="badge text-bg-light px-3 py-2 border border-dark">User</span></td>
                                @endif
                                <td class="d-flex justify-content-center items-center">
                                    <form action="{{ route('delete.user') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete"><img src={{ asset("img/trash-2.png") }} width="20px" height="19px"></button>
                                    </form>
                                    
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