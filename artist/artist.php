<html>

<head>
  <title>Artist | Ostania Art Gallery</title>
  <meta charset="UTF-8" />
  <meta name="author" content="John Doe" />

  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/about.css" />
  <link rel="stylesheet" href="../css/artist.css" />
  <link rel="stylesheet" href="../css/filter.css" />
  <link rel="icon" type="image/ico" href="../images/favicon/favicon-32x32.png">
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../js/dynamic_menu.js"></script>
  <script src="../js/filter.js"></script>
</head>

<body>
  <div id="filter-box">
    <div id="first-row">
      <div>Categories Filter</div>
      <div></div>
    </div>
    <div class="filter-element">Cubanism</div>
    <div class="filter-element">Realism</div>
    <div class="filter-element">Surrealism</div>
    <div class="filter-element">Contemporary</div>
    <div class="filter-element">Spiritual</div>
    <div id="apply" onclick="ApplyFilter()">Apply</div>
  </div>

  <div id="blur-area"></div>

  <div id="header">
    <div id="bar-at-top"></div>

    <div id="menu">
      <h1><a href="../index.html">Ostania Art Gallery</a></h1>
      <ul>
        <li><a href="#">Artists</a></li>
        <li><a href="../artwork/artwork.html">Gallery</a></li>
        <li><a href="../about.html">About</a></li>
      </ul>
    </div>
    <div id="line"></div>
    <div id="breadcrumbs"></div>
  </div>

  <section id="color-section" style="background-color: rgb(164, 234, 164)">
    <h1>Artists</h1>
  </section>

  <div id="filter-bar">
    <button onclick="OpenFilterMenu()">Filters</button>
    <p>1 - 30 of 16,134 results</p>
  </div>


  <div>
    <div>
      <table>
        <tbody>
          <?php
          $con = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($con, 'ArtAndDesign');

          $results_per_page = 6;

          $sql = "SELECT * FROM Artist";
          $result = mysqli_query($con, $sql);
          $rows = mysqli_num_rows($result);

          $number_of_pages = ceil($rows / $results_per_page);

          if (!isset($_GET['page'])) {
            $page = 1;
          } else {
            $page = $_GET['page'];
          }

          $determined_limit = ($page - 1) * $results_per_page;
          $select_for_page = "SELECT * FROM Artist NATURAL JOIN Category LIMIT " . $determined_limit . ", " . $results_per_page;
          $result = mysqli_query($con, $select_for_page);

          while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<div class="artist_block">';
            echo '<h2>' . $row['category_name'] . '</h2>';
            echo '<h1><a href="#">' . $row['artist_name'] . '</a></h1>';
            echo '<h5>' . $row['artist_desc'] . '</h5>';
            echo '</div>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>

    <div id="page_links">
      <?php
      for ($page = 1; $page <= $number_of_pages; $page++) {
        echo '<a href="artist.php?page=' . $page . '">' . $page . '</a>';
      }
      ?>
    </div>
  </div>

  <div id="footer">
    <div>
      <ul>
        <li>
          <a>Artists</a>
        </li>
        <li>
          <a>Artwork</a>
        </li>
        <li>
          <a>About</a>
        </li>
      </ul>

      <div id="vertical"></div>

      <button id="totop">
        <- To Top</button>
          <script src="js/to_top.js"></script>

          <aside>
            <br />
            <form>
              <label id="footer_newsletter_heading">Get the Newsletter</label>
              <br />
              <div id="form_inputs">
                <input type="email" name="email" />
                <input type="button" name="subscribe" value=">" />
              </div>
            </form>

            <a href="mailto:farooqhaider561@gmail.com">Get in touch.</a>

            <div id="links">
              <a href="https://www.instagram.com/">
                <img src="../images/icons8-instagram-circle.svg" alt="insta_logo" width="30" height="30" />
              </a>
              <a href="https://www.facebook.com/">
                <img src="../images/icons8-facebook.svg" alt="insta_logo" width="30" height="30" />
              </a>
              <a href="https://www.twitter.com/">
                <img src="../images/icons8-twitter-circled.svg" alt="insta_logo" width="30" height="30" />
              </a>
            </div>
          </aside>
    </div>
  </div>

  <script src="../js/breadcrumbs.js"></script>
  <script src = "../js/color_bar_controller.js"></script>
</body>

</html>