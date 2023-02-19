let tabFollows = document.getElementById("pills-follows-tab"); 
let tabFollowers = document.getElementById("pills-followers-tab"); 

let contentFollows = document.getElementById("pills-follows");
let contentFollowers = document.getElementById("pills-followers");

tabFollows.addEventListener('click', function(){
    tabFollows.classList.add('active');
    tabFollowers.classList.remove('active');
    //Affiche les follows
    contentFollowers.classList.remove('show', 'active');
    contentFollows.classList.add('show','active');
})

tabFollowers.addEventListener('click', function(){
    tabFollows.classList.remove('active');
    tabFollowers.classList.add('active');
    //Affiche les followers
    contentFollows.classList.remove('show','active');
    contentFollowers.classList.add('show','active');
})






