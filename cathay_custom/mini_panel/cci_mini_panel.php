$mini = new stdClass();
$mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
$mini->api_version = 1;
$mini->name = 'cci_product_basket';
$mini->category = '';
$mini->admin_title = 'CCI Mini Panel';
$mini->admin_description = '';
$mini->requiredcontexts = array();
$mini->contexts = array();
$mini->relationships = array();
$display = new panels_display();
$display->layout = 'one';
$display->layout_settings = array();
$display->panel_settings = array(
  'style_settings' => array(
    'default' => array(
      'corner_location' => 'panel',
    ),
    'four_third' => NULL,
    'four_fourth' => NULL,
    'four_second' => NULL,
    'four_first' => NULL,
    'one_main' => NULL,
  ),
  'four_first' => array(
    'style' => '-1',
  ),
  'four_second' => array(
    'style' => '-1',
  ),
  'style' => 'rounded_corners',
);
$display->cache = array();
$display->title = '國泰產險';
$display->uuid = '60a355e1-ae82-46aa-9643-dbd87799e692';
$display->storage_type = 'panels_mini';
$display->storage_id = 'cci_product_basket';
$display->content = array();
$display->panels = array();
$pane = new stdClass();
$pane->pid = 'new-e90e0091-6cb4-42c8-98df-7abdd73ce7c0';
$pane->panel = 'one_main';
$pane->type = 'block';
$pane->subtype = 'bean---guo-tai-chan-xian--che-xian-xi';
$pane->shown = TRUE;
$pane->access = array();
$pane->configuration = array(
  'override_title' => 0,
  'override_title_text' => '',
  'override_title_heading' => 'h2',
);
$pane->cache = array();
$pane->style = array(
  'settings' => NULL,
);
$pane->css = array();
$pane->extras = array();
$pane->position = 0;
$pane->locks = array();
$pane->uuid = 'e90e0091-6cb4-42c8-98df-7abdd73ce7c0';
$display->content['new-e90e0091-6cb4-42c8-98df-7abdd73ce7c0'] = $pane;
$display->panels['one_main'][0] = 'new-e90e0091-6cb4-42c8-98df-7abdd73ce7c0';
$display->hide_title = PANELS_TITLE_FIXED;
$display->title_pane = '0';
$mini->display = $display;
