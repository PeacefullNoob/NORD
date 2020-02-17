//PRIKAZ SLIKE NA KLIK
let galleryImages = document.querySelectorAll(".glry-img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

function changeIt(img)
    {
let getFullImgUrl = img.getAttribute("name");
let container = document.body;
let newImgWindow = document.createElement("div");
/* var para = document.createElement("P");              
para.innerText =img.getAttribute("nameDesc"); ;         */       
container.appendChild(newImgWindow);
/* newImgWindow.appendChild(para);
 */newImgWindow.setAttribute("class","img-window");
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
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader-wrapper").style.display = "none";
  document.getElementById("glavniDiv").style.display = "block";
}
//PRELOADER
/* $(document).ready(function() {
    setTimeout(function(){
      $('body').addClass('loaded');
    });
    }); */
//KOPIRANJE BROJA
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

$('img').bind('contextmenu', function(e) {
  return false;
});
$('video').bind('contextmenu', function(e) {
  return false;
});
//LAZY LOADER
const myLazyLoad = new LazyLoad({
  elements_selector:".picInd"
});

//FILTER ALBUMA
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("mojCol");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
  }
}

function addClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function removeClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}