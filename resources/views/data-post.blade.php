@extends('template')
@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">E-Sarpras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == 'home' ? 'active' : '' }}"
                            aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment('1') == 'students' ? 'active' : '' }}"
                            href={{ url('students') }}>Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment('1') == 'home' ? 'active' : '' }}"
                            href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment('1') == 'home' ? 'active' : '' }}">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End --}}
    <h3>Data Student</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
                <i class="fas fa-plus-circle"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Students</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->idstudents }}</td>
                            <td>{{ $row->fullname }}</td>
                            <td>{{ $row->gender == 'M' ? 'Male' : 'Female' }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->emailaddress }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <button onclick="window.location='{{ url('students/'.$row->idstudents) }}'" 
                                type="button" class="btn btn-sm btn-info" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->fullname }}')" style="display: inline" method="POST" action="{{ url('students/'.
                                $row->idstudents) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(name){
            pesan = confirm(`Yakin data students dengan nama ${name} ini dihapus ?`);
            if(pesan) return true;
            else return false;
        }
    </script>
@endsection