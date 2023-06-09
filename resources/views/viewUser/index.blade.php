<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/js/bootstrap.js">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.0-alpha1-dist/js/popper.min.js">
    </head>
    <body>
        
<nav class="navbar navbar-expand-lg bg-green" >
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Dashboard Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href= "#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Parkir Mall
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mall 1</a></li>
            <li><a class="dropdown-item" href="#">Mall 2</a></li>
            <li><a class="dropdown-item" href="#">Mall 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pegawai">Data Petugas</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>



@extends('layouts.master')
@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif




        <div class="row">
            <div class="col-6">
                <h1>DATA PEGAWAI</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Petugas
                </button>

            </div>
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Mall</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_user as $user)
                <tr>
                    <td>{{$user->id_user}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->mall}}</td>
                    <td>
                        <a href="/pegawai/{{$user->id_user}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/pegawai/{{$user->id_user}}/delete" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah anda yakin ingin menghapus?')">Delete</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/pegawai/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username"
                    value="{{old('username')}}">
                    @error('username')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password"
                    value="{{old('password')}}">
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" name="role" id="exampleFormControlSelect1">
                    <option value="Petugas Masuk">Petugas Masuk</option>
                    <option value="Petugas Ruang">Petugas Ruang</option>
                    <option value="Petugas Keluar">Petugas Keluar</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect2">Mall</label>
                <select class="form-control" name="mall" id="exampleFormControlSelect1">
                    <option value="Mall 01">Mall 01</option>
                    <option value="Mall 02">Mall 02</option>
                    <option value="Mall 03">Mall 03</option>
                </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection

