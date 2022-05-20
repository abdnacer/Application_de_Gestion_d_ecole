<!-- Sidebar-->
<div class="Sidebar bg-dark" id="sidebar-wrapper">
    <div class="sidebar-heading pt-3">
    <div class="d-flex justify-content-center mt-3 col-12 mb-3">
      <h1 class="fs-3 fw-bold text-white">GE-School</h1>
    </div>
    <div class="mt-4 mb-4 d-flex justify-content-center align-items-center">
      <img class="rounded-circle w-50 me-3" src="./Public/images/youcode.png" alt="youcode">
        <div class="d-flex justify-content-center align-items-center flex-column mt-3">
            <p class="fw-bold fs-3 text-white"><?php echo $_SESSION['Nom'] ?></p>
        </div>
    </div>
    </div>
    
    <div class="list-group list-group-flush h-50 ">
        <div class="d-flex justify-content-center align-items-center mt-4 mb-3">
            <a href="dashboard" class="fs-4 text-center text-decoration-none text-white d-flex align-items-center">
                Dashboard</a>
          </div>
          
          <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
            <a href="Professeur" class="fs-4 text-center me-1 text-decoration-none text-white ">
                Professeur</a>
          </div>
          
          <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
            <a href="Etudiants" class="fs-4 ms-2 text-center text-decoration-none text-white ">
                Etudiants</a>
          </div>
          
          <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
            <a href="Parents" class="fs-4 ms-2 text-center text-decoration-none text-white">
                Parents</a>
          </div>
          
          <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
            <a href="" class="fs-4 me-1 text-center text-decoration-none text-white ">
                Réglages</a>
          </div>
          
        </div>
        <div class="mt-5 bottom d-flex justify-content-center mt-3">
          <a href="logouat" class="fs-4 text-center text-decoration-none text-white">
            Se déconnecter</a>
        </div>
</div>