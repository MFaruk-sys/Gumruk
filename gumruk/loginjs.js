function hideToggle(button, elem) {
  $(button).toggle( function () {
    $(elem).hide();
  },function () {
    $(elem).show();
  });
}

hideToggle("#bilgi", "iframe");
