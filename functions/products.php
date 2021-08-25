<?php


function save_product($product_data){

    global $conn;

    $result = [
        'error' => false,
        'message' => 'Product saved successfully'
    ];


    try {

        $product = array(
            "product_sessions" => $product_data['product_sessions'],
            "product_page_views" => $product_data['product_page_views'],
            "product_url" => $product_data['product_url'],
            "product_said" => $product_data['product_stock_available_id'],
            "product_variation_id" => $product_data['product_variation_id'],
            
        );

        $sql = "INSERT INTO product_data (product_sessions, product_page_views, product_url, product_said, product_variation_id)";
        $sql .= "values (:" . implode(", :", array_keys($product)) . ")";
        
        $q = $conn->prepare($sql);
        $q->execute($product);

    } catch (PDOException $error) {

        $resultado['error'] = true;
        $resultado['message'] = $error->getMessage();

        print_r($resultado);
    }
}



function product_list(){
    global $conn;

    $sql = 'SELECT * FROM product_data';

    $result = $conn->query($sql);
    $array = array();

    if ($result->rowCount() > 0) {

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $data['id'] = $row['id'];
            $data['product_sessions'] = $row['product_sessions'];
            $data['product_page_views'] = $row['product_page_views'];
            $data['product_url'] = $row['product_url'];
            $data['product_said'] = $row['product_said'];
            $data['product_variation_id'] = $row['product_variation_id'];
            
            array_push($array, $data);
        }

       return $array;
    }

    return null;

}

function delete_product($id) {
    global $conn;

    $sql = 'DELETE FROM product_data
            WHERE id = :id';

    $q = $conn->prepare($sql);

    return $q->execute([':id' => $id]);
}

function delete_all_data(){
    global $conn;
    
    $sql = 'DELETE FROM product_data';
    
    $q = $conn->prepare($sql);
    return $q->execute();
}


//Get product id from url
function getProductIdFromURL($product_url){


    if(!empty($product_url)){

        $params_url = explode("/", $product_url);

        if(sizeof($params_url)>2){

            $product_url = $params_url[2];  

        }else{

            $product_url = $params_url[1];
        }

        // echo '<br>';
        // echo json_encode($product_url);
        // echo '<br>';

        //Get Product ids from url

        $product_url_params = explode("-", $product_url);


        if(is_numeric($product_url_params[0]) && is_numeric($product_url_params[1])){
            //Variable product

            $product_id = $product_url_params[0];
            $variation_id = $product_url_params[1];

            // echo "Product id:  ".$product_id." - Variation_id: ".$variation_id."<br><br>";

            $product_ids = array(
                "product_id"  => (int)$product_id,
                "variation_id" => (int)$variation_id,
            );
            
            return $product_ids;

        }else{

            //Simple product

            $product_id = $product_url_params[0];
        

            // echo "Product id:  ".$product_id."<br><br>";

            return (int)$product_id;

        }
    

    }else{

        echo "Empty URL";

    }
}
