let skinViewer = new skinview3d.SkinViewer({
    canvas: document.getElementById("skin_container"),
    width: 295,
    height: 347,
    skin: skin,
    animation: new skinview3d.IdleAnimation(),
    fov: 70,
    loadCape: null
});
