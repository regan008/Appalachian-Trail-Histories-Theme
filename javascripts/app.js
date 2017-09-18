jQuery(document).ready(function($){
$(document).foundation();
$('a[rel="tag"]').addClass("label label-primary").prepend('<i class="icon-tag icon-white"></i> ');
  $(".popular").addClass("btn btn-default").prepend('<i class="icon-tag"></i> ');
  $('.v-popular,.vv-popular,.vvv-popular').addClass("btn btn-small btn-info").prepend('<i class="icon-tag"></i> ');
  $('.vvvv-popular,.vvvvv-popular,.vvvvvv-popular').addClass("btn btn-primary").prepend('<i class="icon-tag"></i> ');
  $('.vvvvvvv-popular,.vvvvvvvv-popular').addClass("btn btn-large btn-success").prepend('<i class="icon-tag"></i> ');

});
