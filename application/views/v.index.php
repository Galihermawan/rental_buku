<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title> Web Prog II | Merancang Template sederhana dengan codeigniter</title>
<link rel="stylesheet" type="text/css" href="rental_buku/assets/css/stylebuku.css">
</head>
<body>
<div id="wrapper">
<header>
<hgroup>
<h1> RentalBuku.net</h1>
<h3>Membuat Template sederhana dengan CodeIgniter</h3>
</hgroup>
<nav>
<ul>
<li> <a href="<?php echo base_url().'index.php/web'?>">home</a></li>
<li> <a href="<?php echo base_url().'index.php/web/about'?>">About</a></h>
</ul>
</nav>
<div class="clear"></div>
</header>
<section>
<h1><?php echo $judul ?></h1>
<p align='justify'>Pada pengertian codeigniter di atas tadi dijelaskan bahwa codeigniter menggunakan motode MVC. Apa itu MVC? kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar cideigniter</p>
<p> MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller</p>
<p align='justify'>Model adalah kelas yang meresentasukan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagian penanganan yang berhubunga dengan pengolahan atau manipulasi database. seperti misalnya mengambil data dari database, menginput dan pengolahaan database lainnya. semua intruksi atau fungsi yang berhubungan dengan pengolahan databse diletakan didalam model. sebagai contoh jika ingin membuat apliasi untuk menghitung luas dan keliling lingkaran makan dapat memodelkan objek lingkaran sebagai kelas model </p>
<p align='justify'> sebagai catatan , semua model harus disimpan didalam foler application\models</p>
<li>view</li>
<p align='justify'> view merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user (pada browser). tampilan dari user interface di kumpulkan pada view untuk memisahkan dengan controlller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampulan halaman di website</p>
<li>Controller</li>
<p align='justify'> controler merupakan kumpulan ustruksi aksi yang menghubungan model dan view. kadi user tidak akan berhubungan dengan model secara langsung. intinya daa tersimpan dalam database (model) di ambil oleh controller dan kemudian controller pula yang menampulkannya ke view. jadi controller lah yang mengolah intruksi</p>
<p align='justify'> Dari penjelasan tentang model view dan controller diatas dapat disimpulkan bahwa controller sebagai penghubung view dan model . misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada databse, kemudia controller yang menerukannaya pada view untuk tampilan. jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini  karena web designer 
</section>
<footer>
	<a href="http://wwww.RentalBuku.com">RentalBuku</a>
</footer>
</div>
</body>
</html>