<h2>Events</h2>
<p>Check out upcoming Events hosted by Junior Devs and other meetups great for networking or building skills.</p>
<div id="calendar"></div>


<script type="text/javascript">
<?php if(isset($data)): ?>       
    var events = <?php echo json_encode($data) ?>;
<?php else: ?>
    var events = "";
<?php endif; ?>        
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        
        var options = {
            themeSystem: 'bootstrap5',
            initialView: 'dayGridMonth',
            height: 'auto',
            contentHeight:'auto',
            events: events,
            headerToolbar: {
		    left:'prev,next',
		    center: 'title',
		    right: 'today,timeGridWeek,dayGridMonth',
            },
            buttonText: {
                today:  'Today',
                month:  'Month',
                week:   'Week',
            },
	 
        };
        var calendar = new FullCalendar.Calendar(calendarEl,options);
        calendar.render();
        });
       
</script>