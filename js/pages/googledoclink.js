$.get("backend/controllers/index.php?googledoclink=true", function (sucdata) {
    var googledoclink = document.getElementById("googledoclink");

    if(typeof(googledoclink) != 'undefined' && googledoclink != null){
        googledoclink.onclick = function () {
            window.open(sucdata.link,"_blank");
        }
    }
});