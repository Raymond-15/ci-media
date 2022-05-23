function update(id) {
	let is_active = $("#" + id).attr("data-active");
	$.ajax({
		type: "post",
		url: baseurl + "player/ajaxUpdate",
		data: {
			idMedia: id,
			nilai: is_active,
		},
		dataType: "json",
		success: function (response) {
			let hasil = response;
			$("#" + id).attr("data-active", hasil);
		},
	});
}
