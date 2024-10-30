<?php
//
//  SETTINGS CONFIGURATION CLASS
//
//  By Olly Benson / v 1.2 / 13 July 2011 / http://code.olib.co.uk
//  Modified / Bugfix by Karl Cohrs / 17 July 2011 / http://karlcohrs.com
//
//  HOW TO USE
//  * add a include() to this file in your plugin.
//  * amend the config class below to add your own settings requirements.
//  * to avoid potential conflicts recommended you do a global search/replace on this page to replace 'ob_settings' with something unique
//  * Full details of how to use Settings see here: http://codex.wordpress.org/Settings_API

class cc_settings_config {

// MAIN CONFIGURATION SETTINGS

var $group = "ccSettings"; // defines setting groups (should be bespoke to your settings)
var $page_name = "cc_consent"; // defines which pages settings will appear on. Either bespoke or media/discussion/reading etc

//  DISPLAY SETTINGS
//  (only used if bespoke page_name)

var $title = "CookieCert Consent Plugin Settings";  // page title that is displayed
var $intro_text = "This allows you to configure the CookieCert Consent the way you want it to suit your site style.  Once configured you add the widget to your blog from the Widgets section."; // text below title
var $nav_title = "CookieCert EU Cookie Directive Plugin"; // how page is listed on left-hand Settings panel

//  SECTIONS
//  Each section should be own array within $sections.
//  Should contatin title, description and fields, which should be array of all fields.
//  Fields array should contain:
//  * label: the displayed label of the field. Required.
//  * description: the field description, displayed under the field. Optional
//  * suffix: displays right of the field entry. Optional
//  * default_value: default value if field is empty. Optional
//  * dropdown: allows you to offer dropdown functionality on field. Value is array listed below. Optional
//  * function: will call function other than default text field to display options. Option
//  * callback: will run callback function to validate field. Optional
//  * All variables are sent to display function as array, therefore other variables can be added if needed for display purposes

var $sections = array(
    'display_options' => array
    (
        'title' => "Display Options",
        'description' => "Settings to do with how the plugin is displayed",
        'fields' => array
        (
           'ck_tagsrc' => array
           (
		'label' => "Your Blog URL",
		'description' => " Url of your blog/site",
		'length' => "100",
		'default_value' => ""
	   ),
          'ck_font' => array
          (
		'label' => "Display Font",
		'description' => " Font",
		'dropdown' => "dd_font",
		'default_value' => "helvetica"
	  ),
          'ck_fontsize' => array
          (
              'label' => "Font Size",
              'description' => " Font Size",
              'dropdown' => "dd_fontsize",
              'default_value' => "14"
          ),
          'ck_bg' => array
          (
              'label' => "Background Color",
              'description' => " Background Color (HTML code e.g #cccccc)",
              'length' => "dd_text",
              'default_value' => "2E41BF"
          ),
	  'ck_textcol' => array
          (
              'label' => "Text Color (foreground)",
              'description' => " Text Color (HTML code e.g #cccccc)",
              'length' => "dd_text",
              'default_value' => "FFFFFF"
          ),
	  'ck_height' => array
	  (
	      'label' => "Widget Height",
              'description' => " 0 = fit to content",
              'length' => "5",
              'default_value' => "0"
	  ),
	  'ck_heighttype' => array
          (
	      'label' => "Height Type",
              'description' => " Fixed size or percentage.  Leave blank to ignore.",
              'dropdown' => "dd_dimtype",
              'default_value' => ""
          ),
	  'ck_width' => array
          (
	      'label' => "Widget Width",
              'description' => " 0 = fit to content",
              'length' => "5",
              'default_value' => "0"
          ),
	  'ck_widthtype' => array
          (
	      'label' => "Width Type",
              'description' => " Fixed size or percentage.  Leave blank to ignore.",
              'dropdown' => "dd_dimtype",
              'default_value' => ""
          ),
	  'ck_postheme' => array
          (
              'label' => "Position",
              'description' => " Where widget will appear.  By default widget will not scroll with page, choose \"inline\" to prevent that.  Choose \"custom\" to specify exact positioning.",
              'dropdown' => "dd_postype",
              'default_value' => "tl"
          ),
          'ck_xpos' => array
          (
	      'label' => "X position",
              'description' => " If Position is set to \"custom\" then this is the x-coordinate",
              'length' => "5",
              'default_value' => "0"
          ),
	  'ck_ypos' => array
          (
	      'label' => "Y position",
              'description' => " If Position is set to \"custom\" then this is the y-coordinate",
              'length' => "5",
              'default_value' => "0"
          ),
	  'ck_rotate' => array
          (
 	      'label' => "Text Rotation",
              'description' => " If Yes then text will rotate.  Use to have the widget push up against the left or right side of the page.  Can be used for when positioning with Top Left, Top Right, Bottom Left or Bottom Right.",
              'dropdown' => "dd_yesno",
              'default_value' => "0"
          )
      )
   )
);

