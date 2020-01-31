let galleryImages = document.querySelectorAll(".glry-img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

function changeIt(img)
    {


let getFullImgUrl = img.src;;
/* alert(getFullImgUrl); */
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

    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = "rgba(19, 66, 123, 0.5)";
    
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "#0A172E";
    }
    