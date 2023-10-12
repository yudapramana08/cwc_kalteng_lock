var id = 0 // Untuk menampung ID yang kaan di ubah / hapus

$(document).ready(function(){
	// Sembunyikan loading simpan, loading ubah, loading hapus, pesan error, pesan sukes, dan tombol reset
	// $('#loading-simpan, #loading-ubah, #loading-hapus, #pesan-error, #pesan-sukses, #btn-reset').hide()

	// Fungsi ini akan dipanggil ketika tombol edit diklik
	$('#view').on('click', '.btn-form-ubah', function(){ // Ketika tombol dengan class btn-form-ubah pada div view di klik
		id = $(this).data('id') // Set variabel id dengan id yang kita set pada atribut data-id pada tag button edit

		$('#btn-simpan').hide() // Sembunyikan tombol simpan
		$('#btn-ubah').show() // Munculkan tombol ubah dan checkbox foto

		// Set judul modal dialog menjadi Form Ubah Data
		$('#modal-title').html('Form Ubah data')

		var tr = $(this).closest('tr') // Cari tag tr paling terdekat
		var idnya = tr.find('.idnya').val()
		var nominalrp = tr.find('.NominalRP').val() // Ambil nis dari input type hidden
		var nominalvalas = tr.find('.NominalValas').val() // Ambil nama dari input type hidden
		var tanggal = tr.find('.tgl_disburse').val() // Ambil jenis kelamin dari input type hidden
		var status = tr.find('.status').val() // Ambil telepon dari input type hidden

		$('#id').val(idnya)
		$('#NominalRP').val(nominalrp) // Set value dari textbox nis yang ada di form
		$('#NominalValas').val(nominalvalas) // Set value dari textbox nama yang ada di form
		$('#tgl_disburse').val(tanggal) // Set value dari textbox nama yang ada di form
		$('#status').val(status) // Set value dari textbox nama yang ada di form
	})

function convertToRupiah(angka)
{
	var rupiah = '';		
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return rupiah.split('',rupiah.length-1).reverse().join('');
}




	$('#btn-ubah').click(function(){ // Ketika tombol ubah di klik
		// $('#loading-ubah').show() // Munculkan loading ubah

		$.ajax({
			// url: base_url + 'data/updatedisburse', // URL tujuan
					url: '/sola/data/updatedisburse', // URL tujuan
			type: 'POST', // Tentukan type nya POST atau GET
			data: $("#form-modal form").serialize(), // Ambil semua data yang ada didalam tag form
			dataType: 'json',
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType('application/jsoncharset=UTF-8')
				}
			},
			success: function(response){ // Ketika proses pengiriman berhasil
				// $('#loading-ubah').hide() // Sembunyikan loading ubah

				if(response.status == 'sukses'){ // Jika Statusnya = sukses
					// Ganti isi dari div view dengan view yang diambil dari proses_ubah.php
					// $('#view').html(response.html)

					/*
					* Ambil pesan suksesnya dan set ke div pesan-sukses
					* Lalu munculkan div pesan-sukes nya
					* Setelah 10 detik, sembunyikan kembali pesan suksesnya
					*/
					// $('#pesan-sukses').html(response.pesan).fadeIn().delay(1000).fadeOut()

					$('#form-modal').modal('hide') // Close / Tutup Modal Dialog
					location.reload(true);
				}else{ // Jika statusnya = gagal
					/*
					* Ambil pesan errornya dan set ke div pesan-error
					* Lalu munculkan div pesan-error nya
					*/
					$('#pesan-error').html(response.pesan).show()
				}
			}
		})
	})



	$('#form-modal').on('hidden.bs.modal', function (e){ // Ketika Modal Dialog di Close / tertutup
		$('#form-modal input, #form-modal select, #form-modal textarea').val('') // Clear inputan menjadi kosong
	})
})
