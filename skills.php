<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  function generateSkill($skill, $percentage, $type, $desc, $level) {
    ?>
    <div class="row">
      <div class="col s3 l4">
        <div class="progress <?php echo $type; ?>">
          <div class="progress-bar" data-skill="<?php echo $percentage; ?>" style="width:<?php echo $percentage; ?>%"></div>
        </div>
      </div>
      <div class="col s9 l8">
        <?php echo "<b>" . $skill . "</b> - " . $desc . "<br><small>" . $level . "</small>"; ?>
      </div>
    </div>
    <?php
  }

?>
