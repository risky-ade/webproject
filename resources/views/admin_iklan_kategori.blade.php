@extends("layouts/main")
@section('container')
		<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                    @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Kategori Iklan</h4>
							<hr />
							<div class="row-fluid">
								<div class="span12">
								<form>
									<div class="span4">
										<form class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputIklan">Nama Kategori</label>
											<div class="controls">
											<input type="text" id="inputIklan" placeholder="kategori iklan" name="nama_kategori">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputKet">Keterangan</label>
											<div class="controls">
											<input type="password" id="inputKet" placeholder="Keterangan">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn">Tambah</button>
											</div>
										</div>
										</form>
									</div>
									<div class="span8">
										<table class="table table-hover">
										<thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td>No</td>
												<td>Nama Kategori</td>
												<td>Keterangan</td>
												<td colspan="2">Aksi</td>
											</tr>

										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td><a href="">1</a></td>
												<td><a href="">Editor</a></td>
												<td><a href="">Kriminal</a></td>
												<td colspan="2">
												<p><a href=""><span class="label label-info">View</span></a></p>
												<p><a href=""><span class="label label-warning">Edit</span></a></p>
												<p><a href=""><span class="label label-important">Hapus</span></a></p>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td><a href="">1</a></td>
												<td><a href="">Editor</a></td>
												<td><a href="">Kriminal</a></td>
												<td colspan="2">
												<p><a href=""><span class="label label-info">View</span></a></p>
												<p><a href=""><span class="label label-warning">Edit</span></a></p>
												<p><a href=""><span class="label label-important">Hapus</span></a></p>
												</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="radio" value="pilihsemua" /></td>
												<td><a href="">1</a></td>
												<td><a href="">Editor</a></td>
												<td><a href="">Kriminal</a></td>
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
		</div>

		<footer align="center">
			<h5>&copy; WEBNEWS - Powered by webnews Media</h5>
		</footer>
@endsection
