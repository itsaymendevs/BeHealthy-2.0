// GLOBAL VARS
var planDays = 0;
let i = 0;



// 1: change events for select
$(document).on('click', '.days-btn', function() {

    // Remove the 'active' class from all buttons
    $('.days-btn').removeClass('active');

    // Add the 'active' class to the clicked button
    $(this).addClass('active');


    // 1: Plan Days
    planDays = $(".days-btn.active").data('days');



    let bundlesArray = planDaysBundles[planDays];
    // console.log(bundlesArray);



    // 2: hide bundles
    $('.singleBundle').addClass('d-none');






    // -------------------------------------
    // -------------------------------------





    // pre: reset counter 
    i = 0;



    // 3: show related bundles
    bundlesArray.map(function(bundleid) {

        $(`.singleBundle[data-bundle=${bundleid}]`).removeClass('d-none');



        // action: make active
        if (i == 0) {
            
            $(`.pkg-btn[data-bundle-id-${bundleid}]`).trigger('click');

            // inc counter
            i++;

        } //end if
    

    }); //end map - bundlesArray






}); //end function









// =======================================================================
// =======================================================================










// 1.5: change events for inputs
$(document).on('click', '.changeAction', function() {

    initSummary();

});









// =======================================================================
// =======================================================================






// 2: initSummary Function
function initSummary() {



    // A: GET VALUES


    // 1: Plan Days
    let planDays = $(".days-btn.active").data('days');
    



    // 2: Bundle / Bundle Id
    let bundleId = $(".pkg-btn.active").data('bundle-id');




    // 3: intake id
    let intakeId = $(".intake-btn.active").data('intake-id');
    let intakeTitle = $(".intake-btn.active").data('intake-title');

    



    // ---------------------------------------
    // ---------------------------------------



    
    // B: GET MEAL TYPES FROM BUNDLE / BUNDLE DISCOUNT
    let bundleTypesValue = bundleTypesArray[bundleId]['types'].join(',');
    let bundleDiscount = parseFloat(bundleDiscountArray[bundleId][planDays]);







    // ---------------------------------------
    // ---------------------------------------


    // D: CALC PRICE + DISCOUNT IF FOUND + SHOW ? HIDE MEAL TYPES
    let price = 0;
    let totalPrice = 0; 
    let totalCalories = 0; 

    let typesArray = ['1', '2', '3', '4', '5', '6', '7', '8'];

    // console.log(intakeMeals, intakeId);
    // // loop - typesArray
    // typesArray.map(function(singleType) {

    //     (bundleTypesValue.includes(singleType)) ? 
    //     totalCalories += parseFloat(intakeMeals[intakeId][singleType]['cals']) : totalCalories += 0;

    // });

    $.each(packageBundleData[intakeId], function(key, value) {
        
        if(value.package_bundle_id == bundleId){
            // price += parseFloat(value.price);
            totalCalories += parseFloat(value.calories);
        }
    });
    
    $.each(bundlesIntakes, function(index, item) {
        if (
                item.pivot.package_bundle_id == bundleId &&
                item.pivot.package_intake_id == intakeId
        ) 
        {
            price = item.pivot.price;
            return false; // Break out of the loop
        }
    });


    console.log(price);
    // 2: Multiple by days
    price = price * parseInt(planDays);



    // 3: extra: apply discount (Without Cooler Bag) 
    let discountPrice = price * (bundleDiscount / 100);
    price -= discountPrice;





    // ---------------------------------------
    // ---------------------------------------


    // E: CALC TOTAL PRICE



    // 1: total price
    totalPrice = price;
    
    var taxAmount = totalPrice * 0.05;

    let planWithoutTaxPrice = totalPrice - taxAmount;


    $('.planDiscount').val(intakeId);
    $('.planBundle').val(bundleId);
    $('.range').val(intakeId);

    $('.planIntake').val(intakeId);
    $('.intakeTitle').text(intakeTitle);

    $('.planDays').val(planDays);
    $('.daysPerWeek').text(planDays);

    // 3: Assign planTotalPrice / planTotalCalories
    $('.rangePriceText').text(totalPrice);
    $('.planPrice').val(totalPrice);
    $('.taxAmount').val(taxAmount);
    $('.taxAmountDisplay').text(taxAmount+' AED');
    $('.pkg-price').text(planWithoutTaxPrice+' AED');

    $('.rangeCaloriesText').text(totalCalories);
    $('.planCalories').val(totalCalories);

    

    // 3.1: planDiscount
    $('.planDiscount').val(bundleDiscount);



} //end function










