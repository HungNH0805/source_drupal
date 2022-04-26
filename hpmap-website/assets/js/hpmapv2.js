$(document).ready(function (){
  function initMap(idMap){
    // https://api.mapbox.com/styles/v1/hungddvimaru/cl1hvjmvk007l14qo2i7atwc2.html?title=copy&access_token=pk.eyJ1IjoiaHVuZ2RkdmltYXJ1IiwiYSI6ImNrNzRoMWNvazBsdzYza3FrNml3Mmc0djQifQ.tQBtoTBSMQxyv-D85NUvZQ&zoomwheel=true&fresh=true#11.16/20.6081/105.8859
    L.mapbox.accessToken = 'pk.eyJ1IjoiaHVuZ2RkdmltYXJ1IiwiYSI6ImNrNzRoMWNvazBsdzYza3FrNml3Mmc0djQifQ.tQBtoTBSMQxyv-D85NUvZQ';
    var map = L.mapbox.map(idMap, null, {
      styleLayer: {
        maxNativeZoom: 25
      }
    })
      .setView([20.85813837197534, 106.68209081048944], 14)
      .addLayer(L.mapbox.styleLayer('mapbox://styles/hungddvimaru/cl1hvjmvk007l14qo2i7atwc2'))
      .addControl(L.mapbox.geocoderControl('mapbox.places', {
        autocomplete: true
      }));

    L.control.layers({
      'Bản đồ đường phố': L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'),
      'Bản đồ giao thông': L.mapbox.styleLayer('mapbox://styles/mapbox/light-v10'),
      'Bản đồ ngoài trời': L.mapbox.styleLayer('mapbox://styles/mapbox/outdoors-v11'),
      'Bản đồ vệ tinh': L.mapbox.styleLayer('mapbox://styles/hungddvimaru/cl1hvjmvk007l14qo2i7atwc2').addTo(map)
    }).addTo(map);
    var featureGroup = L.featureGroup().addTo(map);

    function showPolygonAreaEdited(e) {
      e.layers.eachLayer(function(layer) {
        showPolygonArea({ layer: layer });
      });
    }

    function showPolygonArea(e) {
      featureGroup.clearLayers();
      featureGroup.addLayer(e.layer);
      e.layer.bindPopup((LGeo.area(e.layer) / 1000000).toFixed(2) + ' km<sup>2</sup>');
      e.layer.openPopup();
    }

    var drawControl = new L.Control.Draw({
      edit: {
        featureGroup: featureGroup
      },
      draw: {
        polygon: true,
        polyline: false,
        rectangle: false,
        circle: false,
        marker: false
      }
    }).addTo(map);
    map.on('draw:created', showPolygonArea);
    map.on('draw:edited', showPolygonAreaEdited);

    L.control.locate().addTo(map);
  }

  if($("#my-map").length > 0){
    initMap("my-map");
  }
});
