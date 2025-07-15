    <?php
    /* Template Name: update-profile*/
    ?>
    <?php
    get_sidebar();
    ?>
    <?php
    $current_user = wp_get_current_user();

    if ($current_user->ID) {
        $first_name = $current_user->first_name;
        $last_name = $current_user->last_name;
        $display_name = $current_user->display_name;
    } else {
        echo "User not logged in.";
    }
    ?>
 
    <!-- Main Content -->
    <main class="content">
    <div id="message"></div> <!-- Response Message -->
        <h2 class="text-center">Update Profile</h2>
        <div class="container mt-5">
 
        <form class="row g-3" method="post" enctype="multipart/form-data" id="update-profile-form">
            <!-- First Name -->
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo esc_attr($first_name); ?>" class="form-control" id="firstName" placeholder="Enter First Name">
            </div>

            <!-- Last Name -->
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo esc_attr($last_name); ?>" class="form-control" id="lastName" placeholder="Enter Last Name">
            </div>

            <!-- Display Name -->
            <div class="col-md-12">
                <label for="displayName" class="form-label">Display Name</label>
                <input type="text" id="display_name" name="display_name" value="<?php echo esc_attr($display_name); ?>" class="form-control" id="displayName" placeholder="Enter Display Name">
            </div>

            <!-- Image Upload -->
            <div class="col-md-12">
                <label for="profileImage" class="form-label">Upload Profile Image</label>
                <input type="file" class="form-control" name="img" id="profileImage">
            </div>

            <!-- Submit Button -->
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
            </div>
       </form>
     
 </div>
</body>
</html>

