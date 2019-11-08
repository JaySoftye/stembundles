<aside class="offcanvas quote light dropshadow">
  <a class="close"></a>
  <img class="width-full" src="../assets/images/stem-bundles-price-quote.jpg" />
  <p class="sub-heading is-size-4 thin margin-bottom">Looking for a <strong>price quote</strong>? Use the form below and a team member will reach out with an estimate.</p>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#back-button").click(function() {
        $(".bundle-content").empty();
        $(".bundle-menu-container").fadeIn('slow').show();
        $("html, body").animate({ scrollTop: 0 }, 'slow');
          return false;
      });

      $("#quote-button, aside.offcanvas.quote a.close").click(function(){
        $('aside.offcanvas.quote').animate({opacity: 'toggle'});
      });

      hbspt.forms.create({
        portalId: "182596",
        formId: "9d603230-25b8-4636-9a2d-573bd0343a1e"
      });

      $(".menu.bundle-product-menu ul.menu-list li").click(function() {
        var $product  = $(this).attr('data-target');
          $(this).toggleClass('selected').siblings().removeClass('selected');
          $(".tab-content .tab." + $product).addClass('active').siblings().removeClass('active');
      });

      $(".tab-content .tab-controller .arrow.left").click(function() {
        if ($(".tab-content div.tab:first-child").hasClass('active')) {
          $(".tab-content").find('div.tab:last-child').addClass('active').siblings().removeClass('active');
          $("ul.menu-list").find('li:last-child').addClass('selected').siblings().removeClass('selected');
        } else {
          $(".tab-content").find('div.tab.active').prev().addClass('active').siblings().removeClass('active');
          $("ul.menu-list").find('li.selected').prev().addClass('selected').siblings().removeClass('selected');
        }
      });

      $(".tab-content .tab-controller .arrow.right").click(function() {
        if ($(".tab-content div.tab:last-child").hasClass('active')) {
          $(".tab-content").find('div.tab:first-child').addClass('active').siblings().removeClass('active');
          $("ul.menu-list").find('li:first-child').addClass('selected').siblings().removeClass('selected');
        } else {
          $(".tab-content").find('div.tab.active').next().addClass('active').siblings().removeClass('active');
          $("ul.menu-list").find('li.selected').next().addClass('selected').siblings().removeClass('selected');
        }
      });

    });
  </script>
