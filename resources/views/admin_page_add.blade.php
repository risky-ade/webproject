@extends("layouts/main")
@section('container')
		<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                    @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Tambah Halaman</h4>
							<hr />
							<div class="row-fluid">
								<div class="span12">
								<form>
									<div class="span8">
										<label>Judul</label>
										<input type="text" placeholder="Ketikkan Judul.." class="input-xxlarge" />
										<label>Permalink</label>
										<input type="text" placeholder="isi permalink.." class="span5" />
										<label>Foto</label>
										<input type="file" class="span5" placeholder="Pilih gambar" />
										<hr />
										<textarea class="ckeditor" name="editor-post"></textarea>

									</div>
									<div class="span4">
											<table class="table table-hover">
												<thead>
													<tr>
														<td colspan="2">Status Posting</td>
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


		<script src="js/ckeditor/ckeditor.js"></script>

@endsection
