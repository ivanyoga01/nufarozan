@extends('admin.main')

@section('card')
  <br>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    <br>
  @endif

  @if (session('error'))
    <div class="alert alert-error">
      {{ session('error') }}
    </div>
    <br>
  @endif

  <div class="card">
    <div class="card-body">
      <a data-toggle="modal" data-target="#Add" class="btn btn-success">Tambah Paket Umroh</a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Biaya</th>
            <th>Durasi</th>
            <th>Hotel</th>
            <th>Keberangkatan</th>
            <th>Maskapai</th>
            <th>img</th>
            <th></th>
          </thead>
          <tbody>
            @foreach ($umrohs as $key => $umroh)
              <tr>
                <td>{{ ($key+1) }}</td>
                <td>{{ $umroh->nama }}</td>
                <td>Rp. {{ number_format($umroh->biaya,0,",",".") }},-</td>
                <td>{{ $umroh->durasi }}</td>
                <td>
                  @for ($i = 0; $i < 5; $i++)
                    @if ($i < $umroh->hotel)
                      <i class="fa fa-star" aria-hidden="true"></i>
                    @else
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    @endif
                  @endfor
                </td>
                <td>{{ $umroh->keberangkatan }}</td>
                <td>{{ $umroh->maskapai }}</td>
                <td><img class="" src="img/{{ $umroh->img }}" alt="Card image cap" style="width: 100px; height: 100px;"></td>
                <td>
                  <a data-toggle="modal" data-target="#Edit{{ $umroh->id }}" class="btn btn-primary">Edit</a>
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('paket.destroy', $umroh->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
@endsection

@section('modal')
  <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Tambah Paket Umroh</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('paket.store') }}" method="post">
            @csrf
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Nama Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="text" name="nama" value="" required class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Biaya Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="number" name="biaya" value="" required class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Durasi Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="text" name="durasi" value="" required class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Hotel Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="number" name="hotel" value="" required class="form-control" min="1" max="5">
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Keberangkatan Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="text" name="keberangkatan" value="" required class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Maskapai Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="text" name="maskapai" value="" required class="form-control">
              </div>
            </div>
            {{-- <div class="row form-group">
              <label class="control-label col-md-2 col-sm-2 col-2">Gambar Paket</label>
              <div class="col-md-10 col-sm-10 col-10">
                <input type="file" name="img" value="{{ old('img', $umroh->img) }}" class="form-control">
              </div>
            </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  @foreach ($umrohs as $key => $umroh)
    <div class="modal fade" id="Edit{{ $umroh->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" >Edit Paket Umroh</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('paket.update', $umroh->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Nama Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="text" name="nama" value="{{ old('nama', $umroh->nama) }}" required class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Biaya Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="number" name="biaya" value="{{ old('biaya', $umroh->biaya) }}" required class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Durasi Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="text" name="durasi" value="{{ old('durasi', $umroh->durasi) }}" required class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Hotel Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="number" name="hotel" value="{{ old('hotel', $umroh->hotel) }}" required class="form-control" min="1" max="5">
                </div>
              </div>
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Keberangkatan Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="text" name="keberangkatan" value="{{ old('keberangkatan', $umroh->keberangkatan) }}" required class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Maskapai Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="text" name="maskapai" value="{{ old('maskapai', $umroh->maskapai) }}" required class="form-control">
                </div>
              </div>
              {{-- <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2 col-2">Gambar Paket</label>
                <div class="col-md-10 col-sm-10 col-10">
                  <input type="file" name="img" value="{{ old('img', $umroh->img) }}" class="form-control">
                </div>
              </div> --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  @endforeach
@endsection