 // DROPDOWN OPTIONS
 // For drop down choices.  Each set of choices should be unique array
 // Use key => value to indicate name => display name
 // For default_value in options field use key, not value
 // You can have multiple instances of the same dropdown options

var $dropdown_options = array (
	'dd_font' => array (
			'helvetica' => 'helvetica',
			'arial' => 'arial',
			'lucida grande' => 'lucida grande',
			'segoe ui' => 'segoe ui',
			'tahoma' => 'tahoma',
			'trebuchet' => 'trebuchet',
			'verdana' => 'verdana'

		),
	'dd_fontsize' => array (
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'14' => '14',
			'15' => '15',
			'20' => '20',
			'25' => '25',
			'30' => '30'
		),
	'dd_dimtype' => array (
			'' => '',
                        'px' => 'Fixed',
                        '%' => 'Percentage'
                ),
	'dd_yesno' => array (
        		'1' => 'Yes',
	                '0' => 'No'
                ),
	'dd_postype' => array (
  	        'tl' => 'Top Left',
			'tr' => 'Top Right',
			'bl' => 'Bottom Left',
			'br' => 'Bottom Right',
			'tm' => 'Top Center',
			'bm' => 'Bottom Center',
			'lm' => 'Left Center',
            'rm' => 'Right Center',
			'custom' => 'Custom',
			'inline' => 'Inline'
                ),
    );



//  end class
};

class cc_settings {

function cc_settings($settings_class) {
    global $cc_settings;
    $cc_settings = get_class_vars($settings_class);

    if (function_exists('add_action')) :
      add_action('admin_init', array( &$this, 'plugin_admin_init'));
      add_action('admin_menu', array( &$this, 'plugin_admin_add_page'));
      endif;
}

function plugin_admin_add_page() {
  global $cc_settings;
  add_options_page($cc_settings['title'], $cc_settings['nav_title'], 'manage_options', $cc_settings['page_name'], array( &$this,'plugin_options_page'));
  }

function plugin_options_page() {
  global $cc_settings;
printf('</pre>
<div>
<h2>%s</h2>
%s
<form action="options.php" method="post">',$cc_settings['title'],$cc_settings['intro_text']);
 settings_fields($cc_settings['group']);
 do_settings_sections($cc_settings['page_name']);
 printf('<input type="submit" name="Submit" value="%s" /></form></div>
<pre>
',__('Save Changes'));
  }

function plugin_admin_init(){
  global $cc_settings;
  foreach ($cc_settings["sections"] AS $section_key=>$section_value) :
    add_settings_section($section_key, $section_value['title'], array( &$this, 'plugin_section_text'), $cc_settings['page_name'], $section_value);
    foreach ($section_value['fields'] AS $field_key=>$field_value) :
      $function = (!empty($field_value['dropdown'])) ? array( &$this, 'plugin_setting_dropdown' ) : array( &$this, 'plugin_setting_string' );
      $function = (!empty($field_value['function'])) ? $field_value['function'] : $function;
      $callback = (!empty($field_value['callback'])) ? $field_value['callback'] : NULL;
      add_settings_field($cc_settings['group'].'_'.$field_key, $field_value['label'], $function, $cc_settings['page_name'], $section_key,array_merge($field_value,array('name' => $cc_settings['group'].'_'.$field_key)));
      register_setting($cc_settings['group'], $cc_settings['group'].'_'.$field_key,$callback);
      endforeach;
    endforeach;
  }

function plugin_section_text($value = NULL) {
  global $cc_settings;
  printf("
%s

",$cc_settings['sections'][$value['id']]['description']);
}

function plugin_setting_string($value = NULL) {
  $options = get_option($value['name']);
  $default_value = (!empty ($value['default_value'])) ? $value['default_value'] : NULL;
  printf('<input id="%s" type="text" name="%1$s[text_string]" value="%2$s" size="40" /> %3$s%4$s',
    $value['name'],
    (!empty ($options['text_string'])) ? $options['text_string'] : $default_value,
    (!empty ($value['suffix'])) ? $value['suffix'] : NULL,
    (!empty ($value['description'])) ? sprintf("<em>%s</em>",$value['description']) : NULL);
  }

function plugin_setting_dropdown($value = NULL) {
  global $cc_settings;
  $options = get_option($value['name']);
  $default_value = (!empty ($value['default_value'])) ? $value['default_value'] : NULL;
  $current_value = ($options['text_string']) ? $options['text_string'] : $default_value;
    $chooseFrom = "";
    $choices = $cc_settings['dropdown_options'][$value['dropdown']];
  foreach($choices AS $key=>$option) :
    $chooseFrom .= sprintf('<option value="%s" %s>%s</option>',
      $key,($current_value == $key ) ? ' selected="selected"' : NULL,$option);
    endforeach;
    printf('
<select id="%s" name="%1$s[text_string]">%2$s</select>
%3$s',$value['name'],$chooseFrom,
  (!empty ($value['description'])) ? sprintf("<em>%s</em>",$value['description']) : NULL);
  }


//end class
}

$cc_settings_init = new cc_settings('cc_settings_config');
?>
