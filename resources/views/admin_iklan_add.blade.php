@extends("layouts/main")
@section('container')
		<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                    @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Tambah Iklan</h4>
							<hr />
							<div class="row-fluid">
								<div class="span12">
								<form>
									<div class="span8">
										<label>Nama Iklan</label>
										<input type="text" placeholder="Ketikkan Judul.." class="input-xxlarge" />
										<label>File Iklan</label>
										<input type="file" class="span5" placeholder="Pilih iklan" />
										<hr />
										<textarea class="ckeditor" name="editor-post"></textarea>

									</div>
									<div class="span4">
											<table class="table table-hover">
												<thead>
													<tr>
														<td colspan="2">Status Iklan</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Status : </a></td>
														<td>Published <a href="">Edit</td>
													</tr>
													<tr>
														<td>Visibility : </a></td>
														<td>Public <a href="">Edit</td>
													</tr>
													<tr>
														<td>Date Published : </a></td>
														<td>22 Agustus 2012 <a href="">Edit</td>
													</tr>
													<tr>
														<td><button type="submit" class="btn btn-warning disabled">Hapus</button></td>
														<td><button type="submit" class="btn btn-primary">Simpan</button></td>
													</tr>
												</tbody>
											</table>
											<hr />
											<label>Kategori:</label>
											<div class="kategori">
											<input type="checkbox" name="kategori" value="1" />  Kriminal<br />
											<input type="checkbox" name="kategori" value="1" />  Politik<br />
											<input type="checkbox" name="kategori" value="1" />  Misteri<br />
											<input type="checkbox" name="kategori" value="1" />  Sepakbola<br />
											<input type="checkbox" name="kategori" value="1" />  Saintek<br />
											<input type="checkbox" name="kategori" value="1" />  Lain-Lain<br />
											</div>
									</div>
								</div>
							</form>
							</div>


							<div class="row-fluid">
								<div class="span12">

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
