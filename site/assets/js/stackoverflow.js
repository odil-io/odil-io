function get_reputation() {
	const xhttp = new XMLHttpRequest();
	const url = 'https://api.stackexchange.com/2.3/users/1835574?&site=stackoverflow';
	xhttp.open( "GET", url );
	xhttp.send();
	xhttp.onreadystatechange = function() {
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			const target = document.getElementsByClassName('stackoverflow')[0];
			let json = JSON.parse(xhttp.responseText);
			let profile = json.items[0];
			target.setAttribute('data-reputation', profile['reputation'] );
		}
	}
}
get_reputation();