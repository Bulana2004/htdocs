<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library</title>
    <!-- Linking Google Font Link For Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Side bar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="images/menu_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="Menu">
            <a href="index.php" style="text-decoration: none;">
                <h4 class="ms-4 mt-2 text-light">Home</h4>
            </a>
        </div>
        <ul class="sidebar-links list-unstyled mt-4 flex-grow-1">

            <h4 class="d-flex align-items-center justify-content-between">
                <span>Main Menu</span>
                <div class="menu-separator"></div>
            </h4>
            <li class="my-2">
                <a href="members.php" class="active">
                    <span class="material-symbols-outlined"> groups </span>Members</a>
            </li>
            <li class="my-2">
                <a href="users.php" class=""><span class="material-symbols-outlined"> person_search </span>Users</a>
            </li>
            <li class="my-2">
                <a href="books.php"><span class="material-symbols-outlined"> library_books </span>Books</a>
            </li>

            <h4 class="d-flex align-items-center justify-content-between">
                <span>Account</span>
                <div class="menu-separator"></div>
            </h4>
            <li class="my-2">
                <a href="#"><span class="material-symbols-outlined"> account_circle </span>Profile</a>
            </li>
            <li class="my-2">
                <a href="#"><span class="material-symbols-outlined"> settings </span>Settings</a>
            </li>
            <li class="my-2">
                <a href="#"><span class="material-symbols-outlined"> logout </span>Logout</a>
            </li>
        </ul>
        <div class="user-account">
            <div class="user-profile d-flex align-items-center">
                <img src="images/profile-img.jpg" alt="Profile Image" />
                <div class="user-detail ml-3">
                    <h3>Example name</h3>
                    <span>Web Developer</span>
                </div>
            </div>
        </div>
    </aside>
    <!-- End of side bar -->


    <!-- Content -->
    <!-- Content end -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>