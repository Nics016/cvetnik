function easyTimer(){
	var deadline = '2017-01-02';
	var t = Date.parse(deadline) - Date.parse(new Date());
	var s = Math.floor( (t/1000) % 60 );
	var m = Math.floor( (t/1000/60) % 60 );
	var h = Math.floor( (t/(1000*60*60)) % 24 );
	var d = Math.floor( t/(1000*60*60*24) );
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('timer').innerHTML = d + " дн " + h + " час " + m + " мин " + s + " сек";
	;
	var t = setTimeout(easyTimer, 500);
}

function checkTime(i) {
	if (i < 10) {i = "0" + i};
	
	return i;
}