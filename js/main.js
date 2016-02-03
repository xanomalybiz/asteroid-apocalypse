// JavaScript Document
jQuery(document).ready(function($)
{
	var nasa_request = $.get( "https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=DEMO_KEY", function(data) {
		console.log(data);
		$('#numberOfAsteroids').html(data.element_count);
		
		var near_earth_objects = data.near_earth_objects;
		var smallest_asteroid = 0;
		var largest_asteroid = 0;
		var closest_asteroid = 0;
	
		var deadly = false;
		
		
		for(var objects in near_earth_objects)
		{
			
			var asteroids = near_earth_objects[objects];
			for(var asteroid in asteroids)
			{
				var asteroid_info = asteroids[asteroid];
				
				if(largest_asteroid === 0)
				{
					largest_asteroid  = asteroid_info;
				}
				else
				{
					
					
					if(asteroid_info.estimated_diameter.feet.estimated_diameter_max > largest_asteroid.estimated_diameter.feet.estimated_diameter_max)
					{
						largest_asteroid = asteroid_info;
					}
				}
				
				if(smallest_asteroid === 0)
				{
					smallest_asteroid  = asteroid_info;
				}
				else
				{
					
					
					if(asteroid_info.estimated_diameter.feet.estimated_diameter_min < smallest_asteroid.estimated_diameter.feet.estimated_diameter_min)
					{
						smallest_asteroid = asteroid_info;
					}
				}
				if(closest_asteroid === 0)
				{
					closest_asteroid = asteroid_info;	
				}
				else
				{
					if(asteroid_info.close_approach_data[0].miss_distance.miles < closest_asteroid.close_approach_data[0].miss_distance.miles)
					{
						smallest_asteroid = asteroid_info;	
					}
				}
				if(asteroid_info.is_potentially_hazardous_asteroid)
				{
					deadly = true;
				}
		
			}
		}
		
		
		$('#smallestAsteroidDiameterSmall').html(smallest_asteroid.estimated_diameter.feet.estimated_diameter_min);
		$('#smallestAsteroidDiameterLarge').html(smallest_asteroid.estimated_diameter.feet.estimated_diameter_max);
		$('#largestAsteroidDiameterSmall').html(largest_asteroid.estimated_diameter.feet.estimated_diameter_min);
		$('#largestAsteroidDiameterLarge').html(largest_asteroid.estimated_diameter.feet.estimated_diameter_min);
		$('#closestDistanceToEarth').html(closest_asteroid.close_approach_data[0].miss_distance.miles);
		$('#closestDate').html(closest_asteroid.close_approach_data[0].close_approach_date);
		
		if(!deadly)
		{
			$('#appocalypseMessage').html("There are currently no potential threats of an asteroid appocalypse. We apologize for the inconvenience.");
			return;
		}
		else
		{
			$('#appocalypseMessage').html("Hide Your Kids! Hide Your Wife! An Asteroid Appoccalypse May Be On Its Way!");	
		}
		
		
		
		
	});


  });