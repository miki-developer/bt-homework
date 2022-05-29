<main>
    <div class="container text-white ">
       
        <div class="row">
            <div class="col-6 p-5" >
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-bottom" alt="...">
            </div>
            <div class="col-6">
                <h1 class="card-title mt-5"><?php echo htmlspecialchars($product['title']); ?></h1>
                <p>$Price: <?php echo $product['price']; ?></p>
                <p>Brand: <?php echo $product['brand']; ?></p>
                <p>Category: <?php echo $product['category']; ?></p>
                
                
                <form  class="row mb-4" action="checkout-page.php?id=<?php echo htmlspecialchars($product['id']); ?>" method="post">
                    <?php if(!empty($systemErrors['quantity'])) { ?>
                    <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['quantity']); ?></div>
                    <?php }?>
                    <div class="col-auto"><input class="form-control" type="number" name="quantity" value=1></div>
                    
                    <div class="col-auto"><button class="btn btn-primary mb-3">Buy</button></div>
                </form>
                <a class="btn btn-danger" href="./single-product.php?id=<?php echo htmlspecialchars($product['id']); ?>&page=prev">PREV</a>
                <a class="btn btn-warning" href="./products-page.php">Go BACK</a>
                <a class="btn btn-success" href="./single-product.php?id=<?php echo htmlspecialchars($product['id']); ?>&page=next">NEXT</a>
            </div>
            <div class="col-12">
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
            <div class="col-12 border-top border-2">
                <div class="row bg-dark"> 
                    <h3 class="p-2">Related products:</h3>       
                        <?php if($similarProducts) 
                                foreach ($similarProducts as $simPro) {?>
                            <div class="col-4 p-2">
                                <div class="row  rounded-lg p-4">
                                    <div class="col-6">
                                        <img class="card-img-top" src="<?php echo htmlspecialchars($simPro['img']); ?>" alt="">
                                    </div>
                                    <div class="col-6">
                                            <p><?php echo htmlspecialchars($simPro['title']); ?> </p> 
                                             <a href="./single-product.php?id=<?php echo $simPro['id']; ?>&page=current" class="btn btn-primary">Show</a>
                                    </div>
                                </div>
                            </div> 
                       <?php } else{ ?><p class="text-light">There are no more products in this category</p><?php } ?>
                     
               </div>
            </div>
        </div>
    </div>
</main>