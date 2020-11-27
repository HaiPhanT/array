<?php
function renderCategoryItem($itemData){
		?>
        <div class="col-md-4 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <?php echo"<img src='".$itemData["image"]."' alt=''>" ?>
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <h4>
                        <?php echo"<a href='single.html'>".$itemData["name"]."</a>" ?>
                    </h4>
                </div>
            </div>
        </div>
<?php
}
?>