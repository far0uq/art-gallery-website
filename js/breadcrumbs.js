links = document.getElementsByTagName("a");
console.log(links);
if (links[1].href.endsWith("#")) {
  document.getElementById("breadcrumbs").innerHTML =
    "<span>Home</span> / <span>Artists</span>";
  console.log("executed");
} else if (links[2].href.endsWith("#")) {
  document.getElementById("breadcrumbs").innerHTML =
    "<span>Home</span> / <span>Gallery</span>";
  console.log("executed");
} else if (links[3].href.endsWith("#")) {
  document.getElementById("breadcrumbs").innerHTML =
    "<span>Home</span> / <span>About</span>";
  console.log("executed");
}