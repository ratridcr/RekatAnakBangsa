<?php wp_enqueue_script("jquery"); wp_enqueue_media();?>

<div class="form-group">
    <label for="image_url">Image:</label><br/>
    <img src="<?=get_post_meta( $post->ID, 'image_project', true )?>" id="image_project" style="max-width: 300px">
    <input type="hidden" name="image_project" id="image_url" class="regular-text" value="<?=get_post_meta( $post->ID, 'image_project', true )?>"><br/>
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
    <input type="button"  id="remove-button" class="button-secondary" value="Remove Image">
</div>



<script type="text/javascript">
    (function( $ ) {
        $('#upload-btn').click(function(e) {
        e.preventDefault();
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
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);
            $('#image_project').attr('src',image_url);

         });
        });


        $('#remove-button').click(function(){
            $('#image_url').val('');
            $('#image_project').attr('src','');
        })

    })( jQuery );
</script>



<style type="text/css">

    .form-group {
        display: block;
        margin-bottom: 15px
    }

    .form-group  label {
        display: block;
        margin-bottom: 5px
    }

    .form-input {
        width: 100%
    }
</style>