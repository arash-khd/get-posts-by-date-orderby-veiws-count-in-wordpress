<?php
$query = new WP_Query(array(
 "meta_key" => "veiws",
 "orderby" => "meta_value_num",
  "date_query" =>array(
    array(
        "year" => date("Y"),
         "week" => date("W")
    ),
  ),
));

   if ($query->have_posts()) {
   while ($query->have_posts()){    
    $query->the_post();  
   echo get_the_title() . "<br>";                 
    
 
 }
   wp_reset_postdata();  
}
         
  else {
   echo "no post here"l
  }
            ?>