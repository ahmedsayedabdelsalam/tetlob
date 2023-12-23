import './bootstrap';

window.getLocation = async () => {
	if (navigator.geolocation) {
		const pos = await new Promise((resolve, reject) => {
			navigator.geolocation.getCurrentPosition(resolve, reject);
		});

		return {
			long: pos.coords.longitude,
			lat: pos.coords.latitude,
		};
	} else {
		alert("Geolocation is not supported by this browser.");
	}
}
