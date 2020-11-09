let map = L.map('leaflet-map').setView([48.8566969, 2.3514616], 11);

L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
    maxZoom: 17,
    attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map);


/*let shop3 = L.marker([48.815, 2.319]).addTo(map);
shop3.bindPopup("<p> ANA Montrouge <br> 01.98.76.54.32</p>").openPopup();

let shop1 = L.marker([48.84, 2.33]).addTo(map);
shop1.bindPopup("<p> ANA Raspail <br> 01.23.45.67.89</p>").openPopup();

let shop2 = L.marker([48.87, 2.31]).addTo(map);
shop2.bindPopup("<p> ANA Champs Élysées <br> 01.29.38.47.56</p>").openPopup();*/

fetch('../controller/fetch.leaflet.controller.php').then(function (response){
    return response.text();
}).then(function(data) {
    let shops = JSON.parse(data);

    for (let i = 0 ; i < shops.length ; i++){
        let shop = L.marker([shops[i].lat_shop, shops[i].long_shop]).addTo(map);
        shop.bindPopup("<p> " + shops[i].name_shop + " <br> " + shops[i].description_shop + " </p>").openPopup();
    }
});
