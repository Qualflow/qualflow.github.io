function enableCookies() {

window['ga-disable-UA-53538245-1'] = false;
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-53538245-1', 'auto');
ga('send', 'pageview');

}

window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#edeff5",
      "text": "#838391"
    },
    "button": {
      "background": "transparent",
      "text": "#008cba",
      "border": "#008cba"
    }
  },
  "content": {
    "message": "This website uses cookies for usage analysis to ensure you get the best experience ",
    "href": "https://qualflow.com/privacy-policy.html",
    "dismiss": "Accept"
  },
  onInitialise: function (status) {
    var type = this.options.type;
    var didConsent = this.hasConsented();
    enableCookies();
  },

  onStatusChange: function(status, chosenBefore) {
    var type = this.options.type;
    var didConsent = this.hasConsented();
    enableCookies();
  }
})});