<?php
  dpm($fields);

  $type = str_replace(" ", "-", $fields['field_npf_event_type']->content);
  $type = strtolower(str_replace(array("<span>","</span>"),"",$type));
?>
<div class="event-container">


  <div>
    <img src="/sites/default/files/calendar/<?php print $type ?>.jpg" alt="<?php print str_replace(array("<div>", "</div>"),"", $fields['field_npf_event_type']->content); ?>"></div>

  </div>
  <div>
  <h2><strong><?php print $fields['title']->content; ?></strong></h2>

    <h3><?php print $fields['field_npf_event_date']->content; ?><h3>

    <p><strong><?php print $fields['field_npf_event_venue_name']->content; ?></strong></p>
    <p><?php print $fields['field_npf_event_venue_address']->content; ?></p>

    <p><?php print $fields['field_npf_event_description']->content; ?></p>
  </div>
  <div>
    <?php print $fields['field_npf_event_venue_map']->content; ?>
  </div>
</div>