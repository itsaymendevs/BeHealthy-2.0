$(document).ready(function () {
    $("img").addClass("no-blur");
});

document.addEventListener("livewire:navigated", function () {
    $(document).ready(function () {
        $("img").addClass("no-blur");
    });
});

window.addEventListener("noBlur", (event) => {
    $(document).ready(function () {
        $("img").addClass("no-blur");
    });
});

window.addEventListener("processing", (event) => {
    $(".submitButton").addClass("disabled");
    console.log("first");
}); // end function
