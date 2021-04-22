<span class="d-block p-2 bg-info text-white">
  <h3 style="text-align: center">Daftar Pegawai</h3>
</span><br>
<div class="container">
  <a class="btn btn-outline-info" href="/tambah-pegawai"> Tambah</a>
</div><br>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      text-align: center;
    }
    /* h1 {
      font-family: arial, sans-serif;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    } */
    </style>
<div class="container">
<table class="table table-info">
  <thead class="thead-dark">
    <tr>
    <th>NIP</th>
    <th>Nama Pegawai</th>
    <th>Alamat</th>
    <th>ACTION</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr >
            <td class="alert alert-danger" role="alert" colspan="4">Data kosong</td>
        </tr>
    @endif
        @foreach($data as $j)
        <tbody>
        <tr>
            <td>{{ $j->nip}}</td> 
            <td>{{ $j->nama_pegawai}}</td> 
            <td>{{ $j->alamat}}</td>
            <td>
                <a class="btn btn-outline-warning" href="/ubah-pegawai/{{$j->id}}">Edit</a>
                <a class="btn btn-outline-danger" href="/hapus-pegawai/{{$j->id}}"> Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
  </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>