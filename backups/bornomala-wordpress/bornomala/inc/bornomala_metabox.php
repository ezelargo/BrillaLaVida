<?php


add_action( 'cmb2_init', 'bornomala_metabox_options' );

function bornomala_metabox_options(){
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_bornomala_';


	// Page Options	


	$cmb2_page_options = new_cmb2_box( array(
		'id'           => $prefix . 'page_option',
		'title'        => esc_html__( 'Page Options', 'bornomala' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_page_options->add_field( array(
	    'id'               => $prefix .'page_br_template',
	    'name'             => esc_html__( 'Show Breadcrumb','bornomala' ),
		 'type'             => 'checkbox',
				 
	) );	
	
	$cmb2_page_options->add_field( array(
	    'id'               => $prefix .'page_select_option',
	    'desc'             => esc_html__( 'select here ','bornomala' ),
		 'type'             => 'select',
			'options'          => array(
				'1' => esc_html__( 'Right Sidebar', 'bornomala' ),
				'2' => esc_html__( 'Left Sidebar', 'bornomala' ),
				'3' => esc_html__( 'Full Width', 'bornomala' ),
			),		 
	) );		

	//Post Options	
	$cmb2_service_options = new_cmb2_box( array(
		'id'           => $prefix . 'service_option',
		'title'        => esc_html__( 'Service Options', 'bornomala' ),
		'object_types' => array( 'service'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	


	$cmb2_service_options->add_field( array(
	    'name'             => esc_html__('Icon' , 'bornomala'),
	    'id'               => $prefix .'serv_icon',
		'desc'    => esc_html__('enter icon name here like - fa fa-check' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => 'fa fa-check',
	) );	
	
	
	//Post Options	
	$cmb2_post_options = new_cmb2_box( array(
		'id'           => $prefix . 'posts_option',
		'title'        => esc_html__( 'Post Options', 'bornomala' ),
		'object_types' => array( 'post'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );		
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Audio / Video Post Embed Code ' , 'bornomala'),
	    'id'               => $prefix .'vid_post_title',
	    'type'    => 'title',
	) );		
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Embed Code' , 'bornomala'),
	    'id'               => $prefix .'embed_code',
		'desc'    => esc_html__('enter embed code here' , 'bornomala'),
	    'type'    => 'textarea_code',
	) );		
	



	$cmb2_activites = new_cmb2_box( array(
		'id'           => $prefix . 'activites_options',
		'title'        => esc_html__( 'Activites_ Info', 'bornomala' ),
		'object_types' => array( 'activites'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
		
	
	$cmb2_activites->add_field( array(
		'name'             => esc_html__('Icon' , 'bornomala'),
		'id'               => $prefix .'activites_icon',
		'desc'             => esc_html__( 'wirte icon here','bornomala' ),
		'type'             => 'text',
		'default'    => 'fa fa-circle-o-notch',
	) );		
	
	$cmb2_activites->add_field( array(
		'name'             => esc_html__('Background Color' , 'bornomala'),
		'id'               => $prefix .'activites_bg_color',
		'desc'             => esc_html__( 'choice color here','bornomala' ),
		'type'             => 'colorpicker',

	) );	
	
	
	$cmb2_teacher = new_cmb2_box( array(
		'id'           => $prefix . 'teachers_options',
		'title'        => esc_html__( 'Teachers Info', 'bornomala' ),
		'object_types' => array('teachers'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_teacher->add_field( array(
		'name'             => esc_html__('Designation' , 'bornomala'),
		'id'               => $prefix .'teachers_dagination',
		'desc'             => esc_html__( 'write designation','bornomala' ),
		'type'             => 'text',
		'default'             => 'Teacher Title',

	) );	
	
	$teachersgroup_field_id = $cmb2_teacher->add_field( array(
		'id'          => $prefix .'teachers_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Social Media link {#}', 'bornomala' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Link', 'bornomala' ),
			'remove_button' => esc_html__( 'Remove Link', 'bornomala' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_teacher->add_group_field( $teachersgroup_field_id, array(
		'name' => esc_html__('Social Media Icon' , 'bornomala'),
		'id'   => $prefix .'teachers_sm_icon',
		'type' => 'text',
		'default' => 'fa fa-facebook',
		'description' => esc_html__('enter social media icon here. get all icon visit - http://fortawesome.github.io/Font-Awesome/icons/' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_teacher->add_group_field( $teachersgroup_field_id, array(
		'name' => esc_html__('Social Media Link' , 'bornomala'),
		'id'   => $prefix .'teachers_sm_link',
		'type' => 'text',
		'default' => '#',
		'description' => esc_html__('enter social link here. ' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	

	
	//Events Options	
	$cmb2_events_options = new_cmb2_box( array(
		'id'           => $prefix . 'events_option',
		'title'        => esc_html__( 'Events Options', 'bornomala' ),
		'object_types' => array( 'events'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	


	$cmb2_events_options->add_field( array(
	    'name'             => esc_html__('Date' , 'bornomala'),
	    'id'               => $prefix .'events_date',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => '08 March',
	) );		
	
	$cmb2_events_options->add_field( array(
	    'name'             => esc_html__('Event Information Label' , 'bornomala'),
	    'id'               => $prefix .'events_info_label',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => 'Event Information',
	) );	
	
	$cmb2_events_options->add_field( array(
	    'name'             => esc_html__('Event Price' , 'bornomala'),
	    'id'               => $prefix .'events_price',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => '$60',
	) );	

	$events_group_field_id = $cmb2_events_options->add_field( array(
		'id'          => $prefix .'events_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Single Event {#}', 'bornomala' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Single Event', 'bornomala' ),
			'remove_button' => esc_html__( 'Remove Single Event', 'bornomala' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_events_options->add_group_field( $events_group_field_id, array(
		'name' => esc_html__('Title' , 'bornomala'),
		'id'   => $prefix .'ev_title',
		'type' => 'text',
		'default' => 'Start Date',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_events_options->add_group_field( $events_group_field_id, array(
		'name' => esc_html__('Icon' , 'bornomala'),
		'id'   => $prefix .'ev_icon',
		'type' => 'text',
		'default' => 'fa fa-calendar',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_events_options->add_group_field( $events_group_field_id, array(
		'name' => esc_html__('Info' , 'bornomala'),
		'id'   => $prefix .'ev_info',
		'type' => 'textarea_small',
		'default' => '01 June,2017',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	//Class Options	
	$cmb2_class_options = new_cmb2_box( array(
		'id'           => $prefix . 'class_option',
		'title'        => esc_html__( 'Class Options', 'bornomala' ),
		'object_types' => array( 'class'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	


	$cmb2_class_options->add_field( array(
	    'name'             => esc_html__('Class Age' , 'bornomala'),
	    'id'               => $prefix .'class_age',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => '4-5',
	) );	

	$cmb2_class_options->add_field( array(
	    'name'             => esc_html__('Class Information Label' , 'bornomala'),
	    'id'               => $prefix .'class_info_label',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => 'Class Information',
	) );	
	
	$cmb2_class_options->add_field( array(
	    'name'             => esc_html__('Price' , 'bornomala'),
	    'id'               => $prefix .'class_price',
		'desc'    => esc_html__('enter text here' , 'bornomala'),
	    'type'    => 'text',
	    'default'    => '$60',
	) );	

	$class_group_field_id = $cmb2_class_options->add_field( array(
		'id'          => $prefix .'class_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Class Info {#}', 'bornomala' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Class Info', 'bornomala' ),
			'remove_button' => esc_html__( 'Remove Class Info', 'bornomala' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_class_options->add_group_field( $class_group_field_id, array(
		'name' => esc_html__('Title' , 'bornomala'),
		'id'   => $prefix .'class_title',
		'type' => 'text',
		'default' => 'Start Date',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_class_options->add_group_field( $class_group_field_id, array(
		'name' => esc_html__('Icon' , 'bornomala'),
		'id'   => $prefix .'class_icon',
		'type' => 'text',
		'default' => 'fa fa-calendar',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_class_options->add_group_field( $class_group_field_id, array(
		'name' => esc_html__('Info' , 'bornomala'),
		'id'   => $prefix .'class_info',
		'type' => 'textarea_small',
		'default' => '01 June,2017',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	$cmb2_pricing = new_cmb2_box( array(
		'id'           => $prefix . 'pric_options',
		'title'        => esc_html__( 'Pricing Info', 'bornomala' ),
		'object_types' => array( 'pricing'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Feature' , 'bornomala'),
		'id'               => $prefix .'pricing_feature',
		'desc'             => esc_html__( 'Check/Uncheck Feature Pricing','bornomala' ),
		'type'             => 'checkbox',
	) );	
		
		
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Currency' , 'bornomala'),
		'id'               => $prefix .'pricing_currency',
		'desc'             => esc_html__( 'write text here','bornomala' ),
		'type'             => 'text',
		'default'    => '$',
	) );	
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Pricing Amount' , 'bornomala'),
		'id'               => $prefix .'pricing_amount',
		'desc'             => esc_html__( 'write text here','bornomala' ),
		'type'             => 'text',
		'default'    => '19',
	) );		
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Period' , 'bornomala'),
		'id'               => $prefix .'pricing_period',
		'desc'             => esc_html__( 'write text here','bornomala' ),
		'type'             => 'text',
		'default'    => 'per month',
	) );	
		
	$pricing_group_field_id = $cmb2_pricing->add_field( array(
		'id'          => $prefix .'pricing_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Feature {#}', 'bornomala' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Feature', 'bornomala' ),
			'remove_button' => esc_html__( 'Remove Feature', 'bornomala' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_pricing->add_group_field( $pricing_group_field_id, array(
		'name' => esc_html__('Single Feature' , 'bornomala'),
		'id'   => $prefix .'single_feature',
		'type' => 'textarea_small',
		'default' => 'Meal',
		'description' => esc_html__('write text here' , 'bornomala'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Text' , 'bornomala'),
		'id'               => $prefix .'pricing_btn_text',
		'desc'             => esc_html__( 'write text here','bornomala' ),
		'type'             => 'text',
		'default'    => 'Order Now',
	) );		
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Link' , 'bornomala'),
		'id'               => $prefix .'pricing_btn_link',
		'desc'             => esc_html__( 'write text here','bornomala' ),
		'type'             => 'text',
		'default'    => '#',
	) );		
	
}