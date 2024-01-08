<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jelingo - Home</title>
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
                            <a href="/" class="option-btn">Logout</a>
                            <a href="register" class="option-btn">Setting</a>
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
                    <a href="profile" class="btn"> View profile</a>
                </div>

                <nav class="navbar">
                    <a href="home"><i class="fas fa-home"></i><span>HOME</span></a>
                    <a href="about"><i class="fas fa-question"></i><span>ABOUT US</span></a>
                    <a href="course"><i class="fas fa-graduation-cap"></i><span>COURSES</span></a>
                    <a href="teacher"><i class="fas fa-chalkboard-user"></i><span>TEACHERS</span></a>
                    <a href="contact"><i class="fas fa-headset"></i><span>CONTACT US</span></a>
                </nav>
            </div>

            <section class="quick-select">
                <h1 class="heading">quick options</h1>
                <div class="box-container">

                    <div class="box">
                        <h3 class="title">Likes and comments</h3>
                        <p>Total likes : <span>14</span></p>
                        <a href="#" class="inline-btn">View likes</a>
                        <p>Total comments : <span>5</span></p>
                        <a href="#" class="inline-btn">View comments</a>
                        <p>Saved playlist : <span>3</span></p>
                        <a href="#" class="inline-btn">View playlists</a>
                    </div>

                    <div class="box">
                        <h3 class="title">Top categories</h3>
                        <div class="flex">
                            <a href="#"><i class="fas fa-code"></i><span>grammar</span></a>
                            <a href="#"><i class="fas fa-chart-simple"></i><span>conversation</span></a>
                            <a href="#"><i class="fas fa-pen"></i><span>vocabulary</span></a>
                        </div>
                    </div>
                    
                    <div class="box">
                        <h3 class="title">Popular topics</h3>
                        <div class="flex">
                            <a href="#"><i class="fab fa-css3"></i><span>stroke order</span></a>
                            <a href="#"><i class="fas fa-music"></i><span>lyrics translation</span></a>
                            <a href="#"><i class="fab fa-js"></i><span>kanji examine</span></a>
                            <a href="#"><i class="fab fa-react"></i><span>onomatope</span></a>
                        </div>
                    </div>

                    <div class="box tutor">
                        <h3 class="title">Become a tutor</h3>
                        <p>Experience teaching with us!</p>
                        <a href="register2" class="inline-btn">Get started</a>
                    </div>

                </div>
            </section>

            <section class="courses">
                <h1 class="heading">Our course</h1>
                
                <div class="box-container">
                    <div class="box">
                        <div class="tutor">
                            <img src="assets/images/pic-1.jpg" alt="">
                            <div>
                                <h3>Ilham Santan</h3>
                                <span>01-17-2024</span>
                            </div>
                        </div>
                        <img src="assets/images/n5p.png" class="thumb" alt="">
                        <h3 class="title">N5 Kanji List</h3>
                        <h2 class = "tittle">Rp.15.000,00</h2>
                        <a href="playlist" class="inline-btn">Invest</a>
                    </div>

                    <div class="box">
                        <div class="tutor">
                            <img src="assets/images/pic-2.jpg" alt="">
                            <div>
                                <h3>Trenggiling Cirebon</h3>
                                <span>01-21-2024</span>
                            </div>
                        </div>
                        <img src="assets/images/n4p.png" class="thumb" alt="">
                        <h3 class="title">N4 Adverb</h3>
                        <h2 class = "tittle">Rp.25.000,00</h2>
                        <a href="playlist" class="inline-btn">Invest</a>
                    </div>
                </div>

                <div class="more-btn">
                    <a href="courses" class="inline-option-btn">view more</a>
                </div>
            </section>

            <footer class="footer">
                ALL RIGHTS RESERVED 2024 &copy;<span>The 08th MS Team</span>
            </footer>

        <script src="script.js"></script>

    </body>
</html>