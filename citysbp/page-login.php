<?php

/*
* Template Name: New Login
*/

get_header();
//https://wordpress.org/plugins/members/
//https://wordpress.org/plugins/user-role-editor/
//https://websiteguider.com/create-a-custom-login-page-for-wordpress-without-plugin/
?>
    <?php
        if($_POST){  
    
        global $wpdb;
        $errMsg = '';  
    
        //We shall SQL escape all inputs  
        $username = $wpdb->escape($_REQUEST['username']);  
        $password = $wpdb->escape($_REQUEST['password']);  
        $remember = $wpdb->escape($_REQUEST['rememberme']);  
    
        if($remember) $remember = "true";  
        else $remember = "false";  
    
        $login_data = array();  
        $login_data['user_login'] = $username;  
        $login_data['user_password'] = $password;  
        $login_data['remember'] = $remember;  
    
        $user_verify = wp_signon( $login_data, false );   
    
        if ( is_wp_error($user_verify) )   
        {  
            $errMsg = "Invalid login details";
        // Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.  
        } else
        {    
        echo "<script type='text/javascript'>window.location.href='". home_url() ."'</script>";  
        exit();  
        }  
    
    } else 
    {  
    
        // No login details entered - you should probably add some more user feedback here, but this does the bare minimum  
    
        //echo "Invalid login details";  
    
    }
    //https://www.c-sharpcorner.com/article/create-custom-login-and-register-without-using-plugin-in-wordpress/
?>
<?php if ( is_wp_error($user_verify) ){?>
<div class="alert alert-danger d-flex align-items-center container mt-2" role="alert">
    Invalid login details
</div>
<?php }?>
    <div class="container mt-2">
    <h2>Login Form</h2>          
        <form role="form" method="post" id="loginForm" action="<?php echo home_url();?>/login/">
            <div class="form-group mb-2">
                <label for="username">Username</label>
                <input type="text" class="form-control input-sm" name="username" placeholder="Username" id="username">
            </div>
            <div class="form-group mb-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            </div>
            <input type="submit" class="btn btn-primary" name="submitLoginBtn" id="submitLoginBtn" value="Login"/>
        </form>
    </div>

<?php
get_footer();
