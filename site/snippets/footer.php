  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><a href="/contact"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></a></p>

      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
      </p>
    
    </div>
  </footer>
  <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous"></script>
  <script>
  function addCommas(nStr) {
      nStr += '';
      var x = nStr.split('.');
      var x1 = x[0];
      var x2 = x.length > 1 ? '.' + x[1] : '';
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + '`' + '$2');
      }
      return x1 + x2;
  }    
  $( document ).ready(function() {
      
      $('.shopitem').change(function(){
        var total = 0;
        $('.shopitem').each(function(){
          if( $(this).val() > 0 ){
            total = total + ( $(this).data('price') *  $(this).val() );
          }
        });
        $('#shop-total').text( addCommas(total) + ' chf');
      });
  });
  </script>
</body>
</html>