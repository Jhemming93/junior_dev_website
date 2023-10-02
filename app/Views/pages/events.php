<h2>Events</h2>
<p>Check out upcoming Events hosted by Junior Devs and other meetups great for networking or building skills.</p>
<div id="calendar"></div>


<script type="text/javascript">       
    var events = <?php echo json_encode($data) ?>;
    
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        
        var options = {
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