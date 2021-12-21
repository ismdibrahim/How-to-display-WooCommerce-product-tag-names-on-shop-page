add_action( 'woocommerce_before_shop_loop_item_title', 'aq_display_brand_before_title' );
 function aq_display_brand_before_title(){
   global $product;
   $product_id = $product->get_id();
   $brands = wp_get_post_terms( $product_id, 'product_tag' );
   foreach( $brands as $brand ){
     echo '<a href="'.get_term_link($brand->term_id).'" class="category uppercase is-smaller no-text-overflow product-cat op-7">';
      echo $brand->name;
     echo '</a>';
   }
 }
