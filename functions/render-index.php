<?php
function renderIndexItem($data_array){
	foreach ($data_array as $itemData) { 
		?>
        <div class='col-md-4 product-men'>
            <div class='men-pro-item simpleCart_shelfItem'>
                <div class='men-thumb-item'>
                    <?php echo"<img src='".$itemData["image"]."' alt=''>" ?>
                    <div class='men-cart-pro'>
                        <div class='inner-men-cart-pro'>
                            <a href='single.html' class='link-product-add-cart'>Quick View</a>
                        </div>
                    </div>
                    <span class='product-new-top'>New</span>
                </div>
                <div class='item-info-product '>
                    <h4>
                        <?php 
                            if (isset($itemData["weight"])) {
                                echo "<a href='single.html'>".$itemData["name"].", ".$itemData["weight"]."g</a>";
                            }
                            if (isset($itemData["volume"])) {
                                echo "<a href='single.html'>".$itemData["name"].", ".$itemData["volume"]."L</a>";
                            }
                        ?>
                    </h4>
                    <div class='info-product-price'>
                        <?php echo "<span class='item_price'>$".$itemData["reducePrice"]."</span>" ?>
                        <?php echo "<del>$".$itemData["originalPrice"]."</del>" ?>
                    </div>
                    <div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out'>
                        <form action='#' method='post'>
                            <fieldset>
                                <input type='hidden' name='cmd' value='_cart' />
                                <input type='hidden' name='add' value='1' />
                                <input type='hidden' name='business' value=' ' />
                                <?php 
                                    if (isset($itemData["weight"])) {
                                        echo "<input type='hidden' name='item_name' value='".$itemData["name"].", ".$itemData["weight"]."' />";
                                    }
                                    if (isset($itemData["volume"])) {
                                        echo "<input type='hidden' name='item_name' value='".$itemData["name"].", ".$itemData["volume"]."' />";
                                    }
                                ?>
                                <?php echo "<input type='hidden' name='amount' value='".$itemData["reducePrice"]."' />" ?>
                                <input type='hidden' name='discount_amount' value='1.00' />
                                <input type='hidden' name='currency_code' value='USD' />
                                <input type='hidden' name='return' value=' ' />
                                <input type='hidden' name='cancel_return' value=' ' />
                                <input type='submit' name='submit' value='Add to cart' class='button' />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>