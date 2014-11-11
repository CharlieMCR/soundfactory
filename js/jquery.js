// $(".contact").hide();
$('#contact').click(function() {
	$('.contact').show();
});


//select box to change the size of the image in light box.
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");


$overlay.append($image);
$("body").append($overlay);
$overlay.append($caption);

$("span a").click(function(event){
  event.preventDefault();
  var imageLocation = $('select option:selected').attr("value");
  console.log(imageLocation);
  // Update overlay with the image linked in the link  
  $image.attr("src", imageLocation);
  $overlay.show();
  
  // Get child's alt attribute and set caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
});

$overlay.click(function() {
  $overlay.hide();
});

//contact form styling and validation