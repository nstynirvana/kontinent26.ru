<?$APPLICATION->ShowHead();?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
<title><?$APPLICATION->ShowTitle()?> - Continent Hotel Stavropol</title>

<link href="/design/css/slick.css" rel="stylesheet" />
<link href="/design/js/fancybox/jquery.fancybox.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet" />
<link href="/design/css/style.css?v=23" rel="stylesheet" />

<script src="https://api-maps.yandex.ru/2.1/?apikey=60effeca-5cb2-411c-b375-a6cefaea1420&amp;lang=en_US" type="text/javascript"></script>

<script type="text/javascript" src="/design/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/design/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/design/js/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="/design/js/slick.min.js"></script>
<script type="text/javascript" src="/design/js/jquery.selectric.js"></script>
<script type="text/javascript" src="/design/js/fancybox/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="/design/js/pvashoot.js?v=4"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    var dateFormattext = "yy-mm-dd",
      from = $( ".from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2,
          dateFormat: dateFormattext
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( ".to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat: dateFormattext
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormattext, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
  
  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter26105076 = new Ya.Metrika({id:26105076,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26105076" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->