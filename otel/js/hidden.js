function unhide(divID) {
  var item = document.getElementById(divID);
  if (item) {
    item.className=(item.className=='hidden')?'unhidden':'hidden';
     var imgsrc=(item.className=='hidden')?'/images/arrow_closed.png':'/images/arrow_opendown.png';
    $('#img'+divID).attr('src',imgsrc);
  }
}

function unhide2(divID) {
  var item = document.getElementById(divID);
  if (item) {
    item.className=(item.className=='hidden')?'unhidden':'hidden';
     var imgsrc=(item.className=='hidden')?'/images/arrow_closedright.png':'/images/arrow_opendowntop.png';
    $('#img'+divID).attr('src',imgsrc);
  }
}