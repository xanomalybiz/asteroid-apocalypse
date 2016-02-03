<?php

class Asteroid_Appocalypse_Alarm extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		parent::__construct(
			'Asteroid_Appocalypse_Alarm_Widget', // Base ID
			__( 'Asteroid Appocalypse Alarm', 'cc_domain' ), // Name
			array( 'description' => __( 'Widget lets users know of an impending asteroid appocalypse', 'text_domain' ), ) // Args
		);
	}


	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		
		echo $args['before_widget'];
		echo $args['before_title'];
		if(!empty($instance['title']))
		{
			echo $instance['title'];
		}
		echo $args['after_title'];				
		?>
            <h1>Asteroid Appocalypse Alarm</h1>
            <p>
                There are currently
                <span id='numberOfAsteroids'></span>
                 near Earth asteroids. 
                 <br>
                 <br>
                 The smallest asteroid near Earth is between 
                <span id="smallestAsteroidDiameterSmall"></span> 
                and 
                <span id="smallestAsteroidDiameterLarge"></span>  
                feet in diameter. 
                <br>
                <br>
                The largest asteroid is between 
                <span id="largestAsteroidDiameterSmall"></span> 
                and 
                <span id="largestAsteroidDiameterLarge"></span> feet in diamter.
                <br>
                <br>
                 The closest asteroid will miss earth by only 
                 <span id="closestDistanceToEarth"></span>
                 miles.
                 <div id="appocalypseMessage"></div>
                
             </p>
              <a id="subscribe-xanomaly-link" href="http://xanomaly.com"> <h4>Powered by <span id="logo"><span id="homeBannerLogoX" class="xFont">X</span><span id="secondHalfLogo">anomaly</span> </span></h4></a>
        	
        <?php
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		
	
	}
	

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved

	}
}
?>