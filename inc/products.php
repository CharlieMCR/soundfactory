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
        "name" => "Abstract Image One",
        "img" => "abstract/1",
        "price" => 18,
        "sizes" => array("200","400","600","800")
    );
    $products[102] = array(
        "name" => "Abstract Image Two",
        "img" => "abstract/2",
        "price" => 20,
        "sizes" => array("200","400","600","800")
    );
    $products[103] = array(
        "name" => "Abstract Image Three",
        "img" => "abstract/3",    
        "price" => 20,
        "sizes" => array("200","400","600","800")
    );
    $products[104] = array(
        "name" => "Abstract Image Four",
        "img" => "abstract/4",    
        "price" => 18,
        "sizes" => array("200","400","600","800")
    );
    $products[105] = array(
        "name" => "Abstract Image Five",
        "img" => "abstract/5",    
        "price" => 25,
        "sizes" => array("200","400","600","800")
    );
    $products[106] = array(
        "name" => "Abstract Image Six",
        "img" => "abstract/6",    
        "price" => 20,
        "sizes" => array("200","400","600","800")
    );
    $products[107] = array(
        "name" => "Abstract Image Seven",
        "img" => "abstract/7",    
        "price" => 20,
        "sizes" => array("200","400","600","800")
    );
    $products[108] = array(
        "name" => "Abstract Image Eight",
        "img" => "abstract/8",    
        "price" => 25,
        "sizes" => array("200","400","600","800")
    );
    $products[109] = array(
            "name" => "Abstract Image Nine",
            "img" => "abstract/9",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[110] = array(
            "name" => "Abstract Image Ten",
            "img" => "abstract/10",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[111] = array(
            "name" => "Animal Image One",
            "img" => "animals/1",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[112] = array(
            "name" => "Animal Image Two",
            "img" => "animals/2",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[113] = array(
            "name" => "Animal Image Three",
            "img" => "animals/3",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[114] = array(
            "name" => "Animal Image Four",
            "img" => "animals/4",    
            "price" => 24,
            "sizes" => array("200","400","600","800")
    );
    $products[115] = array(
            "name" => "Animal Image Five",
            "img" => "animals/5",    
            "price" => 24,
            "sizes" => array("200","400","600","800")
    );
    $products[116] = array(
            "name" => "Animal Image Six",
            "img" => "animals/6",    
            "price" => 24,
            "sizes" => array("200","400","600","800")
    );
    $products[117] = array(
            "name" => "Animal Image Seven",
            "img" => "animals/7",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[118] = array(
            "name" => "Animal Image Eight",
            "img" => "animals/8",    
            "price" => 25,
            "sizes" => array("200","400","600","800")
    );
    $products[119] = array(
            "name" => "Animal Image Nine",
            "img" => "animals/9",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[120] = array(
            "name" => "Animal Image Ten",
            "img" => "animals/10",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[121] = array(
            "name" => "Business Image One",
            "img" => "business/1",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[122] = array(
            "name" => "Business Image Two",
            "img" => "business/2",    
            "price" => 24,
            "sizes" => array("200","400","600","800")
    );
    $products[123] = array(
            "name" => "Business Image Three",
            "img" => "business/3",    
            "price" => 25,
            "sizes" => array("200","400","600","800")
    );
    $products[124] = array(
            "name" => "Business Image Four",
            "img" => "business/4",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[125] = array(
            "name" => "Business Image Five",
            "img" => "business/5",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[126] = array(
            "name" => "Business Image Six",
            "img" => "business/6",    
            "price" => 25,
            "sizes" => array("200","400","600","800")
    );
    $products[127] = array(
            "name" => "Business Image Seven",
            "img" => "business/7",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[128] = array(
            "name" => "Business Image Eight",
            "img" => "business/8",    
            "price" => 25,
            "sizes" => array("200","400","600","800")
    );
    $products[129] = array(
            "name" => "Business Image Nine",
            "img" => "business/9",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[130] = array(
            "name" => "Business Image Ten",
            "img" => "business/10",    
            "price" => 22,
            "sizes" => array("200","400","600","800")
    );
    $products[131] = array(
            "name" => "Cat Image One",
            "img" => "cats/1",    
            "price" => 20,
            "sizes" => array("200","400","600","800")
    );
    $products[132] = array(
            "name" => "Cat Image Two",
            "img" => "cats/2",    
            "price" => 25,
            "sizes" => array("200","400","600","800")
    );     

    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}
?>