@extends("layouts/main")
@section('container')

	<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Selamat Datang Admin</h4>
							<hr />
							<div class="row-fluid">
								<div class="span6">
									<table class="table table-hover">
										<thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
											<tr>
												<td>Item</td>
												<td>Jumlah</td>
											</tr>

										</thead>
										<tbody>
											<tr>
												<td><a href="">Posting</a></td>
												<td><span class="badge badge-info">900</span></td>
											</tr>
											<tr>
												<td><a href="">Page</a></td>
												<td><span class="badge badge-info">9</span></td>
											</tr>
											<tr>
												<td><a href="">Foto</a></td>
												<td><span class="badge badge-info">88</span></td>
											</tr>
											<tr>
												<td><a href="">Video</a></td>
												<td><span class="badge badge-info">10</span></td>
											</tr>
											<tr>
												<td><a href="">Polling</a></td>
												<td><span class="badge badge-info">4</span></td>
											</tr>
											<tr>
												<td><a href="">Event</a></td>
												<td><span class="badge badge-info">30</span></td>
											</tr>
											<tr>
												<td><a href="">FlipBoard</a></td>
												<td><span class="badge badge-info">5</span></td>
											</tr>
											<tr>
												<td><a href="">Lowker</a></td>
												<td><span class="badge badge-info">50</span></td>
											</tr>
											<tr>
												<td><a href="">Aspirasi</a></td>
												<td><span class="badge badge-info">80</span></td>
											</tr>
											<tr>
												<td><a href="">Edisi Cetak</a></td>
												<td><span class="badge badge-info">9</span></td>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="span6">
									<table class="table table-hover">
										<thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
											<tr>
												<td>Item</td>
												<td>Action</td>
											</tr>

										</thead>
										<tbody>
											<tr>
												<td><a href="">User</a></td>
												<td><a href=""><span class="label label-info">Atur User</span></a></td>
											</tr>
											<tr>
												<td><a href="">Setting</a></td>
												<td><a href=""><span class="label label-info">Atur Settingan</span></a></td>
											</tr>
											<tr>
												<td><a href="">Iklan</a></td>
												<td><a href=""><span class="label label-info">Atur Iklan</span></a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>

@endsection
