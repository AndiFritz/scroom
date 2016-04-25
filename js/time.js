function showTime (){

	container = document.getElementById("time");

  var now = new Date();

  var hour = now.getHours();
  if  (hour <10) { hour="0"+hour; }
  var minut = now.getMinutes();
  if  (minut <10) { minut="0"+minut; }
  var second = now.getSeconds();
  if  (second <10) { second="0"+second; }

  var time = hour + ":" + minut + ":" + second;

  container.innerHTML = time;
  setTimeout('showTime()',1000);

}