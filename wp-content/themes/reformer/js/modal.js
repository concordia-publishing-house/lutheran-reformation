// Click function for show the Modal

jQuery(".show").on("click", function(){
  jQuery(".mask").addClass("active");
});

// Function for close the Modal

function closeModal(){
  jQuery(".mask").removeClass("active");
}

// Call the closeModal function on the clicks/keyboard

jQuery(".close, .mask").on("click", function(){
  closeModal();
});

jQuery(document).keyup(function(e) {
  if (e.keyCode == 27) {
    closeModal();
  }
});