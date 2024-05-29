<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error{color: #ff0000;}
    </style>
</head>
<body>
<?php
     
    $name = $email = $gender = $comment = $website = $nameErr = $emailErr = $genderErr= $websiteErr = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $nameErr = "Name is required";
        }else{
        $name = test_input($_POST["name"]);}

        if (empty($_POST["email"])){
            $emailErr = "Email is required";
        }else{
        $email = test_input($_POST["email"]);}

        if (empty($_POST["website"])){
            $website = "";
        }else{
            $website = test_input($_POST["website"]);}

        if (empty($_POST["comment"])){
            $comment = "";
        }else{$comment = test_input($_POST["comment"]);}  

        if (empty($_POST["gender"])){
            $genderErr = "gender is required";
        }else{
        $gender = test_input($_POST["gender"]); }      
        
        
    }
   
    ?>
    <h2>PHP Form Validiation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <span class="error">*<?php echo $nameErr;?></span><br>
        
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email">
        <span class="error">*<?php echo $emailErr;?></span><br>
       
        <label for="website">website</label>
        <input type="text" id="website" name="website">
        <span class="error">*<?php echo $websiteErr;?></span><br>
        
        comment<textarea name="comment" rows="4" cols="30"></textarea><br>
        gender:
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="other">other
        <span class="error">*<?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
    <?php
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    ?>
</body>
</html>