<?php
include_once 'ob_settings.php';
?>
<?php
/**
 * CookieConsentWidget Class
 */
class CookieConsentWidget extends WP_Widget {
    /** constructor */
    function CookieConsentWidget() {
        parent::WP_Widget(false, $name = 'CookieConsentWidget');
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {
        extract( $args );
        $title = '';//apply_filters('widget_title', $instance['title']);
		$content = $before_widget . $before_title . $title . $after_title . '<ul><li>' . $this->renderContent() . '</li></ul>'. $after_widget;
		echo $content;
    }

    /** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {
    	echo "Configure options for this widget in the <a href='./options-general.php?page=cc_consent'>Settings Menu</a>";
    }

    function renderContent(){
    	$ck_tagsrc = get_option("ccSettings_ck_tagsrc", "");
	$ck_tagsrc = $ck_tagsrc['text_string'];

	$ck_font = get_option("ccSettings_ck_font", 'Helvetica');
        $ck_font = $ck_font['text_string'];

	$ck_fontsize = get_option("ccSettings_ck_fontsize", 14);
        $ck_fontsize = $ck_fontsize['text_string'];

	$ck_bg = get_option("ccSettings_ck_bg", 1);
        $ck_bg = $ck_bg['text_string'];

	$ck_textcol = get_option("ccSettings_ck_textcol", 1);
        $ck_textcol = $ck_textcol['text_string'];

	$ck_height = get_option("ccSettings_ck_height", '');
        $ck_height = $ck_height['text_string'];

	$ck_heighttype = get_option("ccSettings_ck_heighttype", '');
        $ck_heighttype = $ck_heighttype['text_string'];

	$ck_width = get_option("ccSettings_ck_width", '');
        $ck_width = $ck_width['text_string'];

	$ck_widthtype = get_option("ccSettings_ck_widthtype", '');
        $ck_widthtype = $ck_widthtype['text_string'];

	$ck_positiontype = get_option("ccSettings_ck_positiontype", '');
        $ck_positiontype = $ck_positiontype['text_string'];

	$ck_xpos = get_option("ccSettings_ck_xpos", '');
        $ck_xpos = $ck_xpos['text_string'];

	$ck_ypos = get_option("ccSettings_ck_ypos", '');
        $ck_ypos = $ck_ypos['text_string'];

	$ck_postheme = get_option("ccSettings_ck_postheme", '');
        $ck_postheme = $ck_postheme['text_string'];

//	$ck_attr = get_option("ccSettings_ck_attr", '0');
//        $ck_attr = $ck_attr['text_string'];

	$ck_rotate = get_option("ccSettings_ck_rotate", '');
        $ck_rotate = $ck_rotate['text_string'];

        return "<scr" . "ipt type='text/javascript'>
		var ck_params = {};
	 	ck_params.tagsrc='" . $ck_tagsrc . "';
		ck_params.man_url='';
		ck_params.font='" . $ck_font . "';
		ck_params.fontsize='" . $ck_fontsize . "';
		ck_params.bg='" . $ck_bg . "';
		ck_params.tc='" . $ck_textcol . "';
		ck_params.height='" . $ck_height . "';
		ck_params.heighttype='" . $ck_heighttype . "';
		ck_params.width='" . $ck_width . "';
		ck_params.widthtype='" . $ck_widthtype . "';
		ck_params.positiontype='" . $ck_positiontype . "';
		ck_params.xpos='" . $ck_xpos . "';
		ck_params.ypos='" . $ck_ypos . "';
		ck_params.postheme='" . $ck_postheme . "';
		ck_params.attr='0';
		ck_params.rotate='" . $ck_rotate . "';

		</scr" . "ipt><scr" . "ipt src='http://cookiecert.com/js/consent.1.1.js'></scr" . "ipt>";

    }
}
?>
