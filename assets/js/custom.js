/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	const Toast = Swal.mixin({
		toast: true,
		position: "top",
		showConfirmButton: false,
		timer: 5000
	});
	if (flashData == "dokumen_kosong") {
		Toast.fire({
			type: "warning",
			title: "Dokumen tidak ada, Silahkan mengunggah dokumen."
		});
	} else if (flashData == "wrong_password") {
		Toast.fire({
			type: "error",
			title: "Password dokumen yang anda masukan salah."
		});
	} else if (flashData == "notif_unggah_gagal") {
		Toast.fire({
			type: "error",
			title: "Unggah dokumen gagal, Pastikan format dokumen sesuai dengan kategori dokumen"
		});
	} else {
		Toast.fire({
			type: "success",
			title: "Data Berhasil " + flashData
		});
	}
}

$(".btnHapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	console.log(href);

	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: "btn btn-danger",
			cancelButton: "btn btn-transparent mr-2"
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons
		.fire({
			title: "Apakah anda yakin?",
			text: "Data ini tidak bisa dikembalikan lagi!",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Hapus",
			cancelButtonText: "Tidak",
			reverseButtons: true
		})
		.then(result => {
			if (result.value) {
				document.location.href = href;
			}
		});
});

$(".btnLapor").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: "btn btn-lg btn-warning",
			cancelButton: "btn btn-transparent mr-2"
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons
		.fire({
			title: "Apakah data ini sudah benar ?",
			text: " Ini akan langsung tercatat di sistem",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Lapor",
			cancelButtonText: "Tidak",
			reverseButtons: true
		})
		.then(result => {
			if (result.value) {
				document.location.href = href;
			}
		});
});

$(".btnLogout").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	console.log(href);

	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: "btn btn-lg btn-primary",
			cancelButton: "btn btn-transparent mr-2"
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons
		.fire({
			title: "Apakah anda yakin ingin keluar ?",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Logout",
			cancelButtonText: "Kembali",
			reverseButtons: true
		})
		.then(result => {
			if (result.value) {
				document.location.href = href;
			}
		});
});
