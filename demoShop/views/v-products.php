<main class="container bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">

    <h3 class="p-2">Find right course for you!</h3>
  
        <form class="row" action="products-page.php" method="post">
            <div class="col-auto">
                <select class="form-select" name="asc" id="">
                    <option value="">Sort by</option>
                    <option value="price-asc" <?php if(!empty($_POST["asc"])) echo $_POST["asc"]=="price-asc" ?  'selected':  '';  ?> >Price up</option>
                    <option value="price-desc" <?php if(!empty($_POST["asc"])) echo $_POST["asc"]=="price-desc" ?  'selected':  '';  ?>>Price down</option>
                </select>
            </div>
            <div class="col-auto"><input class="form-control" type="text" name="term" placeholder="type anything :)" value= <?php if(!empty($_POST["term"])) echo $_POST["term"];  ?>></div>
            <div class="col-auto"><button class="btn btn-info mb-3">Show</button></div>
        </form>
    

    <div class="row p-2">
        <?php foreach ($products as $key => $product) { ?>
            <div class="col-4 p-2">
                <div class="card">
                    <h4 class="card-title text-center"><?php echo $product['title']; ?></h4>
                    <div class="row p-2">
                        <div class="col-6 "><img src="<?php echo $product['img'] ?>" class="card-img-top" max-width: 70% alt="..."></div>
                        <div class="col-6">
                            <p class="card-text" ><strong>Price: </strong><?php echo  "$". $product['price']; ?></p>
                            <a href="./single-product.php?id=<?php echo $product['id']; ?>&page=current" class="btn btn-primary">Show</a>
                        </div>
                        <!-- <div class="col-12">
      
                        </div> -->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>