<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
    <div class="container text-center">
        <a class="navbar-brand" href="index.php">
            <img height="100" width="100" src="<?=MAIN_ASSETS?>images/logo.jpeg" alt="Ulwazi lonke Logo"
                style="height: 90px;" class="d-inline-block align-text-top img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " style="justify-content: end;" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Home') {
    echo "active fw-bolder";
} ?> " aria-current="page" href="home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title']== 'About') {
    echo "active fw-bold";
} ?> " href="about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Schools') {
    echo "active fw-bold";
}
 ?>" href="schools">Schools</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Blog') {
     echo "active fw-bold";
 }
 ?>" href="blog">Blog & Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Gallery') {
     echo "active fw-bold";
 } ?>
" href="gallery">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Videos') {
     echo "active fw-bold";
 } ?>
" href="videos">Videos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Market') {
     echo "active fw-bold";
 }
?>" href="market">Market</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Search') {
    echo "active fw-bold";
} ?> " aria-current="page" href="search">Search</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Contact') {
    echo "active fw-bold";
}
?>" href="contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($data['page_title'] == 'Login') {
    echo "active fw-bold";
}
?>" href="auth">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>