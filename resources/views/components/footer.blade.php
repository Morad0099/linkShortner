<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-8slVfjLcZllpVl1woYMYepHrt7nzmPrjP9X7jhQ2hWtBX8gjsm5m5vyVGq92qSe+" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Custom JS -->
  <script>
    $(function() {
      $('form').on('submit', function(e) {
        e.preventDefault();
        var longUrl = $('#urlInput').val();
        $.ajax({
          url: '{{ route('shorten') }}', // Use the named route here
          method: 'GET',
          data: { 'original_url': longUrl }, // Pass the longUrl as data
          success: function(response) {
            console.log(response);
            var shortUrl = response.short_url;
            $('#shortUrlResult').html('<p><strong>Your shortened URL is</strong>: <a target="_blank" href="' + shortUrl + '">' + shortUrl + '</a></p>');
          },
          error: function() {
            $('#shortUrlResult').html('<p>There was an error shortening your URL. Please try again.</p>');
          }
          // console.log(response);
        });
      });
    });
</script>

</body>

</html>