$('.book').on('click', function(){
    $("section.menubar:not(."+$(this).data('target')+")").slideUp();
    $(".menubar."+$(this).data('target')).slideDown();
    $("img.book").addClass('closed').removeClass('open');
    $("img.book."+$(this).data('target')).removeClass('closed').addClass('open');
});

