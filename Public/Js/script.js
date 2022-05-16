// Form Create
function openModalCreate(){
  document.getElementById("modal_student_Create").style.display = "block";
  document.getElementById("modal_student_Create").style.display = "flex";
} 

function closeModalCreate(){
  document.getElementById("modal_student_Create").style.display = "none"; 
}

// Form Edite
function openModalEdite(){
  document.getElementById("modal_student_Edite").style.display = "block";
  document.getElementById("modal_student_Edite").style.display = "flex";
} 

function closeModalEdite(){
  document.getElementById("modal_student_Edite").style.display = "none"; 
}


let form = document.getElementById('form');
let nom = document.getElementById('nom');
let error = document.getElementById('error');

form.addEventListener('submit', (e) =>{
  if(nom.ariaValueMax.trim()){
    error.textContent = "nom is empty"
    nom.style.border = '1px solid red'
  }
})