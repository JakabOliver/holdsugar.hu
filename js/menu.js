$('.book').on('click', function(){
    $(".menubars section:not(."+$(this).data('target')+")").slideUp();
    $(".menubars ."+$(this).data('target')).slideDown();
});