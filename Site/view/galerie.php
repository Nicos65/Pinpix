<div class="container mt-5 mb-5">
    <div class="row justify-content-between align-items-center">
        <div class="col">
            <button class="filtre"><i class="bi bi-calendar-event"></i></button>
            <button class="filtre m-3"><i class="bi bi-star-fill"></i></button>
        </div>
        <div class="col"><h2 class="titles-pages text-center">GALERIE</h2></div>
        <div class="col text-end">
            <button class="btn btn-secondary" id="btn-edition">Edition</button>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="gallery-images">

                    <!-- -------------APPEL PHP------------- -->
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-end">
                            <p>189<i class="bi bi-hand-thumbs-up-fill"></i></p>
                        </div>
                        <div class="del-image" id="del-image-1">
                            <button class="btn-del-image">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </div>
                        <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="" data-bs-toggle="modal" data-bs-target="#picture">
                    </div>
                    <!-- -------------FIN------------- -->

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
                            <p>@username <i class="bi bi-suit-heart"></i></p>
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
    $script = "/pinpix/site/assets/js/checkbox.js";
?>



                