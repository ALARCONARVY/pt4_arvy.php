<?php
function getProducts() {
    return [
        'Fashion' => [
            ['name' => 'Summer Dress', 'price' => 9.99, 'description' => 'Floral Pattern Casual Dress', 'discount' => '70% OFF'],
            ['name' => 'Denim Jeans', 'price' => 12.99, 'description' => 'High-Waisted Slim Fit', 'discount' => '60% OFF'],
            ['name' => 'Basic T-Shirt', 'price' => 4.99, 'description' => 'Cotton Crew Neck', 'discount' => '50% OFF']
        ],
        'Home & Living' => [
            ['name' => 'LED Lights', 'price' => 5.99, 'description' => 'Strip Lights 16ft', 'discount' => '80% OFF'],
            ['name' => 'Throw Pillows', 'price' => 3.99, 'description' => 'Decorative Cushion Covers', 'discount' => '75% OFF'],
            ['name' => 'Wall Clock', 'price' => 8.99, 'description' => 'Modern Design Silent', 'discount' => '65% OFF']
        ],
        'Electronics' => [
            ['name' => 'Phone Case', 'price' => 2.99, 'description' => 'Shockproof Clear Case', 'discount' => '85% OFF'],
            ['name' => 'Wireless Earbuds', 'price' => 15.99, 'description' => 'Bluetooth 5.0', 'discount' => '70% OFF'],
            ['name' => 'Power Bank', 'price' => 11.99, 'description' => '10000mAh Fast Charging', 'discount' => '60% OFF']
        ]
    ];
}
$products = getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMU - Shop Like a Billionaire</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    background: #f5f5f5;
}

header {
    background: #ff2b45;
    color: white;
    padding: 20px;
    text-align: center;
}

.slogan {
    margin: 0;
    font-size: 0.9em;
    opacity: 0.9;
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
}

main {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 20px;
}

.products-grid {
    display: grid;
    gap: 30px;
}

.category-section {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.category-section h2 {
    color: #333;
    margin: 0 0 20px 0;
}

.products {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.product-card {
    position: relative;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.2s;
    border: 1px solid #eee;
}

.product-card:hover {
    transform: translateY(-4px);
}

.discount-tag {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ff2b45;
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.8em;
    font-weight: 500;
}

.product-image {
    height: 200px;
    background: #f8f8f8;
}

.product-info {
    padding: 15px;
}

.product-info h3 {
    margin: 0;
    font-size: 1em;
    color: #333;
}

.description {
    color: #666;
    font-size: 0.9em;
    margin: 8px 0;
}

.price-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

.price {
    color: #ff2b45;
    font-weight: 600;
    font-size: 1.2em;
}

button {
    background: #ff2b45;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    transition: background 0.2s;
}

button:hover {
    background: #e62640;
}

.cart-section {
    background: white;
    padding: 20px;
    border-radius: 12px;
    position: sticky;
    top: 20px;
    height: fit-content;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.cart-section h2 {
    margin: 0 0 20px 0;
    color: #333;
}

#cart-items {
    margin-bottom: 20px;
}

.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.cart-total {
    border-top: 2px solid #eee;
    padding-top: 15px;
    margin-top: 15px;
}

#total {
    font-size: 1.2em;
    font-weight: 600;
    color: #333;
}

#checkout-btn {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    font-size: 1.1em;
}
</style>
</head>
<body>
    <header>
        <h1>TEMU</h1>
        <p class="slogan">Shop Like a Billionaire</p>
    </header>
    <div class="container">
        <main>
            <div class="products-grid">
                <?php foreach ($products as $category => $items): ?>
                    <div class="category-section">
                        <h2><?php echo $category; ?></h2>
                        <div class="products">
                            <?php foreach ($items as $item): ?>
                                <div class="product-card">
                                    <div class="discount-tag"><?php echo $item['discount']; ?></div>
                                    <div class="product-image"></div>
                                    <div class="product-info">
                                        <h3><?php echo $item['name']; ?></h3>
                                        <p class="description"><?php echo $item['description']; ?></p>
                                        <div class="price-section">
                                            <span class="price">$<?php echo number_format($item['price'], 2); ?></span>
                                            <button onclick="addToCart('<?php echo $item['name']; ?>', <?php echo $item['price']; ?>)">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="cart-section">
                <h2>Shopping Cart</h2>
                <div id="cart-items"></div>
                <div class="cart-total">
                    <p id="total">Total: $0.00</p>
                    <button id="checkout-btn" onclick="checkout()">Checkout</button>
                </div>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