</aside>
<section class="container-fluid product-bundles-nav">
  <div class="columns">
    <div id="back-button" class="column is-1 back">
      <svg version="1.1" viewBox="0 0 50 50">
        <g class="product-button-hover">
        <path class="st0" d="M24.951,6.859C14.931,6.859,6.81,14.98,6.81,25c0,10.019,8.122,18.141,18.141,18.141S43.092,35.019,43.092,25
          C43.092,14.98,34.97,6.859,24.951,6.859z"/>
        <path d="M23.775,34.988c-0.061,0.067-0.091,0.157-0.091,0.27c0,0.176,0.069,0.264,0.207,0.264c0.069,0,0.127-0.014,0.176-0.042
          c0.048-0.028,0.084-0.061,0.108-0.099v-0.494h-0.149C23.919,34.887,23.836,34.92,23.775,34.988z"/>
        <path d="M24.951,6.859C14.931,6.859,6.81,14.981,6.81,25c0,10.02,8.122,18.141,18.141,18.141S43.092,35.019,43.092,25
          S34.97,6.859,24.951,6.859z M22.48,35.728c-0.171,0.158-0.418,0.237-0.741,0.237h-1.059v-3.199h0.989
          c0.334,0,0.588,0.075,0.761,0.223c0.174,0.149,0.26,0.367,0.26,0.654c0,0.163-0.036,0.302-0.108,0.42
          c-0.072,0.117-0.17,0.203-0.294,0.257c0.144,0.041,0.254,0.124,0.332,0.247c0.078,0.124,0.116,0.277,0.116,0.458
          C22.736,35.336,22.65,35.57,22.48,35.728z M24.883,35.965h-0.626c-0.018-0.037-0.035-0.098-0.053-0.185
          c-0.111,0.152-0.262,0.228-0.453,0.228c-0.199,0-0.364-0.066-0.495-0.198c-0.131-0.132-0.197-0.302-0.197-0.512
          c0-0.249,0.079-0.442,0.238-0.578c0.159-0.136,0.388-0.206,0.687-0.209h0.189v-0.191c0-0.107-0.018-0.182-0.055-0.226
          s-0.09-0.066-0.16-0.066c-0.155,0-0.233,0.091-0.233,0.272h-0.622c0-0.22,0.082-0.401,0.247-0.544
          c0.165-0.142,0.373-0.214,0.625-0.214c0.261,0,0.462,0.068,0.605,0.204c0.143,0.135,0.214,0.329,0.214,0.581v1.118
          c0.003,0.205,0.032,0.365,0.088,0.481V35.965z M25.779,35.27c0.019,0.078,0.051,0.134,0.094,0.17
          c0.044,0.036,0.106,0.053,0.187,0.053c0.18,0,0.272-0.117,0.275-0.352h0.584c-0.003,0.259-0.083,0.469-0.239,0.628
          c-0.157,0.16-0.359,0.239-0.606,0.239c-0.306,0-0.54-0.095-0.701-0.286c-0.161-0.19-0.243-0.471-0.246-0.841v-0.189
          c0-0.373,0.08-0.658,0.238-0.855c0.16-0.196,0.394-0.294,0.705-0.294c0.262,0,0.469,0.081,0.62,0.243
          c0.151,0.162,0.228,0.391,0.231,0.688h-0.584c-0.001-0.133-0.023-0.236-0.066-0.308s-0.113-0.108-0.211-0.108
          c-0.108,0-0.186,0.039-0.233,0.115c-0.047,0.078-0.072,0.226-0.075,0.447v0.242C25.75,35.058,25.76,35.194,25.779,35.27z
           M28.45,35.965l-0.435-0.916l-0.167,0.187v0.729h-0.622v-3.375h0.622v1.824l0.077-0.114l0.431-0.712h0.74l-0.69,0.98l0.756,1.397
          H28.45z M33.742,25.354c-0.023,0.052-0.052,0.101-0.068,0.155c-0.329,1.09-1.141,1.697-2.287,1.698
          c-2.035,0.002-4.07,0.001-6.105,0.001c-0.136,0-0.273,0-0.467,0c0,0.352,0.008,0.69-0.002,1.027
          c-0.013,0.398,0.004,0.805-0.075,1.192c-0.129,0.637-0.624,0.864-1.221,0.598c-0.196-0.087-0.38-0.21-0.55-0.343
          c-2.004-1.575-4.005-3.153-6.004-4.734c-1.069-0.846-1.069-2.048-0.001-2.894c2.007-1.589,4.018-3.174,6.032-4.755
          c0.178-0.139,0.376-0.266,0.585-0.35c0.552-0.22,1.04,0.008,1.15,0.592c0.089,0.477,0.066,0.976,0.085,1.465
          c0.01,0.248,0.001,0.498,0.001,0.787c0.166,0,0.299,0,0.433,0c2.012,0,4.024,0,6.036,0c1.275,0,2.01,0.54,2.407,1.765
          c0.011,0.031,0.034,0.059,0.052,0.089C33.742,22.883,33.742,24.118,33.742,25.354z"/>
        <path d="M21.78,34.575h-0.455v0.855h0.413c0.116,0,0.204-0.036,0.264-0.108c0.06-0.072,0.09-0.174,0.09-0.305
          C22.092,34.729,21.988,34.582,21.78,34.575z"/>
        <path d="M22.042,33.711c0-0.145-0.029-0.249-0.088-0.312c-0.059-0.063-0.154-0.094-0.286-0.094h-0.343v0.8h0.336
          C21.915,34.105,22.042,33.973,22.042,33.711z"/>
        </g>
      </svg>
    </div>
    <div id="quote-button" class="column is-1 quote view-aside">
      <svg version="1.1" viewBox="0 0 50 50">
        <g class="product-button-hover">
        <path class="st0" d="M25,6.859C14.98,6.859,6.859,14.98,6.859,25c0,10.019,8.122,18.141,18.141,18.141S43.141,35.019,43.141,25
          C43.141,14.98,35.019,6.859,25,6.859z"/>
        <path d="M26.53,24.337c-0.349,0.009-0.698,0.042-1.047,0.065c-0.134,0.009-0.268,0.018-0.402,0.005
          c-0.633-0.063-1.144-0.729-0.778-1.398c0.252-0.46,0.813-0.614,1.257-0.337c0.131,0.082,0.221,0.2,0.31,0.321
          c0.078,0.105,0.148,0.218,0.261,0.291c0.191,0.124,0.478,0.092,0.673-0.073c0.197-0.166,0.262-0.438,0.159-0.672
          c-0.049-0.11-0.118-0.207-0.2-0.293c-0.469-0.495-1.054-0.68-1.723-0.632c-0.084,0.006-0.182,0.052-0.246,0.022
          c-0.065-0.031-0.066-0.147-0.102-0.222c-0.003-0.006-0.006-0.011-0.008-0.016c-0.09-0.176-0.287-0.251-0.469-0.179
          c-0.181,0.071-0.276,0.264-0.221,0.452c0.017,0.057,0.037,0.114,0.063,0.167c0.03,0.06,0.016,0.088-0.042,0.124
          c-0.445,0.275-0.74,0.673-0.887,1.168c-0.305,1.027,0.383,2.138,1.431,2.341c0.449,0.087,0.9,0.071,1.353,0.037
          c0.224-0.017,0.447-0.042,0.672,0.003c0.245,0.049,0.459,0.144,0.582,0.38c0.141,0.27,0.169,0.542,0.034,0.827
          c-0.289,0.607-1.113,0.82-1.656,0.422c-0.165-0.121-0.296-0.276-0.44-0.419c-0.078-0.077-0.169-0.13-0.28-0.138
          c-0.239-0.02-0.44,0.059-0.578,0.258c-0.142,0.205-0.14,0.423-0.016,0.637c0.156,0.268,0.395,0.446,0.657,0.598
          c0.43,0.25,0.892,0.285,1.371,0.203c0.08-0.013,0.173-0.059,0.236-0.034c0.066,0.027,0.064,0.14,0.099,0.213
          c0.008,0.017,0.016,0.034,0.026,0.05c0.096,0.157,0.289,0.22,0.458,0.15c0.173-0.071,0.266-0.246,0.223-0.427
          c-0.015-0.061-0.036-0.12-0.063-0.176c-0.03-0.062-0.02-0.093,0.044-0.128c0.426-0.236,0.763-0.56,0.971-1.008
          c0.301-0.666,0.106-1.613-0.446-2.129C27.447,24.456,27.009,24.325,26.53,24.337z"/>
        <path d="M22.549,34.805c-0.061,0.067-0.091,0.157-0.091,0.27c0,0.176,0.069,0.264,0.207,0.264c0.069,0,0.127-0.014,0.176-0.042
          c0.048-0.028,0.084-0.061,0.108-0.099v-0.494h-0.149C22.693,34.703,22.609,34.737,22.549,34.805z"/>
        <path d="M26.092,33.08c-0.171,0-0.298,0.068-0.38,0.204c-0.082,0.135-0.125,0.341-0.127,0.618v0.529
          c0,0.293,0.042,0.509,0.126,0.648c0.084,0.139,0.213,0.209,0.386,0.209c0.168,0,0.294-0.07,0.377-0.207
          c0.082-0.139,0.124-0.35,0.126-0.634v-0.512c0-0.291-0.042-0.507-0.125-0.646C26.39,33.149,26.263,33.08,26.092,33.08z"/>
        <path d="M34.23,33.877c-0.108,0-0.187,0.039-0.237,0.116c-0.049,0.078-0.078,0.202-0.086,0.373h0.622V34.31
          c-0.003-0.142-0.026-0.25-0.07-0.323S34.339,33.877,34.23,33.877z"/>
        <path d="M18.357,33.877c-0.108,0-0.187,0.039-0.237,0.116c-0.049,0.078-0.078,0.202-0.086,0.373h0.622V34.31
          c-0.003-0.142-0.026-0.25-0.07-0.323C18.542,33.914,18.466,33.877,18.357,33.877z"/>
        <path d="M25,6.859C14.98,6.859,6.859,14.98,6.859,25c0,10.019,8.122,18.141,18.141,18.141c10.019,0,18.141-8.122,18.141-18.141
          C43.141,14.98,35.019,6.859,25,6.859z M29.488,19.354c1.421,2.075,2.842,4.15,4.263,6.224c0.427,0.624,0.286,1.393-0.336,1.82
          c-0.379,0.26-0.758,0.519-1.136,0.779c-0.02,0.014-0.041,0.026-0.073,0.047c0.036-0.124,0.075-0.234,0.1-0.347
          c0.072-0.324,0.024-0.641-0.076-0.951c-0.166-0.516-0.378-1.015-0.572-1.52c-0.669-1.738-1.343-3.474-2.012-5.211
          c-0.17-0.441-0.331-0.885-0.497-1.333C29.263,19.027,29.376,19.191,29.488,19.354z M18.737,14.781
          c0.017-0.062,0.054-0.119,0.047-0.188c0.084-0.189,0.169-0.377,0.253-0.566c0.104-0.128,0.176-0.277,0.279-0.406
          c0.928-1.147,2.125-1.596,3.565-1.307c1.486,0.298,2.586,1.552,2.747,3.062c0.025,0.229-0.127,0.434-0.343,0.463
          c-0.24,0.032-0.442-0.118-0.47-0.363c-0.072-0.625-0.322-1.163-0.757-1.618c-0.837-0.876-2.211-1.072-3.27-0.463
          c-0.461,0.265-0.813,0.635-1.063,1.106c-0.633,1.191-0.265,2.705,0.866,3.475c1.04,0.708,2.39,0.626,3.329-0.211
          c0.066-0.059,0.096-0.048,0.145,0.011c0.157,0.189,0.245,0.404,0.276,0.646c0.006,0.047-0.011,0.074-0.047,0.101
          c-0.893,0.673-1.89,0.902-2.977,0.65c-1.048-0.243-1.83-0.858-2.325-1.814C18.57,16.538,18.492,15.674,18.737,14.781z
           M15.639,35.091c0.087,0.133,0.231,0.199,0.43,0.199c0.127,0,0.231-0.026,0.31-0.077l0.057-0.04v-0.587h-0.453v-0.488h1.101v1.32
          c-0.124,0.135-0.278,0.237-0.458,0.304c-0.182,0.069-0.379,0.103-0.595,0.103c-0.368,0-0.653-0.114-0.857-0.341
          c-0.204-0.228-0.308-0.56-0.314-0.995v-0.576c0-0.441,0.096-0.78,0.289-1.018c0.192-0.238,0.473-0.357,0.842-0.357
          c0.347,0,0.609,0.086,0.785,0.257s0.279,0.44,0.307,0.806h-0.628c-0.018-0.204-0.06-0.342-0.127-0.416s-0.173-0.111-0.316-0.111
          c-0.174,0-0.301,0.064-0.38,0.191c-0.079,0.127-0.12,0.33-0.123,0.609v0.58C15.508,34.747,15.552,34.959,15.639,35.091z
           M19.267,34.8H18.03c0.009,0.176,0.048,0.305,0.116,0.387c0.069,0.081,0.175,0.122,0.319,0.122c0.208,0,0.382-0.071,0.521-0.213
          l0.244,0.376c-0.076,0.105-0.187,0.191-0.332,0.256c-0.145,0.065-0.302,0.098-0.472,0.098c-0.319,0-0.568-0.095-0.747-0.286
          s-0.268-0.463-0.268-0.817v-0.189c0-0.375,0.082-0.664,0.246-0.868s0.399-0.305,0.705-0.305c0.299,0,0.524,0.095,0.674,0.286
          c0.151,0.191,0.228,0.473,0.231,0.848V34.8z M20.625,35.767c-0.105,0.04-0.22,0.059-0.343,0.059c-0.401,0-0.604-0.23-0.609-0.691
          v-1.265h-0.275v-0.466h0.275v-0.584h0.622v0.584h0.319v0.466h-0.319v1.181c0,0.094,0.012,0.159,0.038,0.194
          c0.026,0.035,0.075,0.053,0.149,0.053c0.06,0,0.109-0.005,0.147-0.015L20.625,35.767z M23.657,35.782h-0.626
          c-0.018-0.037-0.035-0.098-0.053-0.185c-0.111,0.152-0.262,0.228-0.453,0.228c-0.199,0-0.365-0.066-0.496-0.198
          c-0.131-0.132-0.196-0.302-0.196-0.512c0-0.249,0.079-0.442,0.239-0.578c0.158-0.136,0.387-0.206,0.686-0.209h0.189v-0.191
          c0-0.107-0.018-0.182-0.055-0.226s-0.09-0.066-0.16-0.066c-0.155,0-0.233,0.091-0.233,0.272h-0.622c0-0.22,0.082-0.401,0.248-0.544
          c0.164-0.142,0.373-0.214,0.625-0.214c0.261,0,0.462,0.068,0.606,0.204c0.142,0.135,0.214,0.329,0.214,0.581v1.118
          c0.003,0.205,0.032,0.365,0.088,0.481V35.782z M23.952,31.28c-0.015-0.003-0.029-0.013-0.044,0
          c-0.146-0.066-0.292-0.131-0.437-0.197c-0.23-0.169-0.429-0.367-0.538-0.635c-0.161-0.397-0.311-0.799-0.464-1.2
          c-0.923-2.415-1.846-4.831-2.769-7.246c-0.14-0.366-0.277-0.732-0.42-1.096c-0.039-0.1-0.038-0.191,0.006-0.289
          c0.211-0.468,0.421-0.936,0.627-1.407c0.03-0.068,0.051-0.07,0.111-0.033c0.643,0.397,1.339,0.61,2.099,0.598
          c0.05-0.001,0.082,0.025,0.116,0.051c0.626,0.473,1.515,0.423,2.069-0.133c0.459-0.461,0.602-1.019,0.399-1.639
          c-0.204-0.62-0.652-0.991-1.295-1.079c-0.644-0.088-1.161,0.159-1.539,0.691c-0.021,0.03-0.042,0.062-0.06,0.095
          c-0.084,0.157-0.085,0.159-0.255,0.116c-0.292-0.073-0.559-0.198-0.8-0.38c-0.048-0.036-0.052-0.063-0.028-0.116
          c0.325-0.722,0.647-1.446,0.971-2.169c0.078-0.173,0.221-0.227,0.392-0.151c1.801,0.803,3.602,1.608,5.404,2.409
          c0.101,0.045,0.154,0.118,0.192,0.216c0.627,1.64,1.255,3.281,1.883,4.921c0.574,1.5,1.149,3,1.723,4.499
          c0.311,0.807-0.063,1.653-0.872,1.964c-1.858,0.714-3.718,1.425-5.577,2.138C24.554,31.322,24.257,31.35,23.952,31.28z
           M26.854,36.353l-0.589-0.538l-0.169,0.011c-0.362,0-0.645-0.122-0.849-0.368c-0.205-0.245-0.308-0.585-0.309-1.019v-0.501
          c0-0.439,0.102-0.782,0.305-1.029c0.204-0.247,0.486-0.371,0.848-0.371c0.353,0,0.632,0.119,0.837,0.356
          c0.205,0.237,0.311,0.57,0.319,1v0.536c0,0.529-0.143,0.913-0.428,1.153l0.442,0.395L26.854,36.353z M29.408,35.782h-0.584
          l-0.018-0.218c-0.129,0.174-0.302,0.261-0.518,0.261c-0.218,0-0.384-0.075-0.497-0.226c-0.113-0.149-0.169-0.368-0.169-0.655v-1.54
          h0.622v1.556c0.003,0.231,0.08,0.347,0.231,0.347c0.142,0,0.245-0.062,0.308-0.185v-1.718h0.626V35.782z M31.659,34.673
          c0,0.362-0.084,0.644-0.253,0.848c-0.168,0.204-0.404,0.305-0.707,0.305c-0.305,0-0.541-0.103-0.711-0.306
          c-0.168-0.205-0.253-0.488-0.253-0.852v-0.152c0-0.36,0.085-0.643,0.255-0.848c0.17-0.205,0.405-0.308,0.705-0.308
          c0.303,0,0.54,0.103,0.71,0.308s0.255,0.489,0.255,0.852V34.673z M33.053,35.767c-0.105,0.04-0.22,0.059-0.343,0.059
          c-0.401,0-0.604-0.23-0.609-0.691v-1.265h-0.275v-0.466h0.275v-0.584h0.622v0.584h0.319v0.466h-0.319v1.181
          c0,0.094,0.012,0.159,0.038,0.194s0.075,0.053,0.149,0.053c0.06,0,0.109-0.005,0.147-0.015L33.053,35.767z M35.14,34.8h-1.237
          c0.009,0.176,0.048,0.305,0.116,0.387c0.069,0.081,0.175,0.122,0.319,0.122c0.208,0,0.382-0.071,0.521-0.213l0.244,0.376
          c-0.076,0.105-0.187,0.191-0.332,0.256c-0.145,0.065-0.302,0.098-0.472,0.098c-0.319,0-0.568-0.095-0.747-0.286
          s-0.268-0.463-0.268-0.817v-0.189c0-0.375,0.082-0.664,0.246-0.868c0.164-0.204,0.399-0.305,0.705-0.305
          c0.299,0,0.524,0.095,0.674,0.286c0.151,0.191,0.228,0.473,0.231,0.848V34.8z"/>
        <path d="M30.694,33.877c-0.105,0-0.188,0.053-0.247,0.157c-0.06,0.105-0.089,0.265-0.089,0.482v0.156
          c0,0.425,0.114,0.637,0.341,0.637c0.209,0,0.322-0.177,0.338-0.532l0.002-0.261c0-0.217-0.03-0.377-0.09-0.482
          S30.804,33.877,30.694,33.877z"/>
        </g>
      </svg>
    </div>
  </div>
</section>
