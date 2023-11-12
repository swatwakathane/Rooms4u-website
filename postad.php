<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="style.css">
    <title>Postad</title>
   
</head>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="postad.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">

<body>
<?php

include 'includes/header.php'?>

<div id="form_container" >
  


<h4 style="padding:3%;font-weight:350;">Post ad to get customers.</h4>


<form action="" method="">


<!--This part of the form will be visible in 1nd step-->
<div class="tab">
  


    <div >


      <input type="text" class="form-control" placeholder="Ad Title">
    </div>
    <br>

    <div class="form-group">
    <select class="custom-select"  required>
      <option value="">Category</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    
  </div>
    




  
    <div class="form-row">
    <div class="col">
    <input type="text" class="form-control "  placeholder="Adult">
    </div>
    <div class="col">
    <input type="text" class="form-control "  placeholder="Child">
    </div>
  </div>

  </div>

  <!--================1nd part of the form end here===================-->

<!--This part of the form will be visible in 2nd step-->
<div class="tab">
  
<div class="form-group">
    <select class="custom-select"  required>
      <option value="">State</option>
      <option value="1">Maharastra</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>


</div>


  
   

 
 




   
    <div class="form-row">
    <div class="col">
    <input type="text" class="form-control "  placeholder="City">
    </div>
    <div class="col">
    <input type="text" class="form-control "  placeholder="Pincode">
    </div>

    
    </div>
    <br>
    <div >


<input type="text" class="form-control" placeholder="Address">
</div>
    <br>
    <div class="form-group">
    <select class="custom-select"  required>
      <option value="">India(+91)</option>
      <option value="1">8378023706</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    
  </div>
    
    <div >
      <input type="text" class="form-control" placeholder="Phone Number">
    </div>

  </div>

  <!--================2nd part of the form end here===================-->

  <!--This part of the form will be visible in 3nd step-->
<div class="tab">
  
     <div class="form-group">
      
      <textarea class="form-control" rows="5" id="comment" placeholder="Describe about your place"></textarea>
    </div>


    <div class="image_container" style="margin:15px;">
        <div class="row">

    <img style="padding:5px;" id="imgFileUpload" class="img-fluid col-md-3 col-sm-6" style="padding:0px;cursor: pointer" src="img/select_image.png">
   
    <br />
    <span id="spnFilePath"></span>
    <input type="file"  id="FileUpload1" style="display: none" accept="image/*"/>  

   

    <!--image2-->
    <img style="padding:5px;" id="imgFileUpload2" class="img-fluid col-md-3 col-sm-6" style="padding:0px;cursor: pointer" src="img/select_image.png">
   
   <br />
   <span id="spnFilePath2"></span>
   <input type="file"  id="FileUpload2" style="display: none" accept="image/*"/> 
   
   <!--Image3-->
   <img style="padding:5px;" id="imgFileUpload3" class="img-fluid col-md-3 col-sm-6" style="padding:0px;cursor: pointer" src="img/select_image.png">
   
   <br />
   <span id="spnFilePath3"></span>
   <input type="file"  id="FileUpload3" style="display: none" accept="image/*"/>


   <!--Image3-->

   <img style="padding:5px;" id="imgFileUpload4" class="img-fluid col-md-3 col-sm-6" style="padding:0px;cursor: pointer" src="images/select_image.png">
   
   <br />
   <span id="spnFilePath4"></span>
   <input type="file" id="FileUpload4" style="display: none" />
    

   
   
    </div>
    </div>
  
    </div>
  
    <!--================3nd part of the form end here===================-->

      <br>
      <br>

    <div style="overflow:auto;" align="center">
    <div >
    <button type="button" class="btn btn-main" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-secondary" id="nextBtn" onclick="nextPrev(1)">Next</button>
</div>

</div>



</form>




<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  
</div>

<br>

</div>

<?php

include 'includes/footer_copyright.php'?>
    
<!--script  for this page-->
<script src="https://kit.fontawesome.com/e938973e75.js"></script>

<script>
 
    window.onload = function () {
        var fileupload = document.getElementById("FileUpload1");
        var filePath = document.getElementById("spnFilePath");
        var image = document.getElementById("imgFileUpload");
        image.onclick = function () {
            fileupload.click();
        };
        fileupload.onchange = function () {
            var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
            filePath.innerHTML = "<b>Selected File: </b>" + fileName;
        };



        var fileupload = document.getElementById("FileUpload2");
     var filePath = document.getElementById("spnFilePath2");
     var image = document.getElementById("imgFileUpload2");
     image.onclick = function () {
         fileupload.click();
     };
     fileupload.onchange = function () {
         var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
         filePath.innerHTML = "<b>Selected File: </b>" + fileName;
     };


     
     var fileupload = document.getElementById("FileUpload3");
     var filePath = document.getElementById("spnFilePath3");
     var image = document.getElementById("imgFileUpload3");
     image.onclick = function () {
         fileupload.click();
     };
     fileupload.onchange = function () {
         var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
         filePath.innerHTML = "<b>Selected File: </b>" + fileName;
     };

      
     var fileupload = document.getElementById("FileUpload4");
     var filePath = document.getElementById("spnFilePath4");
     var image = document.getElementById("imgFileUpload4");
     image.onclick = function () {
         fileupload.click();
     };
     fileupload.onchange = function () {
         var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
         filePath.innerHTML = "<b>Selected File: </b>" + fileName;
     };


        
    };


</script>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Post";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

    
</body>
</html>