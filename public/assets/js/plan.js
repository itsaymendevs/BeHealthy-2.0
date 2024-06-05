$(document).ready(function () {
    $("#select2").select2();
});
// -----------------------------------------------------------

$(document).ready(function () {
    $("#datePickerContainer").datepicker({
        autoclose: true,
        showInput: false, // Set this option to false to hide the input field
    });
    // Set the default date to the current date
    $("#datePickerContainer").datepicker("setDate", new Date());
});

// -----------------------------------------------------------

$("#personalize").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
// -----------------------------------------------------------

$("#faetured-dished-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 3,
        },
    },
});
// -----------------------------------------------------------

window.onscroll = function () {
    myFunction();
};
var navbar = document.getElementById("main-nav");
function myFunction() {
    if (window.pageYOffset >= 100) {
        navbar.classList.add("nav-colored");
    } else {
        navbar.classList.remove("nav-colored");
    }
}

(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
                forms,
                function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                }
            );
        },
        false
    );
})();
// -----------------------------------------------------------

// Use Inputmask library to format the input
$(document).ready(function () {
    $("#paymentInput").inputmask("9999 9999 9999 9999 99/99 999");
});
// -----------------------------------------------------------

$(document).ready(function () {
    $("#personalization-wizard").smartWizard({
        selected: 0,
        theme: "round",
        autoAdjustHeight: true,
        toolbar: {
            position: "bottom",
            showNextButton: true,
            showPreviousButton: true,
            extraHtml:
                '<button type="submit" class="btn btn-action-end ms-2" id="paymentBtn" style="display: none;">Continue</button>',
        },
        transition: {
            animation: "fade",
            speed: "400",
        },
    });
    $("#personalization-wizard").on(
        "leaveStep",
        function (
            e,
            anchorObject,
            currentStepIndex,
            nextStepIndex,
            stepDirection
        ) {
            if (anchorObject.prevObject.length - 1 == nextStepIndex) {
                $("#paymentBtn").show();
            } else {
                $("#paymentBtn").hide();
            }
        }
    );
});
// -----------------------------------------------------------

$(document).ready(function () {
    // Initialize Smart Wizard
    $("#personalization-wizard").smartWizard({
        // your smart wizard options
    });

    // Initialize validation for the entire form
    $("#personalization-form").validate({
        errorPlacement: function (error, element) {
            if (element.hasClass("select2-hidden-accessible")) {
                // If the element is a Select2 dropdown, append the error after the Select2 container
                error.insertAfter(element.next(".select2-container"));
            } else {
                // For other elements, use the default placement (after the element)
                error.insertAfter(element);
            }
            // error.insertAfter(element);
        },
        rules: {
            city: {
                required: true,
            },
            fistName: {
                required: true,
            },
            lastName: {
                required: true,
            },
            email: {
                required: true,
            },
            phone: {
                required: true,
            },
            whatsapp: {
                required: true,
            },
            gender: {
                required: true,
            },
            height: {
                required: true,
            },
            weight: {
                required: true,
            },
            address: {
                required: true,
            },
            payment: {
                required: true,
            },
            // Add rules for other fields in respective steps
        },
        messages: {
            city: {
                required: "Please choose your city.",
            },
            fistName: {
                required: "Please enter your first name.",
            },
            lastName: {
                required: "Please enter your last name.",
            },
            email: {
                required: "Please enter your email.",
            },
            phone: {
                required: "Please enter your phone number.",
            },
            whatsapp: {
                required: "Please enter your whatsapp number.",
            },
            gender: {
                required: "Please choose your gender.",
            },
            height: {
                required: "Please enter your height in KG.",
            },
            weight: {
                required: "Please enter your weight in CM.",
            },
            address: {
                required: "Please enter your address.",
            },
            payment: {
                required: "Please enter your payment details.",
            },
            // Add error messages for other fields in respective steps
        },
        submitHandler: function (form) {
            // Handle form submission if all steps are validated
            form.submit();
        },
    });

    // Event triggered when leaving a step
    $("#personalization-wizard").on(
        "leaveStep",
        function (e, anchorObject, stepIndex, stepDirection) {
            var form = $("#personalization-form");

            // Validate the form fields of the current step
            if (form.valid()) {
                return true; // Proceed to the next step
            } else {
                return false; // Stay on the current step if validation fails
            }
        }
    );
});
// -----------------------------------------------------------

