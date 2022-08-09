@extends('admin.main')

@section('card')
  <br>
  <div class="row card col">
    <div class="card-body">
      <table class="table">
        <thead>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Hp</th>
          <th>Rencana</th>
          <th>Paket</th>
          <th>Ibadah</th>
        </thead>
        <tbody>
          @foreach ($daftars as $key => $daftar)
            <tr>
              <td>{{ ($key+1) }}</td>
              <td>{{ $daftar->nama }}</td>
              <td>{{ $daftar->alamat }}</td>
              <td>{{ $daftar->nohp }}</td>
              <td>{{ date('F Y', strtotime($daftar->rencana)) }}</td>
              <td>{{ $daftar->umroh->nama }}</td>
              <td>{{ $daftar->ibadah }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
