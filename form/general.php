<form method="post" action="options.php">
  <?php settings_fields( 'general-settings-group' ); ?>
  <?php do_settings_sections( 'general-settings-group' ); ?>
<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="general" checked>
  <label for="tab1">General</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="history">
  <label for="tab2">History</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="vision">
  <label for="tab3">Visi Misi</label>

  <input type="radio" name="tabset" id="tab4" aria-controls="service">
  <label for="tab4">Service</label>

  <input type="radio" name="tabset" id="tab5" aria-controls="projects">
  <label for="tab5">Project</label> 

  <input type="radio" name="tabset" id="tab6" aria-controls="projects">
  <label for="tab6">Team</label>

  <input type="radio" name="tabset" id="tab7" aria-controls="mediaSocial">
  <label for="tab7">Media Social</label>

  <?php submit_button(); ?>
  
  <div class="tab-panels">
    <section id="general" class="tab-panel">
      <h2>General</h2>

      <div class="form-group">
        <label for="blogname">Site Title</label>
        <input type="text" id="blogname" name="blogname" value="<?php echo esc_attr( get_option('blogname') ); ?>" class="form-input">
      </div>  

      <div class="form-group">
        <label for="blogdescription">Site Description</label>
        <input type="text" id="blogdescription" name="blogdescription" value="<?php echo esc_attr( get_option('blogdescription') ); ?>" class="form-input">
      </div> 

      <div class="form-group">
        <label for="image_url_logo">Logo:</label><br/>
        <img src="<?php echo esc_attr( get_option('image_logo') ); ?>" id="image_logo" style="max-width: 300px">
        <input type="hidden" name="image_logo" id="image_url_logo" class="regular-text" value="<?php echo esc_attr( get_option('image_logo') ); ?>"><br/>
        <input type="button"  id="upload-btn-logo" data-id="logo" class="button-secondary upload-image" value="Upload Image">
        <input type="button"  id="remove-button-logo" data-id="logo" class="button-secondary remove-image" value="Remove Image">
      </div>

      <div class="form-group">
        <label for="first_line">First Line</label>
        <input type="text" id="first_line" name="first_line" value="<?php echo esc_attr( get_option('first_line') ); ?>" class="form-input">
      </div> 
      <div class="form-group">
        <label for="second_line">Second Line</label>
        <input type="text" id="second_line" name="second_line" value="<?php echo esc_attr( get_option('second_line') ); ?>" class="form-input">
      </div>
      <div class="form-group">
        <label for="third_line">Third Line</label>
        <input type="text" id="third_line" value="<?php echo esc_attr( get_option('third_line') ); ?>" name="third_line" class="form-input">
      </div>
    </section>
    <section id="history" class="tab-panel">
      <h2>History</h2>
      <div class="form-group">
        <label for="image_url_1">Image 1:</label><br/>
        <img src="<?php echo esc_attr( get_option('image_1') ); ?>" id="image_1" style="max-width: 300px">
        <input type="hidden" name="image_1" id="image_url_1" class="regular-text" value="<?php echo esc_attr( get_option('image_1') ); ?>"><br/>
        <input type="button"  id="upload-btn-1" data-id="1" class="button-secondary upload-image" value="Upload Image">
        <input type="button"  id="remove-button-1" data-id="1" class="button-secondary remove-image" value="Remove Image">
      </div>

      <div class="form-group">
        <label for="image_url_2">Image 2:</label><br/>
        <img src="<?php echo esc_attr( get_option('image_2') ); ?>" id="image_2" style="max-width: 300px">
        <input type="hidden" name="image_2" id="image_url_2" class="regular-text" value="<?php echo esc_attr( get_option('image_2') ); ?>"><br/>
        <input type="button"  id="upload-btn-2" data-id="2" class="button-secondary upload-image" value="Upload Image">
        <input type="button"  id="remove-button-2" data-id="2" class="button-secondary remove-image" value="Remove Image">
      </div>  

      <div class="form-group">
        <label for="image_url_3">Image 3:</label><br/>
        <img src="<?php echo esc_attr( get_option('image_3') ); ?>" id="image_3" style="max-width: 300px">
        <input type="hidden" name="image_3" id="image_url_3" class="regular-text" value="<?php echo esc_attr( get_option('image_3') ); ?>"><br/>
        <input type="button"  id="upload-btn-3" data-id="3" class="button-secondary upload-image" value="Upload Image">
        <input type="button"  id="remove-button-3" data-id="3" class="button-secondary remove-image" value="Remove Image">
      </div>

      <div class="form-group">
        <label for="history_title">Title</label>
        <input type="text" id="history_title" name="history_title" value="<?php echo esc_attr( get_option('history_title') ); ?>" class="form-input">
      </div>

      <div class="form-group">
        <label for="history_sub_title">Sub Title</label>
        <input type="text" id="history_sub_title" name="history_sub_title" value="<?php echo esc_attr( get_option('history_sub_title') ); ?>" class="form-input">
      </div>

      <div class="form-group">
        <label for="history_description">Description</label>
        <textarea rows="10" id="history_description" name="history_description" class="form-input" ><?php echo esc_attr( get_option('history_description') ); ?></textarea>
      </div>
    </section>
    <section id="vision" class="tab-panel">
      <h2>Visi Misi</h2>
      <div class="form-group">
        <label for="vision_title">Title</label>
        <input type="text" id="vision_title" name="vision_title" value="<?php echo esc_attr( get_option('vision_title') ); ?>" class="form-input">
      </div>  
      <div class="form-group">
        <label for="vision_sub_title">Sub Title</label>
        <input type="text" id="vision_sub_title" name="vision_sub_title" value="<?php echo esc_attr( get_option('vision_sub_title') ); ?>" class="form-input">
      </div>
       <div class="form-group">
        <label for="vision_description">Description</label>
        <textarea rows="10" id="vision_description" name="vision_description" class="form-input" ><?php echo esc_attr( get_option('vision_description') ); ?></textarea>
      </div>
    </section> 

    <section id="service" class="tab-panel">
      <h2>Service</h2>
      <div class="form-group">
        <label for="service_title">Title</label>
        <input type="text" id="service_title" name="service_title" value="<?php echo esc_attr( get_option('service_title') ); ?>" class="form-input">
      </div>
      <div class="form-group">
        <label for="service_sub_title">Sub Title</label>
        <input type="text" id="service_sub_title" name="service_sub_title" value="<?php echo esc_attr( get_option('service_sub_title') ); ?>" class="form-input">
      </div>

       <div class="form-group">
        <label for="service_description">Description</label>
        <textarea rows="10" id="service_description" name="service_description" class="form-input" ><?php echo esc_attr( get_option('service_description') ); ?></textarea>
      </div>
    </section>

    <section id="service" class="tab-panel">
      <h2>Project</h2>
      <div class="form-group">
        <label for="project_title">Title</label>
        <input type="text" id="project_title" name="project_title" value="<?php echo esc_attr( get_option('project_title') ); ?>" class="form-input">
      </div>
      <div class="form-group">
        <label for="project_sub_title">Sub Title</label>
        <input type="text" id="project_sub_title" name="project_sub_title" value="<?php echo esc_attr( get_option('project_sub_title') ); ?>" class="form-input">
      </div>
    </section>

    <section id="service" class="tab-panel">
      <h2>Team</h2>
      <div class="form-group">
        <label for="team_title">Title</label>
        <input type="text" id="team_title" name="team_title" value="<?php echo esc_attr( get_option('team_title') ); ?>" class="form-input">
      </div>
      <div class="form-group">
        <label for="team_sub_title">Sub Title</label>
        <input type="text" id="team_sub_title" name="team_sub_title" value="<?php echo esc_attr( get_option('team_sub_title') ); ?>" class="form-input">
      </div>
    </section>

    <section id="mediaSocial" class="tab-panel">
      <h2>Media Social</h2>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?php echo esc_attr( get_option('phone') ); ?>" class="form-input">
      </div>      

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="<?php echo esc_attr( get_option('address') ); ?>" class="form-input">
      </div> 

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" class="form-input">
      </div> 

      <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" class="form-input">
      </div> 

      <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" id="instagram" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>" class="form-input">
      </div> 

      <div class="form-group">
        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" class="form-input">
      </div>
    </section>
  </div>
  
