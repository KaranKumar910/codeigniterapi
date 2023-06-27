<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://pixabay.com/api/docs/jQueryPixabay.min.js"></script>
</head>
<body>
  <div>
    <input type="text" id="pixabay-search" placeholder="Search images">
    <button id="pixabay-search-btn">Search</button>
  </div>
  <div id="pixabay-results"></div>

  <script>
    $(document).ready(function() {
      var apiKey = '37878513-126536f38352b57cd380dc05f'; // Replace with your Pixabay API key

      // Handle Pixabay search button click
      $('#pixabay-search-btn').click(function() {
        var query = $('#pixabay-search').val();

        // Make a request to the Pixabay API
        $.ajax({
          url: 'https://pixabay.com/api/',
          method: 'GET',
          dataType: 'jsonp',
          data: {
            key: apiKey,
            q: query
          },
          success: function(response) {
            // Process the response and display the image results
            if (response.hits.length > 0) {
              var resultsHtml = '';

              $.each(response.hits, function(index, image) {
                resultsHtml += '<img src="' + image.webformatURL + '" alt="' + image.tags + '">';
              });

              $('#pixabay-results').html(resultsHtml);
            } else {
              $('#pixabay-results').html('No images found.');
            }
          },
          error: function() {
            $('#pixabay-results').html('Error occurred while fetching images.');
          }
        });
         });
    });
  </script>
</body>
</html>