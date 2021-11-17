<?php
// create custom plugin settings menu
add_action('admin_menu', 'piads_create_menu');

function piads_create_menu() {

	//create new top-level menu
	add_menu_page('Piads', 'Piads', 'administrator', __FILE__, 'piads_plugin_settings_page' , plugin_dir_url(__FILE__) . '../../assets/images/icon.png' );

	//call register settings function
	add_action( 'admin_init', 'register_piads_plugin_settings' );
}


function register_piads_plugin_settings() {
	//register our settings
	register_setting( 'piads-plugin-settings-group', 'key_piads' );
	register_setting( 'piads-plugin-settings-group', 'action_slt_piads' );
    register_setting( 'piads-plugin-settings-group', 'disable_piads' );
    register_setting( 'piads-plugin-settings-group', 'position_slt_piads' );
}

function piads_plugin_settings_page() {
?>
<div id="piads">
    <h1><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/logo.png'; ?>" alt="Piads" title="Piads" /></h1>

    <form method="post" action="options.php">
        <?php settings_fields( 'piads-plugin-settings-group' ); ?>
        <?php do_settings_sections( 'piads-plugin-settings-group' ); ?>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">
                    <span>Key</span>
                    <input type="text" name="key_piads" value="<?php echo esc_attr( get_option('key_piads') ); ?>" />
                </td>
            </tr>
            
            <tr valign="top">
                <td>
                    <span>Action</span>
                    <select name="action_slt_piads">
                        <option value="phone" selected <?php 
                            if( get_option('action_piads') == 'phone' ) {
                                echo "selected";
                            } 
                        ?>>Phone</option>
                    </select>    
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <span>Position</span>
                    <select name="position_slt_piads">
                        <option value="" <?php 
                            if( get_option('position_slt_piads') == '' ) {
                                echo "selected";
                            } 
                        ?>>Header</option>
                        <option value="Footer" <?php 
                            if( get_option('position_slt_piads') == 'Footer' ) {
                                echo "selected";
                            } 
                        ?>>Footer</option>
                    </select>   
                </td>
            </tr>

            <tr valign="top">
                <td>
                    <span>Disable Piads</span>
                    <select name="disable_piads">
                        <option value="" <?php 
                            if( get_option('disable_piads') == '' ) {
                                echo "selected";
                            } 
                        ?>>False</option>
                        <option value="True" <?php 
                            if( get_option('disable_piads') == 'True' ) {
                                echo "selected";
                            } 
                        ?>>True</option>
                    </select>   
                </td>
            </tr>
        </table>
        
        <button type="submit" name="submit_piads" class="button button-primary">Lưu cài đặt</button>

    </form>
</div>
<?php } ?>