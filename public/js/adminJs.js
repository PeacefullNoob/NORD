
  $( document ).ready(function() {
    $('#dodajVideo').css({
        'display': 'none'
    });
    $('#dodajSliku').css({
        'display': 'none'
    });
    $('#dodajThumb').css({
      'display': 'none'
  });
    $('#photoButton').click(function() {
        $('#dodajSliku').css({
            'display': 'block'
        });
        
        $('#dodajVideo').css({
          'display': 'none'
      });
      $('#dodajThumb').css({
        'display': 'block'
    });
      });
      $('#videoButton').click(function() {
        $('#dodajSliku').css({
            'display': 'none'
        });
        $('#dodajThumb').css({
          'display': 'none'
      });
        $('#dodajVideo').css({
          'display': 'block'
      });
      });
});

//preloader
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("loader-wrapper").style.display = "none";
  document.getElementById("app").style.display = "grid";


}

$(document).ready(function(){
    $("form").on("submit", function(){
      $("#loader-wrapper").fadeIn();
    });//submit
  });//document ready