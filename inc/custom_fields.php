<?php
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add(){
	add_meta_box( 'cd_meta_portfolios', 'تنظیمات آموزش ها', 'cd_meta_portfolios', 'amozesh', 'normal', 'high' );
} 
function cd_meta_portfolios( $post ) {
	$values = get_post_custom( $post->ID );
	$text_download_k = isset( $values['download_k'] ) ? esc_attr( $values['download_k'][0] ) : '';
	$text_download_m = isset( $values['download_m'] ) ? esc_attr( $values['download_m'][0] ) : '';
	$text_fileType = isset( $values['fileType'] ) ? esc_attr( $values['fileType'][0] ) : '';
	$text_fileVA = isset( $values['fileVA'] ) ? esc_attr( $values['fileVA'][0] ) : '';
	$text_resource = isset( $values['resource'] ) ? esc_attr( $values['resource'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
	<div style="margin-bottom:8px;">
		<span style="width:20%;margin-left:-4px;display: inline-block;"><label for="download_k">دانلود لینک کمکی</label></span>
		<span style="width:80%;margin-right:-4px;display: inline-block;">
			<input type="text" name="download_k" id="download_k" value="<?php echo $text_download_k; ?>" style="width:100%;" />
		</span>
	</div>
	<div style="margin-bottom:8px;">
		<span style="width:20%;margin-left:-4px;display: inline-block;"><label for="download_m">دانلود مستقیم</label></span>
		<span style="width:80%;margin-right:-4px;display: inline-block;">
			<input type="text" name="download_m" id="download_m" value="<?php echo $text_download_m; ?>" style="width:100%;" />
		</span>
	</div>
	<div style="margin-bottom:8px;">
		<span style="width:20%;margin-left:-4px;display: inline-block;"><label for="fileType">نوع فایل</label></span>
		<span style="width:80%;margin-right:-4px;display: inline-block;">
			<input type="text" name="fileType" id="fileType" value="<?php echo $text_fileType; ?>" style="width:100%;" />
		</span>
	</div>
	<div style="margin-bottom:8px;">
		<span style="width:20%;margin-left:-4px;display: inline-block;"><label for="fileVA">حجم فایل</label></span>
		<span style="width:80%;margin-right:-4px;display: inline-block;">
			<input type="text" name="fileVA" id="fileVA" value="<?php echo $text_fileVA; ?>" style="width:100%;" />
		</span>
	</div>
	<div style="margin-bottom:8px;">
		<span style="width:20%;margin-left:-4px;display: inline-block;"><label for="resource">منبع</label></span>
		<span style="width:80%;margin-right:-4px;display: inline-block;">
			<input type="text" name="resource" id="resource" value="<?php echo $text_resource; ?>" style="width:100%;" />
		</span>
	</div>
<?php }
add_action( 'save_post', 'cd_meta_box_save' ); 
function cd_meta_box_save( $post_id ) {
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	if( !current_user_can( 'edit_post' ) ) return;
	$allowed = array( 
		'a' => array( 
		'href' => array()
		)
	);
	if( isset( $_POST['download_k'] ) ) update_post_meta( $post_id, 'download_k', wp_kses( $_POST['download_k'], $allowed ) );
	if( isset( $_POST['download_m'] ) ) update_post_meta( $post_id, 'download_m', wp_kses( $_POST['download_m'], $allowed ) );
	if( isset( $_POST['fileType'] ) ) update_post_meta( $post_id, 'fileType', wp_kses( $_POST['fileType'], $allowed ) );
	if( isset( $_POST['fileVA'] ) ) update_post_meta( $post_id, 'fileVA', wp_kses( $_POST['fileVA'], $allowed ) );
	if( isset( $_POST['resource'] ) ) update_post_meta( $post_id, 'resource', wp_kses( $_POST['resource'], $allowed ) );
} ?>