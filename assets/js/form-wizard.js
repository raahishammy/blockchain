var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        console.log(document.getElementById("nextBtn").getAttribute("data-action"));
        if(document.getElementById("nextBtn").getAttribute("data-action")=="hide"){
            document.getElementById("nextBtn").style.display = "none";
        }
    } else {
        document.getElementById("nextBtn").style.display = "block";
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    
    var validPickup = $('#location_list').find('div .dd-list .dd-item').length;
    var disabled_view = $('body').find('.read-only').length;
    if(validPickup == 0 && disabled_view==0){
        alert('Please add atleast one pick up location');
        return false;
    }

    if (n < 3) {
        x[currentTab].style.display = "none";
    }
    // Increase or decrease the current tab by 1:
     
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        jQuery(".loderspin").css("display","block");
        // ... the form gets submitted:
        var countryCode = $('.passenger-row').find('.selected-dial-code').html();  
        $('input[name="country_code"]').val(countryCode);

        var countryCode2 = $('.psgcontact2').find('.selected-dial-code').html();  
        $('input[name="country_code_2"]').val(countryCode2);

        var adhoc_country_code = $('.adhoc-row').find('.selected-dial-code').html();  
        $('input[name="adhoc_country_code"]').val(adhoc_country_code);

        document.querySelector(".step-form-wizard").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    return true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
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
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}