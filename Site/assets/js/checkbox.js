let btnEdition = document.getElementById('btn-edition');
let btnDel = document.querySelectorAll('button.btn-del-image');

let verif = btnEdition.textContent;

btnEdition.addEventListener('click', function(){
    if(verif == "Edition"){
        btnDel.forEach(function(btn){
            btn.style.visibility = "visible";
        })
        verif = btnEdition.innerText = "Annuler";
    }else{
        btnDel.forEach(function(btn){
            btn.style.visibility = "hidden";
        })
        verif = btnEdition.innerText = "Edition";
    }
})
