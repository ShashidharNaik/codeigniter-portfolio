    <div class="m-t-60">
      <!-- START CONTACT SECTION -->
      <section class="container container-fixed-lg p-t-65 p-b-100  sm-p-b-30 sm-m-b-30">
        <div class="row">
          <div class="col-md-12">
            <div class="m-b-30">
              <h1 class="text-center m-b-5">Contact</h1>
              <h4 class="text-center m-b-5">How can I help you?</h4>
              <p class="text-center m-b-5">Please feel free to fill in this contact form to send me a message, I will come back to you as soon as possible.<br> All fields are required,  messages received are handled confidentially.</p>
            </div>
            <div class="p-r-40 sm-p-r-0">
              
              <?php

              // print errors msgs if there are any
              echo '<div class="block-title text-danger bold">' . validation_errors() . '</div>';

              // print succes msgs if there are any
              if (isset($submit_msg)){
                echo $submit_msg;
              }

              // load <form> HTML opener
              $attributes = array('class' => 'm-t-15','id' => 'contactForm');
              echo form_open(base_url().'contact', $attributes);
              ?>
                <div class="form-group form-group-default required">
                  <label>Name</label>
                  <input type="text" class="form-control form-group-default" name="name" value="<?php echo set_value('name'); ?>" required>
                </div>
                <div class="form-group form-group-default required">
                  <label>E-mailadres</label>
                  <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" required>
                </div>
                <div class="form-group form-group-default required">
                  <label>Message</label>
                  <textarea style="height:100px" class="form-control" name="message" minlength="30" value="<?php echo set_value('message'); ?>" required><?php echo set_value('message'); ?></textarea>
                </div>
                <?php echo $widget; ?>
                <div class="g-recaptcha" data-sitekey="6LfQ8_4SAAAAAGYJgtZ-LUSRGRY0c-JM_Qs4gyWf"></div>
                <div class="sm-p-t-10 clearfix">
                  <button class="btn btn-info font-montserrat all-caps fs-12 pull-right xs-pull-left">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- END CONTACT SECION -->
      <!-- START GOOGLE MAP -->
      <section class="container-fluid  no-padding no-overflow">
        <div id="google-map" class="full-width demo-map gradient-overlay no-overflow"></div>
      </section>
      <!-- END GOOGLE MAP -->
    </div>
    