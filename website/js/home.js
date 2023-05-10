let map;

async function initMap() {

    const inputLat = document.getElementById("latitude").value;

    const inputLong = document.getElementById("longitude").value;

    const latitude = inputLat == "" ? 10.751037799726019 : inputLat;

    const longitude = inputLong == "" ? 106.6484542665327 : inputLong;

    const { Map } = await google.maps.importLibrary("maps");
    map = new Map(document.getElementById("map"), {
        center: { lat: parseFloat(latitude), lng: parseFloat(longitude) },
        zoom: 17,
    });
}

initMap();