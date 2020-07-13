const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		'title': 'Berhasil',
		'text': 'Transaksi berhasil dicancel',
		// 'type': 'success'
	});
}

$('#btnCancel').on('click', function (e) {
	e.preventDefault();
	// const href = $(this).attr('href');
	// const idCancel = $(this).data('cancel');
	const idCancel = $(this).attr('data-cancel');
	Swal.fire({
		title: 'Apa kamu sudah yakin?',
		text: "Data yang sudah di cancel tidak dapat dikembalikan",
		// type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#13a9e2',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Yakin',
		cancelButtonText: "Tidak Jadi",
	}).then((result) => {
		if (result.value) {
			// document.location.href = href;
			document.location.href = base_url + 'trans/cancelTrans/' + idCancel
		}
	})
})

//~ Modal Hostory Transaksi ~//

$(document).ready(function () {
	// $('#tabel_produk').DataTable();
	$('#example1').on('click', '.view_data', function () {
		var transaksiData = $(this).attr('id');
		$.ajax({
			url: base_url + "trans/getDetail/",
			method: "POST",
			data: {
				transaksiData: transaksiData
			},
			success: function (data) {
				$('#result_history_transaksi').html(data);
				$('#modal_history_transaksi').modal('show');
			}
		});
	});
});

//~ Datatable serverside pelapor ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#tabel_list_pelapor').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			// "url": "<?= base_url() ?>produk/getAllTableProduk/",
			"url": "http://localhost/admin-pengaduan/pelapor/getAllTablePelapor/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});


//~ Datatable serverside profile dokter ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#table_dokter').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			// "url": "<?= base_url() ?>produk/getAllTableProduk/",
			"url": "http://localhost/admin-pengaduan/profile_dokter/getAllDataDokter/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});
