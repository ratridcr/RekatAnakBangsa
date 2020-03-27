<?php wp_enqueue_script("jquery"); wp_enqueue_media();?>

<div class="form-group">
  <label>Nama</label>
  <input class="form-input"  id="name" value="<?=get_post_meta( $post->ID, 'name', true )?>" type="text" name="name">
</div>
<div class="form-group">
  <label>Tanggal Lahir</label>
  <input class="form-input"  id="dob" value="<?=get_post_meta( $post->ID, 'dob', true )?>" type="date" name="dob">
</div>

<div class="form-group">
  <label for="image_url">Image:</label><br/>
  <img src="<?=get_post_meta( $post->ID, 'image_team', true )?>" id="image_team" style="max-width: 300px">

  <input type="hidden" name="image_team" id="image_url" class="regular-text" value="<?=get_post_meta( $post->ID, 'image_team', true )?>"><br/>
  <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
  <input type="button"  id="remove-button" class="button-secondary" value="Remove Image">
</div>


<div class="form-group">
	<label>Riwayat Kerja</label>

	<table id="riwayatTable">
		<thead>
			<tr>
				<th>Jabatan</th>
				<th>Deskripsi</th>
				<th>Urutan</th>
				<th width="20%">Aksi</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>

		<tfoot>
			<tr>
				<td colspan="3"></td>
				<td><button type="button" id="tambah">Tambah</button></td>
			</tr>
		</tfoot>
	</table>
</div>



<script type="x-tmpl-mustache" id="riwayatTemplate">
	<tr id="riwayat_{{count}}">
		<td>
			<input class="form-input" type="text" name="value[{{count}}][jabatan]" value="{{jabatan}}">
		</td>
		<td>
			<input class="form-input" type="text" name="value[{{count}}][deskripsi]" value="{{deskripsi}}">
		</td>
		<td>
			<input class="form-input" type="number" name="value[{{count}}][urutan]" value="{{urutan}}">
		</td>
		<td>
			<button type="button" onclick="deleteRiwayat({{count}})">delete</button>
		</td>
	</tr>
</script>



<script type="text/javascript">

		function deleteRiwayat(id) {
			document.getElementById("riwayat_"+id).remove();
    }

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
          $('#image_team').attr('src',image_url);

       });
      });


       $('#remove-button').click(function(){
        $('#image_url').val('');
        $('#image_team').attr('src','');
      })


      var count = 0;


      var dataRiwayat = <?= json_encode( unserialize(get_post_meta( $post->ID, 'value', true ))) ?>;

      $(document).ready(function(){

      	$('#tambah').on('click', function(){
      		var riwayatTemplate = $('#riwayatTemplate').html();
      		var data = {
	          count : count,
	          urutan: 0
	        };

	        htmlBody = Mustache.render(riwayatTemplate, data);
      		$('#riwayatTable tbody').append(htmlBody);
      		count++;
      	})

      	$.each(dataRiwayat, function(key, value){
      		var riwayatTemplate = $('#riwayatTemplate').html();
      		var data = {
	          count : count,
	          urutan: value.urutan,
	          jabatan: value.jabatan,
						deskripsi: value.deskripsi

	        };

	        htmlBody = Mustache.render(riwayatTemplate, data);
      		$('#riwayatTable tbody').append(htmlBody);
      		count++;
      	});

      })

    })( jQuery );
</script>



<style type="text/css">
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

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