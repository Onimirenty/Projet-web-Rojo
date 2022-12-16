<?php
  if(!isset($_GET['idHabitation'])){
    header("Location: accueil.php");
  }
  else{
    include("fonction.php");

    $id = $_GET['idHabitation'];
    $reservation = getReservation($id);
    $nb = count($reservation);
    if($nb == 0){
      header("Location:accueil.php");
    }else{
      date_default_timezone_set("Africa/Nairobi");
      $string = "";
      for($i = 0; $i < $nb; $i++){
        if($i > 0){
        $string = $string.","; }
        $string = $string."{
          title: 'Reservé',
          start: '".$reservation[$i]['start']."',
          end: '".$reservation[$i]['end']."'
        }";
      }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8' />
<script src='js/index.global.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: '<?php echo date("Y-m-d"); ?>',
      initialView: 'dayGridMonth',
      nowIndicator: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      navLinks: true,
      editable: true,
      selectable: true,
      selectMirror: true,
      dayMaxEvents: true,
      events: [
        <?php echo $string; ?>
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>

<?php }} ?>
