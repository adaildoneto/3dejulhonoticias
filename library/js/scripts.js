//
function ScaleImage(srcwidth, srcheight, targetwidth, targetheight, fLetterBox) {
  var result = { width:0, height:0, fScaleToTargetWidth:true, targetleft:"0px", targettop:"0px" };
  //
  if ((srcwidth <= 0) || (srcheight <= 0) || (targetwidth <= 0) || (targetheight <= 0)) {
      return result;
  }
  // scale to the target width
  var scaleX1 = targetwidth;
  var scaleY1 = (srcheight * targetwidth) / srcwidth;
  // scale to the target height
  var scaleX2 = (srcwidth * targetheight) / srcheight;
  var scaleY2 = targetheight;
  //
  // now figure out which one we should use
  var fScaleOnWidth = (scaleX2 > targetwidth);
  if (fScaleOnWidth) {fScaleOnWidth = fLetterBox;}
  else               {fScaleOnWidth = !fLetterBox;}
  //
  if (fScaleOnWidth) {
    result.width  = Math.floor(scaleX1);
    result.height = Math.floor(scaleY1);
    result.fScaleToTargetWidth = true;
  }
  else {
    result.width  = Math.floor(scaleX2);
    result.height = Math.floor(scaleY2);
    result.fScaleToTargetWidth = false;
  }
  result.targetleft = Math.floor((targetwidth - result.width) / 2);
  result.targettop  = Math.floor((targetheight - result.height) / 2);
  return result;
}

function thumb_img_onload(hlimg) {

  var t = new Image(); t.src = hlimg.src; hlimg.width = t.width; hlimg.height = t.height;

  var result = ScaleImage(hlimg.width, hlimg.height, 620, 190, false);
  hlimg.width      = result.width;
  hlimg.height     = result.height;
  hlimg.style.left = result.targetleft + "px";
  hlimg.style.top  = result.targettop  + "px";
  hlimg.style.visibility = 'visible';
}

function feat_img_onload(hlimg) {

  var t = new Image(); t.src = hlimg.src; hlimg.width = t.width; hlimg.height = t.height;

  var result = ScaleImage(hlimg.width, hlimg.height, 1000, 300, false);
  hlimg.width      = result.width;
  hlimg.height     = result.height;
  hlimg.style.left = result.targetleft + "px";
  hlimg.style.top  = result.targettop  + "px";
  hlimg.style.visibility = 'visible';
}

jQuery(document).ready(function($){
	
	/* prepend menu icon */
	$('div.menu').prepend('<div id="menu-icon">Menu</div>');
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("div.menu ul").slideToggle();
		$(this).toggleClass("active");
	});
	
	/* preloader */
	$('#load-cycle').hide();
	
	/* jquery cycle */
	$('.cycle-slideshow').show();

});