$(document).ready(function(){

    $('.close-modal').click(function(){
        let modal = $(this).closest('.modal');
        modal.toggleClass('modal-show');
    });
    
});