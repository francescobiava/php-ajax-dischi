$(document).ready(function () {
  
  getData();

});

// FUNCTIONS
function getData () {
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

function printCds(data) {

  var source = $('#cd-template').html();
  var template = Handlebars.compile(source);

  data.forEach(cd => {
    var html = template(cd);
    $('.container').append(html);
  });
}