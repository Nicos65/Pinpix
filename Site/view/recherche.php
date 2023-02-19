<div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tags-tab" data-toggle="tab" href="#tags" role="tab" aria-controls="tags" aria-selected="true">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="#utilisateurs" role="tab" aria-controls="utilisateurs" aria-selected="false">Utilisateurs</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                    
                        <div class="gallery-images">
                            <div class="box d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <p>@username <i class="bi bi-heart-fill"></i></p>
                                    <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                                </div>
                                <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="" data-bs-toggle="modal" data-bs-target="#picture">
                            </div>

                        <!-- A supprimer plus tard -->
                            <div class="box d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <p>@username <i class="bi bi-heart-fill"></i></p>
                                    <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                                </div>
                                <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="">
                            </div>
                            <div class="box d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <p>@username <i class="bi bi-heart-fill"></i></p>
                                    <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                                </div>
                                <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="">
                            </div>
                            <div class="box d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <p>@username <i class="bi bi-heart-fill"></i></p>
                                    <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                                </div>
                                <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="">
                            </div>
                        <!-- FIN -->
                        </div>

                    </div>
                    <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">
                        <br>
                        <li class="d-flex align-items-center found-user">
                            <img src="https://fastly.picsum.photos/id/1011/70/70.jpg?hmac=cxtgQEytAyzNZbQCqPVowCEDJfq1Hc-u_oztFYPHOE4" alt="">
                            <a href="" class="m-2"><h4>User822</h4></a>
                        </li>

                        <!-- A supprimer plus tard -->
                        <hr>
                        <li class="d-flex align-items-center found-user">
                            <img src="https://fastly.picsum.photos/id/41/70/70.jpg?hmac=tVR4ac7Exid0MyHu0rzNReD7oRiRxpfuwp2LKfhOykQ" alt="">
                            <a href="" class="m-2"><h4>User83</h4></a>
                        </li>
                        <hr>
                        <li class="d-flex align-items-center found-user">
                            <img src="https://fastly.picsum.photos/id/691/70/70.jpg?hmac=7dwaR7QCIJTeK-N-yZoyYRtWhf83uro1qS-S14LNk18" alt="">
                            <a href="" class="m-2"><h4>User322</h4></a>
                        </li>
                        <hr>
                        <!-- FIN -->
                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal photo -->
    <div class="modal fade" id="picture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Nom de l'image</h5>
                </div>

                <div class="modal-body">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/499/800/600.jpg?hmac=kNoHCFPvxcAVkC2BjZmeF8alHf6wewuAz1JeHg_lMgo" alt="">
                        <div class="d-flex justify-content-between">
                            <p>
                                <i class="bi bi-tags"></i> 
                                tags1
                            </p>
                            <p>02/03/2022</p>
                        </div>
                    </div>
                    <div>
                        <h3>Description</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, atque assumenda beatae eaque possimus quia. Accusantium, perferendis? Totam nobis repudiandae voluptatem unde temporibus dolor exercitationem, porro itaque eos, possimus ipsum assumenda voluptatibus et voluptatum expedita odio ducimus, excepturi maiores? Doloribus ipsum accusamus ipsam id commodi ut non nulla earum, dicta, deserunt a error dignissimos illo vero. Eum qui dicta delectus!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    $script = "/pinpix/site/assets/js/research-tab.js";
?>