<!--List products-->
<article>
    <?php foreach ($data['product'] as $product) : ?>
        <div class="col">
            <div class="product">
                <a href="#">
                    <img src="<?= $product->image ?>">
                    <h3><?= $product->name ?></h3>
                    <div class="price"><?= $product->price ?></div>
                    <div class="desc">
                        <p><?= $product->short_desc ?></p>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</article>
<!--End list products-->