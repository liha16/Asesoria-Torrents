// SERVICES:


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.minHeight){
      content.style.minHeight = null;
    } else {
      content.style.minHeight = (content.scrollHeight + 30) + "px";
    } 
  });
}

window.addEventListener('resize', function(event){
  fixSizeOverlay();
  fixSizeImages();
});


// Is cookie already set?
if (document.cookie.match(new RegExp('(^| )' + "cookieConsent" + '=([^;]+)'))) {
   document.getElementById("consentbox").style.display = "none";
}

// Cookie consent accept
if (document.getElementById("cookieAccept")) {
  document.getElementById("cookieAccept").addEventListener("click", function() {
    document.getElementById("consentbox").style.display = "none";
    setCookie("cookieConsent", "ok", 2)
  });

}

// Set a cookies
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


// Image url and height for services

if (document.getElementsByClassName("servicepic").length > 0) {
  fixSizeImages();
}

// Middle align for h2 in serives

if (document.getElementsByClassName("serviceoverlay").length > 0) {
  fixSizeOverlay();
}


function fixSizeOverlay() {
  var serviceoverlay = document.getElementsByClassName("serviceoverlay");
  for (i = 0; i < serviceoverlay.length; i++) {
    var h2 = serviceoverlay[i].getElementsByTagName('h2')[0];
    h2.style.marginTop = ((serviceoverlay[i].clientHeight - h2.clientHeight) / 2) + "px";
    //serviceoverlay[i].style.padding = newH + "px";

  }
}

function fixSizeImages() {
  var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var pics = document.getElementsByClassName("servicepic");
  for (i = 0; i < pics.length; i++) {
    pics[i].style.backgroundImage = "url('" + pics[i].dataset.src + "')"; 
    if (w >= 1000) { // desktop
      var newH = pics[i].parentElement.clientHeight;
      pics[i].style.height = newH + "px";
    } else { // mobile
      pics[i].style.height = "300px";
    }
  }
}



// SLIDESHOW:


if (document.getElementsByClassName("mySlides").length > 0) {
  var slideIndex = 1;
  showSlides(slideIndex);
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeOpinion", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " activeOpinion";
}
