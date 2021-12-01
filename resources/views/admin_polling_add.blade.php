@extends("layouts/main")
@section('container')

		<div class="container-fluid contenadmin">
			<div class="row-fluid">
				<div class="span3">
                    @include('partials/tab_admin')
				<div class="span9">
					<div class="konten">
							<h4>Tambah Polling</h4>
							<hr />
							<div class="row-fluid">
								<div class="span8">
								<form>
										<label>Nama Polling</label>
										<input type="text" placeholder="Nama Polling" class="input-xxlarge" />
										<label>Tanggal</label>
										<input type="text" id="datepicker" placeholder="Pilih tanggal.." />
										<label>Pilihan</label>
										<input type="text" placeholder="Pilihan" />
							</form>
							</div>
							<div class="span4">
								<table class="table table-hover">
												<thead>
													<tr>
														<td colspan="2">Status Polling</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Date Published : </td>
														<td>22 Agustus 2012 <a href="">Edit</a></td>
													</tr>
													<tr>
														<td><button type="submit" class="btn btn-warning disabled">Hapus</button></td>
														<td><button type="submit" class="btn btn-primary">Simpan</button></td>
													</tr>
												</tbody>
											</table>
							</div>
					</div>
				</div>
			</div>
		</div>

		<footer align="center">
			<h5>&copy; WEBNEWS - Powered by webnews Media</h5>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

			<script src="js/jquery.js"></script>
			<script src="js/jquery-ui.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
		<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
		</script>

@endsection
