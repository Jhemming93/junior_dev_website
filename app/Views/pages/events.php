<p>hello <?= $title ?></p>

<div id="calendar"></div>

<script>
    var calendar = $("#calendar").calendarGC({
    events: [
      {
        eventName: "Holiday",
        className: "my-class",
        onclick(e, data) {
          console.log(data);
        },
        dateColor: "red"
      },
      {
        date: new Date("2022-02-07"),
        eventName: "Holiday with wife",
        className: "my-class",
        onclick(e, data) {
          console.log(data);
        },
        dateColor: "red"
      },
      // ... more events
    ],
    onclickDate: function (e, data) {
      console.log(e, data);
    }
});

</script>