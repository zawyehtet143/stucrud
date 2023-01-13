<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Student</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Student</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM student WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:" value="<?php echo $row["firstname"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:" value="<?php echo $row["lastname"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="age" placeholder="Age:" value="<?php echo $row["age"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="dob" placeholder="Date of birth:" value="<?php echo $row["dob"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="address" placeholder="Address:" value="<?php echo $row["address"]; ?>">
            </div>
           
            <div class="form-elemnt my-4">
                <select name="township" id="" class="form-control">
                    <option value="">Select townships:</option>
                    <option value="Alone" <?php if($row["township"]=="Alone"){echo "selected";} ?>>Alone</option>
                    <option value="Bahan" <?php if($row["township"]=="Bahan"){echo "selected";} ?>>Bahan</option>
                    <option value="Dagon" <?php if($row["township"]=="Dagon"){echo "selected";} ?>>Dagon</option>
                    <option value="Hlaing" <?php if($row["township"]=="Hlaing"){echo "selected";} ?>>Hlaing</option>
                    <option value="Kamayut" <?php if($row["township"]=="Kamayut"){echo "selected";} ?>>Kamayut</option>
                    <option value="Kyimyindaing" <?php if($row["township"]=="Kyimyindaing"){echo "selected";} ?>>Kyimyindaing</option>
                    <option value="Lanmadaw" <?php if($row["township"]=="Lanmadaw"){echo "selected";} ?>>Lanmadaw</option>
                    <option value="Latha" <?php if($row["township"]=="Latha"){echo "selected";} ?>>Latha</option>
                    <option value="Mayangon" <?php if($row["township"]=="Mayangon"){echo "selected";} ?>>Mayangon</option>
                    <option value="Pabedan" <?php if($row["township"]=="Pabedan"){echo "selected";} ?>>Pabedan</option>
                    <option value="Sanchaung" <?php if($row["township"]=="Sanchaung"){echo "selected";} ?>>Sanchaung</option>
                    <option value="Botataung" <?php if($row["township"]=="Botataung"){echo "selected";} ?>>Botataung</option>
                    <option value="Dagon Seikkan" <?php if($row["township"]=="Dagon Seikkan"){echo "selected";} ?>>Dagon Seikkan</option>
                    <option value="Dawbon" <?php if($row["township"]=="Dawbon"){echo "selected";} ?>>Dawbon</option>
                    <option value="Mingala Taungnyunt" <?php if($row["township"]=="Mingala Taungnyunt"){echo "selected";} ?>>Mingala Taungnyunt</option>
                    <option value="New Dagon East" <?php if($row["township"]=="New Dagon East"){echo "selected";} ?>>New Dagon East</option>
                    <option value="New Dagon North" <?php if($row["township"]=="New Dagon North"){echo "selected";} ?>>New Dagon North</option>
                    <option value="New Dagon South" <?php if($row["township"]=="New Dagon South"){echo "selected";} ?>>New Dagon South</option>
                    <option value="North Okkalapa" <?php if($row["township"]=="North Okkalapa"){echo "selected";} ?>>North Okkalapa</option>
                    <option value="Pazundaung" <?php if($row["township"]=="Pazundaung"){echo "selected";} ?>>Pazundaung</option>
                    <option value="South Okkalapa" <?php if($row["township"]=="South Okkalapa"){echo "selected";} ?>>South Okkalapa</option>
                    <option value="Tamwe" <?php if($row["township"]=="Tamwe"){echo "selected";} ?>>Tamwe</option>
                    <option value="Thaketa" <?php if($row["township"]=="Thaketa"){echo "selected";} ?>>Thaketa</option>
                    <option value="Thingangyun" <?php if($row["township"]=="Thingangyun"){echo "selected";} ?>>Thingangyun</option>
                    <option value="Yankin" <?php if($row["township"]=="Yankin"){echo "selected";} ?>>Yankin</option>
                    <option value="Dala" <?php if($row["township"]=="Dala"){echo "selected";} ?>>Dala</option>
                    <option value="Seikkyi Kanaungto" <?php if($row["township"]=="Seikkyi Kanaungto"){echo "selected";} ?>>Seikkyi Kanaungto</option>
                    <option value="Insein" <?php if($row["township"]=="Insein"){echo "selected";} ?>>Insein</option>
                    <option value="Hlaingthaya" <?php if($row["township"]=="Hlaingthaya"){echo "selected";} ?>>Hlaingthaya</option>
                    <option value="Mingaladon" <?php if($row["township"]=="Mingaladon"){echo "selected";} ?>>Mingaladon</option>
                    <option value="Shwepyitha" <?php if($row["township"]=="Shwepyitha"){echo "selected";} ?>>Shwepyitha</option>
                </select>
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="city" placeholder=" City:" value="<?php echo $row["city"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="phno" placeholder="Ph no:" value="<?php echo $row["phno"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="email" placeholder="Email:" value="<?php echo $row["email"]; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Student" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Student Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>