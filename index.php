<?php

// panggil file koneksi database

include 'koneksi.php';

// jumlah data per halaman

$limit = 100;

// jumlah data

$query = "SELECT COUNT(*) as count FROM data";

$result = mysqli_query($koneksi, $query);

$count = mysqli_fetch_array($result)['count'];

// jumlah halaman

$total_pages = ceil($count / $limit);

// halaman yang aktif

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// offset data

$offset = ($current_page - 1) * $limit;

// query data dengan limit dan offset

$query = "SELECT * FROM data LIMIT $limit OFFSET $offset";

$result = mysqli_query($koneksi, $query);

// tampilkan data

?>

<!DOCTYPE html>

<html>

<head>

	<title>Pagination</title></head>

<body>

	<table border="1">

		<thead>

			<tr>

				<th>No.</th>

				<th>Nama</th>

				<th>Alamat</th>

			</tr>

		</thead>

		<tbody>

			<?php

			$i = ($current_page - 1) * $limit + 1;

			while ($row = mysqli_fetch_array($result)) {

				echo "<tr>";

				echo "<td>" . $i . "</td>";

				echo "<td>" . $row['nama'] . "</td>";

				echo "<td>" . $row['alamat'] . "</td>";

				echo "</tr>";

				$i++;

			}

			?>

		</tbody>

	</table>

	<!-- tampilkan tombol pagination -->

	<?php

	for ($page = 1; $page <= $total_pages; $page++) {

		echo "<a href='index.php?page=" . $page . "'>" . $page . "</a> ";

	}

	?>

</body>

</html>
