<? 
$title = "Товары";
require_once 'header.php'; 

$products = $db->query("SELECT * FROM `products`");

?>
    

<section class="products">
    <div class="products__wrapper">
        <div class="products__container container">
            <h2>Товары</h2>
            <div class="products__body">

                <? foreach ($products as $product) { ?>
                    <article class="body-item">
                        
                        <div class="products__text">
                            <h3><?=$product['title']?></h3>
                            <img src="/images/products/<?=$product['img']?>">
                            <small><?=$product['price']?></small>
                            <button>В корзину</button>
                        </div>
                    </article>
                <? } ?>
            </div>
        </div>
    </div>
</section>


<? require_once 'footer.php'; ?>