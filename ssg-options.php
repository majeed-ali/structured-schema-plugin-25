<?php
// Exit if accessed directly
defined('ABSPATH') || exit;

// Register the settings page
add_action('admin_menu', function () {
    add_options_page(
        'Structured Schema Settings',
        'Structured Schema',
        'manage_options',
        'ssg-settings',
        'ssg_render_settings_page'
    );
});

// Register settings
add_action('admin_init', function () {
    register_setting('ssg_settings_group', 'ssg_enable_organization');
    register_setting('ssg_settings_group', 'ssg_organization_type');
    register_setting('ssg_settings_group', 'ssg_organization_name');
    register_setting('ssg_settings_group', 'ssg_rating_value');
    register_setting('ssg_settings_group', 'ssg_review_count');
    register_setting('ssg_settings_group', 'ssg_social_facebook');
    register_setting('ssg_settings_group', 'ssg_social_instagram');
});

function ssg_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Structured Schema Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('ssg_settings_group'); ?>
            <?php do_settings_sections('ssg_settings_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Enable Organization Schema</th>
                    <td><input type="checkbox" name="ssg_enable_organization" value="1" <?php checked(1, get_option('ssg_enable_organization'), true); ?> /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Organization Type</th>
                    <td>
                        <select name="ssg_organization_type">
                            <?php
                            $types = ['Organization', 'LocalBusiness', 'Restaurant', 'Store', 'MedicalOrganization'];
                            $selected = get_option('ssg_organization_type', 'Organization');
                            foreach ($types as $type) {
                                echo '<option value="' . esc_attr($type) . '"' . selected($selected, $type, false) . '>' . esc_html($type) . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Organization Name</th>
                    <td><input type="text" name="ssg_organization_name" value="<?php echo esc_attr(get_option('ssg_organization_name', get_bloginfo('name'))); ?>" class="regular-text" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Aggregate Rating Value</th>
                    <td><input type="text" name="ssg_rating_value" value="<?php echo esc_attr(get_option('ssg_rating_value', '4.5')); ?>" class="small-text" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Number of Reviews</th>
                    <td><input type="text" name="ssg_review_count" value="<?php echo esc_attr(get_option('ssg_review_count', '123')); ?>" class="small-text" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Facebook URL</th>
                    <td><input type="url" name="ssg_social_facebook" value="<?php echo esc_attr(get_option('ssg_social_facebook')); ?>" class="regular-text" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Instagram URL</th>
                    <td><input type="url" name="ssg_social_instagram" value="<?php echo esc_attr(get_option('ssg_social_instagram')); ?>" class="regular-text" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
