<!DOCTYPE html>
<!--
    PROBLEM:
    Create a Product Price Calculation system using OOP.
    1. Create a 'Product' class with properties: name, category, price.
    2. Define rules in the constructor to adjust the price:
       - If the category is 'Electronics', add 15% tax to the price.
       - If the name has more than 5 characters, give a 50 discount.
    3. Create a method 'showInfo' to display the product details.
    4. Create an array of products and loop to display them.
-->
<html>
<head>
    <title>Product Pricing</title>
    <style>
        .card { border: 1px solid #ddd; padding: 10px; margin: 5px; background: #fafafa; }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <?php
    class Product {
        public $name;
        public $category;
        public $price;

        public function __construct($name, $category, $basePrice) {
            $this->name = $name;
            $this->category = $category;
            $this->price = $basePrice;
            $this->adjustPrice();
        }

        private function adjustPrice() {
            // Critical Rule 1: Electronics get 15% Tax
            if ($this->category == 'Electronics') {
                $this->price += $this->price * 0.15;
            }
            // Critical Rule 2: Long names get discount
            if (strlen($this->name) > 5) {
                $this->price -= 50;
            }
        }

        public function showInfo() {
            echo "<div class='card'>Product: {$this->name} | Category: {$this->category} | Final Price: {$this->price}</div>";
        }
    }

    $shop = [
        new Product("Laptop", "Electronics", 50000),
        new Product("Mouse", "Electronics", 500),
        new Product("Chair", "Furniture", 3000),
        new Product("Table", "Furniture", 8000),
        new Product("Smartphone", "Electronics", 20000)
    ];

    foreach ($shop as $item) {
        $item->showInfo();
    }
    ?>
</body>
</html>
