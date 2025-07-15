<?php
    /*Template Name: create-an-account */
     get_header();
    if( is_user_logged_in()) {
        wp_redirect( home_url('/') ); // send to homepage
    }
?>
<?php
$field_messages = array();
if( isset($_POST['first_name'])){
    $error = false;
    $required_fields = ['user_account_type', 'first_name', 'last_name', 'email', 'password', 'confirm_password'];
    foreach( $required_fields as $field):
        if( !isset($_POST[$field]) || empty($_POST[$field])){
            $error = true;
            $field_messages[$field] = __('This field is required', 'teamed');
        }
    endforeach;
    
    if( !$error ) {
        if( strlen( $_POST['password'] ) < 5 ) {
            $field_messages['password'] = __('Passwords must be at least 5 characters long', 'teamed');
            $error = true;
        }
        if( $_POST['password'] != $_POST['confirm_password'] ) {
            $field_messages['password'] = $field_messages['confirm_password'] = __('Passwords must match', 'teamed');
            $error = true;
        }
        if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            $error = true;
            $field_messages['email'] = __('Invalid Email Address', 'teamed');
        } elseif( email_exists($_POST['email']) ) {
            $field_messages['email'] = __('Email already registered', 'teamed');
            $error = true;
        }
    }

    if( !$error ){
        $username = $orig_username = sanitize_user( $_POST['email'] );
        $counter = 1;
        while( username_exists($username) ) {
            $username = $orig_username . $counter++;
        }
        $user_id = wp_insert_user([
            'user_pass' => $_POST['password'],
            'user_login' => $username,
            'user_email' => $_POST[ 'email'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'display_name' => $_POST['first_name'] . ' ' . $_POST['last_name'],
            'role' => 'subscriber'
        ]);

      if( !is_wp_error($user_id)){
        if( $_POST['user_account_type'] == 'user' ){
            update_field( 'user_type', 'user', 'user_' . $user_id );
        }else {
            update_field( 'user_type', 'client', 'user_' .$user_id );
        }
        wp_redirect( home_url( '/' ) );
     }
}
}
?>

<div class="text-center">
    <h1 class="text-center mt-4">Create an Account</h1>
    <a href=""
        class="link-offset-2 fw-bolder link-underline link-underline-opacity-0 text-primary text-info-emphasis m-auto">Or
        sign in if you already have an account</a>
</div>
<div class="container  mt-4 w-75">
    <form class="row mt-5" method="post">
        <div class="row mt-5 ">
            <div class="col-md-6">
                <div
                    class="form-check <?php echo ( array_key_exists('user_account_type', $field_messages) ? 'has-error' : '' ); ?>">
                    <label class="form-check-label user-type" for="radioDefault1">
                        <input class="form-check-input" type="radio" name="user_account_type" id="radioDefault1"
                            value="client">
                        Hiring Account
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="form-check <?php echo ( array_key_exists('user_account_type', $field_messages) ? 'has-error' : '' ); ?>">
                    <label class="form-check-label user-type" for="radioDefault1">
                        <input class="form-check-input" type="radio" name="user_account_type" id="radioDefault1"
                            value="user">
                        Job Seeker Account
                    </label>
                </div>
            </div>
        </div>

        <div class=" col-md-6 mb-3 p-2  <?php echo (array_key_exists('first_name', $field_messages) ? 'has-error' : '' );?>">
            <div class="user-label">
            <input type="text" placeholder="First Name" class="form-control user-type" id="exampleInputEmail1"
            aria-describedby="emailHelp" name="first_name">
        </div>
            <?php echo (array_key_exists('first_name', $field_messages) ? '<div class="t-field-error">'.$field_messages['first_name'].'</div>' : '' ); ?>
        </div>

        <div class="col-md-6 mb-3 p-2 <?php echo ( array_key_exists('last_name', $field_messages) ? 'has-error' : '' ); ?>">
            <input type="text" placeholder="Last Name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="last_name">
            <?php echo ( array_key_exists('last_name', $field_messages) ? '<div class="t-field-error">'.$field_messages['last_name'] . '</div>' : '' ); ?>
        </div>

        <div class="col-md-12 mb-3 p-2  <?php echo ( array_key_exists('email', $field_messages) ? 'has-error' : '' ); ?>">
            <input type="email" class="form-control user-type" name="email" id="exampleFormControlInput1"
                placeholder="name@example.com">
            <?php echo ( array_key_exists('email', $field_messages) ? '<div class="t-field-error">'.$field_messages['email'] . '</div>' : '' ); ?>
        </div>

        <div class="col-md-6 mb-3 p-2 <?php echo ( array_key_exists('password', $field_messages) ? 'has-error' : '' ); ?>">
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                placeholder="password at least 5 characters">
            <?php echo( array_key_exists('password', $field_messages) ? '<div class="t-field-error">'.$field_messages['password'] . '</div>' : '' ); ?>
        </div>

        <div class="col-md-6 mb-3 p-2 <?php echo ( array_key_exists('confirm_password', $field_messages) ? 'has-error' : '' ); ?>">
            <input type="password" class="form-control" name="confirm_password" id="exampleFormControlInput1"
                placeholder="confirm password">
            <?php echo ( array_key_exists('confirm_password', $field_messages) ? '<div class="t-field-error">'.$field_messages['confirm_password'] . '</div>' : '' ); ?>
        </div>

        <div class="col-md-12 mb-3 p-2 text-center">
            <input type="submit" name="user_client__signup" class="btn btn-success" value="create Account"
                id="exampleFormControlInput1" placeholder="confirm password">
        </div>
</div>

</div>
</form>

</div>
</div>
<?php
get_footer();
?>