$(function () {
    $("#smartwizard").smartWizard({
        selected: 0,
        theme: "square",
        justified: true,
        toolbar: {
            position: "bottom", // none|top|bottom|both
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            extraHtml:
                '<button type="button" class="btn btn-action ms-2" id="calculateBtn" style="display: none;">Got It</button>', // Extra html to show on toolbar
        },
        transition: {
            animation: "fade", // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
            speed: "400", // Animation speed. Not used if animation is 'css'
        },
    });

    $("#smartwizard .sw-toolbar-elm").append(
        '<button type="button" class="btn btn-action ms-2" id="closeBtn" data-bs-dismiss="modal" aria-label="Close" style="display: none;">Close</button>'
    );

    $("#smartwizard").on(
        "showStep",
        function (e, anchorObject, stepIndex, stepDirection) {
            // if (stepIndex == 6) {
            //   $('#calculateBtn').show();
            //   $('.sw-btn-next').hide(); // Hide the default "Next" button
            // } else {
            //   $('#calculateBtn').hide();
            //   $('.sw-btn-next').show(); // Show the default "Next" button
            // }
            // if (stepIndex >= 7) {
            //   $('#closeBtn').show();
            //   $('#calculateBtn').hide();
            //   $('.sw-btn-next').hide(); // Hide the default "Next" button
            // } else {
            //   $('#closeBtn').hide();
            //   $('#calculateBtn').show();
            //   $('.sw-btn-next').show(); // Show the default "Next" button
            // }
            if (stepIndex === 6) {
                $("#calculateBtn").show();
                $(".sw-btn-next").hide(); // Hide the default "Next" button
            } else {
                $("#calculateBtn").hide();
                $(".sw-btn-next").show(); // Show the default "Next" button
            }

            if (stepIndex === 7) {
                $("#closeBtn").show();
                $("#calculateBtn").hide();
                $(".sw-btn-next").hide(); // Hide the default "Next" button
            } else {
                $("#closeBtn").hide();
            }
        }
    );
});
// -----------------------------------------------------------

$(document).ready(function () {
    // Initialize Smart Wizard
    $("#smartwizard").smartWizard({
        // your smart wizard options
    });

    // Initialize validation for the entire form
    $("#bmi-form").validate({
        errorPlacement: function (error, element) {
            if (element.hasClass("select2-hidden-accessible")) {
                // If the element is a Select2 dropdown, append the error after the Select2 container
                error.insertAfter(element.next(".select2-container"));
            } else {
                // For other elements, use the default placement (after the element)
                error.insertAfter(element);
            }
            // error.insertAfter(element);
        },
        rules: {
            age: {
                required: true,
            },
            weight: {
                required: true,
            },
            height: {
                required: true,
            },
            // Add rules for other fields in respective steps
        },
        messages: {
            age: {
                required: "Please enter your age.",
            },
            weight: {
                required: "Please enter your weight in KG..",
            },
            height: {
                required: "Please enter your height in CM.",
            },
            // Add error messages for other fields in respective steps
        },
        submitHandler: function (form) {
            // Handle form submission if all steps are validated
            form.submit();
        },
    });

    // Event triggered when leaving a step
    $("#smartwizard").on(
        "leaveStep",
        function (e, anchorObject, stepIndex, stepDirection) {
            var form = $("#bmi-form");

            // Validate the form fields of the current step
            if (form.valid()) {
                return true; // Proceed to the next step
            } else {
                return false; // Stay on the current step if validation fails
            }
        }
    );
});
$(document).ready(function () {
    $("#calculateBtn").on("click", function () {
        // Get user inputs for BMI calculation
        var weight = parseFloat($('[name="weight"]').val());
        var height = parseFloat($('[name="height"]').val());
        var gender = $('[name="gender"]:checked').val();
        var activityLevel = parseFloat($('[name="activity"]:checked').val());

        // Perform BMI calculation
        var bmi = calculateBMI(weight, height);

        // Get BMI description
        var bmiDescription = getBMIDescription(bmi);

        // Display the calculated BMI and description on the last step
        $("#calculatedBMI").text(bmi.toFixed(1));
        $("#bmiDescription").text(bmiDescription);

        // Calculate maintenance calories
        var maintenanceCalories = calculateMaintenanceCalories(
            weight,
            height,
            gender,
            activityLevel
        );
        $("#maintenanceCalories").text(maintenanceCalories.toFixed(0));
        $("#maintenanceCalories1").text(maintenanceCalories.toFixed(0));

        // Move to the next step
        $("#smartwizard").smartWizard("next");
    });

    // Function to calculate BMI
    function calculateBMI(weight, height) {
        // BMI formula: weight (kg) / (height (m))^2
        var heightInMeter = height / 100; // Convert height to meters
        var bmi = weight / Math.pow(heightInMeter, 2);
        return bmi;
    }

    // Function to get BMI description
    function getBMIDescription(bmi) {
        if (bmi < 18.5) {
            return "Underweight";
        } else if (bmi >= 18.5 && bmi < 24.9) {
            return "Normal Weight";
        } else if (bmi >= 25 && bmi < 29.9) {
            return "Overweight";
        } else {
            return "Obese";
        }
    }

    // Function to calculate maintenance calories
    function calculateMaintenanceCalories(
        weight,
        height,
        gender,
        activityLevel
    ) {
        var bmr;
        if (gender === "1") {
            // For males
            bmr = 66.5 + 13.75 * weight + 5.003 * height - 6.75 * 30; // Assuming age is 30
        } else {
            // For females
            bmr = 655.1 + 9.563 * weight + 1.85 * height - 4.676 * 30; // Assuming age is 30
        }

        // Calculate maintenance calories based on activity level
        var maintenanceCalories = bmr * activityLevel;
        return maintenanceCalories;
    }
});
