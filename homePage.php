<!DOCTYPE html>
<html lang="en">
<head>
    <title>LYRA/homePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="homePageCSS.css">
    <link rel="stylesheet" type="text/css" href="homePageMediaQueries.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="utility.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- MEMBAGI HALAMAN MENJADI TIGA BAGIAN -->
<div id="primary-panel" class="container-fluid">
    <div id="secondary-panel" class="container">
        <div id="main-row" class="row">

            <!-- SIDEBAR KIRI BESERTA MENU -->
            <div id="left-bar" class="col-md-2 sidebar">
                <div id="first-row">
                    <a href="#">
                        <img id="logo-leftbar" src="Logo/LYRA Logotype.png">
                    </a>
                </div>
                <div id="second-row">
                    <ul id="navbar" class="nav">
                        <li id="first-menu" class="nav-item">
                            <button id="btn-beranda" class="nav-link">
                                <div id="icon-btn">
                                    <img src="Icon/c_home.png">
                                </div>
                                <div id="text-btn">
                                    <span>Beranda</span>
                                </div>
                            </button>
                        </li>
                        <li id="second-menu" class="nav-item">
                            <button id="btn-notifikasi" class="nav-link" onclick="alert('Maaf, fitur ini belum tersedia.')">
                                <div id="icon-btn">
                                    <img src="Icon/u_notif.png">
                                </div>
                                <div  id="text-btn">
                                    <span>Notifikasi</span>
                                </div>
                            </button>
                        </li>
                        <li id="third-menu" class="nav-item">
                            <button id="btn-tulis" class="nav-link" onclick="alert('Maaf, fitur ini belum tersedia.')">
                                <div id="icon-btn">
                                    <img src="Icon/u_pencil.png">
                                </div>
                                <div id="text-btn">
                                    <span>Tulis</span>
                                </div>
                            </button>
                        </li>
                        <li id="hidden-menu" class="nav-item">
                            <button id="btn-kategori" class="nav-link" onclick="alert('Maaf, fitur ini belum tersedia.')">
                                <div id="icon-btn">
                                    <img src="Icon/u_category.png">
                                </div>
                            </button>
                        </li>
                        <li id="hidden-menu" class="nav-item">
                            <button id="btn-tag" class="nav-link" onclick="alert('Maaf, fitur ini belum tersedia.')">
                                <div id="icon-btn">
                                    <img src="Icon/u_tag.png">
                                </div>
                            </button>
                        </li>
                        <li id="fourth-menu" class="nav-item">
                            <button id="btn-profil" class="nav-link" type="button" onclick="goToProfilePage()">
                                <div id="icon-btn">
                                    <img src="Icon/u_profile.png">
                                </div>
                                <div id="text-btn">
                                    <span>Profil</span>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="third-row">
                    <ul id="about" class="nav d-flex flex-row justify-content-start">
                        <li id="Tentang" class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                        <li id="Privasi" class="nav-item">
                            <a class="nav-link" href="#">Privasi</a>
                        </li>
                        <li id="Ketentuan" class="nav-item">
                            <a class="nav-link" href="#">Ketentuan</a>
                        </li>
                        <li id="Bisnis" class="nav-item">
                            <a class="nav-link" href="#">Bisnis</a>
                        </li>
                        <li id="Laporkan" class="nav-item">
                            <a class="nav-link" href="#">Laporkan</a>
                        </li>
                        <li id="Bantuan" class="nav-item">
                            <a class="nav-link" href="#">Bantuan</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- KONTEN UTAMA YANG MENAMPILKAN TULISAN PENGGUNA -->
            <div id="mid-bar" class="col-md-8 content">
                <nav id="mid-navbar" class="navbar">
                    <h2 class="text-center">Beranda</h2>
                    <div id="primary-menu" class="col-md-6 text-center">
                        <span>Untuk Anda</span>
                    </div>
                    <div id="secondary-menu" class="col-md-6 text-center">
                        <span>Bookmark</span>
                    </div>
                </nav>
                <!-- KONTEN UTAMA -->
                <?php
                include 'connection.php';

                $post_table = mysqli_query($conn, "SELECT * FROM post_table");
                $user_table = mysqli_query($conn, "SELECT * FROM user_table");
                $user_by_id_post = "SELECT post_table.id_post, user_table.name_user FROM post_table INNER JOIN user_table ON post_table.id_user = user_table.id_user";

                $user_by_id_post_result = mysqli_query($conn, $user_by_id_post);
                $user_names = array();
                if (mysqli_num_rows($user_by_id_post_result) > 0) {
                    while ($name_user = mysqli_fetch_assoc($user_by_id_post_result)) {
                        $user_names[$name_user['id_post']] = $name_user['name_user'];
                    }
                }
                
                foreach ($post_table as $post){
                    $id_post = $post['id_post'];
                
                    $function_total_like = mysqli_query($conn, "SELECT function_total_like($id_post) AS total_like");
                    $total_like = mysqli_fetch_assoc($function_total_like)['total_like'];
                
                    $function_total_comment = mysqli_query($conn, "SELECT function_total_comment($id_post) AS total_like");
                    $total_comment = mysqli_fetch_assoc($function_total_comment)['total_like'];
                    echo 
                    "<div id='main-content-panel' class='card border-0'>
                        <img id='background-main-content-panel' src='data:image/png;base64,".base64_encode($post['image_post'])."'>
                        <div id='profile-bar' class='card-title text-center'>
                            <h3 id='h-title'>
                                <p id='title-article'>
                                    ".$post['title_post']."
                                </p>
                            </h3>
                            <p id='date-article'>
                                ".$post['date_post']."
                            </p>
                            <a class='link' href='#'>
                                ".$user_names[$id_post]."
                            </a>
                        </div>
                        <div id='synopsis-bar' class='card-body'>
                            <p id='synopsis'>
                                ".$post['synopsis_post']."
                            </p>
                            <button id='read-btn' class='btn btn-block' type='button' onclick=\"location.href='postPage.php?data-id=".$id_post."'\">BACA</button>
                        </div>
                        <div id='like-bar' class='card-footer row justify-content-center'>
                            <div class='col-md-3'>
                                <button onclick=\"redirectToOtherPage()\">
                                    <div>
                                        <img id='icon' src='Icon/u_like.png'>
                                    </div>
                                    <div id='text-btn'>
                                        <span class='like-count'>
                                            ".$total_like."
                                        </span>
                                    </div>
                                </button>
                            </div>
                            <div class='col-md-3'>
                                <button onclick=\"redirectToOtherPage()\">
                                    <div>
                                        <img id='icon' src='Icon/u_comment.png'>
                                    </div>
                                    <div id='text-btn'>
                                        <span class='comment-count'>
                                            ".$total_comment."
                                        </span>
                                    </div>
                                </button>
                            </div>
                            <div class='col-md-3'>
                                <button onclick=\"redirectToOtherPage()\">
                                    <div>
                                        <img id='icon' src='Icon/u_share.png'>
                                    </div>
                                    <div id='text-btn'>
                                        <span class='share-count'>2</span>
                                    </div>
                                </button>
                            </div>
                            <div class='col-md-3'>
                                <button onclick=\"redirectToOtherPage()\">
                                    <div>
                                        <img id='icon' src='Icon/u_bookmark.png'>
                                    </div>
                                </button>
                            </div>
                        </div>                      
                    </div>
                    ";
                }
                ?>
                <!-- KONTEN UTAMA -->
            </div>

            <!-- SIDEBAR KANAN MENAMPILKAN CATEGORY DAN TAGS -->
            <div id="right-bar" class="col-md-2">
                <div id="first-row">
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <div id="second-row">
                    <div id="category-section">
                        <div id="category-bar">
                            <div id="icon-btn">
                                <img src="Icon/c_category.png">
                            </div>
                            <div id="text-btn">
                                <span>Categories</span>
                            </div>
                        </div>
                        <ul id="category" class="nav d-flex flex-row justify-content-start">
                            <li id="Berita" class="nav-item">
                                <a class="nav-link" href="#">Berita</a>
                            </li>
                            <li id="Puisi" class="nav-item">
                                <a class="nav-link" href="#">Puisi</a>
                            </li>
                            <li id="Biografi" class="nav-item">
                                <a class="nav-link" href="#">Biografi</a>
                            </li>
                            <li id="Esei" class="nav-item">
                                <a class="nav-link" href="#">Esei</a>
                            </li>
                            <li id="Cerita-Pendek" class="nav-item">
                                <a class="nav-link" href="#">Cerita Pendek</a>
                            </li>
                            <li id="Sejarah" class="nav-item">
                                <a class="nav-link" href="#">Sejarah</a>
                            </li>
                        </ul>
                    </div>
                    <div id="tag-section">
                        <div id="tag-bar">
                            <div id="icon-btn">
                                <img src="Icon/c_tag.png">
                            </div>
                            <div id="text-btn">
                                <span>Tags</span>
                            </div>
                        </div>
                        <ul id="tag" class="nav d-flex flex-row justify-content-start">
                            <li id="Komedi" class="nav-item">
                                <a class="nav-link" href="#">Komedi</a>
                            </li>
                            <li id="Romansa" class="nav-item">
                                <a class="nav-link" href="#">Romansa</a>
                            </li>
                            <li id="Fantasi" class="nav-item">
                                <a class="nav-link" href="#">Fantasi</a>
                            </li>
                            <li id="Sci-Fi" class="nav-item">
                                <a class="nav-link" href="#">Sci-Fi</a>
                            </li>
                            <li id="Fan-Fic" class="nav-item">
                                <a class="nav-link" href="#">Fan-Fic</a>
                            </li>
                            <li id="Horror" class="nav-item">
                                <a class="nav-link" href="#">Horror</a>
                            </li>
                            <li id="Misteri" class="nav-item">
                                <a class="nav-link" href="#">Misteri</a>
                            </li>
                            <li id="" class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>