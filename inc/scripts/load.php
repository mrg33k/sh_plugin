<?php

require_once "facebook.php";



// This is where we create our facebook instance.
$facebook = new Facebook(array(
  'appId'  => '299968696823094',
  'secret' => 'bfb74f39dc105de140df03cb51b32072',
  'allowSignedRequest' => false // optional but should be set to false if your app is not a canvas.
));


//These Parameters get passed to The Login Method
$paramsIn = array(
  'scope' => 'email,read_stream, read_friendlists,friends_likes,friends_interests,user_interests,user_groups,user_religion_politics,user_likes,friends_location',
  'redirect_uri' => 'http://facebook.beeing.us/wordpress/'
);


//This just tells the logout method to send the user to the logout.php page.
$paramsOut = array( 'next' => 'http://facebook.beeing.us/wordpress/' );


//Login and Logout Variables
$login_url = $facebook->getLoginUrl($paramsIn);
$logout_url= $facebook->getLogoutUrl($paramsOut);


//This is where we get the User That Logged In - were gonna store that to a variable
$user = $facebook->getUser();
  

// Check to see if we have a user yet
	if($user) {
        // We have a user ID, so probably a logged in user.
        // If we have a id we will store the users inforamation.
        try {
  		  
  		//Get User
        $user_profile = $facebook->api('/me','GET');                
        //Get Name
        $user_name = $user_profile["name"];
        $fb_first_name= $user_profile["first_name"];
        $fb_last_name= $user_profile["last_name"];
        $fb_location= $user_profile["location"]["name"];
        $fb_email= $user_profile["email"];        
        $location_parts= explode(", ", $fb_location);        
        $fb_city=$location_parts[0];
        $fb_state=$location_parts[1];          
        //Get Likes
        $my_likes = $facebook->api(
          "/me/likes"
        );        
        //Get Likes
        $my_interests = $facebook->api(
          "/me/interests"
        );      
		//User Profile Picture call
		$profile_picture_data = $facebook->api(
		   	    "/me/picture",
		   	    "GET",
		   	    array (
		   	        'redirect' => false,
		   	        'height' => '200',
		   	        'type' => 'normal',
		   	        'width' => '200',
		   	    )
		   	);          	   	
        //Friends Call -- WOOO HOO!
        $friends_list = $facebook->api('/me/friends' , 'GET');	
		//Profile Picture array path
		$user_picture = $profile_picture_data["data"]["url"];  
  		$user_data_all = array("profile" => $user_profile, "name" => $user_name , "likes" => $my_likes,"interests" => $my_interests , "picture" =>$profile_picture_data , "friends" => $friends_list);
        } catch(FacebookApiException $e) {
          // If the user is logged out, you can have a 
          // user ID even though the access token is invalid.
          // In this case, we'll get an exception, so we'll
          // just ask the user to login again here.
          $login_url = $facebook->getLoginUrl(); 
          echo 'Please <a href="' . $login_url . '">login.</a>';
          $user = null;
          error_log($e->getType());
          error_log($e->getMessage());
        }
      } else {
      
      }
  


