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
            <h2>Novell Services Login</h2>
                <form action="novellservice.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"><br>
                    <label for="city">City of Employment:</label><br>
                    <input type="text" id="city" name="city"><br>
                    <label for="server">Web server:</label><br>
                    <select id="server" name="server">
                        <option value="">Choose a server</option>
                        <option value="server1">Server 1</option>
                        <option value="server2">Server 2</option>
                        <option value="server3">Server 3</option>
                    </select><br>
                    <p>Please specify your role:</p>
                    <input type="radio" id="admin" name="role" value="admin">
                    <label for="admin">Admin</label><br>
                    <input type="radio" id="engineer" name="role" value="engineer">
                    <label for="engineer">Engineer</label><br>
                    <input type="radio" id="manager" name="role" value="manager">
                    <label for="manager">Manager</label><br>
                    <input type="radio" id="guest" name="role" value="guest">
                    <label for="guest">Guest</label><br>
                    <p>Single Sign-on to the following:</p>
                
                    <input type="checkbox" id="mail" name="signon[]" value="mail">
                    <label for="mail">Mail</label><br>
                    <input type="checkbox" id="payroll" name="signon[]" value="payroll">
                    <label for="payroll">Payroll</label><br>
                    <input type="checkbox" id="selfservice" name="signon[]" value="selfservice">
                    <label for="selfservice">Self-service</label><br>

                    <input type="submit" value="Login">
                    <input type="reset" value="Reset">
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
