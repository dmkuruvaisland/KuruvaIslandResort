
            <section class="section3 faq-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-title text-center mb-4 pb-2">
                            <h3 class="title mb-3">Frequently asked questions</h3>
                            <!--<p class="text-muted mx-auto para-desc mb-2">-->
                            <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus eaque ipsa accusamus non-->
                            <!--  quibusdam quo mollitia similique amet sit.-->
                            <!--</p>-->
                            </div>
                        </div>
                    </div>
                        
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                        
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                
                                <?php
                                foreach($faqs as $f)
                                {
                                ?>
                                <div class="accordion-item" style="border-bottom:1px solid #123d35 !important;">
                                    <h2 class="accordion-header" id="flush-headingOne<?=$f['id'];?>">
                                        <button style="font-size:16px;line-height:1.6;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?=$f['id'];?>" aria-expanded="false" aria-controls="flush-collapseOne<?=$f['id'];?>">
                                            <?=$f['question'];?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne<?=$f['id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?=$f['id'];?>" data-bs-parent="#accordionFlushExample<?=$f['id'];?>">
                                        <div class="accordion-body">
                                         <?=$f['answer'];?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </section>
            
            
            
            <style>
                .accordion button:focus{
                    background-color:#f8f8f8 !important;
                }
            </style>

