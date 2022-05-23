let list = [];
$.ajax({
	async: false,
	type: "post",
	url: baseurl + "player/ajaxRead",
	data: "data",
	dataType: "json",
	success: function (response) {
		list = response;
		// return list;
	},
});

let hasil = list;
