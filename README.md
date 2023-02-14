# PHP-Pagination
kode PHP untuk pagination pada data yang banyak

Penjelasan:

File koneksi.php digunakan untuk menghubungkan ke database.

Variabel $limit menentukan jumlah data yang ditampilkan dalam satu halaman.

Jumlah data dihitung menggunakan query SELECT COUNT(*) as count FROM data.

Jumlah halaman dihitung dengan membagi jumlah data dengan $limit.

Variabel $current_page menentukan halaman yang sedang aktif. Jika tidak ada parameter page yang diterima, maka halaman pertama yang ditampilkan.

Offset data dihitung menggunakan $offset = ($current_page - 1) * $limit.

Data ditampilkan menggunakan query SELECT * FROM data LIMIT $limit OFFSET $offset.

Tombol pagination ditampilkan menggunakan perulangan for.

Untuk mempermudah, tombol pagination ditampilkan dengan link ke halaman yang sama dengan parameter page yang berbeda-beda.

Dengan teknik pagination ini, Anda dapat menampilkan data yang banyak dengan lebih efisien dan mengurangi beban pada server.
