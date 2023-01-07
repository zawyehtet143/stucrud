<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Student</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Student</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="age" placeholder="Age:">
            </div>
            <div class="form-elemnt my-4">
                <input type="date" class="form-control" name="dob" placeholder="Date of birth:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="address" placeholder="Address:">
            </div>
            <div class="form-elemnt my-4">
                <select name="townships" id="" class="form-control">
                    <option value="">Select townships:</option>
                    <option value="Ahlon">Ahlon</option>
                    <option value="Bahan">Bahan</option>
                    <option value="Dagon">Dagon</option>
                    <option value="Hlaing">Hlaing</option>
                    <option value="Kamayut">Kamayut</option>
                    <option value="Kyimyindaing">Kyimyindaing</option>
                    <option value="Lanmadaw">Lanmadaw</option>
                    <option value="Latha">Latha</option>
                    <option value="Mayangon">Mayangon</option>
                    <option value="Pabedan">Pabedan</option>
                    <option value="Sanchaung">Sanchaung</option>
                    <option value="Botataung">Botataung</option>
                    <option value="Dagon Seikkan">Dagon Seikkan</option>
                    <option value="Dawbon">Dawbon</option>
                    <option value="Mingala Taungnyunt">Mingala Taungnyunt</option>
                    <option value="New Dagon East">New Dagon East</option>
                    <option value="New Dagon North">New Dagon North</option>
                    <option value="New Dagon South">New Dagon South</option>
                    <option value="North Okkalapa">North Okkalapa</option>
                    <option value="Pazundaung">Pazundaung</option>
                    <option value="South Okkalapa">South Okkalapa</option>
                    <option value="Tamwe">Tamwe</option>
                    <option value="Thaketa">Thaketa</option>
                    <option value="Thingangyun">Thingangyun</option>
                    <option value="Yankin">Yankin</option>
                    <option value="Dala">Dala</option>
                    <option value="Seikkyi Kanaungto">Seikkyi Kanaungto</option>
                    <option value="Insein">Insein</option>
                    <option value="Hlaingthaya">Hlaingthaya</option>
                    <option value="Mingaladon">Mingaladon</option>
                    <option value="Shwepyitha">Shwepyitha</option>
                </select>
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="city" placeholder="City:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="phno" placeholder="Ph No:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            
          
        
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Student" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>

































