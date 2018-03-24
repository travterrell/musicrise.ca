// alert("Working");
// window.scrollBy(0, 655);
var top = document.getElementById("top");
var stickyHeaderTriggered = "false";
var topHeight = $("#top").height();
// alert(topHeight);
window.onscroll = function() {
    if(window.pageYOffset >= topHeight) {
      // alert("triggered");
      stickyHeaderTriggered = "true";
       if (stickyHeaderTriggered == "true") {
         $("#nav").css({"position": "fixed", "top": "0px", "border-bottom": "1px solid red"});
      }
    }
    if (stickyHeaderTriggered == "true") {
      if(window.pageYOffset < topHeight) {
        stickyHeaderTriggered = "false";
         if (stickyHeaderTriggered == "false") {
           $("#nav").css({"position": "static", "border-bottom": "none"});
         }
      }
    }
}
