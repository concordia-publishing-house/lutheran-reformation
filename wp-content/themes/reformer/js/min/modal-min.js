function closeModal(){jQuery(".mask").removeClass("active")}jQuery(".show").on("click",function(){jQuery(".mask").addClass("active")}),jQuery(".close, .mask").on("click",function(){closeModal()}),jQuery(document).keyup(function(e){27==e.keyCode&&closeModal()});