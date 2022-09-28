window.mParticle = {
  config: {
    isDevelopmentMode: !!((window.location.href.indexOf('rc') > -1 || window.location.href.indexOf('trunk') > -1 || window.location.href.indexOf('dev') > -1)), // switch to false (or remove) for production
  },
};

const mParticle_API_KEY = window.location.href.indexOf('dev') > -1 ? 'us1-c90c44a14b42754c85793e3fd72c53ce' : 'us1-a971dfd51f48e14eb3482ebcecf62fa1';

(function (t) {
  window.mParticle = window.mParticle || {};
  window.mParticle.EventType = {
    Unknown: 0,
    Navigation: 1,
    Location: 2,
    Search: 3,
    Transaction: 4,
    UserContent: 5,
    UserPreference: 6,
    Social: 7,
    Other: 8,
  };
  window.mParticle.eCommerce = { Cart: {} };
  window.mParticle.Identity = {};
  window.mParticle.config = window.mParticle.config || {};
  window.mParticle.config.rq = [];
  window.mParticle.config.snippetVersion = 2.2;
  window.mParticle.ready = function (t) {
    window.mParticle.config.rq.push(t);
  };
  const e = ['endSession', 'logError', 'logBaseEvent', 'logEvent', 'logForm', 'logLink', 'logPageView', 'setSessionAttribute', 'setAppName', 'setAppVersion', 'setOptOut', 'setPosition', 'startNewSession', 'startTrackingLocation', 'stopTrackingLocation'];
  const o = ['setCurrencyCode', 'logCheckout'];
  const i = ['identify', 'login', 'logout', 'modify'];
  e.forEach((t) => {
    window.mParticle[t] = n(t);
  });
  o.forEach((t) => {
    window.mParticle.eCommerce[t] = n(t, 'eCommerce');
  });
  i.forEach((t) => {
    window.mParticle.Identity[t] = n(t, 'Identity');
  });
  function n(e, o) {
    return function () {
      if (o) {
        e = `${o}.${e}`;
      }
      const t = Array.prototype.slice.call(arguments);
      t.unshift(e);
      window.mParticle.config.rq.push(t);
    };
  }
  const mp = document.createElement('script');
  mp.type = 'text/javascript';
  mp.async = true;
  mp.src = `${document.location.protocol == 'https:' ? 'https://jssdkcdns' : 'http://jssdkcdn'}.mparticle.com/js/v2/${t}/mparticle.js`;
  const c = document.getElementsByTagName('script')[0];
  c.parentNode.insertBefore(mp, c);
}(mParticle_API_KEY));
