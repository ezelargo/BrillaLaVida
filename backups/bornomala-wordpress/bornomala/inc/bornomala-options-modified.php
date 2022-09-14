<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "bornomala";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'bornomala/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLAbornomalaN for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( get_template_directory() . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( get_template_directory() . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,

         'disable_tracking' => true,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Bornomala Options', 'bornomala' ),
        'page_title'           => esc_html__( 'Bornomala Options', 'bornomala' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 3,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    );

 

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( '', 'bornomala' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'bornomala' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'bornomala' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'bornomala' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'bornomala' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'bornomala' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'bornomala' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'bornomala' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

      // -> START Basic Fields

    Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'General Settings', 'bornomala' ),
		'desc'   => esc_html__( '', 'bornomala' ),
		'icon'   => 'el el-cog',
		'fields' => array(

			array(
				'id'       => 'bornomala_theme_color',
				'type'     => 'color',
				'title'    => esc_html__('Theme Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
			), 
 			
			array(
				'id'       => 'bornomala_top_bg_info',
				'type'     => 'info',
				'style' => 'success',
				'title'    => esc_html__('Topbar Settings', 'bornomala'), 
			), 			
			
			array(
				'id'       => 'bornomala_top_opt',
				'type'     => 'checkbox',
				'title'    => esc_html__('TopBar Hide Option', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
				'default' => false,
			), 				

			array(
				'id'       => 'bornomala_top_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('TopBar Background Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
			), 			
			array(
				'id'       => 'bornomala_top_text_color',
				'type'     => 'color',
				'title'    => esc_html__('TopBar Text Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
			),  			
			
			array(
				'id'       => 'bornomala_top_icon_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Top Bar Icon Background Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
			), 			
			
			array(
				'id'       => 'bornomala_top_icon_color',
				'type'     => 'color',
				'title'    => esc_html__('Top Bar Icon Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
			),  
			
			array(
				'id'       => 'bornomala_home_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Banner Background Color', 'bornomala'), 
				'subtitle' => esc_html__('choice color here', 'bornomala'),
				'default'  => '#26547c',
			),  			
			


			array(
				'id'       => 'bornomala_email_address',
				'type'     => 'text',
				'title'    => esc_html__('Email Address', 'bornomala'), 
				'subtitle' => esc_html__('write text here', 'bornomala'),
				'default' => 'info@yourdomain.com',
			),			
			
			array(
				'id'       => 'bornomala_phone_number',
				'type'     => 'text',
				'title'    => esc_html__('Phone Number', 'bornomala'), 
				'subtitle' => esc_html__('write text here', 'bornomala'),
				'default' => '+(88) 01 123 123 123',
			),			
			
			array(
				'id'       => 'bornomala_time',
				'type'     => 'text',
				'title'    => esc_html__('Time', 'bornomala'), 
				'subtitle' => esc_html__('write text here', 'bornomala'),
				'default' => 'Mon to sat Open: 9am - 6pm',
			),	
			
			array(
				'id'       => 'bornomala_menu_info',
				'type'     => 'info',
				'style' => 'success',
				'title'    => esc_html__('Menu Settings', 'bornomala'), 
			), 					
			array(
				'id'       => 'bornomala_menu_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Color', 'bornomala'), 
				'subtitle' => esc_html__('Choice color here', 'bornomala'),
			),				
			
			array(
				'id'       => 'bornomala_menu_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Backgrund Color', 'bornomala'), 
				'subtitle' => esc_html__('Choice color here', 'bornomala'),
			),			
			
			array(
				'id'       => 'bornomala_menu_text_hover_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Hover Color', 'bornomala'), 
				'subtitle' => esc_html__('Choice color here', 'bornomala'),
			),	
			
			array(
				'id'       => 'bornomala_sub_menu_bg_color',
				'type'     => 'color',
				'title'    => esc_html__(' Sub Menu Background Color', 'bornomala'), 
				'subtitle' => esc_html__('Choice color here', 'bornomala'),
			),				
			
			array(
				'id'       => 'bornomala_sub_menu_text_color',
				'type'     => 'color',
				'title'    => esc_html__(' Sub Menu Text Color', 'bornomala'), 
				'subtitle' => esc_html__('Choice color here', 'bornomala'),

			),						
					
	
		)
    ) ); 

	

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Advance Settings', 'bornomala' ),
        'id'               => 'bornomala-advance-setting',
        'customizer_width' => '400px',
        'fields'           => array(

			
            array(
                'id'       => 'bornomala_preloader_opt',
                'type'     => 'switch',
                'title'    => esc_html__('Display Preloader', 'bornomala'),
                'subtitle' => esc_html__('If yes then click the checkbox.', 'bornomala'),
                'default'  => '1'// 1 = on | 0 = off
            ),  
			array(
                'id'       => 'bornomala_homepage_opt',
                'type'             => 'checkbox',
                'title'            => esc_html__('Only Enable Home Page', 'bornomala'), 
				'default'  => '0',
                'subtitle'         => esc_html__('if check this option preloader only will be enable for home page', 'bornomala'),
				'required' => array( 'bornomala_preloader_opt', '=', '1' ),
            ),	
			
			array(
                'id'       => 'bornomala_spinner_color',
                'type'             => 'color',
                'title'            => esc_html__('Preloader Spinner Color', 'bornomala'), 		
                'subtitle'         => esc_html__('choice color here', 'bornomala'),
				'required' => array( 'bornomala_preloader_opt', '=', '1' ),
            ),			

			array(
                'id'       => 'bornomala_spinner_bgcolor',
                'type'             => 'color',
                'title'            => esc_html__('Preloader Spinner Background Color', 'bornomala'), 		
                'subtitle'         => esc_html__('choice color here', 'bornomala'),
				'required' => array( 'bornomala_preloader_opt', '=', '1' ),
            ),		
			
			array(
                'id'       => 'bornomala_preloader_bg_color',
                'type'             => 'color',
                'default'             => '#fff',
                'title'            => esc_html__('Preloader Background Color', 'bornomala'), 		
                'subtitle'         => esc_html__('choice color here', 'bornomala'),
				'required' => array( 'bornomala_preloader_opt', '=', '1' ),
            ),				

		

        )
    ) );
	
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Settings', 'bornomala' ),
        'id'               => 'bornomala-foooter-setting',
        'icon'             => 'el el-stop-alt',
        'customizer_width' => '400px',
        'fields'           => array(
		
			array(
				'id'       => 'bornomala_footer_widget_option',
				'type'             => 'checkbox',
				'default'             => false,
				'title'            => esc_html__('Disable Widget Option', 'bornomala'), 		
				'subtitle'         => esc_html__('check/uncheck here', 'bornomala'),
			),	
			
			array(
				'id'       => 'bornomala_copywrite_text',
				'type'             => 'editor',
				'title'            => esc_html__('CopyWrite Text', 'bornomala'), 
				'subtitle'         => esc_html__('Write Copywrite text here.', 'bornomala'),
				'default'          => 'Bornomala © 2017 All Rights Reserved.',
				'args'   => array(
					'teeny'            => true,
					'textarea_rows'    => 4
				)
			),
	
			array(
					'id'       => 'bornomala_footer_bg_color',
					'type'             => 'color',
					'title'            => esc_html__('Footer Background Color', 'bornomala'), 
					'subtitle'         => esc_html__('choice color here.', 'bornomala'),			
				),		
					
			array(
					'id'       => 'bornomala_footer_text_color',
					'type'             => 'color',
					'title'            => esc_html__('Footer Text Color', 'bornomala'), 
					'subtitle'         => esc_html__('choice color here.', 'bornomala'),			
				),			
			
			array(
                'id'       => 'bornomala_footer_link_color',
                'type'             => 'color',
                'title'            => esc_html__('Footer Link Color', 'bornomala'), 
                'subtitle'         => esc_html__('choice color here.', 'bornomala'),			
            ), 	       
			
			array(
				'id'       => 'bornomala_footer_fb_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Facebook Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),			
			
			array(
				'id'       => 'bornomala_footer_tw_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Twitter Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),			
			
			array(
				'id'       => 'bornomala_footer_gplus_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Google Plus Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),				

			array(
				'id'       => 'bornomala_footer_linkedin_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Linkedin Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),		
			
			array(
				'id'       => 'bornomala_footer_youtube_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Youtube Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),			

			array(
				'id'       => 'bornomala_footer_skype_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Skype Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			),			

			array(
				'id'       => 'bornomala_footer_instagram_link',
				'type'             => 'text',
				'default'             => '#',
				'title'            => esc_html__('Instagram Url', 'bornomala'), 
				'subtitle'         => esc_html__('enter url here.', 'bornomala'),			
			)		
			
        )
    ) );


    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'bornomala' ),
        'desc'            => esc_html__( '<p class="description">This Section should be visible only in Customizer</p>', 'bornomala' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'bornomala' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'bornomala' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'bornomala' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3'
                ),
                'default'         => '2'
            ),
        )
    ) );

    if ( file_exists( get_template_directory() . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => esc_html__( 'Documentation', 'bornomala' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => get_template_directory() . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    /*
     * <--- END SECTIONS
     */


 

