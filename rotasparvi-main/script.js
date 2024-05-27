google.load("earth", "1");

function init() {
    google.earth.createInstance('map', initCB, failureCB);
}

function initCB(instance) {
    var ge = instance;
    ge.getWindow().setVisibility(true);
    ge.getNavigationControl().setVisibility(ge.VISIBILITY_SHOW);
    ge.getLayerRoot().enableLayerById(ge.LAYER_ROADS, true);
}

function failureCB(errorCode) {
    console.log("Erro ao carregar o Google Earth: " + errorCode);
}

google.setOnLoadCallback(init);
