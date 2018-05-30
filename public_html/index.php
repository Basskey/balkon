<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Ресторан Балкон</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#416E87">
  <link rel="shortcut icon" href="/favicon.ico?v=2">
  <link rel="manifest" href="/manifest.json">
  <style type="text/css">
    @charset "UTF-8";
    @font-face {
      font-family: FontAwesome;
      src: url(assets/css/fonts/fontawesome-webfont.eot?v=4.6.3);
      src: url(assets/css/fonts/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.6.3) format("embedded-opentype"), url(assets/css/fonts/fontawesome-webfont.woff2?v=4.6.3) format("woff2"), url(assets/css/fonts/fontawesome-webfont.woff?v=4.6.3) format("woff"), url(assets/css/fonts/fontawesome-webfont.ttf?v=4.6.3) format("truetype"), url(assets/css/fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular) format("svg");
      font-weight: 400;
      font-style: normal
    }

    .fa {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .fa-facebook:before {
      content: "\f09a"
    }

    .fa-angle-double-down:before {
      content: "\f103"
    }

    .fa-instagram:before {
      content: "\f16d"
    }

    .fa-vk:before {
      content: "\f189"
    }

    html {
      box-sizing: border-box;
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar
    }

    *,
    :after,
    :before {
      box-sizing: inherit
    }

    @-ms-viewport {
      width: device-width
    }

    main,
    nav,
    section {
      display: block
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem
    }

    strong {
      font-weight: bolder
    }

    small {
      font-size: 80%
    }

    a {
      color: #007bff;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects
    }

    img {
      vertical-align: middle;
      border-style: none
    }

    svg:not(:root) {
      overflow: hidden
    }

    a,
    button,
    input,
    label,
    select,
    textarea {
      -ms-touch-action: manipulation;
      touch-action: manipulation
    }

    label {
      display: inline-block;
      margin-bottom: .5rem
    }

    button,
    input,
    select,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    button,
    input {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    [type=submit],
    button {
      -webkit-appearance: button
    }

    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
      padding: 0;
      border-style: none
    }

    input[type=date],
    input[type=time] {
      -webkit-appearance: listbox
    }

    textarea {
      overflow: auto;
      resize: vertical
    }

    ::-webkit-file-upload-button {
      font: inherit;
      -webkit-appearance: button
    }

    [hidden] {
      display: none !important
    }

    .container {
      margin-right: auto;
      margin-left: auto;
      padding-right: 15px;
      padding-left: 15px;
      width: 100%
    }

    @media (min-width:576px) {
      .container {
        max-width: 540px
      }
    }

    @media (min-width:768px) {
      .container {
        max-width: 720px
      }
    }

    @media (min-width:992px) {
      .container {
        max-width: 960px
      }
    }

    @media (min-width:1200px) {
      .container {
        max-width: 1140px
      }
    }

    .row {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
    }

    .col-12,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6 {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-12 {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
    }

    @media (min-width:992px) {
      .col-lg-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }
      .col-lg-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 33.33333%
      }
      .col-lg-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
        max-width: 41.66667%
      }
      .col-lg-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }
    }

    .form-text {
      display: block;
      margin-top: .25rem
    }

    .invalid-feedback {
      display: none;
      margin-top: .25rem;
      font-size: .875rem;
      color: #dc3545
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      border: 1px solid transparent;
      padding: .5rem .75rem;
      font-size: 1rem;
      line-height: 1.25;
      border-radius: .25rem
    }

    .btn-primary {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff
    }

    .collapse {
      display: none
    }

    .nav-link {
      display: block;
      padding: .5rem 1rem
    }

    .navbar {
      position: relative;
      padding: .5rem 1rem
    }

    .navbar,
    .navbar>.container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
    }

    .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit;
      white-space: nowrap
    }

    .navbar-nav {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .navbar-nav .nav-link {
      padding-right: 0;
      padding-left: 0
    }

    .navbar-collapse {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
    }

    @media (max-width:991px) {
      .navbar-expand-lg>.container {
        padding-right: 0;
        padding-left: 0
      }
    }

    @media (min-width:992px) {
      .navbar-expand-lg {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }
      .navbar-expand-lg,
      .navbar-expand-lg .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
      }
      .navbar-expand-lg>.container {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
      }
      .navbar-expand-lg .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
      }
    }

    .navbar-light .navbar-brand {
      color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
      color: rgba(0, 0, 0, .5)
    }

    #submit-booking {
      margin: 0 20px
    }

    .is-booking .scroll-down {
      font-size: 30px;
      position: absolute;
      bottom: -60px;
      left: 50%;
      -webkit-transform: translate3d(-50%, -50%, 0);
      transform: translate3d(-50%, -50%, 0)
    }

    .promo_inner,
    .scroll-fa {
      position: relative
    }

    .scroll-fa {
      top: -27px;
      left: 19px
    }

    .animated {
      -webkit-animation-duration: .5s;
      animation-duration: .5s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      -webkit-animation-iteration-count: infinite
    }

    @-webkit-keyframes b {
      0%,
      to {
        -webkit-transform: translateY(0)
      }
      50% {
        -webkit-transform: translateY(-5px)
      }
    }

    @keyframes b {
      0%,
      to {
        -webkit-transform: translateY(0);
        transform: translateY(0)
      }
      50% {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px)
      }
    }

    .bounce {
      -webkit-animation-name: b;
      animation-name: b;
      margin-left: -18px
    }

    @media (min-width:1200px) {
      .promo-booking .promo_inner {
        padding-bottom: 100px
      }
    }
  </style>
  <link rel="preload" href="assets/css/style.css?ver=4" as="style" onload="this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="assets/css/style.css?ver=4">
  </noscript>
  <link rel="preload" href="assets/fonts/bandera/medium/9087.woff?ver=3.0.5" as="font" crossorigin="" type="font/woff">
  <style>
    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }
  </style>

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TLR4N2K');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLR4N2K" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <script>
    ! function (e) {
      "use strict";
      var t = function (t, n, r) {
        function o(e) {
          if (i.body) return e();
          setTimeout(function () {
            o(e)
          })
        }

        function a() {
          d.addEventListener && d.removeEventListener("load", a), d.media = r || "all"
        }
        var l, i = e.document,
          d = i.createElement("link");
        if (n) l = n;
        else {
          var s = (i.body || i.getElementsByTagName("head")[0]).childNodes;
          l = s[s.length - 1]
        }
        var u = i.styleSheets;
        d.rel = "stylesheet", d.href = t, d.media = "only x", o(function () {
          l.parentNode.insertBefore(d, n ? l : l.nextSibling)
        });
        var f = function (e) {
          for (var t = d.href, n = u.length; n--;)
            if (u[n].href === t) return e();
          setTimeout(function () {
            f(e)
          })
        };
        return d.addEventListener && d.addEventListener("load", a), d.onloadcssdefined = f, f(a), d
      };
      "undefined" != typeof exports ? exports.loadCSS = t : e.loadCSS = t
    }("undefined" != typeof global ? global : this),
    function (e) {
      if (e.loadCSS) {
        var t = loadCSS.relpreload = {};
        if (t.support = function () {
            try {
              return e.document.createElement("link").relList.supports("preload")
            } catch (e) {
              return !1
            }
          }, t.poly = function () {
            for (var t = e.document.getElementsByTagName("link"), n = 0; n < t.length; n++) {
              var r = t[n];
              "preload" === r.rel && "style" === r.getAttribute("as") && (e.loadCSS(r.href, r, r.getAttribute("media")),
                r.rel = null)
            }
          }, !t.support()) {
          t.poly();
          var n = e.setInterval(t.poly, 300);
          e.addEventListener && e.addEventListener("load", function () {
            t.poly(), e.clearInterval(n)
          }), e.attachEvent && e.attachEvent("onload", function () {
            e.clearInterval(n)
          })
        }
      }
    }(this);
  </script>
  <!-- End Google Tag Manager (noscript) -->

  <body class="is-booking">
    <nav class="navbar navbar-expand-lg navbar-light " id="header__nav">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/img/booking-header__logo-big.png?ver=3.0.5" width="147" height="38" alt="Логотип ресторана Балкон" class="lazy__img">
        </a>

        <a class="nav-item nav-link g-color-blue is-bold d-md-none" href="tel:+78129259450">+7(812)925-94-50</a>

        <div class="navbar-collapse collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav text-uppercase">
            <a class="nav-item nav-link g-color-blue is-bold" href="tel:+78129259450">+7(812)925-94-50</a>
          </div>
          <div class="d-none d-xl-flex header__social">
            <a href="https://vk.com/balcon_loungebar" target="_blank" rel="nofollow" class="head_vk g-bg-blue">
              <i class="fa fa-vk g-color-white" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/balcon_loungebar/" target="_blank" rel="nofollow" class="head_inst g-bg-blue">
              <i class="fa fa-instagram g-color-white" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/BalconLoungeBar/" target="_blank" rel="nofollow" class="head_fb g-bg-blue">
              <i class="fa fa-facebook g-color-white" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <section class="g-bg-blue promo-booking">
        <div class="container">
          <div class="promo_inner d-md-flex justify-content-between">
            <div class="booking_logos">
              <div class="logo-item">
                <div class="logo-inner">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="49" viewbox="0 0 41 49">
                    <metadata>
                      <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
                        <rdf:rdf xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                          <rdf:description rdf:about="">
                          </rdf:description>
                        </rdf:rdf>
                      </x:xmpmeta>
                    </metadata>
                    <image id="Векторный_смарт-объект" data-name="Векторный смарт-объект" width="41" height="49" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAxCAMAAABwO3AyAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABdFBMVEUAAADkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSUAAADw6IaKAAAAenRSTlMAKmymzez+/aRoJhB21NFyDQuC8/B8CUXj3z4BhX0GqJ4DiU3p4OtGD5REDEiZ9OGP+4gTkhn3OUPvhOgkLXoC2jeXL3hxsJar1kdU0vIRHvr4BOchJcNhYpi5ulgsMBW/wbhlatiLB1VT2+VePT9fG+oaXGljW072QqdwcyAAAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4gIJEQMp5OsOKwAAAdpJREFUSMeNlOdDwjAQxU9F6p446xYX7r3Fraho3QsXTtwIKuavtyqXpOVafJ8u7/3aJJe0AAalpKY50p1MSXdkZGaBpbJzcpmsvPwCkissKmZmuUpKE8GyckapotLEqVXMQkq1KoM1tcxadfUCrLcDdVS8tYHZqwjBRlPgbmo2Gs6WP7DVLfelzdOuewUdnV2S2134S/YIp7evlS+pf0ARQdWPMzgkph02tG5klCdd/fp4jA/HJ0xdnnTxbArA282nHgazWpwYTgPM8Mf6iMswy9M5mOe7ziZIsYkFWMRyibxhGRgvgw/LFZJcxXgN/Fiuk+QGxqOAlZ/+DlS+JU66aFLMCVq82PSS4BaCGmxjuUOSuxhvwx6W+yR5gPEeHGJ5RJLHGB9CgG/uhABPeRqAM34Lz9UEUL3AUDkDCMo3y6QSngXl82Ls0gReiWhVH3qvxfimRuJupc/m+rfbd8JgvhAewFbgXvLv/sygZLGH2cen0+eXznHZDMYffw0ze4XfcEUezRbUPGLxEVsyIvcjagNGja17Vyw45d18HB80qnwkXgYSpUASpUECtQIBQsa+aiGw1KeMap8A/0LtQQlNBnI0Oaj/s2M6GBtJDgJ8xVjs6z+gjoYp8Bv1wtXUszlucgAAAABJRU5ErkJggg==">
                    </image>
                  </svg>
                </div>
                <p class="g-color-white logos-describer">
                  <strong>
                    Адрес
                  </strong>
                  <br>
                  <span>Большой проспект П.С.,
                    <br> д. 84, 5 этаж
                    <br> м. Петроградская (270 м)</span>
                </p>
              </div>
              <div class="logo-item">
                <div class="logo-inner">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewbox="0 0 44 44">
                    <metadata>
                      <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
                        <rdf:rdf xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                          <rdf:description rdf:about="">
                          </rdf:description>
                        </rdf:rdf>
                      </x:xmpmeta>
                    </metadata>
                    <image id="Векторный_смарт-объект" data-name="Векторный смарт-объект" width="44" height="44" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA81BMVEXkWSX////kWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSUAAADzI9VWAAAAT3RSTlMAABJRkLzi9ANTtPu1AV7cK8csaPf4ApKlxGRs4xZVNugo2RnKCrv8rO2d3lCOz3/AcLFgn0IQ61tA+sZdrX4VoNslBr06D9b2H/2Ut2XQPNbhOQAAAAFiS0dEUONuTLwAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfiAgkRBwjM7ttxAAABiUlEQVQ4y52V51bDMAyF3TSzGR0pSdlQKHuVVXaZZeP3fxsslxbHUsoJ919uvqNjybLEWFZG2bRsh3PHtsyyIYySogzpehWfK/IDz82Bw6jKkapRSMG1OidVb2A4bvIcTcUanKR8gtJEhZMWn6hWosDZuNMzs3N67F84zv6ZZ2xBjx2P4Fo2t6awFlGWjSEcajVbEt4yrmAo4Uiz28JbwUlGALv6va0KuIPhqitgT3fXII91THsCrujmBsCbGA5KzPB1cwvgbQz7BttB5i7AexjmZWYibx/gAwI2mYW8LsCHBGwxG3lHAB8TsM0c4mhCXQJ2GPZOAD7tETQBn8lOPL8gYHyMS1fSV8QxcIL8uiPpG5wgLp2I3Zej4RaVziRgfncP9MNj1jWJ6wb1noAePGs1xY0k9eIB/aoWUDQSbtGh3uStvytOQDX/+IguG7SVb496VmN9fH4pX/JZoQebo4gcBbR+RoE+ZEiNhgwaX5TivMFIKP3vyC00zIutiYILqNhqK7Y0/17H3wy6oxh2juf/AAAAAElFTkSuQmCC">
                    </image>
                  </svg>
                </div>
                <p class="g-color-white">
                  <strong>
                    Время работы
                  </strong>
                  <br> Вс-Чт: 14:00 - 01:00
                  <br> Пт-Сб: 14:00 - 03:00
                </p>
              </div>
              <div class="logo-item">
                <div class="logo-inner">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="47" height="43" viewbox="0 0 55 35">
                    <metadata>
                      <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
                        <rdf:rdf xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                          <rdf:description rdf:about="">
                          </rdf:description>
                        </rdf:rdf>
                      </x:xmpmeta>
                    </metadata>
                    <image id="Векторный_смарт-объект" data-name="Векторный смарт-объект" width="55" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAjCAMAAAAHQmL5AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABUFBMVEXkWSX////kWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSXkWSUAAAAgUdseAAAAbnRSTlMAACu5+ijxqvmjgYCFu+/+Pr8JoPChAfPcLipJXGAzdwQ0Whj4iRkQjPcRUuhTBpeYD8L9wxTR7lT20xUKyYs5yqn7RKtsZW0lIpoktgzdt0DiAkG+OrMvLI7AjeUta0ueaYfEfF/tSM8gcF2im0zT564AAAABYktHRG9VCGGBAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4gIJEQgocBjndgAAAXtJREFUOMud0+lXAVEcxvGbPSNKRZKU1KikRZtSUlq1SFoIKe3L7/9/2T3n3hnGLHfG88b3HPdzZswxCCnNZLYAmcVskn7VQ6bIrDZozWbV7ewAjl4nx3GuPgztup0bPP00nQBu3Q5gQEivA8CAGxR7yJAbFtLnN+RGAqPBsVAoOB7GD2ZCp5sE6SK63JTL3+Gi0zNMx8dmQb5obE7bzcdBefEFDZdYBPUtJdTc8ooisCTJ5yqv7NbWlS+0sZkisbWt5NI7ane4m6FwLy13vqzqL9u3HtDXMeeTuUONR5JDR7SOO91JSsMlT9EZqVS+w52D1mLo4pLUldQVNBlcF9ENzYLElbQd3CJ0R6rU7u4ZDDiEHmgG2lyZ5Sr4UIXkY5urspy/iFCEZLXlaiwGkMd/qCjJmujqbPfUenh10TXY7hkfeyHZEF2T7V7xsTeSTcEV39mujM99kIxT5w2zGXx+8fw37Z8Edr8eHUq2LOpGAXi6dCC8WAYv9/cPQPfRmdzES9oAAAAASUVORK5CYII=">
                    </image>
                  </svg>
                </div>
                <p class="g-color-white">
                  <strong>
                    Примерная
                    <br class="d-none d-lg-block"> стоимость блюд
                  </strong>
                  <br> Горячее от 320 р. Десерты от 150 р.
                  <br> Закуски от 320 р. Напитки от 140 р.
                </p>
              </div>
            </div>
            <div class="promo_form-wrapper">
              <form class="js-submit-booking" id="submit-booking">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <p class="h2 g-color-white">
                      <a href="tel:+78129259450" class="g-color-white is-bold phone-form">+7(812)925-94-50</a>
                    </p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <p class="h2 g-color-white is-bold is-bandera form-h2">
                      Забронируйте столик
                    </p>
                  </div>
                  <div class="col-12 col-lg-4">
                    <div class="field guests_count">
                      <div class="box">
                        <div class="sprite select_arrow"></div>
                        <select class="guests_count_select  g-color-white" name="lid[additional][guys]">
                          <option value="1 человек">на 1 человека</option>
                          <option value="2 человека">на 2 человек</option>
                          <option value="3 человека">на 3 человек</option>
                          <option selected="selected" value="4 человек">на 4 человек</option>
                          <option value="5 человек">на 5 человек</option>
                          <option value="6 человек">на 6 человек</option>
                          <option value="7 человек">на 7 человек</option>
                          <option value="8 человек">на 8 человек</option>
                          <option value="9 человек">на 9 человек</option>
                          <option value="10 человек">на 10 человек</option>
                          <option value="11 человек">на 11 человек</option>
                          <option value="12 человек">на 12 человек</option>
                          <option value="13 человек">на 13 человек</option>
                          <option value="14 человек">на 14 человек</option>
                          <option value="15 человек">на 15 человек</option>
                          <option value="16 человек">на 16 человек</option>
                          <option value="17 человек">на 17 человек</option>
                          <option value="18 человек">на 18 человек</option>
                          <option value="19 человек">на 19 человек</option>
                          <option value="20 человек">на 20 человек</option>
                          <option value="21 человек">на 21 человека</option>
                          <option value="22 человека">на 22 человека</option>
                          <option value="23 человека">на 23 человека</option>
                          <option value="24 человека">на 24 человека</option>
                          <option value="25 человек">на 25 человек</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="field date">
                      <div class="box date booking-date">
                        <div class="sprite select_arrow"></div>
                        <select name="lid[additional][day]" class="visit_date_select g-color-white" id="selectdatedatedate"></select>
                        <div class="butn cal">
                          <div class="sprite calendar"></div>
                          <div class="date g-color-white">
                            <input type="date" name="reservation_visit_date" value="2017-05-29" min="2017-05-29" class="date_input hidden" disabled="disabled">
                            <input type="text" name="visit_date_datepicker" value="29.05.17" class="datepicker datemask visit_date hasDatepicker" data-min-date="29.05.17"
                              id="dp1496078168458">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3">
                    <div class="field time label autovalidate">
                      <label for="hourreserve1" class="g-color-white d-lg-none">На какое время?</label>
                      <div class="box time">
                        <div hidden>
                          <input value="15" class="visit_date_4i hours" type="tel" max="23">
                          <span class="separator g-color-white">:</span>
                          <input id="minreserve1" value="30" class="visit_date_5i minutes" type="tel" max="59">
                        </div>
                        <input type="time" name="lid[additional][timeHour]" id="hourreserve1">
                        <!--input type="hidden" name="lid[additional][timeHour]" with_notif="true" id="timetimereserve1" value="15:30" class="visit_date_5i minutes"-->
                      </div>
                      <input name="reservation_visit_time" value="15:00:00" step="900" class="time_input" disabled="disabled" type="time" hidden>

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <div class="field name label booking">
                          <label for="reservation_name_5106422" class="g-color-white d-lg-none">Имя:</label>
                          <input placeholder="Иван Иванов" class="reservation_name  russian_name ui-autocomplete-input" id="reservation_name_5106422"
                            name="lid[name]" autocomplete="off" type="text" required>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="field phone label booking">
                          <label for="reservation_phone_5106422" class="g-color-white d-lg-none">Телефон:</label>
                          <input placeholder="" class="phonemask phone-input bfh-phone" id="reservation_phone_5106422" name="lid[phone]" data-format="+7 (ddd) ddd-dddd"
                            type="tel" required>
                        </div>
                      </div>
                    </div>
                    <div class="field label booking">
                      <textarea placeholder="Пожелания (необязательно): у окна, на диванчиках и т.п." rows="2" name="lid[additional][comment]"></textarea>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <p class="g-color-white booking_form_about">
                      Бронь будет подтверждена в течение 5* минут. Если возникли вопросы — мы вам перезвоним
                    </p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <input type="hidden" name="with_notif" value="true">
                    <input type="hidden" name="without_uniq" value="true">
                    <input type="hidden" name="project_title" value="balcone_bron">
                    <button type="submit" class="btn btn-primary mt-20 g-color-white g-bg-red booking">Забронировать столик</button>
                  </div>
                </div>
              </form>
            </div>
            <a class="scroll-down d-none d-lg-block js-scroll-down" href="#action">
              <div class="is-flex justify-content-center flex-column text-center">
                <p class="g-color-white">Получите десерт в подарок!</p>
                <p class="g-color-white scroll-fa animated bounce">
                  <i class="fa fa-angle-double-down"></i>
                </p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <section class="bg-two">
        <div class="container">
          <h2 class="g-color-white text-center">
            <span>Забронируйте столик</span>
            <br>
            <strong class="">Отдохните в хорошей компании</strong>
          </h2>
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="bg-two_logos">
                <div class="logo-inner  text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="95" height="145" viewbox="0 0 95 145">
                    <metadata>
                      <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
                        <rdf:rdf xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                          <rdf:description rdf:about="">
                          </rdf:description>
                        </rdf:rdf>
                      </x:xmpmeta>
                    </metadata>
                    <image id="Векторный_смарт-объект" data-name="Векторный смарт-объект" width="95" height="145" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF8AAACRCAMAAACScJQDAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC3FBMVEXW19j////W19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19jW19gAAACIEmsNAAAA8nRSTlMAAAjOTGKvHQrj9HgJnPjiYwdzqPvpgSd7gr6HRA0MpWl927CQXEpAOTAlIBBB31BO/ubEiTKV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">
                    </image>
                  </svg>
                </div>
                <p class="g-color-white text-center bg-two_logos-describes">
                  <strong class="">
                    Особенное отношение
                  </strong>
                  <br> Мы вас встретим и учтем пожелания
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="bg-two_logos">
                <div class="logo-inner text-center">
                  <img src="assets/img/pig.png" alt="" class="pig">
                </div>
                <p class="g-color-white text-center bg-two_logos-describes">
                  <strong>
                    Это бесплатно
                  </strong>
                  <br> Бронь не влияет на счет
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="bg-two_logos">
                <div class="logo-inner text-center">
                  <img src="assets/img/clock.png" alt="" class="clock">
                </div>
                <p class="g-color-white text-center bg-two_logos-describes">
                  <strong>
                    Экономьте время
                  </strong>
                  <br> Ваш столик будет ждать вас
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section id="action" class="g-bg-blue pt-61 pb-95 xs-pt-40 action">
        <div class="container">
          <h2 class="g-color-white text-left text-uppercase">
            <strong> Получи </strong>
            <br>
            <strong class="g-bg-red action_price g-font-italic">десерт в подарок
              <span class="small">*</span>
            </strong>
          </h2>
          <p class="g-color-white mt-41 extra-small">* Заполни форму и получи промо-код. Покажи его официанту и получи десерт.</p>
          <div class="row justify-center">
            <div class="col-12 col-md-6">
              <form id="action__form" class="d-lg-flex">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="lid[name]" placeholder="Имя" required="required">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control bfh-phone" id="tel" name="lid[phone]" data-format="+7 (ddd) ddd-dddd" placeholder="Телефон"
                    required="required">
                  <small id="phoneHelp" class="form-text invalid-feedback">Ваш телефон уже зарегистрирован</small>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="lid[email]" required="required" placeholder="Электронная почта">
                  <small id="emailHelp" class="form-text invalid-feedback">Ваш email уже зарегистрирован</small>
                </div>
                <input type="hidden" name="project_title" class="js-pr_name" value="balcone_offer">
                <input type="hidden" name="with_promocode" value="true">
                <button type="submit" class="btn btn-primary mt-20 g-color-white g-bg-red text-uppercase">Отправить</button>
              </form>
            </div>

          </div>
        </div>
      </section>


      <section id="ideals" class="g-bg-blue pt-68 pb-53">
        <h2 class="g-color-white pb-18 text-uppercase text-center big">О нас</h2>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">

              <div class="ideals-bg"></div>
            </div>
            <div class="col-12 col-md-6">
              <div class="container">
                <p class="g-color-white text-center ideal__p">
                  <span class="ideal__left"></span>
                  <span class="ideal__left-top"></span>
                  <span class="ideal__left-bottom"></span>
                  <span class="ideal__right-bottom"></span>
                  <span class="ideal__right-top"></span>
                  <span class="ideal__right"></span>
                  «Всё началось с простой, но актуальной идеи: нам хотелось создать уютный и современный ресторан, в котором каждая деталь
                  ориентирована на главных героев заведения — наших гостей, и где комфорт и сервис превыше всего.
                  <br>
                  <br> В поисках идеального баланса интерьера, ресторана и паровых коктейлей появился лаунж-бар
                  <br>
                  <span class="g-color-red">«BALCON»</span>.</p>
              </div>

            </div>
          </div>
        </div>
      </section>


      <section class="pb-95 pt-61 pb-95 xs-pt-40">
        <div class="booking_gallery"  onclick="yaCounter46405953.reachGoal ('book-slide'); return true;">
          <div class="owl-carousel">
            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__01-1.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>

            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__02.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>

            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__03.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>

            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__04.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>
            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__05.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>
            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__06.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>
            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__07-1.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>
            <div class="int__img owl-item ">
              <img data-lazy="assets/img/gal/kitchen__08-1.jpg?ver=3.0.5" alt="Интерьер ресторана Балкон" width="290" height="163" class="lazy__img">
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="alert alert-success js-alert-booking" role="alert">
      <strong class="alert-heading">Спасибо!</strong> Ваша заявка принята. Мы свяжемся с Вами!
    </div>
    <div class="alert alert-success js-alert-sms" role="alert">
      <strong class="alert-heading">Спасибо!</strong> Ваша заявка принята. Ваш промокод пришел по sms и по email.
    </div>
    <div class="alert alert-danger" role="alert">
      <strong class="alert-heading">Телефон либо e-mail уже зарегистрирован!</strong> Пожалуйста, дождитесь ответа
    </div>
    <footer class="g-bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <p class="g-color-white">Сайт разработан
              <a href="http://skyspace.pro/" target="_blank" rel="nofollow" class="g-color-white">SKYSPACEPRO</a>.</p>
          </div>
        </div>

      </div>
    </footer>
    <!-- End Footer -->
    <script data-main="assets/js/app.js?ver=3.0.5" src="assets/js/lib/require.js?ver=3.0.5"></script>
  </body>
</body>

</html>