<?php

// Display custom content in all products. 
function rentals_include_custom_text() {
    ob_start();
    ?>
    <!-- Add your preformatted HTML content here -->
    <div class="custom-content">
        <h2><?php echo esc_html__('All our Teslas come with', 'custom-description-redlemon'); ?>
:</h2>
		<ul>
			<li><?php echo esc_html__('Fully charged', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Return Empty', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Clean', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Built-in Navigation', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Free Cancellation', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Free Delivery at all hours of the day, at all locations in Attica', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Unlimited Mileage', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Road Assistance', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Theft Insurance', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Collision Damage Waiver Insurance  (CDW) ', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Driver Insurance in case of accident', 'custom-description-redlemon'); ?>
			<li><?php echo esc_html__('Co-Driver Insurance in case of accident<br>
				(Please let us know at the time of pick-up)', 'custom-description-redlemon'); ?>
		</ul>
		<h3><?php echo esc_html__('Child Seats', 'custom-description-redlemon'); ?></h3>
		<ol>
			<li>
				<?php 
					echo esc_html__('Child Seat for ages 0+/1: ideal for weights between 0 - 18kg.', 'custom-description-redlemon');
					echo '<br>';
					echo esc_html__('(Please let us know at the time of booking)', 'custom-description-redlemon'); 
				?>
			</li>
			<li>
				<?php 
					echo esc_html__('Child Seat for ages 1-3: Ideal for weights from 9 -36 kg.', 'custom-description-redlemon');
					echo '<br>';
					echo esc_html__('(Please let us know at the time of booking)', 'custom-description-redlemon'); 
				?>
			</li>
			<li>
				<?php 
					echo esc_html__('Child Seat for weights between 15-36kg.', 'custom-description-redlemon');
					echo '<br>';
					echo esc_html__('European Safety Certified with ECE 44/04.', 'custom-description-redlemon');
					echo '<br>';
					echo esc_html__('(Please let us know at the time of booking)', 'custom-description-redlemon'); 
				?>
			</li>
		</ol>
    </div>
    <?php
    return ob_get_clean(); // Capture the HTML output
}

add_shortcode('all_rentals_includes', 'rentals_include_custom_text');