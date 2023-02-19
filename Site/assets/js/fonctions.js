
let connectedUser = document.getElementById('compte').textContent;
let statutFollow = document.getElementsByClassName('unfollow');

function addFollower(){

    if(statutFollow == 'unfollow'){
        statutFollow.srcAttribute = ("class", "follow");
    }else{
        statutFollow.srcAttribute = ("class", "unfollow");
    }

    $.ajax({
        url: 'localhost/pinpix/site/controller/fonctions.php',
        type: 'POST',
        data: {
            user1 : connectedUser,
            user2 : followUser
        }
    });
}







function addLike(this){
    let imgLike = document.getElementById('image');
    imgLike = this.imgLike;

    $.ajax({
        url: 'localhost/pinpix/site/controller/fonctions.php',
        type: 'POST',
        data: {
            userLike : connectedUser,
            imgLike : imgLike
        }
    });
}
