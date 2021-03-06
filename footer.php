<footer class="footer">
  <div class="container">
  <div class="columns content-section">
    <div class="column is-3">
      <h6 class="sub-heading is-size-5 footer-title"><strong>Teq</strong></h6>
      <p>7 Norden Lane<br />Huntington Station, NY 11746</p>
      <p class="footer-title"><strong>877.455.9369</strong><br /><a href="https://www.teq.com">teq.com</a></p>
      <h6 class="sub-heading is-size-5"><strong>OTIS for educators</strong></h6>
      <p class="footer-title"><a href="https://otis.teq.com">otis.teq.com</a></p>
    </div>
    <div class="column is-4">
      <h6 class="sub-heading is-size-5 margin-bottom"><strong>Teq Talk</strong></h6>
      <?php
          $feeds = array( "https://www.teq.com/category/news/feed");
          $entries = array();
          foreach($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            $entries = array_merge($entries, $xml -> xpath("//item"));
          }

          usort($entries, function ($feed1, $feed2) {
            return strtotime($feed2 -> pubDate) - strtotime($feed1 -> pubDate);
          });

          foreach($entries as $entry) :
            if($i >= 2) { break; } else {
        ?>
        <div class="columns">
          <div class="column is-4">
            <a href="<?= $entry->link ?>"><img class="width-full dropshadow" src="<?= $entry -> image ?>" /></a>
          </div>
          <div class="column">
            <h6><a  href="<?= $entry -> link ?>"><u><strong><?= $entry -> title ?></strong></u></a></h6>
            <p class="is-size-7"><?= strftime('%B %d, %Y', strtotime($entry -> pubDate)) ?></p>
          </div>
        </div>

    <?php $i++; } endforeach; ?>

    </div>
    <div class="column is-3">
      <h5 class="sub-heading is-size-5 margin-bottom"><strong>Stay Connected</strong></h5>
      <svg version="1.1" viewBox="0 0 396 100">
        <a href="https://www.facebook.com/myTeq/">
          <path d="M30.629,2.383c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982
            	c15.454,0,27.982-12.525,27.982-27.982C58.61,14.912,46.083,2.383,30.629,2.383z M36.623,30.375h-3.921c0,6.264,0,13.98,0,13.98
            	h-5.81c0,0,0-7.637,0-13.98h-2.763v-4.939h2.763v-3.197c0-2.289,1.086-5.865,5.863-5.865l4.304,0.017v4.796c0,0-2.616,0-3.124,0
            	c-0.509,0-1.233,0.253-1.233,1.346v2.903h4.43L36.623,30.375z"/>
        </a>
        <a href="https://twitter.com/OTIS4educators">
          <path d="M114.232,2.383c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982
            	c15.453,0,27.982-12.525,27.982-27.982C142.214,14.912,129.685,2.383,114.232,2.383z M125.359,24.661
            	c0.012,0.246,0.017,0.492,0.017,0.741c0,7.586-5.774,16.334-16.334,16.334c-3.243,0-6.259-0.95-8.801-2.579
            	c0.451,0.051,0.907,0.079,1.37,0.079c2.692,0,5.165-0.915,7.129-2.456c-2.511-0.048-4.632-1.708-5.361-3.986
            	c0.35,0.065,0.709,0.102,1.079,0.102c0.524,0,1.032-0.072,1.512-0.201c-2.623-0.53-4.604-2.849-4.604-5.629c0-0.024,0-0.048,0-0.072
            	c0.775,0.43,1.66,0.687,2.601,0.717c-1.541-1.028-2.553-2.787-2.553-4.779c0-1.052,0.284-2.039,0.777-2.886
            	c2.83,3.474,7.062,5.759,11.832,5.998c-0.097-0.42-0.149-0.857-0.149-1.308c0-3.17,2.57-5.738,5.742-5.738
            	c1.65,0,3.143,0.697,4.189,1.81c1.307-0.256,2.536-0.734,3.646-1.394c-0.43,1.342-1.339,2.466-2.524,3.177
            	c1.161-0.137,2.268-0.447,3.296-0.902C127.454,22.84,126.481,23.851,125.359,24.661z"/>
        </a>
        <a href="https://www.linkedin.com/company/teq/">
          <path d="M199.512,28.309v-0.058c-0.01,0.02-0.026,0.041-0.039,0.058H199.512z"/>
          <path d="M197.835,2.383c-15.454,0-27.982,12.529-27.982,27.982c0,15.456,12.527,27.982,27.982,27.982
            		c15.453,0,27.982-12.525,27.982-27.982C225.817,14.912,213.288,2.383,197.835,2.383z M190.198,43.738h-6V25.696h6V43.738z
            		 M187.197,23.23h-0.039c-2.012,0-3.313-1.387-3.313-3.119c0-1.769,1.342-3.119,3.392-3.119c2.053,0,3.317,1.349,3.354,3.119
            		C190.59,21.843,189.289,23.23,187.197,23.23z M211.826,43.738h-5.998v-9.653c0-2.425-0.868-4.082-3.04-4.082
            		c-1.655,0-2.644,1.12-3.077,2.196c-0.159,0.386-0.198,0.919-0.198,1.462v10.076h-5.996c0,0,0.077-16.351,0-18.042h5.996v2.555
            		c0.799-1.233,2.224-2.979,5.407-2.979c3.945,0,6.907,2.576,6.907,8.119V43.738z"/>
        </a>
        <a href="https://www.youtube.com/channel/UCD_OKAjPLDEJbkgq3IYXdlg">
          <path d="M281.195,26.102c0.217,0,0.388-0.058,0.514-0.178c0.128-0.12,0.193-0.287,0.193-0.495V21.18
            		c0-0.171-0.065-0.307-0.195-0.413c-0.13-0.106-0.301-0.157-0.512-0.157c-0.193,0-0.352,0.051-0.475,0.157
            		c-0.119,0.106-0.181,0.242-0.181,0.413v4.249c0,0.215,0.058,0.379,0.171,0.495C280.823,26.048,280.985,26.102,281.195,26.102z"/>
          <path d="M284.713,33.952c-0.22,0-0.437,0.055-0.654,0.167c-0.212,0.113-0.415,0.28-0.606,0.492V31.52h-1.431v9.602h1.431v-0.543
            		c0.185,0.219,0.389,0.376,0.606,0.478c0.215,0.106,0.461,0.154,0.739,0.154c0.418,0,0.741-0.13,0.962-0.4
            		c0.224-0.27,0.333-0.652,0.333-1.151v-3.931c0-0.581-0.116-1.021-0.354-1.325C285.504,34.102,285.163,33.952,284.713,33.952z
            		 M284.635,39.461c0,0.229-0.041,0.389-0.121,0.488c-0.082,0.102-0.208,0.154-0.383,0.154c-0.119,0-0.232-0.027-0.342-0.079
            		c-0.109-0.048-0.222-0.137-0.337-0.249v-4.413c0.097-0.099,0.193-0.171,0.292-0.219c0.099-0.044,0.2-0.068,0.301-0.068
            		c0.19,0,0.338,0.062,0.441,0.185c0.101,0.123,0.149,0.304,0.149,0.547V39.461z"/>
          <polygon points="271.397,32.917 273.047,32.917 273.047,41.121 274.642,41.121 274.642,32.917 276.294,32.917 276.294,31.52
            		271.397,31.52 	"/>
          <path d="M279.542,39.417c-0.133,0.154-0.278,0.28-0.439,0.383c-0.159,0.099-0.292,0.147-0.395,0.147
            		c-0.132,0-0.229-0.034-0.29-0.113c-0.056-0.075-0.087-0.195-0.087-0.362v-5.434h-1.416v5.923c0,0.424,0.084,0.734,0.248,0.946
            		c0.167,0.215,0.412,0.318,0.741,0.318c0.265,0,0.54-0.072,0.821-0.225c0.283-0.15,0.555-0.369,0.816-0.656v0.779h1.416v-7.084
            		h-1.416V39.417z"/>
          <path d="M281.443,2.383c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982
            		c15.454,0,27.982-12.525,27.982-27.982C309.424,14.912,296.897,2.383,281.443,2.383z M284.818,19.455h1.592v5.981
            		c0,0.185,0.038,0.318,0.102,0.4c0.065,0.085,0.176,0.126,0.325,0.126c0.116,0,0.266-0.055,0.446-0.164
            		c0.177-0.113,0.342-0.249,0.49-0.42v-5.923h1.595v7.801h-1.595v-0.864c-0.292,0.318-0.598,0.563-0.917,0.728
            		c-0.318,0.164-0.625,0.253-0.924,0.253c-0.371,0-0.645-0.119-0.833-0.355c-0.186-0.229-0.28-0.577-0.28-1.042V19.455z
            		 M278.9,21.238c0-0.605,0.215-1.086,0.642-1.441c0.429-0.359,1.008-0.536,1.732-0.536c0.659,0,1.199,0.188,1.623,0.564
            		c0.418,0.376,0.628,0.868,0.628,1.459v4.031c0,0.669-0.205,1.189-0.616,1.571c-0.415,0.379-0.984,0.57-1.708,0.57
            		c-0.697,0-1.255-0.198-1.674-0.591c-0.417-0.393-0.627-0.919-0.627-1.581V21.238z M274.558,16.682l1.165,4.229h0.113l1.112-4.229
            		h1.822l-2.089,6.189v4.386h-1.793v-4.191l-2.137-6.384H274.558z M295.434,38.939c0,2.821-2.29,5.113-5.112,5.113h-17.76
            		c-2.823,0-5.11-2.292-5.11-5.113V34.83c0-2.821,2.287-5.113,5.11-5.113h17.76c2.821,0,5.112,2.292,5.112,5.113V38.939z"/>
          <path d="M288.986,33.863c-0.634,0-1.148,0.191-1.549,0.577c-0.401,0.386-0.601,0.892-0.601,1.503v3.18
            		c0,0.683,0.185,1.219,0.547,1.605c0.364,0.393,0.864,0.584,1.498,0.584c0.705,0,1.237-0.181,1.588-0.547
            		c0.359-0.369,0.535-0.915,0.535-1.643v-0.362h-1.457v0.321c0,0.417-0.05,0.687-0.14,0.81c-0.094,0.123-0.258,0.185-0.493,0.185
            		c-0.225,0-0.386-0.072-0.48-0.215c-0.092-0.147-0.138-0.406-0.138-0.779V37.75h2.709v-1.807c0-0.673-0.174-1.185-0.523-1.544
            		C290.134,34.04,289.635,33.863,288.986,33.863z M289.547,36.647h-1.252v-0.714c0-0.297,0.048-0.512,0.147-0.635
            		c0.099-0.133,0.26-0.198,0.485-0.198c0.215,0,0.376,0.065,0.471,0.198c0.097,0.123,0.149,0.338,0.149,0.635V36.647z"/>
        </a>
        <a href="https://www.instagram.com/edteq/">
          <path d="M372.875,18.663c-3.818-0.005-7.637-0.004-11.455,0.001c-0.913,0.001-1.834-0.04-2.737,0.061
            		c-2.506,0.28-4.301,2.314-4.304,4.819c-0.007,4.55-0.008,9.101,0.001,13.651c0.005,2.715,2.168,4.868,4.887,4.872
            		c4.529,0.006,9.059,0.006,13.588,0c2.778-0.004,4.917-2.147,4.925-4.927c0.006-2.255,0.001-4.51,0.001-6.765
            		c0-2.265,0.004-4.53-0.001-6.795C377.773,20.824,375.624,18.667,372.875,18.663z M365.94,37.205
            		c-3.603-0.051-6.686-3.132-6.688-6.802c-0.002-3.807,3.029-6.855,6.826-6.865c3.668-0.032,6.723,2.996,6.83,6.621
            		C373.024,34.064,369.762,37.259,365.94,37.205z M373.828,24.513c-1.042-0.005-1.908-0.903-1.9-1.969
            		c0.008-1.085,0.896-1.942,2.001-1.931c1.048,0.011,1.905,0.9,1.898,1.97C375.82,23.672,374.943,24.518,373.828,24.513z"/>
          <path d="M366.105,25.488c-2.685-0.013-4.898,2.184-4.903,4.865c-0.005,2.675,2.179,4.876,4.849,4.888
            		c2.684,0.012,4.898-2.184,4.903-4.865C370.959,27.703,368.775,25.501,366.105,25.488z"/>
          <path d="M365.038,2.383c-15.453,0-27.982,12.529-27.982,27.982c0,15.456,12.529,27.982,27.982,27.982
            		c15.454,0,27.982-12.525,27.982-27.982C393.02,14.912,380.493,2.383,365.038,2.383z M379.727,30.378
            		c0,2.336,0.008,4.672-0.002,7.008c-0.014,3.082-2.441,5.996-5.486,6.487c-1.033,0.166-2.102,0.137-3.155,0.141
            		c-3.96,0.014-7.921,0-11.881,0.006c-3.188,0.005-6.076-2.353-6.635-5.499c-0.144-0.811-0.133-1.656-0.135-2.486
            		c-0.012-4.185-0.007-8.369-0.003-12.554c0.004-3.225,2.358-6.085,5.533-6.63c0.921-0.158,1.879-0.131,2.82-0.134
            		c4.021-0.013,8.043-0.002,12.064-0.006c3.379-0.004,6.255,2.394,6.79,5.722c0.114,0.705,0.084,1.437,0.088,2.156
            		c0.011,1.93,0.004,3.86,0.004,5.789C379.728,30.378,379.728,30.378,379.727,30.378z"/>
        </a>
      </svg>
    </div>
  </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../assets/js/app.js" type="text/javascript"></script>

  </body>
</html>
