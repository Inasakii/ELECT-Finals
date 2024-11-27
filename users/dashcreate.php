<?php
    // Include the database connection file
    require '../connection/db_connection.php';

     // Start the session
     session_start();

     // Check if the user is logged in
     if (!isset($_SESSION['user'])) {
         // Redirect to login.php if the user is not logged in
         header("Location: home.php");
         exit;
     }
   
   $user = $_SESSION['user'];

   // Extract user information for display
   $firstName = htmlspecialchars($user['fname']);
   $lastName = htmlspecialchars($user['lname']);
   $gender = htmlspecialchars($user['gender']);

   // Set the profile icon based on gender
   if ($gender === 'Male') {
       $profileIcon = '../Pictures/boy-icon.png';
   } else {
       $profileIcon = '../Pictures/girl-icon.png';
   }
   
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>

    <link rel="stylesheet" href="../cssFontawesome/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="../cssFontawesome/fontawesome.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../design/dashcreate.css">
</head>

<body>
<nav class="headnav">
        <div class="logo">
            <a href="#">
              <img src="../Pictures/logo.png" width="28" height="28" alt="Logo">
            </a>
        </div>

        <!-- Account Settings -->
        <div class="prof-container">
            <div class="d-flex justify-content-end">
                <!-- Dropdown -->
                <div class="dropdown">
                <button class="prof-btn" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-placement="bottom" onclick="toggleIcon()">
                    <img src="<?php echo $profileIcon; ?>" width="32" height="32">
                    <i class="fa-solid fa-chevron-left" id="dropdownIcon"></i>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="prof-menu">
                        <div class="prof-logo">
                            <img id="profile-image-large" src="<?php echo $profileIcon; ?>" width="64" height="64">
                        </div>
                            <h3 class="prof-details"><?php echo $firstName . ' ' . $lastName; ?></h3>
                    </div>
                        <hr class="line">  
                    <li>
                        <a class="sidebar-link">
                            <i class="fa-solid fa-circle-user"></i>
                            <label>Profile</label>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar-link">
                            <i class="fa-solid fa-gear"></i>
                            <label>Settings</label>
                        </a>
                    </li>
                    <li>
                        <a href="./logout.php" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <label>Logout</label>
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="sidebar-logo">
                    <label>WeThrive</label>
                </div>
            </div>
            <ul class="sidebar-nav">
                
                <li class="sidebar-item">
                    <a href="./dashboard.php" class="sidebar-link">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./myproject.php" class="sidebar-link">
                        <i class="fa-solid fa-folder"></i>
                        <span>My Project</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./dashcreate.php" class="sidebar-link">
                        <i class="fa-solid fa-folder-plus"></i>
                        <span>Create Project</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./community.php" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Community</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="main">
            <h1 class="category-title">Category</h1>
            <div class="container"> 
                <div class="card" style="width: 18rem;">
                    <img src="../Pictures/educ.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Educational</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Visit Template</a>
                    </div>
                </div>   
                <div class="card" style="width: 18rem;">
                    <img src="../Pictures/business.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Business</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Visit Template</a>
                    </div>
                </div>   
                <div class="card" style="width: 18rem;">
                    <img src="../Pictures/educ.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Visit Template</a>
                    </div>
                </div>   
                <div class="card" style="width: 18rem;">
                    <img src="../Pictures/product.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Visit Template</a>
                    </div>
                </div>   
            </div>
            <hr>
                <div class="container-fluid">
                    <h4></h4>
                    <div class="search-container">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                
            <div class="create-container">
                <div class="project-container">
                    <div class="create-project-box" onclick="location.href='dashedit.php';">
                        <i class="fa-solid fa-plus" style="font-size: 2rem;"></i>
                        <p>Create a Project</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
 
    <script src="../script/dashboard.js"></script>
    <script src="../script/jquery.js"></script>
</body>
</html>


