<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
            <?php
            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
    
            require_once "coreClass.php";
            $id = $name = $company =$color = $amount = $price = "";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = test_input($_POST["id"]);
            $name = test_input($_POST["name"]);
            $company = test_input($_POST["company"]);
            $color = test_input($_POST["color"]);
            $amount = test_input($_POST["amount"]);
            $price = test_input($_POST["price"]);
            }
            ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
           
        
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id="id"                
                placeholder="id"
            />           
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"                
                placeholder="name"
            />           
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input
                type="text"
                class="form-control"
                name="company"
                id="company"                
                placeholder="company"
            />           
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input
                type="text"
                class="form-control"
                name="color"
                id="color"                
                placeholder="color"
            />           
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input
                type="text"
                class="form-control"
                name="amount"
                id="amount"                
                placeholder="amount"
            />           
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
                id="price"                
                placeholder="price"
            />           
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
        

        <?php
        
        $pr = new product($id,$name,$company,$color,$amount,$price);
        echo "<br>";
        echo $pr->toString();
        ?>

        </form>
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
