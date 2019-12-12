$(document).ready(function () {
  
  getCds();
  $('#search-button').on('click', searchButton);

});

// FUNCTIONS
function getCds () {
  $.ajax({
    url: 'getAllCds.php',
    method: 'GET',
    success: function (data) {
      printCds(data);
    },
    error: function (error) {
      alert('error ', error);
    }
  });
}

function searchButton() {
  var input = $('#search-input').val();
  getCdsByArtist(input);
}

function getCdsByArtist (artist) {
  $.ajax({
    url: 'getCdsByArtist.php',
    data: {
      artist: artist
    },
    method: 'GET',
    success: function (data) {
      printCds(data);
    },
    error: function (error) {
      alert('error ', error);
    }
  });
}

function printCds(data) {

  var target = $('.container');
  target.html('');
  var source = $('#cd-template').html();
  var template = Handlebars.compile(source);

  data.forEach(cd => {
    var html = template(cd);
    target.append(html);
  });
}