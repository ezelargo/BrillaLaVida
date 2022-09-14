<?php
 
add_action('init', 'bornomala_kc_active', 99 );
 
function bornomala_kc_active() {
 
	if (function_exists('kc_add_map')) 
	{ 
	    kc_add_map(
	        array(

	            'shortcode_importer' => array(
	                'name' => esc_html__('Shortcode Importer', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
	                
	                    array(
                        'name' => 'enter_shortcode',
                        'label' => esc_html__( 'Enter Shortcode', 'bornomala' ),
                        'type' => 'textarea',
                        'admin_label' => true,
						),	    	                             


	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
			
	    ); // End add map	   	    

    
		kc_add_map(
	        array(

	            'promotion_area' => array(
	                'name' => esc_html__('Promotion Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
	                
	                    array(
	                        'name' => 'sec_content',
	                        'label' => esc_html__( 'Section Content', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Welcome to <strong>Bornomala</strong> kindergarten School',
						),	
					
					
	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			

		kc_add_map(
	        array(

	            'acitives_area' => array(
	                'name' => esc_html__('Acitives Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
	                
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Our Activities',
						),		
						
	                    array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),		                  

						array(
	                        'name' => 'number_of_post',
	                        'label' => esc_html__( 'Number of Post', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '6',
						),	
					
					
	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'gallery_area' => array(
	                'name' => esc_html__('Gallery Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
	                
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Gallery',
						),		
						
	                    array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),		                  

						array(
	                        'name' => 'see_more_btn_text',
	                        'label' => esc_html__( 'Button Text', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'See More prtfolio',
						),							
						
						array(
	                        'name' => 'see_more_btn_link',
	                        'label' => esc_html__( 'Button Link', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '#',
						),	
					
					
	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'counter_area' => array(
	                'name' => esc_html__('Counter Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_text',
	                        'label' => esc_html__( 'Section Text', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Teacher & stuff',
						),		     
						
	                    array(
	                        'name' => 'sec_number',
	                        'label' => esc_html__( 'Section Number', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '25',
						),		
         

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'teachers_area' => array(
	                'name' => esc_html__('Teachers Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Our Teachers',
						),		     
						
	                    array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),		                    
						
						array(
	                        'name' => 'number_of_post',
	                        'label' => esc_html__( 'Number of Post', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '8',
						),		
         

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map				

		kc_add_map(
	        array(

	            'events_area' => array(
	                'name' => esc_html__('Events Area', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Our Events',
						),		     
						
	                    array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),		                    
						

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map				
		
		kc_add_map(
	        array(

	            'events_two' => array(
	                'name' => esc_html__('Events Two', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Our Events',
						),		     
						
	                    array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),		
						
	                    array(
	                        'name' => 'number_of_post',
	                        'label' => esc_html__( 'Number of Post', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '4',
						),								

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			

		kc_add_map(
	        array(

	            'testimonials_area' => array(
	                'name' => esc_html__('Testimonials', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_bg_img',
	                        'label' => esc_html__( 'Background Image', 'bornomala' ),
	                        'type' => 'attach_image',
	                        'admin_label' => true,
						),		     
						
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'What Parents say',
						),								

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'class_area' => array(
	                'name' => esc_html__('Class', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Section Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Our Class',
						),			                    
						
						array(
	                        'name' => 'sec_subtitle',
	                        'label' => esc_html__( 'Section SubTitle', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),					

						array(
	                        'name' => 'sec_age_text',
	                        'label' => esc_html__( 'Age Text', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Years Old',
						),							
						
						array(
	                        'name' => 'number_of_post',
	                        'label' => esc_html__( 'Number Of Post', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '3',
						),								

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'contact_info_area' => array(
	                'name' => esc_html__('Contact Info', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
	                    array(
	                        'name' => 'sec_bd_color',
	                        'label' => esc_html__( 'Background Color', 'bornomala' ),
	                        'type' => 'color_picker',
	                        'admin_label' => true,
						),			                    
						
						array(
	                        'name' => 'sec_icon',
	                        'label' => esc_html__( 'Icon', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'fa fa-phone',
						),					

						array(
	                        'name' => 'sec_info',
	                        'label' => esc_html__( 'Info', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => '<p>(+1) 740-395-3829</p> <p>(+1) 740-395-3829</p>',
						),							
													

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'about_us_area' => array(
	                'name' => esc_html__('About Us', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
						array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'About us',
						),					
													
						array(
	                        'name' => 'sec_heading',
	                        'label' => esc_html__( 'Heading', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'About Bornomala',
						),			
						
						array(
	                        'name' => 'sec_content',
	                        'label' => esc_html__( 'Content', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
							'value' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here. </p>',
						),		
						
						array(
	                        'name' => 'sec_video_url',
	                        'label' => esc_html__( 'Video Url', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'https://player.vimeo.com/video/131603349',
						),					
							
													

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map				
		
		kc_add_map(
	        array(

	            'pricing_area' => array(
	                'name' => esc_html__('Pricing', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
						array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'Pricing Plan',
						),					
													
						
						array(
	                        'name' => 'number_of_post',
	                        'label' => esc_html__( 'Number of Post', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '3',
						),					
							
													

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

	            'google_map_area' => array(
	                'name' => esc_html__('Google Map', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
						array(
	                        'name' => 'sec_api_key',
	                        'label' => esc_html__( 'API Key', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA',
						),					
													
						
						array(
	                        'name' => 'sec_lati',
	                        'label' => esc_html__( 'Latitude', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '40.7127837',
						),			
						
						array(
	                        'name' => 'sec_longi',
	                        'label' => esc_html__( 'Longitude', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '-74.00594130000002',
						),					
							
													

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

	            'contact_us_area' => array(
	                'name' => esc_html__('Contact Us', 'bornomala'),
	                'icon' => 'sl-rocket',
	                'category' => 'Bornomala Shortcodes',
	                'params' => array(
					
						array(
	                        'name' => 'sec_title',
	                        'label' => esc_html__( 'Title', 'bornomala' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => 'get in touch',
						),					
													
						
						array(
	                        'name' => 'sec_shortcode',
	                        'label' => esc_html__( 'Shortcode', 'bornomala' ),
	                        'type' => 'textarea',
	                        'admin_label' => true,
						),			
						
													

	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			
		

}  }
 
