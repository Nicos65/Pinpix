let tabTags = document.getElementById('tags-tab');
let tabUsers = document.getElementById('utilisateurs-tab');

let contentTags = document.getElementById('tags');
console.log(contentTags);
let contentUsers = document.getElementById('utilisateurs');

tabTags.addEventListener('click', function(){
    tabTags.classList.add('active');
    tabUsers.classList.remove('active');
    //Affiche le contenu des tags
    contentUsers.classList.remove('show', 'active');
    contentTags.classList.add('show','active');
})

tabUsers.addEventListener('click', function(){
    tabTags.classList.remove('active');
    tabUsers.classList.add('active');
    //Affiche le contenu des utilisateurs
    contentTags.classList.remove('show','active');
    contentUsers.classList.add('show','active');
})


