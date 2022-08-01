window.addEventListener("DOMContentLoaded", () => {
  // (A) GET ALL IMAGES
  var all = document.querySelectorAll(".gallery img");

  // (B) CLICK ON IMAGE TO TOGGLE FULLSCREEN
  if (all.length>0) { for (let img of all) {
    img.onclick = () => {
      // (B1) EXIT FULLSCREEN
      if (document.webkitFullscreenElement || document.fullscreenElement) {
        if (document.exitFullscreen) { document.exitFullscreen(); }
        else if (document.webkitExitFullscreen) { document.webkitExitFullscreen(); }
      }

      // (B2) ENGAGE FULLSCREEN
      else {
        if (img.requestFullscreen) { img.requestFullscreen(); }
        else if (img.webkitRequestFullscreen) { imgimg.webkitRequestFullscreen(); }
      }
    };
  }}
});
