<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/Css/style.css">
    <script src="https://kit.fontawesome.com/1fbc6be22b.js" crossorigin="anonymous" defer></script>
    <title>Dashboard</title>
</head>
<body>
    <header class="d-flex flex-row">
            <div class="sidebar bg-dark vh-100">
                <div>
                    <h3 class="titles mt-2">GE-School</h3>
                    <div class="d-flex mt-4">
                        <img src="../public/Design/Assets/eren.png" width="70px" height="70px" alt="user_image" id="user_image" class="ms-2">
                        <h2 class="titles ms-3 pt-2">Safae</h2>
                    </div>
                </div>
            <ul class="list-inline mt-5">
                <li class="ms-3 mb-3">
                    <a href="admin.php" class="text-decoration-none text-white fs-4">Dashboard</a>
                </li>
                <li class="ms-3">
                    <a href="professor.php" class="text-decoration-none text-white fs-4">Professeur</a>
                </li>
                <li class="ms-3 my-3">
                    <a href="student.php" class="text-decoration-none text-white fs-4">Etudiants</a>
                </li>
                <li class="ms-3 my-3">
                    <a href="parent.php" class="text-decoration-none text-white fs-4">Parents</a>
                </li>
                <li class="ms-3">
                    <a href="settings.php" class="text-decoration-none text-white fs-4">Réglages</a>
                </li>
                <li id="logout" class="ms-2">
                    <a href="" class="text-decoration-none text-white fs-4">Se déconnecter</a>
                </li>
            </ul>
            </div>
        </div>
        <nav class="d-flex">
            <div class="navbar ms-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                <span class="navbar-toggler-icon"></span>
            </button>
              </div>
            <p class="text-center fs-4 year ">Année Academique: 2021-2022</p>
            <div class="research">
                <input type="search" name="" id="research" placeholder="Recherche..." class="mt-2 rounded-3">
                <i class="fas fa-search-plus"></i>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

</body>
</html>