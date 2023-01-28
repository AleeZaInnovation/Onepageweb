let searchForm = document.querySelector('.header_menu');
let main_bar = document.querySelector('.bar_set');
let closed = document.querySelector('.header_menu');
let header_link = document.querySelector('.header_btn');
let header_link_two = document.querySelector('.header_btn_two');
let header_btn_three = document.querySelector('.header_btn_three');
let header_btn_four = document.querySelector('.header_btn_four');

document.querySelector('.bar_set').onclick = ()=>{
    searchForm.style.display = "block";
    header_link.style.display = "none";
    header_link_two.style.display = "none";
    header_btn_three.style.display = "none";
    header_btn_three.style.display = "none";
    main_bar.style.display = "none";
}
document.querySelector('.shows').onclick = ()=>{
    closed.style.display = "none";
    main_bar.style.display = "block";
    header_link.style.display = "block";
    header_link_two.style.display = "block";
    header_btn_three.style.display = "block";
    header_btn_four.style.display = "block";
}
// sammer note asa ai khan ay

$(document).ready(function() {
  $("#summernote").summernote({dialogsInBody: true});
  $('.dropdown-toggle').dropdown();
});
// sammer note asa ai khan ay
