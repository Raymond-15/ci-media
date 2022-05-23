const wrapper = document.querySelector(".wrapper"),
	pemutar = wrapper.querySelector("#media-player"),
	pemutar1 = wrapper.querySelector("#media-player1");

let vidIndex = Math.floor(Math.random() * hasil.length + 1);
loadVid(vidIndex);

function loadVid(vidInd) {
	if (
		hasil[vidInd - 1].ekstensi == "video/mp4" ||
		hasil[vidInd - 1].ekstensi == "video/webm"
	) {
		$(pemutar1).hide();
		pemutar.src = `${baseurl}/assets/upload/${hasil[vidInd - 1].nama_file}`;
		pemutar.play();
	} else {
		$(pemutar).hide();
		$(pemutar1).show();
		pemutar1.src = `${baseurl}/assets/upload/${hasil[vidInd - 1].nama_file}`;
		setTimeout(() => {
			$(pemutar1).hide();
			nextVid();
		}, 5000);
	}
}

function nextVid() {
	$(pemutar).show();
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

	hasil = list;
	vidIndex++; //increment of VideoIndex by 1
	vidIndex > hasil.length ? (vidIndex = 1) : (vidIndex = vidIndex);
	loadVid(vidIndex);
}

pemutar.addEventListener("ended", () => {
	nextVid();
});
