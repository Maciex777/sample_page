//akcja po kliknięciu "read more"	(article - artykuły z krótszym nagłówkiem, article2 - artykuł z dłuższym nagłówkiem)
$(document).ready(function(){
	var readMore = $(".article").html();
	var lessText = readMore.substr(0, 550);
	
	var readMore2 = $(".article2").html();
	var lessText2 = readMore2.substr(0, 400);		
	
	if(readMore.length > 550){
		$(".article").html(lessText).append("<a href='' class='read-more'>&mdash; read more</a>");
	} else {
		$(".article").html(readMore);
	}
	
	if(readMore2.length > 400){
		$(".article2").html(lessText2).append("<a href='' class='read-more'>&mdash; read more</a>");
	} else {
		$(".article2").html(readMore2);
	}		
	
	$("body").on("click", ".read-more", function(event){
		event.preventDefault();
		$(this).parent(".article").html(readMore).append("<a href='' class='show-less'>&mdash; show less</a>");
		$(this).parent(".article2").html(readMore2).append("<a href='' class='show-less'>&mdash; show less</a>");
	})
	
	$("body").on("click", ".show-less", function(event){
		event.preventDefault();
		$(this).parent(".article").html(readMore.substr(0, 550)).append("<a href='' class='read-more'>&mdash; read more</a>");
		$(this).parent(".article2").html(readMore2.substr(0, 400)).append("<a href='' class='read-more'>&mdash; read more</a>");
	})			
});

//rozwijane menu przy mniejszych ekranach
$(document).on('click', '#menu', function(event){
    event.preventDefault();
	
	$('#myTopnav').toggleClass(' responsive');
});

//efekt smooth scroll po kliknięciu na "back to top"	
$(document).on('click', '#scroll-anchor', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href')).offset().top
    }, 600);
});

//zmiana koloru wszystkich słów "ipsum" na 3 sekundy po kliknięciu na przycisk "push the button"
$(document).on('click', '#push-button', function(str, className) {
	var artykul = $(".article");
	var artykul2 = $(".article2");
	artykul.html(artykul.html().replace(/ipsum/g, '<span style="color: red">$&</span>'));
	artykul2.html(artykul2.html().replace(/ipsum/g, '<span style="color: red">$&</span>'));
	setTimeout(function() {
       artykul.html(artykul.html().replace(/ipsum/g, '<span style="color: black">$&</span>'));
	   artykul2.html(artykul2.html().replace(/ipsum/g, '<span style="color: black">$&</span>'));
      }, 3000);
});
