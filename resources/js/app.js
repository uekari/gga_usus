import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

window.initMap = () => {
    let map;

    const area = document.getElementById("map"); // マップを表示させるHTMLの箱
    // マップの中心位置(例:原宿駅)
    const center = {
        lat: 35.667379,
        lng: 139.7054965,
    };

    //マップ作成
    map = new google.maps.Map(area, {
        center,
        zoom: 17,
    });
};
