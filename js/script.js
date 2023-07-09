// Mendapatkan referensi elemen berdasarkan ID
var judulElemen = document.getElementById("judul");
var formElemen = document.getElementById("form");

// Data tampilan
var data = {
  judul: "Absensi Siswa"
};

// Mengisi konten dengan data
judulElemen.innerHTML = data.judul;

// Fungsi untuk menangani pengiriman form
function handleFormSubmit(event) {
  event.preventDefault(); // Mencegah halaman untuk melakukan refresh

  // Mendapatkan nilai input dari elemen Nama Siswa, Kelas, dan Tanggal
  var nama = document.getElementById("nama").value;
  var kelas = document.getElementById("kelas").value;
  var tanggal = document.getElementById("tanggal").value;

  // Lakukan operasi yang diinginkan dengan nilai-nilai input
  // Contoh: Menyimpan data ke database, melakukan validasi, dll.

  // Menampilkan data absensi siswa ke console
  console.log("Nama Siswa:", nama);
  console.log("Kelas:", kelas);
  console.log("Tanggal:", tanggal);

  // Reset nilai input setelah data berhasil ditampilkan
  document.getElementById("nama").value = "";
  document.getElementById("kelas").value = "";
  document.getElementById("tanggal").value = "";
}

// Menambahkan event listener ke form submit
formElemen.addEventListener("submit", handleFormSubmit);
