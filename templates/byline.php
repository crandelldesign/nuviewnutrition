<div class="byline-wrap">
  <?php

  if (in_category('class')) {
      // First, check if date fields are present.
      // This will return an array with formatted dates.
      $mem_date = mem_date_processing(
          get_post_meta($post->ID, '_mem_start_date', true) ,
          get_post_meta($post->ID, '_mem_end_date', true)
      );

      // Second step: display the date
      if ($mem_date["start-iso"] !=="") { // show the event date
          echo '<span class="event-date">When: ';
          //echo $mem_date["date"];
          $date = strtotime($mem_date["date"]);
          echo date('l, F jS, Y h:i a',$date);
          echo '</span>';
      }

      // Get Repeat Dates
      $mem_repeats = get_post_meta($post->ID, '_mem_repeat_date', false);
      if ($mem_repeats) {
          ?><br><span class="event-date date-repeats">
          &nbsp;&nbsp;&nbsp;<?php

            $nr_of_repeats = count($mem_repeats);
            $repeat_counter = 1;
            sort($mem_repeats);

            foreach($mem_repeats as $date_repeat) {

              if ($nr_of_repeats == 1) {
                //echo 'on: ';
              } else if ($nr_of_repeats > 1) {

                if ($repeat_counter == 1) {
                  // the first item
                  //echo 'on: ';
                } else if ($repeat_counter == $nr_of_repeats ) {
                  // the last item
                  echo '<br>&nbsp;&nbsp;&nbsp;';
                } else {
                  echo '<br>&nbsp;&nbsp;&nbsp;';
                }
              }

              $date = strtotime($date_repeat);

              echo date('l, F jS, Y h:i a',$date);

              $repeat_counter++; // increment by one
              }
          ?></span><?php
      }
  } else {
      echo 'Posted: ';
      echo the_time('l, F jS, Y');
  }

	?>
</div>
