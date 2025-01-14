<?php
function twentytwentythree_child_wizard_shortcode($atts, $content = null) {
  $atts = shortcode_atts(
      array(
          'title' => 'Default Title',
      ),
      $atts,
      'r_test'
  );

  ob_start();
  ?>
  <div id="wizard" class="wizard">
    <div class="progressbar">
      <ul class="progressbar-list">
        <li id="home" class="progressbar-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home.svg" alt="home icon">
        </li>
        <li class="progressbar-item current">Contact Info</li>
        <li class="progressbar-item">Quantity</li>
        <li class="progressbar-item">Price</li>
        <li class="progressbar-item">Done</li>
      </ul>
    </div>

    <div id="step-1" class="wizard-step">
      <h1 class="title">Contact Info</h1>
      <form id="step-1-form" class="wizard-container">
        <div class="wizard-form-group">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="wizard-form-group">
          <label for="email" class="form-label">Email <span class="text-muted"
              style="font-size: 0.9em;">required</span></label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="wizard-form-group">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone">
        </div>
      </form>
      <button type="button" class="btn btn-primary wizard-button wizard-button-next"
        onclick="nextStep(2)">Continue</button>
    </div>

    <div id="step-2" class="wizard-step" style="display:none;">
      <h1 class="title">Quantity</h1>
      <form id="step-2-form" class="wizard-container">
        <div class="wizard-form-group">
          <label for="quantity" class="form-label">Quantity <span class="text-muted"
              style="font-size: 0.9em;">required</span></label>
          <input type="number" name="quantity" id="quantity" class="form-control" min="1" max="1000" required>
        </div>
      </form>
      <div class="wizard-buttons">
        <button type="button" class="btn btn-primary wizard-button wizard-button-next"
          onclick="nextStep(3)">Continue</button>
        <button type="button" class="btn btn-light wizard-button wizard-button-prev" onclick="prevStep(1)">&#8592;
          Back</button>
      </div>
    </div>

    <div id="step-3" class="wizard-step" style="display:none;">
      <h1 class="title">Price</h1>
      <div class="wizard-container">
        <span id="total-price" class="total-price"></span>
      </div>
      <div class="wizard-buttons">
        <button type="button" class="btn btn-primary wizard-button wizard-button-next" onclick="sendEmail()">Send to
          Email</button>
        <button type="button" class="btn btn-light wizard-button wizard-button-prev" onclick="prevStep(2)">&#8592;
          Back</button>
      </div>
    </div>

    <div id="step-4" class="wizard-step" style="display:none;">
      <h1 class="title">Done</h1>
      <div class="wizard-container">
        <span id="result-message"></span>
      </div>
      <button type="button" class="btn btn-primary wizard-button wizard-button-next" onclick="startAgain()">Start again
        &#8594;</button>
    </div>
  </div>
  <div class="page-content">
    <h2><?php echo esc_html($atts['title']); ?></h2>
    <?php echo $content; ?>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('r_test', 'twentytwentythree_child_wizard_shortcode');