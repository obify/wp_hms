
<?php  
/* 
Template Name: New Register 
*/  
//https://www.phpkida.com/how-to-create-registration-form-in-wordpress-without-plugin/
//https://njengah.com/create-login-page-in-wordpress-without-plugin/#:~:text=Create%20Login%20Form%20Custom%20Page,login%20form%20on%20that%20page.&text=array(-,'echo'%20%3D%3E%20true%2C,back%20to%20the%20request%20URI.
//https://www.c-sharpcorner.com/article/create-custom-login-and-register-without-using-plugin-in-wordpress/
//https://websiteguider.com/create-a-custom-registration-page-for-wordpress-without-plugin/
get_header();   
global $wpdb, $user_ID;  
//Check whether the user is already logged in  
if ($user_ID) 
{  
   
    // They're already logged in, so we bounce them back to the homepage.  
   
    //header( 'Location:' . home_url() );  
   
} else
 {  
   
    $errors = array();  
   
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
      {  
   
        // Check username is present and not already in use  
        $username = $wpdb->escape($_REQUEST['username']);  
        if ( strpos($username, ' ') !== false )
        {   
            $errors['username'] = "Sorry, no spaces allowed in usernames";  
        }  
        if(empty($username)) 
        {   
            $errors['username'] = "Please enter a username";  
        } elseif( username_exists( $username ) ) 
        {  
            $errors['username'] = "Username already exists, please try another";  
        }  
   
        // Check email address is present and valid  
        $email = $wpdb->escape($_REQUEST['email']);  
        if( !is_email( $email ) ) 
        {   
            $errors['email'] = "Please enter a valid email";  
        } elseif( email_exists( $email ) ) 
        {  
            $errors['email'] = "This email address is already in use";  
        }  
   
        // Check password is valid  
        if(0 === preg_match("/.{6,}/", $_POST['password']))
        {  
          $errors['password'] = "Password must be at least six characters";  
        }  
   
        // Check password confirmation_matches  
        if(0 !== strcmp($_POST['password'], $_POST['password_confirmation']))
         {  
          $errors['password_confirmation'] = "Passwords do not match";  
        }  
   
        // Check terms of service is agreed to  
        if($_POST['terms'] != "Yes")
        {  
            $errors['terms'] = "You must agree to Terms of Service";  
        }  
   
        if(0 === count($errors)) 
         {  
   
            $password = $_POST['password'];  
   
            $new_user_id = wp_create_user( $username, $password, $email );  
   
            // You could do all manner of other things here like send an email to the user, etc. I leave that to you.  
   
            $success = 1;  
   
            //header( 'Location:' . get_bloginfo('url') . '/login/?success=1&u=' . $username );  
   
        }  
        else{
            print_r($errors);
        }
    }  
}  
  
?>
<div class="container mt-2">
<h2>Registration Form</h2>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" class="mt-2">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  <div class="mb-3 form-check">
    <input name="terms" type="checkbox" class="form-check-input" id="terms" value="Yes">
    <label class="form-check-label" for="terms">I agree to the Terms of Service</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  
<?php get_footer(); ?>