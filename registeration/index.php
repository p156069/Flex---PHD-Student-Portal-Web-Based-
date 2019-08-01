
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PhD Student Registeration Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>




  <div class="info">
  <h1>PhD Student Registeration Details</h1>
  <span>
    Developed
    by
    <a href="https://pwr.nu.edu.pk">Team @recluze</a>
    <div class="spoilers">
      Web Programming project</a>
    </div>
  </span>
</div>



<!-- Modal -info
<div class="container">
<div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">Need help?</h2>
    <h3 class="fs-subtitle">FAST UNI</h3>
    <p>This is your details for registering into FAST Uni for PHD program if you need any help please call on us 1234555</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div>
</div>
 -->



<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" method="post" action="account_creation.php">
  <ul id="progressbar">
    <li class="active">Student Information</li>
    <li>GAT Test Details</li>
    <li>Master's Details</li>
    <li>Bachelor's Details</li>
    <li>FSC Details</li>
    <li>SSC Details</li>
    <li>Done</li>
  </ul>



  <!-- Basic INFORMATION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Basic Information</h2>
    <h3 class="fs-subtitle">We just need some basic information</h3>
    <!-- Begin What's Your First Name Field -->

        <div class="hs_firstname field hs-form-field">

          <label for="firstname">First Name *</label>

          <input id="firstname" name="first_name" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please include your first name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


          <label for="lastname">Last Name *</label>

          <input id="lastname" name="last_name" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please include your last name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

            <label for="rollno">Roll No *</label>

          <input id="rollno" name="Rollno" required="yes" type="text" value="" placeholder="" data-rule-required="yes" data-msg-required="Please enter your roll number" required>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


        </div>


        <div class=" ">

          <label for="email"> E-mail Address? *</label>

          <input id="email" name="email" required="required" type="email" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid email address." >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>



        </div>

        <label for="phone">Phone number*</label>

          <input id="phone" name="phone" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter your roll number" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

          <label for="cnic">Cnic number*</label>

          <input id="cnic" name="cnic" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter your roll number" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>



        <div class="hs_firstname field hs-form-field" >
         <label for="campusdropdown"> Select Campus *</label>
         <select id="campusname" name="campus_" class="area">
                     <option value="Peshawar"  >Peshawar</option>
                     <option value="Islamabad" >Islamabad</option>
                     <option value="Faisalabad" >Faisalabad</option>
                     <option value="Lahore" >Lahore</option>
                     <option value="Karachi" >Karachi</option>

              </select>

        </div>

      <div class="hs_firstname field hs-form-field" >
         <label for="deptdropdown"> Select Department *</label>
         <select id="deptdropdown" name="Depart" class="area">
                     <option value="CS">CS</option>
                     <option value="EE">EE</option>
                     <option value="Management of Sciences">Management of Sciences</option>
                     <option value="Accouting">Accouting</option>

                  </select>

        </div>

<div>
      <label for="admissiondate"> Date of Admission *</label>

     <input type="Date" name="adm_date" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>



      <div class="hs_firstname field hs-form-field" >
         <label for="statusdropdown"> Progress Status *</label>
         <select id="statusdropdown" name="Pstatus" class="area">

                     <option value="H">H</option>
                     <option value="G">G</option>
                     <option value="F">F</option>
                     <option value="E">E</option>
                     <option value="D">D</option>
                     <option value="C">C</option>
                     <option value="B">B</option>
                      <option value="A">A</option>

                  </select>

        </div>

        <div class="hs_firstname field hs-form-field" >
         <label for="fundingdropdown"> Funding Status *</label>
         <select id="fundingdropdown" name="fstatus"class="area">

                     <option value="self">Self</option>
                     <option value="Fellowship">Fellowship</option>


                  </select>

        </div>



        <div class=" " >
         <label for="admissionstatusdropdown"> Admission Status *</label>
         <select id="admissionstatusdropdown" name="Astatus" class="area">

                     <option value="Current">Current</option>
                     <option value="Cancelled">Cancelled</option>


                  </select>

        </div>


         <div class="">

          <label for="supervisorname">SuperVisior Name *</label>

          <input id="supervisorname" class="form-text hs-input" name="sup" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

           <label for="hecpincode">HEC Pin Code *</label>

          <input id="hecpincode" class="form-text hs-input" name="pincode" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


        </div>

         <div class="form-group" id='gatfile'>
               <h3 class="uploadfile"> Upload your Profile picture</h3>
                  <div class="custom-file">
                    <input type="file" name="pic" class="custom-file-input" id="gatfile">
                      <label class="custom-file-label" for="gatfile"></label>
                  </div>
           </div>


      <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
   
 <input type="button" name="btn" class="previous action-button" value="Go Back"  onclick="location.href='/neon/main.php';"/>
 
  </fieldset>



  <!-- GAT SCORE FIELD SET -->
  <fieldset>

    <h2 class="fs-title">GAT SCORE DETAILS</h2>
    <h3 class="fs-subtitle">Enter your Gat score details here!</h3>
      <!-- Begin GAT DETAILS -->
        <div class="">

          <label for="gatscore">Obtained Score*</label>

          <input id="gatscore" class="form-text hs-input" name="g_score" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

         <div class="">

          <label for="gattotal">Total Marks*</label>

          <input id="gattotal" class="form-text hs-input" name="g_total_score" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


