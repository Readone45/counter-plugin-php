	function getUrl(){
		let base_url = window.location.origin;
		let host = window.location.host;
		let pathArray = window.location.pathname.split( '/' );

		return base_url+"/counter/main.php";
	}
	function count_button_r45(){
		fetch(getUrl());
	}
