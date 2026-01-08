  <script src="{{ asset('js/intlTelInput/js/utils.js') }}"></script>
  <script src="{{ asset('js/intlTelInput/js/intlTelInput.min.js') }}"></script>

  <script>
      jQuery(function($) {
          (function($) {
              "use strict";
              $('#phone_number').intlTelInput({
                  "allowExtensions": true,
                  "nationalMode": false,
                  "initialCountry": "KE"
              });
          })(jQuery);
      });
  </script>



 
