<?php


include 'functions/Analitycs.php';
include 'functions/Products.php';

class Dashboard {

    //Check if product's type simple or variable and try astro api call
    static function check_urls(){

        $products_data  = get_product_data();
        $i = 0;

        //Resta un dia a la fecha actual
        $datenow =  new DateTime('', new DateTimeZone('America/Santiago')); 
        $datenow->modify("-1 day");

        $date = $datenow->format("Y-m-d");
        
        // delete_all_data();

        $webServiceAstro = new PrestaShopWebservice('https://astrogrowshop.cl', 'YL9FLI99UZIJQVMQPT1S1W6Z5TXSA8C9', false);
        
        foreach($products_data as $product_data){
            // echo json_encode($product_data[0]);
            $product_id = getProductIdFromUrl($product_data[0]);
            $product_id_response = null;
            $product_sessions = $product_data[1];
            $product_pageviews = $product_data[2];
            
            // echo $product_id;

            if(!empty($product_id)){
        
                if(is_array($product_id)){
        
                    //Variable product 
            
                    // echo "Variable: Product_id: ".$product_id['product_id']." - Variation_id: ".$product_id['variation_id'];
                    // echo "<br><br>";

                    try{

                        //Getting product stock available id
                        $astroXML = $webServiceAstro->get(['resource' => 'products/' . $product_id['product_id']]);
                        // print_r($astroXML);
                        // print_r((int)$astroXML->product->associations->stock_availables->stock_available->id);
                        
                        $product_id_response = (int)$astroXML->product->associations->stock_availables->stock_available->id;

                        //Now trying to retrieve product stock available info  with the new product id
                        try{
                        
                            $astroXML = $webServiceAstro->get(['resource' => 'stock_availables/' . $product_id_response]);
                            $product_quantity = (int)$astroXML->stock_available->quantity;
                            //echo "<br>Hay ".$product_quantity." Unidades en stock<br><br>";

                            if(!$product_quantity>0){
                                //Saving product on db
                                save_product(array(
                                    "product_sessions" => $product_sessions,
                                    "product_page_views" => $product_pageviews,
                                    "product_url" => "https://astrogrowshop.cl".$product_data[0],
                                    "product_stock_available_id" => $product_id_response,
                                    "analytics_date" => $date
                                ));
                            }

                        }catch (Throwable $t){

                            echo  print_r($t);
                        }


                    }catch (Throwable $t){  
                        echo  print_r($t);

                        // echo '<br>No encontrado<br>';
                    }

                    // $i++;

                    // if($i>5){

                    //     die;
                    // }
            
                }else{
                    //Simple product
        
                    // echo "Simple: <br><br>Product_id: ".$product_id."<br>Session: ".$product_sessions."<br>Page views: ".$product_pageviews;
                    // echo "<br><br>";
                
                    try{

                        //Getting product stock available id
                        $astroXML = $webServiceAstro->get(['resource' => 'products/' . $product_id]);
                        // print_r((int)$astroXML->product->associations->stock_availables->stock_available->id);
                        
                        $product_id_response = (int)$astroXML->product->associations->stock_availables->stock_available->id;

                        //Now trying to retrieve product stock available info  with the new product id
                        try{
                        
                            $astroXML = $webServiceAstro->get(['resource' => 'stock_availables/' . $product_id_response]);
                            $product_quantity = (int)$astroXML->stock_available->quantity;
                            // echo "<br>Hay ".$product_quantity." Unidades en stock<br><br>";

                            if(!$product_quantity>0){

                                //Saving product on db
                                save_product(array(
                                    "product_sessions" => $product_sessions,
                                    "product_page_views" => $product_pageviews,
                                    "product_url" => "https://astrogrowshop.cl".$product_data[0],
                                    "product_stock_available_id" => $product_id_response,
                                    "analytics_date" => $date
                                ));

                            }

                        }catch (Throwable $t){

                            echo  print_r($t);
                        }


                    }catch (Throwable $t){
                        
                        echo  print_r($t);
                
                        // echo '<br>No encontrado<br>';
                    }
            
                }

        
            }else{
        
                echo "No url";
        
            }
            
            // if($i>5){

            //     die;
            // }
        
        
        }
        
    }

    static function show_data(){

        $products_data = product_list();

        if($products_data){

            echo "Lista de productos sin stock: <br><br>";

            foreach($products_data as $data) echo "ID: ".$data['id']." - Product Stock Available Id: ".$data['product_said']." - Session: ".$data['product_sessions']." - Page views: ".$data['product_page_views']." - Product URL ".$data['product_url']."<br>";
        }
    }

    static function analytics_date(){

        $date = new DateTime('', new DateTimeZone('America/Santiago')); // For today/now, don't pass an arg.
        $date->modify("-1 day");

        return $date->format("Y-m-d");
    }

    static function delete_all_data(){
        
        delete_all_data();

    }

    static function load_view(){

        $products_data = product_list();
        $product_sessions = product_sessions();
        $product_total_views = product_views();
        $total_products = total_products();

        include "src/dashboard.view.php";
    }

    static function welcome(){

        include "src/home.view.php";
    }

    static function load_dashboard($date){

        $products = product_list_by_date($date);
        $product_sessions = product_sessions($date);
        $product_total_views = product_views($date);
        $total_products = total_products($date);

        if($products){

            include "src/dashboard.view.php";

            return;
        }

        include "src/404.view.php";
        return;
    }

    static function load_date_picker(){

    }
}