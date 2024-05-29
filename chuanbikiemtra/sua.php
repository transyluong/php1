<?php
// lay id 
$id = $_GET['sid'];

//ket noi
require_once "db_connect.php";

// cau lenh lay thong tin ve snh vien
$sua_sql = "SELECT * from users where id = $id";

$result = mysqli_query($conn, $sua_sql);
$ros = mysqli_fetch_assoc($result);
echo $ros["id"]
?>


<!doctype html>
<html lang="en">
    <head>
        <title>sua sinh vien</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container mt-5">
            <h1> Sua Sinh vien</h1>    
            <form action="capnhat.php" method="post">
            <input type="hidden" id="" name="sid" value="<?php echo $ros['id'] ?>">
                <div class="mb-3 mt-5">
                    <label for="username">username</label>
                    <input type="text" id="username"  class="form-control" name="username"value="<?php echo $ros['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="text" id="email"  class="form-control" name="email" value="<?php echo $ros['email'] ?>">
                </div>
                <button type="submit" class="btn btn-info">Luu</button>
            </form>
            </div>
           
            
            
            
            
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
