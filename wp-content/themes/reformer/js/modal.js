jQuery(function() {
  jQuery("#modal-1").on("change", function() {
    if (jQuery(this).is(":checked")) {
      jQuery("body").addClass("modal-open");
    } else {
      jQuery("body").removeClass("modal-open");
    }
  });

  jQuery(".modal-fade-screen, .modal-close").on("click", function() {
    jQuery(".modal-state:checked").prop("checked", false).change();
  });

  jQuery(".modal-inner").on("click", function(e) {
    e.stopPropagation();
  });
});

jQuery(function() {
  jQuery("#modal").on("change", function() {
    if (jQuery(this).is(":checked")) {
      jQuery("body").addClass("modal-open");
      jQuery("#remodal_video").html('<iframe src="http://player.vimeo.com/video/141601711?portrait=0&badge=0&byline=0&title=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
    } else {
      jQuery("body").removeClass("modal-open");
      jQuery(".video-wrapper").html('&nbsp;');
    }
  });
