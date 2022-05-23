function navigation() {
	$.get(baseurl + "Page/create", function (data) {
		$("#frame").html(data);
	});
}

function input() {
	$("#frame").load(baseurl + "Page/show");
}

function simpan() {
	let data = $("#form").serialize();
	let email = document.forms["form"]["password"].value;
	if (empty(data)) {
		console.log("kosong");
	} else {
		console.log(data);
	}
}

var elem = document.documentElement;

function openFullscreen() {
	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.webkitRequestFullscreen) {
		/* Safari */
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) {
		/* IE11 */
		elem.msRequestFullscreen();
	}
}

function closeFullscreen() {
	if (document.exitFullscreen) {
		document.exitFullscreen();
	} else if (document.webkitExitFullscreen) {
		/* Safari */
		document.webkitExitFullscreen();
	} else if (document.msExitFullscreen) {
		/* IE11 */
		document.msExitFullscreen();
	}
}
