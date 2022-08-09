<!DOCTYPE html>
<html lang="en">
@include('head')


<!-- Header -->
<header id="head">
	<div class="container">
		<div class="row">
			<h1 class="lead">PT. NUFAROZAN WISATA MUBAROK</h1>
			<p class="tagline">Umrah Mudah Sesuai Syariah</p>
		</div>
	</div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
	<br> <br>
	<h2 class="thin">Memberikan Fasilitas & Pelayanan yang terbaik demi kenyamanan Ibadah Anda.</h2>
	<br>
	<div class="row">
		<div class="col-md-4 col-4 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/01.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-4 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/02.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-4 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/03.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
	<div class="container">

		<h2 class="text-center ">Paket Umroh Tersedia</h2>

		<div class="row">
			@foreach ($umroh as $umroh)
				<div class="col-md-4 col-sm-12 col-12 col-xs-12 highlight">
					<div class="panel">
						<div class="panel-body">
							<div class="text-center">
								<img class="" src="img/{{ $umroh->img }}" alt="Card image cap">
							</div>
							<h2>{{ $umroh->nama }}</h2>
							<table class="table card-text">
								<tr>
									<td><i class="fa fa-money" aria-hidden="true"></i></td>
									<td>Biaya</td>
									<td class="text-right">Rp. {{ number_format($umroh->biaya,0,",",".") }},-</td>
								</tr>
								<tr>
									<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
									<td>Durasi Paket</td>
									<td class="text-right">{{ $umroh->durasi }}</td>
								</tr>
								<tr>
									<td><i class="fa fa-building-o" aria-hidden="true"></i></td>
									<td>Hotel</td>
									<td class="text-right">
										@for ($i = 0; $i < 5; $i++)
											@if ($i < $umroh->hotel)
												<i class="fa fa-star" aria-hidden="true"></i>
											@else
												<i class="fa fa-star-o" aria-hidden="true"></i>
											@endif
										@endfor
									</td>
								</tr>
								<tr>
									<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
									<td>Keberangkatan</td>
									<td class="text-right">{{ $umroh->keberangkatan }}</td>
								</tr>
								<tr>
									<td><i class="fa fa-plane" aria-hidden="true"></i></td>
									<td>Maskapai Penerbangan</td>
									<td class="text-right">{{ $umroh->maskapai }}</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- /col -->
			@endforeach
		</div> <!-- /row  -->

	</div>
</div>
<!-- /Highlights -->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
	<div class="container">

		<h2 class="text-center">Mengapa Harus Kami ?</h2>
		<div class="row">
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/002-legal-paper.png" alt="" class="img-responsive center-block"></i>Terpercaya</h4></div>
				<div class="h-body text-center">
					<p>Resmi terdaftar di Kementrian Agama Republik Indonesia dengan izin Umrah No.263 th.2018</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/003-trust.png" alt="" class="img-responsive center-block"></i>Sesuai Syariat Islam</h4></div>
				<div class="h-body text-center">
					<p>Semua kegiatan yang dilakukan mulai dari Manasik hingga Ibadah Umrah atau Haji InsyaAllah sesuai Al-Quran dan As-sunnah</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/005-cooperation.png" alt="" class="img-responsive center-block"></i>Kajian Agama selama di Saudi</h4></div>
				<div class="h-body text-center">
					<p>Aktifitas Jemaah selama di Saudi akan dipenuhi dengan kajian Majelis ilmu</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/007-indonesia.png" alt="" class="img-responsive center-block"></i>Muthawif dan Tim Lapangan di Saudi adalah Orang Indonesia yang berizin tinggal resmi di Saudi</h4></div>
				<div class="h-body text-center">
					<p>Pembimbing Muthawif yang keilmuannya InsyaAllah sesuai dengan Al-Quran dan As-sunnah</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/008-guide.png" alt="" class="img-responsive center-block"></i>Pembimbing Umrah atau Haji Profesional & Berpengalaman</h4></div>
				<div class="h-body text-center">
					<p>InsyaAllah akan dibimbing dengan Pembimbing sesuai Sunnah yang amanah, berkompeten dan berpengalaman di bidangnya selama bertahun-tahun</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/009-hotel.png" alt="" class="img-responsive center-block"></i>Fasilitas Nyaman dan Baik</h4></div>
				<div class="h-body text-center">
					<p>Menggunakan Fasilitas yang terbaik | untuk para Jemaah kami : penerbangan berstandar IATA, Transportasi BUS Full AC & Nyaman, Hotel berbintang yang dekat dengan Masjidil Haram & Masjid Nabawi</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption"><h4><i><img src="img/001-united-arab-emirates.png" alt="" class="img-responsive center-block"></i>Team LA Lapangan di Saudi berizin resmi di Kementrian Haji & Umrah Saudi</h4></div>
				<div class="h-body text-center">
					<p>Bekerjasama dengan Muasasah yang berizin Resmi di Kementrian (Haji & Umrah) di Saudi sebagai Penyedia Jasa LA (Land Arrangement)</p>
				</div>
			</div>
		</div> <!-- /row  -->

	</div>
</div>
<!-- /Highlights -->

<!-- container -->
<div class="container">

	<h2 class="text-center top-space">Alur Pendaftaran Umroh PT. Nufarozan Wisata Mubarok</h2>
	<br>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<!-- <div class="table-responsive"> -->
			<table class="table table-striped">
				<tr>
					<td>1.</td>
					<td>Klik daftar sekarang</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Isi form dengan benar dan lengkap</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Membayarkan DP ke rekening yang tertera</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Konfirmasi ke admin dengan menyertakan bukti pembayaran</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Cek email untuk balasan admin dan nomor wa akan di masukkan ke grup keberangkatan</td>
				</tr>
			</table>
			<!-- </div> -->
		</div>
	</div> <!-- /row -->

</div>	<!-- /container -->

<div class="container">
	<h2 class="text-center top-space">Gallery</h2>
	<br>
	<div class="row">
		<div class="col-md-3 col-3 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/01.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-3 col-3 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/02.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-3 col-3 col-xs-12">
			<div class="panel">
				<div class="panel-body text-center">
					<img src="img/03.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>



@include('footer')
</html>
