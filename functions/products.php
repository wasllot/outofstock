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
            "analytics_date" => $product_data['analytics_date'],
            
        );

        $sql = "INSERT INTO product_data (product_sessions, product_page_views, product_url, product_said, analytics_date)";
        $sql .= "values (:" . implode(", :", array_keys($product)) . ")";
        
        $q = $conn->prepare($sql);
        $q->execute($product);

    } catch (PDOException $error) {

        $resultado['error'] = true;
        $resultado['message'] = $error->getMessage();

        print_r($resultado);
    }
}

function product_list_by_date($date){
    global $conn;

    $sql = 'SELECT * FROM product_data WHERE analytics_date = "'.$date.'"';
    $result = getQuery($sql);
    
    return $result;
}



function product_list(){
    global $conn;

    $sql = 'SELECT * FROM product_data';
    $result = getQuery($sql);
    
    return $result;
}

function product_sessions($date){
    global $conn;

    $sql = 'SELECT  SUM(product_sessions) as total_sessions FROM product_data WHERE analytics_date = "'.$date.'"';
    $result = getQuery($sql);

    return $result[0]['total_sessions'];
}

function product_views($date){

    $sql = 'SELECT  SUM(product_page_views) as total_views FROM product_data WHERE analytics_date = "'.$date.'"';
    $result = getQuery($sql);

    return $result[0]['total_views'];
}

function total_products($date){
    
    $sql = 'SELECT COUNT(*) as total_products FROM product_data WHERE analytics_date = "'.$date.'"';
    $result = getQuery($sql);

    return $result[0]['total_products'];
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

//Get query

function getQuery($sql){
    global $conn;

    if($sql){

        $result = $conn->query($sql);
        $array = array();
    
        if ($result->rowCount() > 0) {
    
            while($rows = $result->fetch(PDO::FETCH_ASSOC)) {
                
                foreach($rows as $key => $row){
    
                    $data[$key] = $row;
                    
                }
    
                array_push($array, $data);
            }
    
           return $array;
        }    


    }

    return null;

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
