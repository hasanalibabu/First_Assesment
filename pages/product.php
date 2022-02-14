<?php include 'header.php';?>
<style>
    body{
        background-color: black;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top w-100"/>
                        <div class="card-body bg-light">
                            <h3 class="card-title"><?php echo $product['name'];?></h3>
                            <h3 class=""><?php echo $product['price'];?></h3>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $product['id'];?>" class="btn btn-dark">Details</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<section>

</section>

<?php include 'footer.php';?>
