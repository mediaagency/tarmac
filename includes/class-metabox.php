<?php 
class ma_create_metabox  {


	/*
	* Fifty shades of crap!
	*/
	
	/**
	* DECLARE VARIABLES 
	*/
	public $post_type_value;
	public $metabox_slug;
	public $metabox_name;
	public $theme_lang_slug;
	public $metabox_placement;
	public $metabox_prio;
	public $meta_nonce_slug;
	public $meta_nonce_name;
	public $meta_content_render;
	public $meta_input_type;
	public $meta_type_select_q1;

    /**
     * Hook into the appropriate actions when the class is constructed.
     */
    public function __construct($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k) {
        add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
        add_action( 'save_post', array( $this, 'save' ) );

        //Construct variables 

      	$this->post_type_value 		= $a;
      	$this->metabox_slug 		= $b;
      	$this->metabox_name 		= $c;
      	$this->theme_lang_slug		= $d;
      	$this->metabox_placement	= $e;
      	$this->metabox_prio			= $f;
      	$this->meta_nonce_slug		= $g;
      	$this->meta_nonce_name		= $h;
      	$this->meta_content_render	= $i;
      	$this->meta_input_type		= $j;
      	$this->meta_type_select_q1  = $k;
    }

    /**
     * Adds the meta box container.
     */
    public function add_meta_box( $post_type ) {
            $post_types = array($this->post_type_value);     //limit meta box to certain post types
            if ( in_array( $post_type, $post_types )) {
        add_meta_box(
            $this->metabox_slug
            ,__( $this->metabox_name, $this->theme_lang_slug )
            ,array( $this, 'render_meta_box_content' )
            ,$post_type
            ,$this->metabox_placement
            ,$this->metabox_prio
        );
            }
    }

    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save( $post_id ) {
      
        global $post;

        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

        // Check if our nonce is set.
        if ( ! isset( $_POST[$this->meta_nonce_name] ) )
            return $post_id;

        $nonce = $_POST[$this->meta_nonce_name];

        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce, $this->meta_nonce_slug ) )
            return $post_id;

        // If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
            return $post_id;

        // Check the user's permissions.
        if ( $this->post_type_value == $_POST['post_type'] ) {

            if ( ! current_user_can( 'edit_page', $post->ID ) )
                return $post_id;
    
        } else {

            if ( ! current_user_can( 'edit_post', $post->ID ) )
                return $post_id;
        }

        /* OK, its safe for us to save the data now. */

        foreach ($this->meta_content_render as $key => $value) {
        	//sanetaize the input
        	if(isset($value)){
            //Push the updated value to db. 
            update_post_meta( $post_id, $value, sanitize_text_field( $_POST[$value] ));  
          }
        	
        }

    }


    /**
    * Function to strip spaces from title to, add ID's
    */
    private function strip_space($str) {
      $input_id_dash = str_replace ( ' ' , '-' , $str );
      $input_id_dash = strtolower ( $input_id_dash);

      return $input_id_dash;
    }

    private function create_meta_content($title, $input_name, $meta_input_type, $meta_type_select_q1){
		global $post;

		foreach ($meta_input_type as $key => $input) {
			if($key == $title){
				//Normal text input
				if( $input == 'text' ){
					return '<p id="'.$this->strip_space($title).'">
		                <label><b>'.$title.'</b></label><br />
		                <input type="text" name="'.$input_name.'" value="'.get_post_meta($post->ID, $input_name, true).'" class="widefat" />
		               	</p>';
				}

        //Make textarea
        if( $input == 'textarea') {
          return '<p id="'.$this->strip_space($title).'">
                    <label><b>'.$title.'</b></label><br />
                    <textarea class="widefat" cols="5" rows="5" name="'.$input_name.'">'.get_post_meta($post->ID, $input_name, true).'</textarea>
                  </p>';
        }
				//Radio buttons Normal
				if( $input == 'radioOn'){
          ?>
            <p>
              <label><b><?php echo $title;?></b></label>
            </p>
              <?php
              foreach ($meta_type_select_q1 as $id => $value) {
                if($id == $title){
                  foreach ($value as $item) {
                    if($item == get_post_meta($post->ID, $input_name, true) ){
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat" checked/>
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }else if(get_post_meta($post->ID, $input_name, true) == "" && $item == 'ON'){
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat" checked/>
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }else{
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat" />
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }
                  }
                }
              }
				}

        //Radio buttons wide
        if( $input == 'radioOff'){
          ?>
            <p>
              <label><b><?php echo $title;?></b></label>
            </p>
              <?php
              foreach ($meta_type_select_q1 as $id => $value) {
                if($id == $title){
                  foreach ($value as $item) {
                    if($item == get_post_meta($post->ID, $input_name, true) ){
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat" checked/>
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }else if(get_post_meta($post->ID, $input_name, true) == "" && $item == 'OFF'){
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat" checked/>
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }else {
                      echo '<input type="radio" name="'.$input_name.'" value="'.$item.'" class="widefat"/>
                        <label style="margin-right: 10px;"><b>'.$item. '</b></label>';
                    }
                  }
                }
              }
        }

				// Normal Select box with values 
				if( $input == 'select') {	
					?>
				    	<p>
				    	<label><b><?php echo $title?></b></label>
				    	<select id="<?php echo $this->strip_space($title)?>" name="<?php echo $input_name;?>" class="widefat">
				    	<?php
					   	foreach ($meta_type_select_q1 as $id => $value) {

					   		if($id == $title){
					   			foreach ($value as $item) {
                    if( $item == get_post_meta($post->ID, $input_name, true) ){
                      echo '<option value="'.$item.'" selected>'.$item.'</option>';
                    }else{
                      echo '<option value="'.$item.'">'.$item.'</option>';  
                    }
					   				
					   			}
					   		}	
					   	}			   		
					   	?>
				   		</select>
				   		</p>
				   	<?php
				}

				//Category select from wordpress loop
				if( $input == "category" ) {

				    $option_cat = get_categories();
					?>
				    	<p>
				    	<label><b><?php echo $title?></b></label>
				    	<select name="<?php echo $input_name;?>" class="widefat">
				    	<?php
					   	foreach ($option_cat as $cat) {
                if( $cat->cat_ID == get_post_meta($post->ID, $input_name, true) ){
                  echo '<option value="'.$cat->cat_ID.'" selected>'.$cat->name.'</option>';
                }else{
					   		echo '<option value="'.$cat->cat_ID.'">'.$cat->name.'</option>';
                }
					   	}
				   		?>
				   		</select>
				   		</p>
				   	<?php
				}

        if( $input == "imageUpload" ) {
          
          return '<p>
          <label><b>'.$title.'</b></label></br>
          <input id="'.$input_name.'" type="text" size="25" name="'.$input_name.'" value="'.get_post_meta($post->ID, $input_name, true).'"/>
          <input id="'.$input_name.'_button" type="button" value="'.__('Upload image', 'ma_ls').'" class="button" />
          <p>';
        }

        if( $input == "colorpicker" ) {
          return '<p>
          <lable><b>'.$title.'</b></lable></br>
          <input type="text" class="'.$input_name.'" name="'.$input_name.'" value="'.get_post_meta($post->ID, $input_name, true).'" data-default-color="#fff "/>
          </p>';
        }

        if( $input == "checkbox" ) {

          if(get_post_meta($post->ID, $input_name, true) == 'on'){
            return '<p>
            <input type="checkbox" name="'.$input_name.'" checked>
            <label><b>'.$title.'</b></label>
            </p>';
          }else{
            return '<p>
            <input type="checkbox" name="'.$input_name.'" >
            <label><b>'.$title.'</b></label>
            </p>';
          }
        }

        if($input == "textblock") {
          ?>
          <p>
            <label><b><?php echo $title; ?></b></label>
            <?php
            foreach ($meta_type_select_q1 as $id => $value) {
              if($id == $title){
                foreach ($value as $item) {
                  return '<p>'.$item.'</p><input hidden type="text" name="'.$input_name.'" value="'.get_post_meta($post->ID, $input_name, true).'" class="widefat" />';
                }
              } 
            } 
          ?>
          </p>
          <?php
        }


        //Product post page, shows result if checked, only for TARMAC. 
        if($input == "posts") {
          // The Query
          $CPID = $post->ID;
          $query_posts = new WP_Query('post');
          // The Loop
          if ( $query_posts->have_posts() ) {
            ?>
            <p>
              <label><b><?php echo $title?></b></label>
              <select name="<?php echo $input_name;?>" class="widefat">
            <?php
            while ( $query_posts->have_posts() ) {
                $query_posts->the_post();
                if( get_post_meta($post->ID, 'ma_tarmac_post_type', true) == 'on' ){
                  if( $post->ID == get_post_meta($CPID, $input_name, true) ){
                    echo '<option value="'.$post->ID.'" selected>'.get_the_title().'</option>';
                  }else {
                    echo '<option value="'.$post->ID.'">'.get_the_title().'</option>';  
                  }
                }              
            }
            ?>
            </select>
            </p>
            <?php
          } else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();
        }



			}
			
		}
    }


    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content( $post ) {
    
        // Add an nonce field so we can check for it later.
        wp_nonce_field( $this->meta_nonce_slug, $this->meta_nonce_name );

        foreach ($this->meta_content_render as $key => $value) {
        	echo $this->create_meta_content($key, $value, $this->meta_input_type, $this->meta_type_select_q1);
        }

       
    }
}

?>