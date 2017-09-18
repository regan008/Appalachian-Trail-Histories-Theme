jQuery(document).ready(function($){
$(document).foundation();
$('a[rel="tag"]').addClass("label label-primary").prepend('<i class="icon-tag icon-white"></i> ');
  $(".popular").addClass("button tiny").prepend('<i class="icon-tag"></i> ');
  $('.v-popular,.vv-popular,.vvv-popular').addClass("button small").prepend('<i class="icon-tag"></i> ');
  $('.vvvv-popular,.vvvvv-popular,.vvvvvv-popular').addClass("button").prepend('<i class="icon-tag"></i> ');
  $('.vvvvvvv-popular,.vvvvvvvv-popular').addClass("button large").prepend('<i class="icon-tag"></i> ');

});
