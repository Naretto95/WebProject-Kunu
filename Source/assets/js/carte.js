// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 48.852969;
var lon = 2.349903;
var macarte = null;
// Nous initialisons une liste de marqueurs
var activites = {
	"Activité 1 : adresse": { "lat": 48.852969, "lon": 2.349903 },
	"Activité 2 : adresse": { "lat": 48.86832825, "lon": 2.31399536 },
	"Activité 3 : adresse": { "lat": 48.84483591, "lon": 2.29614258},
	"Activité 4 : adresse": { "lat": 48.82223673, "lon": 2.37304688}
};
// Fonction d'initialisation de la carte
function initMap() {
        macarte = L.map('map').setView([lat, lon], 11);
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);
        for (activite in activites) {
  var marker = L.marker([activites[activite].lat, activites[activite].lon]).addTo(macarte);
  for (activite in activites) {
	var marker = L.marker([activites[activite].lat, activites[activite].lon]).addTo(macarte);
	marker.bindPopup(activite);
}
}
    }
window.onload = function(){
initMap();
};
