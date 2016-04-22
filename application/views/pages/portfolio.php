<div class="m-t-60">
    <!-- BEGIN CONTENT SECTION -->
    <section class="bg-master-lightest p-b-85 p-t-75">
      <div class="container">

        <div class="m-b-30">
            <h1 class="text-center m-b-5">Portfolio</h1>
            <h4 class="text-center m-b-5">Below I've listed some projects that I've worked on as a student.</h4>
        </div>

      <?php
        foreach ($db->result() as $row)
        {
          echo '<div class="md-p-l-20 md-p-sr-20 xs-no-padding bg-master-lightest">';
            echo '<div class="row">';
              echo '<div class="col-sm-5 col-md-4">';
                if($row->Name){echo '<h2 class="m-t-5">' . $row->Name . '</h2>';}
                if($row->Date){echo '<p>Published: ' . $row->Date . '</p>';}
                if($row->Tags){
                  foreach (explode(" ",$row->Tags) as $tag){
                    echo '<kbd>' . $tag . '</kbd> ';
                  }
                }
              echo '</div>';
              echo '<div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">';
                echo '<div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">';
                  if($row->Description){echo '<p>' . $row->Description . '</p>';}
                  if($row->URL_SourceCode){echo '<p><a href="' . $row->URL_SourceCode . '" target="_blank" class="link text-black font-arial small-text"><i class="fa fa-github"></i> Source code</a></p>';}
                  if($row->URL_ProjectPage){echo '<p><a href="' . $row->URL_ProjectPage . '" target="_blank" class="link text-black font-arial small-text"><i class="fa fa-globe"></i> Project website</a></p>';}
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
          echo '<div class="b-b b-grey m-t-30"></div><br>';
        }
        echo '<h5 class="block-title hint-text no-margin">And counting...</h5>';
        echo '<h5>Most of the projects above are created during period as a student. I\'m always searching for new opportunities to expand my portfolio and IT-expertise.</h5>';
        echo '<br>'
      ?>

        
        
      </div>

    <!-- END CONTENT SECTION -->
    <!-- BEGIN PORTFOLIO SECTION -->

      <div class="gallery">
        <div class="grid-sizer col-sm-3 col-xs-6 no-padding"></div>
      <?php
      $i = 1;
      foreach ($db->result() as $row)
      {
        if ($row->Name and $row->Image){
          echo '<!-- START GALLERY ITEM -->';
          if ($i == 1 || $i % 6 == 0 || $i % 7 == 0){
            echo '<div class="gallery-item col-sm-6 col-xs-12 no-padding hover-zoom">';
          }
          else{
            echo '<div class="gallery-item col-sm-3 col-xs-6 no-padding hover-zoom">';
          }
            echo '<div class="inner bottom-left bottom-right padding-30">';
            echo '<h5 class="block-title text-white no-margin">' . $row->Name . '</h5>';
            echo '</div>';
          if ($i == 1 || $i % 6 == 0 || $i % 7 == 0){
            echo '<div class="ar-2-1">';
          }
          else{
            echo '<div class="ar-1-1">';
          }
          echo '<div data-pages-bg-image="' . $row->Image . '" data-bg-overlay="black" data-overlay-opacity="0.4"></a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<!-- END GALLERY ITEM -->';
          $i++;
        }
      }
      ?>

      </div>
    </section>
    <!-- END PORTFOLIO SECTION -->
    </div>