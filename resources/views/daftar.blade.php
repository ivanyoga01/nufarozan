<!DOCTYPE html>
<html lang="en">
@include('head')

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Umroh</li>
  </ol>

  <div class="row">

    <!-- Article main content -->
    <article class="col-sm-12 maincontent">
      <header class="page-header">
        <h1 class="page-title">Pendaftaran Online</h1>
      </header>

      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      @if (session('error'))
        <div class="alert alert-error">
          {{ session('error') }}
        </div>
      @endif

      <form action="{{ route('daftar.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <label for="" class="col-md-3">No KTP Jamaah</label>
          <div class="col-md-9">
            <input type="text" name="nik" value="" maxlength="16" minlength="16" required class="form-control @error ('nik') is-invalid @enderror" placeholder="No KTP" id="ktp">
            @error ('nik')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Nama Lengkap (Sesuai KTP)</label>
          <div class="col-md-9">
            <input type="text" name="nama" value="" required class="form-control" placeholder="Nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Tempat Lahir</label>
          <div class="col-md-9">
            <input type="text" name="tmp_lahir" value="" required class="form-control" placeholder="Tempat Lahir">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Tanggal Lahir</label>
          <div class="col-md-9">
            <input type="date" name="tgl_lahir" value="" required class="form-control" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Jenis Kelamin</label>
          <div class="col-md-9">
            <label class="radio-inline">
              <input type="radio" value="L" name="jk" required> Laki-laki
            </label>
            <label class="radio-inline">
              <input type="radio" value="P" name="jk" required> Perempuan
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Alamat</label>
          <div class="col-md-9">
            <textarea name="alamat" rows="3" cols="80" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Nama Ayah Kandung</label>
          <div class="col-md-9">
            <input type="text" name="nama_ayah" value="" required class="form-control" placeholder="Nama Ayah Kandung">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Kewarganegaraan</label>
          <div class="col-md-9">
            <label class="radio-inline">
              <input type="radio" value="WNI" name="negara" required> Indonesia
            </label>
            <label class="radio-inline">
              <input type="radio" value="ASING" name="negara" required> Asing
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">No Telepon</label>
          <div class="col-md-9">
            <input type="text" name="nohp" value="" required class="form-control" placeholder="No HP" id="nohp">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Keperluan Pendaftar</label>
          <div class="col-md-9">
            @foreach ($umroh as $umroh)
              <label class="radio-inline">
                <input type="radio" value="{{ $umroh->id }}" name="paket" required> {{ $umroh->nama }}
              </label>
            @endforeach
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-md-3">Rencana Perjalanan Ibadah Umroh</label>
          <div class="col-md-9">
            <input type="month" name="rencana" value="<?= date('Y-m', strtotime("+1 Month")) ?>" required class="form-control" placeholder="No HP" min="<?= date('Y-m', strtotime("+1 Month")) ?>" >
          </div>
        </div>
        <div class="form-group row">
          <label for="">Melalui formulir ini menyatakan dengan ikhlas berniat untuk mendaftarkan diri sebagai peserta ibadah </label>
          <label class="radio-inline">
            <input type="radio" value="UMROH" name="ibadah" required> Umroh
          </label>
          <label class="radio-inline">
            <input type="radio" value="HAJI" name="ibadah" required> Haji
          </label>
          <label for=""> (Pilih Salah Satu)</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </article>
    <!-- /Article -->

  </div>
</div>	<!-- /container -->


@include('footer')

<script type="text/javascript">
// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter, errMsg) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
    textbox.addEventListener(event, function(e) {
      if (inputFilter(this.value)) {
        // Accepted value
        if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
          this.classList.remove("input-error");
          this.setCustomValidity("");
        }
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        // Rejected value - restore the previous one
        this.classList.add("input-error");
        this.setCustomValidity(errMsg);
        this.reportValidity();
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        // Rejected value - nothing to restore
        this.value = "";
      }
    });
  });
}
setInputFilter(document.getElementById("nohp"), function(value) {
  return /^-?\d*$/.test(value); }, "Must be an integer");
  setInputFilter(document.getElementById("ktp"), function(value) {
    return /^-?\d*$/.test(value); }, "Must be an integer");
  </script>
  </html>
