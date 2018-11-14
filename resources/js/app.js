require("./bootstrap");
jQuery(document).ready(function($) {
    // Write all prodecural code below

    var deleteButton = $("#deleteConfirm");
    if (deleteButton.length) {
        deleteButton.click(function(e) {
            e.preventDefault();
            if (confirm("Are you sure?")) {
                window.location.href = deleteButton.attr("href");
                return true;
            } else {
                return false;
            }
        });
    } // end deleteButton
}); // end document.ready
