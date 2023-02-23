//onclick scroll smooth to specific section
$(document).ready(function () {
  $("a").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
  });
});

//Control small top responsive - open close
var $body = $('body');
var $check = $('#check');
var $navlinkli = $('#navlink li');

function navctrl() {
  if ($check.is(':checked')) {
    $body.addClass('stop_scroll');

    $navlinkli.click(function () {
      $check.prop('checked', false);
      $body.removeClass('stop_scroll');
    })
  }
  else {
    $body.removeClass('stop_scroll');
  }
}

//scroll - navbar change color
var $nav = $('.navtop');
var $homecover = $('.homecover').height() * (9 / 10);

$(function () {
  $(document).scroll(function () {
    $nav.toggleClass('scrolled', $(this).scrollTop() > $homecover);
  });
});

//Modal control - About me
var modal = document.getElementById("aboutModal");
var cls = document.getElementsByClassName("close")[0];
const body = document.querySelector("body");

function openM() {  // Open modal
  modal.style.display = "block";
  body.style.overflow = "hidden";
}

cls.onclick = function () {  // Close modal
  modal.style.display = "none";
  body.style.overflow = "auto";
}

window.onclick = function (event) {  // Click outside modal, close
  if (event.target == modal) {
    modal.style.display = "none";
    body.style.overflow = "auto";
  }
}

//If use window location (INCOMPLETE (Keep Refreshing))
const home = $('#homelink')
const project = $('#projectlink')
const about = $('#aboutlink')

if (window.location.href != 'index.php') {
  about.addEventListener('click', () => {
    window.location.href = 'testing.php';
  })
}
