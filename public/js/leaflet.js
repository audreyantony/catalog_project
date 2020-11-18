// SETTING MAP
let map = L.map('leaflet-map').setView([48.8566969, 2.3514616], 11);

// HOME MADE ICON
var homeMadeIcon = L.icon({
    iconUrl: 'img/icon/map.png',
    iconSize:     [38, 42],
    iconAnchor:   [14, 40],
    popupAnchor:  [6, -36]
});

// CLICK FOLLOWING
function onClick() {
    map.panTo(this.getLatLng())
}

// TILE
L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
    maxZoom: 17
}).addTo(map);

// FETCHING SHOPS DATA
fetch('../controller/fetch.leaflet.controller.php').then(function (response){
    return response.text();
}).then(function(data) {
    let shops = JSON.parse(data);

    for (let i = 0 ; i < shops.length ; i++){
        let marker = L.marker([shops[i].lat_shop, shops[i].long_shop], {icon: homeMadeIcon}).bindPopup("<p> " + shops[i].name_shop + " <br> " + shops[i].description_shop + " </p>").on('click', onClick);
        marker.addTo(map);
    }
});
