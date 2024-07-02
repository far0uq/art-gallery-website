links = document.getElementsByTagName("a");
console.log("HELLLO");
console.log(links);
if (links[1].href.endsWith("#")) {
  document
    .getElementById("color-section")
    .classList.add("animation_for_artists");
} else if (links[2].href.endsWith("#")) {
  document
    .getElementById("color-section")
    .classList.add("animation_for_artwork");
} else if (links[3].href.endsWith("#")) {
  console.log("printed");
  document.getElementById("color-section").classList.add("animation_for_about");
}