<div>
      <label for="gattestdate"> Test Date *</label>

     <input type="Date" name="g_Test" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>




<div>
      <label for="gatexpdate"> Expiry Date *</label>

     <input type="Date" name="g_Exp" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>



    <div class="form-group" id='gatfile'>
               <h3 class="uploadfile"> Upload your Test record</h3>
                  <div class="custom-file">
                    <input type="file" name="g_res" class="custom-file-input" id="gatfile">
                      <label class="custom-file-label" for="gatfile"></label>
                  </div>
           </div>



     <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
   <!--  <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Need Help?</div> -->
  </fieldset>

  <!-- FINISHED GAT FIELDSET -->


  <!-- MASTER DETAILS FIELD SET -->
  <fieldset>
    <h2 class="fs-title">MASTER"S DETAILS</h2>
    <h3 class="fs-subtitle">Enter your master record here!</h3>


        <div class="mscgpa" id="m_gpa">

          <label for="mscgpa">MS CGPA *</label>

          <input id="mscgpa" class="form-text hs-input" name="m_gpa" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid gpa">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="totalgpa" id="m_total_gpa">

          <label for="totalgpa">Total GPA *</label>

          <input id="totalgpa" class="form-text hs-input" name="m_total_gpa" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="msuniversityname" id="msuniversityname">

          <label for="msuniversityname">University*</label>

          <input id="msuniversityname" class="form-text hs-input" name="m_place" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


        <div>
      <label for="mscompyear"> Year of Completion *</label>

     <input type="Date" name="m_comp" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>


          <div class="form-group" id='mstranscript'>
               <h3 class="uploadfile"> Upload your Transcript</h3>
                  <div class="custom-file">
                    <input type="file" name="m_trans" class="custom-file-input" id="mstranscript">
                      <label class="custom-file-label" for="mstranscript"></label>
                  </div>
           </div>



           <div class="form-group" id='msdegree'>
               <h3 class="uploadfile"> Upload your Degree</h3>
                  <div class="custom-file">
                    <input type="file" name="m_degree" class="custom-file-input" id="msdegree">
                      <label class="custom-file-label" for="msdegree"></label>
                  </div>
           </div>




           <div class="form-group" id='mshecequivalence'>
               <h3 class="uploadfile"> Upload your HEC Equivalence </h3>
                  <div class="custom-file">
                    <input type="file" name="m_equi" class="custom-file-input" id="mshecequivalence">
                      <label class="custom-file-label" for="mshecequivalence"></label>
                  </div>
           </div>




    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
   
  </fieldset>



  <!-- Bachelor's  FIELD SET -->
  <fieldset>
    <h2 class="fs-title">BACHELOR'S DETAILS</h2>
    <h3 class="fs-subtitle">Enter your Bachelor's Record</h3>


  <div class="bscgpa" id="bscgpa">

          <label for="bscgpa">BS CGPA *</label>

          <input id="bscgpa" class="form-text hs-input" name="b_gpa" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid gpa">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="bstotalgpa" id="bstotalgpa">

          <label for="bstotalgpa">Total GPA *</label>

          <input id="bstotalgpa" class="form-text hs-input" name="b_totalgpa" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="bsuniversityname" id="bsuniversityname">

          <label for="bsuniversityname">University*</label>

          <input id="bsuniversityname" class="form-text hs-input" name="b_place" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a name">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


        <div>
      <label for="bscompyear"> Year of Completion *</label>

     <input type="Date" name="b_comp" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>


          <div class="form-group" id='bstranscript'>
               <h3 class="uploadfile"> Upload your Transcript</h3>
                  <div class="custom-file">
                    <input type="file" name="b_trans" class="custom-file-input" id="bstranscript">
                      <label class="custom-file-label" for="bstranscript"></label>
                  </div>
           </div>



           <div class="form-group" id='bsdegree'>
               <h3 class="uploadfile"> Upload your Degree</h3>
                  <div class="custom-file">
                    <input type="file" name="b_degree" class="custom-file-input" id="bsdegree">
                      <label class="custom-file-label" for="bsdegree"></label>
                  </div>
           </div>




           <div class="form-group" id='bshecquivalence'>
               <h3 class="uploadfile"> Upload your HEC Equivalence </h3>
                  <div class="custom-file">
                    <input type="file" name="b_equi" class="custom-file-input" id="bshecquivalence">
                      <label class="custom-file-label" for="bshecquivalence"></label>
                  </div>
           </div>



    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
   <!--  <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Need Help?</div> -->
  </fieldset>



    <!-- FSC's  FIELD SET -->
  <fieldset>
    <h2 class="fs-title">FSC DETAILS</h2>
    <h3 class="fs-subtitle">Enter your FSC Record</h3>


  <div class="fscmarks" id="fscmarks">

          <label for="fscmarks">Obtained Marks *</label>

          <input id="fscmarks" class="form-text hs-input" name="f_score" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter valid marks">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="fsctotalmarks" id="fsctotalmarks">

          <label for="fsctotalmarks">Total Marks *</label>

          <input id="fsctotalmarks" class="form-text hs-input" name="f_total_marks" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid Marks">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="collegename" id="collegename">

          <label for="collegename">College/School*</label>

          <input id="collegename" class="form-text hs-input" name="f_place" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a name">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


        <div>
      <label for="collegecompyear"> Year of Completion *</label>

     <input type="Date" name="f_Test" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>


          <div class="form-group" id='collegetranscript'>
               <h3 class="uploadfile"> Upload your Transcript/DMC</h3>
                  <div class="custom-file">
                    <input type="file" name="ftrans" class="custom-file-input" id="collegetranscript">
                      <label class="custom-file-label" for="collegetranscript"></label>
                  </div>
           </div>





    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
   <!--  <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Need Help?</div> -->
  </fieldset>






  <!-- SSC FIELD SET -->
  <fieldset>
    <h2 class="fs-title">SSC DETAILS</h2>
    <h3 class="fs-subtitle">Enter your SSC details here</h3>



          <div class="schoolmarks" id="schoolmarks">

          <label for="schoolmarks">Obtained Marks *</label>

          <input id="schoolmarks" class="form-text hs-input" name="s_score" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid marks">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="schooltotalmarks" id="schooltotalmarks">

          <label for="schooltotalmarks">Total Marks *</label>

          <input id="schooltotalmarks" class="form-text hs-input" name="s_total_marks" required="" type="number" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


         <div class="schoolname" id="schoolname">

          <label for="schoolname">College/School*</label>

          <input id="schoolname" class="form-text hs-input" name="s_place" required="" type="text" value="" placeholder="" data-rule-required="" data-msg-required="Please enter a name">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


        <div>
      <label for="schoolcompyear"> Year of Completion *</label>

     <input type="Date" name="s_Test" placeholder="" required=""  data-rule-required="" data-msg-required="Enter Date" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
</div>


          <div class="form-group" id='schooltranscript'>
               <h3 class="uploadfile"> Upload your Transcript/DMC</h3>
                  <div class="custom-file">
                    <input type="file" name ="strans" class="custom-file-input" id="schooltranscript">
                      <label class="custom-file-label" for="schooltranscript"></label>
                  </div>
           </div>







     <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="5" name="next" class="next action-button" value="Next" />
   <!--  <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Need Help?</div> -->
</fieldset>



  <fieldset>
    <h2 class="fs-title">WOW! IT' DONE </h2>
    <h3 class="fs-subtitle">Great job!!</h3>


    <p>Thank you for Entering your all of details !! if you feel any mistake in your detials contact academics</p>

    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">




   <!--  <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Need Help?</div> -->
  </fieldset>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
