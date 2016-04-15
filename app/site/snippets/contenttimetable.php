 <!-- content-timetable -->
    <div class="content-table">
      <div class="row content-table-headlines">
        <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
        <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
      </div>

      <div class="show-for-small-only text-center">
        <?php echo $content->flyer()->kirbytext() ?>
      </div>

      <div class="show-for-medium-up">
        <!-- table headlines -->
        <div class="row">
          <div class="table-headlines">
            <div class="medium-1 columns"><div>Semester</div></div>
            <div class="medium-3 columns"><div>10 ECTS</div></div>
            <div class="medium-2 columns"><div>5 ECTS</div></div>
            <div class="medium-2 columns"><div>5 ECTS</div></div>
            <div class="medium-2 columns"><div>5 ECTS</div></div>
            <div class="medium-2 columns"><div>5 ECTS</div></div>
          </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-primary">1</div></div>

          <div class="medium-3 columns no-padding-left">
            <div class="border-color-primary"><?php echo $content->semester11()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul11()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-4 columns">
            <div class="border-color-primary"><?php echo $content->semester12()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul12()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">  
            <div class="border-color-secondary"><?php echo $content->semester13()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul13()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester14()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul14()->kirbytextRaw() ?></span></div>
          </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-primary">2</div></div>

          <div class="medium-3 columns no-padding-left">
            <div class="border-color-primary"><?php echo $content->semester21()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul21()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-primary"><?php echo $content->semester22()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul22()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-choice choice"><?php echo $content->semester23()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul23()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester24()->kirbytextRaw() ?><br /> 
            <span class="text-muted"><?php echo $content->modul24()->kirbytextRaw() ?></span></div>
          </div>          
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester25()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul25()->kirbytextRaw() ?></span></div>
          </div>
        </div>


        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-primary">3</div></div>
          <div class="medium-3 columns no-padding-left">
            <div class="border-color-primary"><?php echo $content->semester31()->kirbytextRaw() ?> <br />
            <span class="text-muted"><?php echo $content->modul31()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester32()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul32()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester33()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul33()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester34()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul34()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester35()->kirbytextRaw() ?><br />
            <span class="text-muted"><?php echo $content->modul35()->kirbytextRaw() ?></span></div>
          </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-black">4</div></div>
          <div class="medium-3 columns no-padding-left border-color-black">
            <div><?php echo $content->semester41()->kirbytextRaw() ?> <br/> 
            <span class="text-muted"><?php echo $content->modul41()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-black"><?php echo $content->semester42()->kirbytextRaw() ?> <br />
            <span class="text-muted"><?php echo $content->modul42()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-2 columns">
            <div class="border-color-secondary"><?php echo $content->semester43()->kirbytextRaw() ?> <br />
            <span class="text-muted"><?php echo $content->modul43()->kirbytextRaw() ?></span></div>
          </div>
          <div class="medium-4 columns">
            <div class="border-color-secondary"><?php echo $content->semester44()->kirbytextRaw() ?> <br />
            <span class="text-muted"><?php echo $content->modul44()->kirbytextRaw() ?></span></div>
          </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-primary">5</div></div>
          <div class="medium-3 columns no-padding-left">
          <div class="border-color-primary"><?php echo $content->semester51()->kirbytextRaw() ?> <br /> 
          <span class="text-muted"><?php echo $content->modul51()->kirbytextRaw() ?></span></div>
        </div>
          <div class="medium-2 columns border-color-black">
          <div><?php echo $content->semester52()->kirbytextRaw() ?> <br />
          <span class="text-muted"><?php echo $content->modul52()->kirbytextRaw() ?></span></div>
        </div>
          <div class="medium-2 columns">
          <div class="border-color-secondary"><?php echo $content->semester53()->kirbytextRaw() ?> <br /> 
          <span class="text-muted"><?php echo $content->modul53()->kirbytextRaw() ?></span></div>
        </div>
          <div class="medium-4 columns">
          <div class="border-color-primary"><?php echo $content->semester54()->kirbytextRaw() ?>  <br> 
          <span class="text-muted"><?php echo $content->modul54()->kirbytextRaw() ?></span></div>
        </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-darker-white">6</div></div>
          <div class="medium-11 columns no-padding-left">
            <div class="border-color-darker-white"><?php echo $content->semester61()->kirbytextRaw() ?> </div>
          </div>
        </div>

        <!-- table row -->
        <div class="row">
          <div class="medium-1 columns font-xl no-padding-right"><div class="border-color-black">7</div></div>
          <div class="medium-5 columns no-padding-left">
            <div class="border-color-black"><?php echo $content->semester71()->kirbytextRaw() ?> </div>
          </div>
          <div class="medium-6 columns">
            <div class="border-color-choice choice"><?php echo $content->semester72()->kirbytextRaw() ?> </div>
          </div>
        </div>

      </div>
      <!-- ./content-table -->
    </div>
    <!-- ./table-wrapper -->

    <!-- legende -->
    <div class="row legende show-for-medium-up">
      <div class="large-2 large-offset-10 columns"><div class="heading">Legende:</div>
        <div class="row">
          <div class="small-4 columns end border-color-primary no-padding-lr"></div>
        </div>
        <div class="row">
          <div class="small-12 columns">Gestaltungsfächer</div>
        </div>
        <div class="row">
          <div class="small-4 columns end border-color-black no-padding-lr"></div>
        </div>
        <div class="row">
          <div class="small-12 columns">Große Projekte</div>
        </div>
        <div class="row">
          <div class="small-4 columns end border-color-secondary no-padding-lr"></div>
        </div>
        <div class="row">
          <div class="small-12 columns">Werkzeuge, Programmieren, Mathematik
          </div>
        </div>
        <div class="row">
          <div class="small-4 columns end border-color-choice choice no-padding-lr"></div>
        </div>
        <div class="row">
          <div class="small-12 columns">Wahlfächer aus Design &amp; Programmieren
          </div>
        </div>
      </div>
    </div>
    <!-- ./legende -->