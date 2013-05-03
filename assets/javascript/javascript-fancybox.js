$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$(document).ready(function() {
    $('#Homme').click(function() {
        $('#galeri2').show();
        $('#galeri1').hide();
    })
    $('#Femme').click(function() {
        $('#galeri1').show();
        $('#galeri2').hide();
    })
});