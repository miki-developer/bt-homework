<main>
    <div class="container bg-light p-5">
        
        <form class="row" action="form-check.php?id=<?php echo htmlspecialchars($product['id']); ?>&quan=<?php echo $quantity ?>" method="post">
            <!-- <?php if(empty($systemErrors)){?>
                <h2 class="text-success text-center">Uspesno ste kupili proizvod</h2>   
            <?php } ?> -->
                <div class="col-6 mb-4">
                    
                       <?php if(!empty($systemErrors['ime'])) { ?>
                        <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['ime']); ?></div>
                        <?php }?>
                        <input class="form-control mb-4 w-75" type="text" placeholder="name*" name="ime" value='<?php if(!empty($systemErrors)) echo $_POST["ime"];  ?>'>
                        <?php if(!empty($systemErrors['prezime'])) { ?>
                        <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['prezime']); ?></div>
                        <?php }?>
                        <input class="form-control mb-4 w-75" type="text" placeholder="last name*" name="prezime" value='<?php if(!empty($systemErrors)) echo $_POST["prezime"];  ?>'>
                        <?php if(!empty($systemErrors['email'])) { ?>
                        <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></div>
                        <?php }?>
                        <input class="form-control mb-4 w-75" type="text" placeholder="email*" name="email" value='<?php if(!empty($systemErrors)) echo $email;  ?>'>
                        
                        <div class="row w-75 justify-content-between">
                            <div class="col-12">
                                <div class="row">
                                    <div  id="emailHelp" class="form-text text-danger col-6">
                                    <?php if(!empty($systemErrors['grad'])) { ?>
                                        <?php echo htmlspecialchars($systemErrors['grad']); ?>
                                    <?php }?>
                                    </div>
                                    <div  id="emailHelp" class="form-text text-danger col-6">
                                    <?php if(!empty($systemErrors['telefon'])) { ?>
                                        <?php echo htmlspecialchars($systemErrors['telefon']); ?>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6"><input class="form-control mb-4 " type="text" placeholder="city*" name="grad" value='<?php if(!empty($systemErrors)) echo $_POST["grad"];  ?>'></div>
                            
                            <div class="col-6"><input class="form-control mb-4 " type="text" placeholder="phone*" name="telefon" value='<?php if(!empty($systemErrors)) echo $_POST["telefon"];  ?>'></div>
                            <div class="col-12">
                                <div class="row">
                                    <div id="emailHelp" class="form-text text-danger col-6">
                                    <?php if(!empty($systemErrors['ulica'])) { ?>
                                    <?php echo htmlspecialchars($systemErrors['ulica']); ?>
                                                <?php }?>
                                    </div>
                                     <div id="emailHelp" class="form-text text-danger col-6">
                                        <?php if(!empty($systemErrors['zip'])) { ?>
                                        <?php echo htmlspecialchars($systemErrors['zip']); ?>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6"><input class="form-control mb-4 " type="text" placeholder="street number*" name="ulica" value='<?php if(!empty($systemErrors)) echo $_POST["ulica"];  ?>'></div>
                            
                            <div class="col-6"><input class="form-control mb-4 " type="text" placeholder="zip*" name="zip" value='<?php if(!empty($systemErrors)) echo $_POST["zip"];  ?>'></div>
                        </div>
                        
                        <textarea class="form-control w-75 mb-4" name="komentar" id="" cols="30" rows="10" placeholder="comment"></textarea>
                        <?php if(!empty($systemErrors['uslov'])) { ?>
                        <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['uslov']); ?></div>
                        <?php }?>
                        <input type="checkbox" name="uslov" <?php if(!empty($systemErrors)) echo !empty($_POST['uslov'])?"checked":""  ?>>
                        <label for="">I agree with all terms</label>
                   
                </div>
                <div class="col-6">

                    <div class="row">
                        <div class="col-4"><img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="..."></div>
                        <div class="col-4">
                            <h1 class="card-title mb-4"><?php echo htmlspecialchars($product['title']); ?></h1>
                        </div>
                        <div class="col-12">
                            <p>$Price for one item:<?php echo $product['price']; ?></p>
                        </div>
                        <div class="col-12">
                            <p>$Total:<?php echo $quantity*$product['price']; ?></p>
                            
                        </div>
                        
                        
                        <a class="btn btn-warning w-50" href="./products-page.php">Go BACK</a>
                        <button class="btn btn-primary mt-4">Buy</button>
                        
                    </div>
                </div>
           
        </form>
    </div>
</main>