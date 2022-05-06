<?php require('dashboard.php')?>
<body>
<main class="vh-100 main_dashboard">
        <section class="statistics_title">
            <h1 >LIVE STATISTICS</h1>
        </section>
        
        <section class="d-flex ms-3 cards">
            <article class="d-flex border border-2 bg-white ps-2 pe-5 ms-3 ">
                <div class="d-flex justify-content-center align-item-center">
                    <i class="fas fa-chalkboard-teacher user" id="professor"></i>
                </div>
                <div class="ms-4">
                    <p>Professeur</p>
                    <p>20</p>
                </div>
            </article>
            <article class="d-flex border border-2 bg-white ps-2 pe-5  student">
                <div>
                    <i class="fas fa-user-graduate user"></i>
                </div>
                
                <div class="ms-4">
                    <p>Etudiants</p>
                    <p>120</p>
                </div>
            </article>
            <article class="d-flex border border-2 bg-white ps-2 pe-5">
                <div>
                    <i class="fas fa-users user"></i>
                </div>
                
                <div class="ms-4">
                    <p>Classes</p>
                    <p>10</p>
                </div>
            </article>
        </section>
        <section class="d-flex statistics_cercles">
            <div class="cercle border-danger mx-4">
                <p class="text-center percent">34%</p>
                <p class="text-center text-danger">Homme</p>
            </div>
            <div class="cercle me-4 femme">
                <p class="text-center text-dark percent">66%</p>
                <p class="text-center">Femmes</p>
            </div>
            <div class="cercle classes other">
                <p class="text-center percent">54%</p>
                <p class="text-center percent"></p>
            </div>
        </section>
        
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

</body>