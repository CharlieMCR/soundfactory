<?php

function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;

    foreach ($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}
/*
    * Loops through all the products, looking for a search term in the product names
    * @param string  $s  the search term
    * @return   array       a list of the products that contain the search term in their name
*/
function get_products_search($s)
{
    $results = array();
    $all = get_products_all();

    foreach ($all as $product) {
        if (stripos($product["name"], $s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

function get_products($shirt_id) {

    $all = get_products_all();
    $selectedShirt = array();

    if (isset($all[$shirt_id])) {
        $selectedShirt = $all[$shirt_id];
        // var_dump($selectedShirt); // troubleshooting
    }
    if (!array_key_exists($shirt_id, $all) || empty($shirt_id)) {
        header("Location: " . BASE_URL . "shirts/");
        exit();
    }
    return $selectedShirt;
}

function get_products_count()
{
    return count(get_products_all());
}

function get_products_subset($positionStart, $positionEnd)
{
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach ($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

function get_products_all() {
    $products = array();
    $products[101] = array(
        "name" => "Logo Shirt, Red",
        "img" => "img/101.jpg",
        "price" => 18,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[102] = array(
        "name" => "Mike the Frog Shirt, Black",
        "img" => "img/102.jpg",
        "price" => 20,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[103] = array(
        "name" => "Mike the Frog Shirt, Blue",
        "img" => "img/103.jpg",    
        "price" => 20,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[104] = array(
        "name" => "Logo Shirt, Green",
        "img" => "img/104.jpg",    
        "price" => 18,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[105] = array(
        "name" => "Mike the Frog Shirt, Yellow",
        "img" => "img/105.jpg",    
        "price" => 25,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[106] = array(
        "name" => "Logo Shirt, Gray",
        "img" => "img/106.jpg",    
        "price" => 20,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[107] = array(
        "name" => "Logo Shirt, Teal",
        "img" => "img/107.jpg",    
        "price" => 20,
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[108] = array(
        "name" => "Mike the Frog Shirt, Orange",
        "img" => "img/108.jpg",    
        "price" => 25,
        "sizes" => array("Large","X-Large")
    );
    $products[109] = array(
            "name" => "Get Coding Shirt, Gray",
            "img" => "img/109.jpg",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[110] = array(
            "name" => "HTML5 Shirt, Orange",
            "img" => "img/110.jpg",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[111] = array(
            "name" => "CSS3 Shirt, Gray",
            "img" => "img/111.jpg",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[112] = array(
            "name" => "HTML5 Shirt, Blue",
            "img" => "img/112.jpg",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[113] = array(
            "name" => "CSS3 Shirt, Black",
            "img" => "img/113.jpg",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[114] = array(
            "name" => "PHP Shirt, Yellow",
            "img" => "img/114.jpg",    
            "price" => 24,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[115] = array(
            "name" => "PHP Shirt, Purple",
            "img" => "img/115.jpg",    
            "price" => 24,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[116] = array(
            "name" => "PHP Shirt, Green",
            "img" => "img/116.jpg",    
            "price" => 24,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[117] = array(
            "name" => "Get Coding Shirt, Red",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[118] = array(
            "name" => "Mike the Frog Shirt, Purple",
            "img" => "",    
            "price" => 25,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[119] = array(
            "name" => "CSS3 Shirt, Purple",
            "img" => "",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[120] = array(
            "name" => "HTML5 Shirt, Red",
            "img" => "",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[121] = array(
            "name" => "Get Coding Shirt, Blue",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[122] = array(
            "name" => "PHP Shirt, Gray",
            "img" => "",    
            "price" => 24,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[123] = array(
            "name" => "Mike the Frog Shirt, Green",
            "img" => "",    
            "price" => 25,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[124] = array(
            "name" => "Logo Shirt, Yellow",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[125] = array(
            "name" => "CSS3 Shirt, Blue",
            "img" => "",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[126] = array(
            "name" => "Doctype Shirt, Green",
            "img" => "",    
            "price" => 25,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[127] = array(
            "name" => "Logo Shirt, Purple",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[128] = array(
            "name" => "Doctype Shirt, Purple",
            "img" => "",    
            "price" => 25,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[129] = array(
            "name" => "Get Coding Shirt, Green",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[130] = array(
            "name" => "HTML5 Shirt, Teal",
            "img" => "",    
            "price" => 22,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[131] = array(
            "name" => "Logo Shirt, Orange",
            "img" => "",    
            "price" => 20,
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[132] = array(
            "name" => "Mike the Frog Shirt, Red",
            "img" => "",    
            "price" => 25,
            "sizes" => array("Small","Medium","Large","X-Large")
    );     

    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}
?>