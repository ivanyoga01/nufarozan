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
				<h1 class="page-title">Paket Umroh Tersedia</h1>
			</header>
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

		</article>
		<!-- /Article -->

	</div>
</div>	<!-- /container -->


@include('footer')
</html>
