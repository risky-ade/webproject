@extends("layouts/main")
@section('container')
		<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                    @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Edisi Cetak <a href=""><span class="label label-important">Tambah</span></a></h4>
							<hr />
							<div class="row-fluid">
							<div class="span12">
								<a href="">All (13)</a> | <a href="">Published (14)</a>
							</div>
							</div>

							<div class="row-fluid">
								<div class="span12">
									<div class="row-fluid">
										<div class="span3">
											<form>
												<select name="aksi" class="span8">
													<option value="">-Pilih Aksi-</option>
													<option value="">Edit</option>
													<option value="">Hapus</option>
												</select>
												<input class="btn btn-info btn-mini"type="submit" value="Terapkan" />
											</form>
										</div>
										<div class="span6">
											<form>
												<select name="aksi" class="span5">
													<option value="">Show All date</option>
													<option value="">Edit</option>
													<option value="">Hapus</option>
												</select>
												<select name="aksi" class="span5">
													<option value="">View All Categories</option>
													<option value="">Edit</option>
													<option value="">Hapus</option>
												</select>
												<input class="btn btn-info btn-mini"type="submit" value="Filter" />
											</form>
										</div>
										<div class="span3">
											<form class="form-search">
											<div class="input-append">
												<input type="text" class="span8 search-query" placeholder="Cari Artikel..">
												<button type="submit" class="btn"><span class="icon-search"></span></button>
											</div>
											</form>
										</div>

									</div>
								</div>



							</div>


							<div class="row-fluid">
								<div class="span12">
									<table class="table table-hover">
										<thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td>Judul Edisi</td>
												<td>Tanggal Terbit</td>
												<td>Foto</td>
												<td colspan="2">Aksi</td>
											</tr>

										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td><a href="">Event Terbaru</td>
												<td>12/11/2012</td>
												<td><a href=""><img src="img/imagesite/admin/event.jpg" width="50" width="100" /></a></td>
												<td colspan="2">
												<p><a href=""><span class="label label-info">View</span></a></p>
												<p><a href=""><span class="label label-warning">Edit</span></a></p>
												<p><a href=""><span class="label label-important">Hapus</span></a></p>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

		<footer align="center">
			<h5>&copy; WEBNEWS - Powered by webnews Media</h5>
		</footer>

@endsection
