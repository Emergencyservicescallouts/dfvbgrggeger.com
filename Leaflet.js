let fireStations = [];

function placeFireStation(lat, lng) {
    const station = new google.maps.Marker({
        position: { lat: lat, lng: lng },
        map: map,
        title: 'Fire Station'
    });
    fireStations.push(station);
}
