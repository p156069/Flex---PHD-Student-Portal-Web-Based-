<?php

  $roll = $_GET['student_id'];



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Give Feedback</title>
    <link rel="stylesheet" type="text/css" href="smart-forms.css">
    <link href="bluetheme.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 

</head>
<body>
    <div class="smart-wrap">
        <div class="smart-forms smart-container wrap-3">

            <div class="form-header header-blue">
                <h4><i class="fa fa-comments"></i> Submit feedback here </h4>
            </div><!-- end .form-header section -->

            <form method="post" action="gcs-processfeedback.php" id="comment2">
                <div class="form-body theme-blue">

                  <div class="section">
                      <label class="field prepend-icon">
                          <input type="text" name="rollno" id="rollno" class="gui-input" value="<?php echo $roll; ?>">
                          <span class="field-icon"><i class="fa fa-user"></i></span>
                      </label>
                  </div><!-- end section -->

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="text" name="names" id="names" class="gui-input" placeholder="Enter name...">
                            <span class="field-icon"><i class="fa fa-user"></i></span>
                        </label>
                    </div><!-- end section -->

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input" placeholder="Enter Email...">
                            <span class="field-icon"><i class="fa fa-envelope"></i></span>
                        </label>
                    </div><!-- end section -->

                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="text" name="website" id="website" class="gui-input" placeholder="Website url (optional)...">
                            <span class="field-icon"><i class="fa fa-globe"></i></span>
                        </label>
                    </div><!-- end section -->

                    <div class="section">
                        <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Enter feedback..."></textarea>
                            <span class="field-icon"><i class="fa fa-comments"></i></span>

                        </label>
                    </div><!-- end section -->



                    <div class="spacer-b30">
                        <div class="tagline" ><span> <a href="gcs-view-details.php"><span></span>CANCEL AND GO BACK</span></a></div><!-- .tagline -->
                    </div>



                </div><!-- end .form-body section -->
                <div class="form-footer">
                    <button type="submit" class="button btn-blue" href="gcs-processfeedback.php">Post feedback</button>
                </div><!-- end .form-footer section -->
                
            
                
                
            </form>

        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

    <div></div><!-- end section -->

</body>
</html>
