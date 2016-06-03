<?php
require('includes/config.php');

//if not logged in redirect to login page
if (!$user->is_logged_in()) {
    header('Location: login.php');
}

//define page title
$title = 'File browser';

//include header template
require('layout/headerFileBrowser.php');
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <div class="titleFileManager">
                <h2>Welcome to File Browser, <?php echo $_SESSION['username']; ?>.</h2>
                <p><a href='logout.php'>Logout</a></p>
            </div>
        </div>
    </div>
    <hr>

    <div class="filemanager">

        <div class="search">
            <input type="search" placeholder="Search for a file or a folder..." />
        </div>

        <div class="breadcrumbs"></div>

        <ul class="data"></ul>

        <div class="nothingfound">
            <div class="nofiles"></div>
            <span>No files here.</span>
        </div>

    </div>
</div>

<!-- Include our script files -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="assets/js/script.js"></script>

<?php
//include header template
require('layout/footer.php');
?>
