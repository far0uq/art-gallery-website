function OpenFilterMenu() {
  var filter_box = document.getElementById("filter-box");
  var blur_area = document.getElementById("blur-area");
  filter_box.style.display = "block";
  document.body.style.overflow = "hidden";
  blur_area.style.display = "block";
}

function ApplyFilter() {
  var filter_box = document.getElementById("filter-box");
  var blur_area = document.getElementById("blur-area");
  filter_box.style.display = "none";
  document.body.style.overflow = "auto";
  blur_area.style.display = "none"; 
}
