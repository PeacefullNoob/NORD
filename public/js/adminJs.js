
  $( document ).ready(function() {
    $('#dodajVideo').css({
        'display': 'none'
    });
    $('#dodajSliku').css({
        'display': 'none'
    });
    $('#photoButton').click(function() {
        $('#dodajSliku').css({
            'display': 'block'
        });
        
        $('#dodajVideo').css({
          'display': 'none'
      });
      });
      $('#videoButton').click(function() {
        $('#dodajSliku').css({
            'display': 'none'
        });
        $('#dodajVideo').css({
          'display': 'block'
      });
      });
});