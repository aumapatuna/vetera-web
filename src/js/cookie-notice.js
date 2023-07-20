jQuery(document).ready(function() {

  var cookieBar = jQuery('.vetera-cookie');

  jQuery('.vetera-cookie__close').click(function(){
    cookieBar.fadeOut();
  });

  cookieBar.css('display', 'none');
  if(!(readCookie('hide') || readCookie('dcookie'))) {
      cookieBar.addClass('show');
      cookieBar.removeAttr('style');
  } else {
    cookieBar.css('display', 'none');
  }

  jQuery('.accept-cookie').click(function() {
    cookieBar.fadeOut();
    createCookie('hide', true, 1);
    return false;
  });

  jQuery('.delete-cookie').click(function() {
    deleteAllCookies();
    cookieBar.fadeOut();
    createCookie('dcookie', true, 1);
    return false;
  });

});

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function deleteAllCookies() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i];
    var eqPos = cookie.indexOf("=");
    var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; Max-Age=0; path=/; domain=' + location.hostname;
  }
}