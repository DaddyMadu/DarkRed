<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Madu - Images Uploader</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">
		<META NAME="robots" CONTENT="noindex,nofollow">
        <link rel="apple-touch-icon" sizes="180x180" href="https://madu.gg/apple-touch-icon.png?v=5">
        <link rel="icon" type="image/png" sizes="32x32" href="https://madu.gg/favicon-32x32.png?v=5">
        <link rel="icon" type="image/png" sizes="16x16" href="https://madu.gg/favicon-16x16.png?v=5">
        <link rel="manifest" href="https://madu.gg/site.webmanifest?v=5">
        <link rel="mask-icon" href="https://madu.gg/safari-pinned-tab.svg?v=5" color="#5bbad5">
        <link rel="shortcut icon" href="https://madu.gg/favicon.ico?v=5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="https://madu.gg/browserconfig.xml?v=5">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="/images/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="mx-1 mt-1 card rounded">
                <div class="card-body">
                    <form action="/images/jhisdbagoiased98345yndkljgn.php" method="post" enctype="multipart/form-data" class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal">Please verify</h1>
						<label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autocomplete="username">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required autocomplete="current-password">
                        <label class="btn btn-primary btn-block">
                            Browse <input type="file" name="fileToUpload" id="filetoUpload"
                                onchange="$('#upload-file-info').html(this.files[0].name)" style="opacity:0;width:1%">
                        </label>
                        <p class='label label-info' id="upload-file-info"></p>
                        <p class='label label-info' id="retval"></p>
                        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Verify and upload
                        </button>
                    </form>
						<div>
						<button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='https://madu.gg'">GO TO HOME</button>
						<br>
						<p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
						</div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</body>
</html>
