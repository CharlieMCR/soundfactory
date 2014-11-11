//contact form styling and validation

$('#contact').click(function() {
	$('.contact').show();
});
$('#cancel').click(function() {
	$('.contact').hide();
});

$("#send").click(function(event) {
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	var $fillError = "<span>Please fill all fields.</span>";
	var $emailError = '<span>Please enter a valid email address.</span>';
	if (name === "" || email === "" || message === ""){
		event.preventDefault();
		$('form span').hide();
		$('#cancel').append($fillError);
	}	else if (validateEmail(email)) {
		event.submit();
		$('form span').hide();
		$(".contact").hide();
	}	else {
		event.preventDefault();
		$('form span').hide();
		$('#cancel').append($emailError);
	}
});

function validateEmail(email) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(email)) {
	return true;
	}	else {
	return false;
	}
}

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