</div>
</form>
<?php wp_enqueue_script("jquery"); wp_enqueue_media();?>
<script type="text/javascript">
    (function( $ ) {
        $('.upload-image').click(function(e) {
        e.preventDefault();
        var that = $(this);
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            
            var image_url = uploaded_image.toJSON().url;

            var dataId = that.attr('data-id');

            // Let's assign the url value to the input field
            $('#image_url_'+dataId).val(image_url);
            $('#image_'+dataId).attr('src',image_url);

         });
        });


        $('.remove-image').click(function(){

          var dataId = $(this).attr('data-id');

          $('#image_url_'+dataId).val('');
          $('#image_'+dataId).attr('src','');
        })

    })( jQuery );
</script>

<style type="text/css">
  /*
 CSS for the main interaction
*/

.form-group {
    display: block;
    margin-bottom: 15px
}

.form-group  label {
    display: block;
    margin-bottom: 5px
}

.form-input {
    width: 30%
}
.tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}

.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6),
.tabset > input:nth-child(13):checked ~ .tab-panels > .tab-panel:nth-child(7) {
  display: block;
}



.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
  margin-top: 10px;
}

.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}

.tabset > label:hover,
.tabset > input:focus + label {
  color: #06c;
}

.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
  background: #06c;
}

.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
}

.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}


</style>