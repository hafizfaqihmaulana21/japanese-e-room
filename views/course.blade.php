<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jelingo - Course</title>
        <link rel="icon" href="assets/images/jplogo.ico.png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <link rel="stylesheet" href="assets/styles/style.css">
    </head>

    <body>

            <header class="header">
                <section class="flex">

                    <a href="home.html" class="logo">Jelingo</a>

                    <form action="" method="post" class="search-form">
                        <input type="text" name="seacrh_box" placeholder="Search courses" required maxlength="100">
                        <button type="submit" class="fas fa-search"></button>
                    </form>

                    <div class="icons">
                        <div id="menu-btn" class="fas fa-bars"></div>
                        <div id="search-btn" class="fas fa-search"></div>
                        <div id="user-btn" class="fas fa-user"></div>
                        <div id="toggle-btn" class="fas fa-sun"></div>
                    </div>

                    <div class="profile">
                        <img src="assets/images/yoshikagekira.jpg" alt="profilepic">
                        <h3>KIRA YOSHIKAGE</h3>
                        <span>STUDENT</span>
                        <a href="profile" class="btn"> View profile</a>
                        <div class="flex-btn">
                            <a href="login" class="option-btn">Logout</a>
                            <a href="#" class="option-btn">Setting</a>
                        </div>

                    </div>
                </section>
            </header>

            <div class="side-bar">
                <div class="close-side-bar">
                    <i class="fas fa-times"></i>
                </div>

                <div class="profile">
                    <img src="assets/images/yoshikagekira.jpg" alt="profilepic">
                    <h3>KIRA YOSHIKAGE</h3>
                    <span>STUDENT</span>
                    <a href="profile.html" class="btn"> View profile</a>
                </div>

                <nav class="navbar">
                    <a href="home"><i class="fas fa-home"></i><span>HOME</span></a>
                    <a href="about"><i class="fas fa-question"></i><span>ABOUT US</span></a>
                    <a href="course"><i class="fas fa-graduation-cap"></i><span>COURSES</span></a>
                    <a href="teacher"><i class="fas fa-chalkboard-user"></i><span>TEACHERS</span></a>
                    <a href="contact"><i class="fas fa-headset"></i><span>CONTACT US</span></a>
                </nav>
            </div>

            <a href="/course/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
            <th>ID Murid</th>
			<th>ID Jadwal</th>
			<th>ID Login</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
            <th>Instagram</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Kota Kelahiran</th>
            <th>Kelamin</th>
            <th>Prodi</th>
            <th>Tahun Masuk</th>
		</tr>
		@foreach($murid as $p)
		<tr>
            <td>{{ $p->id_murid }}</td>
			<td>{{ $p->id_jadwal }}</td>
			<td>{{ $p->id_login }}</td>
			<td>{{ $p->nrp }}</td>
			<td>{{ $p->nama }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->instagram }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_telepon }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->kota_kelahiran }}</td>
            <td>{{ $p->kelamin }}</td>
            <td>{{ $p->prodi }}</td>
            <td>{{ $p->tahun_masuk }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_murid }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_murid }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 

            <footer class="footer">
                ALL RIGHTS RESERVED 2024 &copy; <span>The 08th MS Team</span>
            </footer>

        <script src="script.js"></script>

    </body>
</html>