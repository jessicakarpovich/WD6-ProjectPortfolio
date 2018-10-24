/* Jessica Karpovich */
/* SSL */
/* C201807 */

$(document).ready(function() {
    // shared
    // activate popover
    $('#popover').popover();
    
    
    //welcome view only
    // when modal is opened, fill up progress bar
    let modalBtn = $('#modalBtn');
    if (modalBtn) {
        modalBtn.click( function() {
            let progressBar = $('.progress-bar');
            progressBar.css("width", "100%");
            progressBar.attr("aria-valuenow", "100%");
        });
    }
    
    //home view only
    // fill up progress bar as user clicks through slides
    let nextBtn = $('.js-next');
    if (nextBtn) {
        // if there is a next button, on click check aria value
        nextBtn.click( function() {
            let progressBar = $('.progress-bar');
            let currentProgress = progressBar.attr('aria-valuenow');
            
            // based on the value and number of slides, fill set a new value
            switch (currentProgress) {
                case "25":
                    currentProgress = "50";
                    break;
                case "50":
                    currentProgress = "75";
                    break;
                case "75":
                    currentProgress = "100";
                    // show modal
                    $('#modal').modal("show");
                    break;
                default:
                    break;
            }
            //set the aria-valuenow to this new value
            progressBar.attr('aria-valuenow', currentProgress);
            // create a string (add a % sign) and set the new width of the progress bar
            let width = currentProgress + "%";
            progressBar.css('width', width);
        });
    }
    
    // welcome/contactRecv show modal
    let successModal = $("#successModal");
    if (successModal) {
        successModal.modal('toggle');
    }
});