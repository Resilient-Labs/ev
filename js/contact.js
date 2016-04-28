function determine(currLink, linksContainer) {
  var site = currLink[0].toLowerCase();
  var user = currLink[1]
  switch (site) {
    case "twitter":
    case "dribbble":
    case "instagram":
    case "github":
      link = "<a href='https://" + site + ".com/" + user + "/' target='_blank' class='fa fa-" + site + "'></a>";
      linksContainer.innerHTML = linksContainer.innerHTML + link;
      break;
    case "codepen":
      link = "<a href='http://codepen.io/" + user + "/' target='_blank' class='fa fa-codepen'></a>";
      linksContainer.innerHTML = linksContainer.innerHTML + link;
      break;
    case "facebook":
      link = "<a href='https://facebook.com/" + user + "/' target='_blank' class='fa fa-facebook-square'></a>";
      linksContainer.innerHTML = linksContainer.innerHTML + link;
      break;
    case "linkedin":
      link = "<a href='https://www.linkedin.com/in/" + user + "/' target='_blank' class='fa fa-linkedin-square'></a>";
      linksContainer.innerHTML = linksContainer.innerHTML + link;
      break;
    case "":
      link = "<a href='http://" + user + "' target='_blank' class='fa fa-globe'></a>";
      linksContainer.innerHTML = linksContainer.innerHTML + link;
      break;

    default:
      alert("Social Links Plugin: Sorry, '" + site + "'" + " wasn't recognised, please check your spelling or request a site to be added.");
  }
}

social = function() {
  var _style = document.createElement("style");
  var _html = document.createElement("div");
  _style.innerHTML = style;
  _html.innerHTML = html;
  document.body.appendChild(_style);
  document.body.appendChild(_html);
  
  var link = '';
  var links = document.getElementById('social-links'),
    socialContainer = document.getElementById('social-container'),
    message = document.getElementById('social-message');

  for (var i = 0; i < arguments.length; i++) {
    var argument = arguments[i];

    if (typeof argument === 'string' || argument instanceof String) {
      if (argument.indexOf('/') === -1) {
        switch (argument) {
          case "light":
          case "top":
          case "disco":
            socialContainer.className += " " + argument;
            break;

          default:
            message.innerHTML = argument;
        }
      } else {
        var decode = argument.split("/");
        determine(decode, links);
      }
    } 
  }
};