const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

setInterval(function () {
  let ourDate = new Date();
  let hour = ourDate.getHours();
  let minute = ourDate.getMinutes();
  let day = ourDate.getDate();

  if (hour < 10) {
    hour = "0" + hour;
  }

  if (minute < 10) {
    minute = "0" + minute;
  }
  document.getElementById('time').innerHTML = hour + ":" + minute;
  document.getElementById('day').innerHTML = day;
  document.getElementById('month').innerHTML = monthNames[ourDate.getMonth()];
}, 1000);