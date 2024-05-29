<!doctype html>
<html lang="en">
    <head>
        <title>danhsachsinhvien</title>
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

            <div class="container">
            <h1> Danh sach sinh vien</h1>
            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
                Them sinh vien
            </button>
            <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Them sinh vien</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form action="them.php" method="post">
                <div class="mb-3 ">
                    <label for="username">username</label>
                    <input type="text" id="username"  class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="text" id="email"  class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-success">Them</button>
            </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
            </div>            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>Email</th>
                    <th>Thao tac</th>
                </tr>
                </thead>
                <tbody>

            <?php
            //ket noi

            require_once 'db_connect.php';
            // cau lệnh
            $lietke_sql = "SELECT * FROM users order by id";
            //thuc thi cau lenh
            $result = mysqli_query($conn,$lietke_sql);
            //duet va in ra
            while( $r = mysqli_fetch_assoc($result)){
                ?>
                
                <tr>
                    <td><?php echo $r["id"] ?></td>
                    <td><?php echo $r["username"] ?></td>
                    <td><?php echo $r["email"] ?></td>
                    <td><a href="sua.php?sid=<?php echo $r["id"] ?>" class="btn btn-warning mt-1">Sua</a> 
                    <a onclick="return confirm('ban co muon xoa ko');" href="xoa.php?sid=<?php echo $r["id"] ?>" class="btn btn-danger mt-1">Xoa</a></td>
                </tr>
            
            <?php
            }
            ?>
              </tbody>
            </table>
            
                
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

