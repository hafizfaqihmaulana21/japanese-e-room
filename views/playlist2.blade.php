<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jelingo - Playlist</title>
        <link rel="icon" href="assets/images/jplogo.ico.png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <link rel="stylesheet" href="assets/styles/style.css">
    </head>

    <body>

            <header class="header">
                <section class="flex">

                    <a href="home" class="logo">Jelingo</a>

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
                            <a href="login.html" class="option-btn">Login</a>
                            <a href="register.html" class="option-btn">Register</a>
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
                    <a href="home.html"><i class="fas fa-home"></i><span>HOME</span></a>
                    <a href="about.html"><i class="fas fa-question"></i><span>ABOUT US</span></a>
                    <a href="course.html"><i class="fas fa-graduation-cap"></i><span>COURSES</span></a>
                    <a href="teacher.html"><i class="fas fa-chalkboard-user"></i><span>TEACHERS</span></a>
                    <a href="contact.html"><i class="fas fa-headset"></i><span>CONTACT US</span></a>
                </nav>
            </div>

            <section class="playlist">
                <h1 class="heading">playlist details</h1>

                <div class="row">
                    <div class="col">
                    <form method="GET" class="save-list">
                        <button type="submit" name="save_list">
                        <span>Berlangganan</span>
                        </button>
                    </form>
                        <div class="thumb">
                            <span>4 videos</span>
                            <img src="assets/images/thumb-1.png" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="tutor">
                            <img src="assets/images/pic-2.jpg" alt="">
                            <div>
                                <h3>Ilham Whamu Santana</h3>
                                <span>Translator</span>
                            </div>
                        </div>

                        <div class="details">
                            <h3>N5 Kanji List</h3>
                            <div class="date">
                                <i class="fas fa-calendar"></i><span>17-01-2024</span>
                            </div>
                            <p>Jelajahi keindahan bahasa Jepang dengan kursus online kami tentang N5 KanjiList! Mulailah perjalananmu dalam menguasai tulisan Jepang dengan pembelajaran terstruktur, panduan ahli, dan latihan praktis. Bergabunglah sekarang untuk memperluas kosa kata dan pemahamanmu terhadap kanji dengan nyaman dan fleksibel, di mana pun kamu berada.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="video-container">
                <h1 class="heading">playlist videos</h1>

                <div class="box-container">
                    
                    <a href="watch-video.html" class="box">
                        <i class="fas fa-play"></i>
                        <img src="assets/images/post-1-1.png" alt="">
                        <h3>N5 Kanji List Lesson 1</h3>
                    </a>

                    <a href="watch-video.html" class="box">
                        <i class="fas fa-play"></i>
                        <img src="assets/images/post-1-2.png" alt="">
                        <h3>N5 Kanji List Lesson 2</h3>
                    </a>

                    <a href="watch-video.html" class="box">
                        <i class="fas fa-play"></i>
                        <img src="assets/images/post-1-3.png" alt="">
                        <h3>N5 Kanji List Lesson 3</h3>
                    </a>

                    <a href="watch-video.html" class="box">
                        <i class="fas fa-play"></i>
                        <img src="assets/images/post-1-4.png" alt="">
                        <h3>N5 Kanji List Lesson 4</h3>
                    </a>

                    <div class="box">

                    </div>
                </div>
            </section>


























            <footer class="footer">
                ALL RIGHTS RESERVED 2024 &copy; <span>The 08th MS Team</span>
            </footer>

        <script src="script.js"></script>

    </body>
</html>