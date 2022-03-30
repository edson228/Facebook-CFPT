<?php
require('./config/config.php');
//include('./config/var.php');

/*$msg = "";

if (isset($_POST['showPost'])) {
    $filename = $_FILES["postPhoto"]["name"];
    $tempname = $_FILES["postPhoto"]["tmp_name"];
    $folder = "image/" . $filename;

    $db = mysqli_connect(HOST, USER, PWD, DBNAME);

    $sql = "INSERT INTO media (nomMedia) VALUES ('$filename')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded succesfully";
    } else {
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query(connexion(), "SELECT * FROM media");
while ($data = mysqli_fetch_array($result)) {
*/


    // $msg = stripslashes(htmlspecialchars($_REQUEST['msg']));
    // if (isset($_FILES['postPhoto']['type'])) {
    //     $imageData = "";
    //     $validextensions = array("jpeg", "jpg", "png");
    //     $temporary = explode(".", $_FILES['postPhoto']['name']);
    //     $file_extension = end($temporary);

    //     if ((($_FILES['postPhoto']['type'] === 'image/png') || ($_FILES['postPhoto']['type'] == 'image/jpg') || ($_FILES['postPhoto']['type'] == 'image/jpeg')) && ($_FILES['postPhoto']['size'] < 2500000) && in_array($file_extension, $validextensions)) {
    //         if ($FILES['postPhoto']['error'] > 0) {
    //             echo "return code: " . $_FILES['postPhoto']['error'] . "<br/><br/>";
    //         } else {
    //             $imageData = mysqli_real_escape_string($connection, file_get_contents($_FILES["postPhoto"]["tmp_name"]));
    //         }
    //     }
    // }



    // $stmt = "INSERT INTO media VALUES ('', '$uname', '$commentaire', '$imageData')";
    // $result = $connection->query($stmt);
?>
    <img src="<?php echo $data['Filename']; ?>">
<?php
//}
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS/bootstrap.bundle.min.js"></script>
    <script src="./JS/fb.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="./CSS/facebook.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header>
            <div class="px-3 py-2 bg-dark text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                                <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z" />
                                <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z" />
                            </svg>
                        </a>

                        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="Index.php" class="nav-link text-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li id="showPost">
                                <a href="#postModal" role="button" class="nav-link text-white" data-toggle="modal" class="glyphicon glyphicon-plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-plus" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z" />
                                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                                    </svg>
                                    Post
                                </a>
                            </li>
                            <li>
                                <a href="./pages/inscription.php" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="px-3">
            <section id="profil">
                <article id="photo_profil">
                    <img src="./Images/sky.jfif" alt="sky">
                </article>
                <article id="follow">
                    <p>45 followers, 13 Posts</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                    </svg>
                </article>
            </section>
            <section id="bienvenu">

            </section>
            <section id="post">

            </section>
            <section id="idk_yet">

            </section>
            <h1>WELCOME</h1>

        </main>

        <?php
        if(isset($_POST["commentaire"]) && isset($_FILES["image"])){
          if (addNewPost($_POST["commentaire"], $_FILES['image']['name'],$_FILES['image']['type'],base64_encode(file_get_contents($_FILES['image']['tmp_name'], FILE_USE_INCLUDE_PATH))) == false)
          {
            echo "c'est pas bon";
          }

          echo "<div class='row'>";
          echo"  <div class='col-sm-12'>";
          echo"    <div class='panel panel-default text-left'>";
          echo"      <div class='panel-body'>";
          echo"        <p contenteditable='true'>Status: ".$_POST["commentaire"]."</p>";
          echo"        <button type='button' class='btn btn-default btn-sm'>";
          echo"          <span class='glyphicon glyphicon-thumbs-up'></span> Like";
          echo"<img src='". file_get_contents($_FILES['image']['tmp_name'])."' class='img-circle' height='55' width='55'>";
          echo"        </button>";     
          echo"      </div>";
          echo"    </div>";
          echo"  </div>";
          echo"</div>";
      


         }else{
          echo "echec";
        }
      ?>

        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-3">
                <label class="control-label" for="Info"><b>Commentaire</b></label>
                <textarea type="text" class="form-control" id="commentaire" name="commentaire"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                <label class="control-label" for="image"><b>Image</b></label>
                <input type="hidden" name="MAX_FILE_SIZE" value="4000000">
                <input type="file" class="form-control-file" id="image" name="image" accept=".jpg,.png,.pdf"> 
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit" method="post" >Envoyer</button>
        </form>
        <footer class="mt-auto text-white-50">

        </footer>
    </div>

    <script>
        /*
        function submitChat() {
            var file = document.getElementById("postPhoto");
            var formData = new FormData();
            // alert(formData);
            formData.append("file[]", file.files[0]);

            if (form1.msg.value == '') {
                alert('You must Enter a Post');
                return;
            }



            var msg = form1.msg.value;
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('logs').innerHTML = xmlhttp.responseText;

                    console.log(xmlhttp.statusText);
                }
            }
            xmlhttp.open('POST', 'userposts.php?msg=' + msg, true);
            xmlhttp.setRequestHeader("Content-type", "multipart/form-data");
            xmlhttp.send(formData);


        }*/
    </script>

    <!-- <script>
        $(document).ready(function(){
            $('#showPost').click(function(){
                $('#postModal').modal();

            });

        });
    </script> -->
</body>

</html>
