@extends('layout.main')

@section('content')

<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
        <a class="navbar-brand" href="admin">E-Sarpras DTEDI SV UGM</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @guest('admin')
                <li class="nav-item">
                  <a href="#"
                      class="nav-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Beranda</a>
              </li>
              <li class="nav-item">
                  <a href="#sarpras" class="nav-link">&emsp;&emsp;&emsp;&emsp;Sarana dan Prasarana</a>
              </li>
              <li class="nav-item">
                  <a href="#panduan" class="nav-link">&emsp;&emsp;Panduan Peminjaman</a>
              </li>
              <li class="nav-item">
                  <a href="#lokasi" class="nav-link">&emsp;&emsp;Lokasi</a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('admin.login') }}" class="nav-link">&emsp;&emsp;&emsp;Login</a>
              </li>
                    @else
                    @can('role',['admin'])
                    <li class="nav-item">
                      <a href="#" class="nav-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a href="#sarpras" class="nav-link">&emsp;&emsp;&emsp;&emsp;Sarana dan Prasarana</a>
                </li>
                <li class="nav-item">
                  <a href="#panduan" class="nav-link">&emsp;&emsp;Panduan Peminjaman</a>
              </li>
              <li class="nav-item">
                <a href="#lokasi" class="nav-link">&emsp;&emsp;Lokasi</a>
            </li>
                    @endcan
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                            href={{ url('students') }}>Dashboard</a>
                            <a href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">Logout</a>
                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
  </nav>
    {{-- Navbar --}}
    <div class="ay"></div>
    {{-- End --}}
    <p class="c" style="  position: absolute;
width: 553px;
height: 61.8px;
left: 200px;
top: 60px;

font-family: 'Inter';
font-style: normal;
font-weight: 800;
font-size: 30px;
line-height: 58px;

color: #0E094D;">Data Mahasiswa</p>
    <h3>DataTable User</h3>
    <div class="card" style=" width:1100px; left:200px">
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
