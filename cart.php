<?php
    include __DIR__ . "/Views/header.php";
    $cartJson = file_get_contents("Models/cart_db.json");
    // var_dump($cartJson);
    $cart = json_decode($cartJson, true);
    // var_dump($cart);
?>

<main id="app">
    <section>
        <div class="container">
            <h2 class="text-center mb-5 mt-5"><i class="fa-solid fa-cart-shopping"></i>Articoli nel carrello</h2>
            <div class="card-container d-flex flex-wrap">
                <?php foreach ($cart as $item): ?>
                    <div class="card card-cart">
                        <div class="container-img">
                            <img class="card-img-top" src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title"><?= $item['name'] ?></h5>
                            </div>
                            <p class="card-text"><?= $item['description'] ?></p>
                            <span class="price"><?= $item['price'] ?>€</span>
                        </div>
                        <button>Remove</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php
    include __DIR__ .    "/Views/footer.php";
?>