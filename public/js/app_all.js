let galleryImages = document.querySelectorAll(".glry-img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

function changeIt(img)
    {

let getFullImgUrl = img.src;;
let container = document.body;
let newImgWindow = document.createElement("div");
container.appendChild(newImgWindow);
newImgWindow.setAttribute("class","img-window");
newImgWindow.setAttribute("onclick","closeImg()");
 
let newImg = document.createElement("img");
newImgWindow.appendChild(newImg);
newImg.setAttribute("src", getFullImgUrl); 
newImg.id="myPic";
}

function closeImg(){
document.querySelector(".img-window").remove();

}
     //Video modal
$('#modal1').on('hidden.bs.modal', function (e) {
    $("#iframeModal").attr('src',' ');
  });

  /* function changeItV(video)
    { */
  $("#modal1").on('show.bs.modal', function(e){
let getFullVideoUrl=$(e.relatedTarget).data('myvalue');
    console.log(getFullVideoUrl);
        $("#iframeModal").attr('src', getFullVideoUrl);
}); 
  


//PRELOADER
$(document).ready(function() {
    setTimeout(function(){
      $('body').addClass('loaded');
    });
    });

 const span = document.getElementById("piid");

span.onclick = function() {
  document.execCommand("copy");
}

span.addEventListener("copy", function(event) {
  event.preventDefault();
  if (event.clipboardData) {
    event.clipboardData.setData("text/plain", "+382 69 215 455");
  }
}); 
const span1 = document.getElementById("piidm");

span1.onclick = function() {
  document.execCommand("copy");
}

span1.addEventListener("copy", function(event) {
  event.preventDefault();
  if (event.clipboardData) {
    event.clipboardData.setData("text/plain", "+382 69 215 455");
  }
}); 

