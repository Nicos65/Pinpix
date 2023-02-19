<div class="container mt-5 mb-5">
    <div class="row justify-content-between align-items-center">
        <div class="col"><h2 class="gallery-title text-center">MES FOLLOWS</h2></div>
    </div>

    <div class="row">
        <div class="col">
        
            <div class="gallery-images">

                
                <?php 
                    displayImgAll($username, $nb_likes, $url_img);
                ?>
                
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
