<!DOCTYPE html>
<html lang="zh">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="google" value="notranslate">
  <title>登陸擺攤資料</title>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=id],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=id]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=id]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=id].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  height: 65px;
  width: 383px;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card input[type=id],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #id,
  .signin-card #pw,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #id + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-id,
  .one-google p.switch-id {
  margin-bottom: 60px;
  }
  .one-google img {
  display: block;
  width: 210px;
  height: 17px;
  margin: 10px auto;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-id,
  .one-google p.switch-id {
  margin-bottom: 30px;
  }
  .signin-card #id {
  margin-bottom: 0;
  }
  .signin-card #pw {
  margin-top: -1px;
  }
  .signin-card #id.form-error,
  .signin-card #pw.form-error {
  z-index: 2;
  }
  .signin-card #id:hover,
  .signin-card #id:focus,
  .signin-card #pw:hover,
  .signin-card #pw:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style>
  .need-help-reverse {
  float: right;
  }
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  position: absolute;
  left: 50%;
  top: 380px;
  margin-left: 150px;
  }
  .dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
  }
  .dasher-tooltip p {
  margin-top: 0;
  }
  .dasher-tooltip p span {
  display: block;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
  </head>
  <body>
  <div class="wrapper">

  <div class="main content clearfix">
<div class="banner">
<h1>
  擺攤資料登錄
</h1>
</div>
<div class="card signin-card clearfix">
  <form novalidate method="POST" action="register_finish.php" id="form1">
  <h2>
  新建一筆資料
</h2>
<label  class="label" for="type1">類型(校內社團/校內校友會/校內系會/校內個人/校外單位</label>
<input  id="type1" name="type1" type="text"
       placeholder="類型"
       value=""
       spellcheck="false"> 
<label  class="label" for="unit">單位(全名)</label>
<input  id="unit" name="unit" type="text"
       placeholder="單位"
       class="">
       <label  class="label" for="ps">說明(販售/xx類型、展覽/xx類型、互動.....)</label>
<input  id="ps" name="ps" type="text"
       placeholder="說明"
       class="">
              <label  class="label" for="num">攤位數量</label>
<input  id="num" name="num" type="text"
       placeholder="攤位數量"
       class="">
        <label  class="label" for="pay">是否繳費(是/否)</label>
<input  id="pay" name="pay" type="text"
       placeholder="0"
       class="">
       <label  class="label" for="confirm">回信確認(是/否)</label>
<input  id="confirm" name="confirm" type="text"
       placeholder="0"
       class="">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="登錄">
  <label class="remember">
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  </form>
</div>

</div>
<div class="card signin-card clearfix">
  <div id="cc_iframe_parent"></div>
<p class="profile-name"></p>
  <form novalidate method="POST" action="update_finish.php" id="form2">
  <h2>
  修改一筆資料(留空的欄位不會更改)
</h2>
<a href="list.php">連結名單</a>
<label  class="no2" for="no2">編號(必填)</label>
<input  id="no2" name="no2" type="text"
       placeholder="編號"
       value=""
       spellcheck="false">
<label  class="label" for="type2">類型(校內社團/校內校友會/校內系會/校內個人/校外單位</label>
<input  id="type2" name="type2" type="text"
       placeholder="類型"
       value=""
       spellcheck="false"> 
<label  class="label" for="unit2">單位(全名)</label>
<input  id="unit2" name="unit2" type="text"
       placeholder="單位"
       class="">
       <label  class="label" for="ps2">說明(販售/xx類型、展覽/xx類型、互動.....)</label>
<input  id="ps2" name="ps2" type="text"
       placeholder="說明"
       class="">
              <label  class="label" for="num2">攤位數量</label>
<input  id="num2" name="num2" type="text"
       placeholder="攤位數量"
       class="">
        <label  class="label" for="pay2">是否繳費(是/否)</label>
<input  id="pay2" name="pay2" type="text"
       placeholder="0"
       class=""> <label  class="label" for="confirm2">回信確認(是/否)</label>
<input  id="confirm2" name="confirm2" type="text"
       placeholder="0"
       class="">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="更改">
  <label class="remember">
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  </form>
</div>
<div class="card signin-card clearfix">
  <div id="cc_iframe_parent"></div>
<p class="profile-name"></p>
  <form novalidate method="POST" action="delete_finish.php" id="form3">
  <h2>
  刪除一筆資料
</h2>
<a href="list.php">連結名單</a>
<label  class="no3" for="no3">編號(必填)</label>
<input  id="no3" name="no3" type="text"
       placeholder="編號"
       value=""
       spellcheck="false">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="刪除">
  <label class="remember">
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  </form>
</div>
<div class="one-google">
<p class="tagline">
國立成功大學學生會尖端科技研究部</br>DEPARTMENT OF HIGH-END TECHNOLOGY,STUDENT UNION, NATIONAL CHENG KUNG UNIVERSITY. 2014 COPYRIGHT.</br>06-2757575#50377
</p>
  <script>var G,Gb=function(a,b){var c=a;a&&"string"==typeof a&&(c=document.getElementById(a));if(b&&!c)throw new Ga(a);return c},Ga=function(a){this.id=a;this.toString=function(){return"No element found for id '"+this.id+"'"}};var Gc={},Gf=function(a,b,c){var d=function(a){var b=c.call(this,a);!1===b&&Gd(a);return b};a=Gb(a,!0);a.addEventListener(b,d,!1);Ge(a,b).push(d);return d},Gg=function(a,b,c){a=Gb(a,!0);var d=function(){var b=window.event,d=c.call(a,b);!1===d&&Gd(b);return d};a.attachEvent("on"+b,d);Ge(a,b).push(d);return d},Gh;Gh=window.addEventListener?Gf:window.attachEvent?Gg:void 0;var Gd=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;return!1};
var Ge=function(a,b){Gc[a]=Gc[a]||{};Gc[a][b]=Gc[a][b]||[];return Gc[a][b]};var Gi=function(){try{return new XMLHttpRequest}catch(a){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++)try{return new ActiveXObject(b[c])}catch(d){}}return null},Gj=function(){this.g=Gi();this.parameters={}};Gj.prototype.oncomplete=function(){};
Gj.prototype.send=function(a){var b=[],c;for(c in this.parameters){var d=this.parameters[c];b.push(c+"="+encodeURIComponent(d))}var b=b.join("&"),e=this.g,f=this.oncomplete;e.open("POST",a,!0);e.setRequestHeader("Content-type","application/x-www-form-urlencoded");e.onreadystatechange=function(){4==e.readyState&&f({status:e.status,text:e.responseText})};e.send(b)};
Gj.prototype.get=function(a){var b=this.oncomplete,c=this.g;c.open("GET",a,!0);c.onreadystatechange=function(){4==c.readyState&&b({status:c.status,text:c.responseText})};c.send()};var Gl=function(a){this.e=a;this.k=this.l();if(null==this.e)throw new Gk("Empty module name");};G=Gl.prototype;G.l=function(){var a=window.location.pathname;return a&&0==a.indexOf("/accounts")?"/accounts/JsRemoteLog":"/JsRemoteLog"};
G.n=function(a,b,c){var d=this.k,e=this.e||"",d=d+"?module="+encodeURIComponent(e);a=a||"";d=d+"&type="+encodeURIComponent(a);b=b||"";d=d+"&msg="+encodeURIComponent(b);c=c||[];for(a=0;a<c.length;a++)d=d+"&arg="+encodeURIComponent(c[a]);try{var f=Math.floor(1E4*Math.random()),d=d+"&r="+String(f)}catch(g){}return d};G.send=function(a,b,c){var d=new Gj;d.parameters={};try{var e=this.n(a,b,c);d.get(e)}catch(f){}};G.error=function(a,b){this.send("ERROR",a,b)};G.warn=function(a,b){this.send("WARN",a,b)};
G.info=function(a,b){this.send("INFO",a,b)};G.f=function(a){var b=this;return function(){try{return a.apply(null,arguments)}catch(c){throw b.error("Uncatched exception: "+c),c;}}};var Gk=function(){};var Gm=Gm||new Gl("uri"),Gn=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([\\w\\d\\-\\u0100-\\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$"),Go=function(a){return"http"==a.toLowerCase()?80:"https"==a.toLowerCase()?443:null},Gp=function(a,b){var c=b.match(Gn)[1]||null,d,e=b.match(Gn)[3]||null;d=e&&decodeURIComponent(e);e=Number(b.match(Gn)[4]||null)||null;if(!c||!d)return Gm.error("Invalid origin Exception",[String(b)]),!1;e||(e=Go(c));var f=a.match(Gn)[1]||null;if(!f||f.toLowerCase()!=
c.toLowerCase())return!1;c=(c=a.match(Gn)[3]||null)&&decodeURIComponent(c);if(!c||c.toLowerCase()!=d.toLowerCase())return!1;(d=Number(a.match(Gn)[4]||null)||null)||(d=Go(f));return e==d};var Gq=Gq||new Gl("check_connection"),Gr=null,Gs=null,Gt=null,Gu=function(a,b){this.c=a;this.b=b;this.a=!1};G=Gu.prototype;G.h=function(a,b){if(!b)return!1;if(0<=a.indexOf(","))return Gq.error("CheckConnection result contains comma",[a]),!1;var c=b.value;b.value=c?c+","+a:a;return!0};G.d=function(a){return this.h(a,Gs)};G.j=function(a){return this.h(a,Gt)};G.i=function(a){a=a.match("^([^:]+):(\\d*):(\\d?)$");return!a||3>a.length?null:a[1]};
G.p=function(a,b){if(!Gp(this.c,a))return!1;if(this.a||!b)return!0;"accessible"==b?(this.d(a),this.a=!0):this.i(b)==this.b&&(this.j(b)||this.d(a),this.a=!0);return!0};G.m=function(){var a;a=this.c;var b="timestamp",c=String((new Date).getTime());if(0<a.indexOf("#"))throw Object("Unsupported URL Exception: "+a);return a=0<=a.indexOf("?")?a+"&"+encodeURIComponent(b)+"="+encodeURIComponent(c):a+"?"+encodeURIComponent(b)+"="+encodeURIComponent(c)};
G.o=function(){var a=window.document.createElement("iframe"),b=a.style;b.visibility="hidden";b.width="1px";b.height="1px";b.position="absolute";b.top="-100px";a.src=this.m();a.id=this.b;Gr.appendChild(a)};
var Gv=function(a){return function(b){var c=b.origin.toLowerCase();b=b.data;for(var d=a.length,e=0;e<d&&!a[e].p(c,b);e++);}},Gw=function(){if(window.postMessage){var a;a=window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;var b=window.__CHECK_CONNECTION_CONFIG.connectivityElementId,c=window.__CHECK_CONNECTION_CONFIG.newResultElementId;(Gr=document.getElementById(a))?(b&&(Gs=document.getElementById(b)),c&&(Gt=document.getElementById(c)),Gs||Gt?a=!0:(Gq.error("Unable to locate the input element to storeCheckConnection result",
["old id: "+String(b),"new id: "+String(c)]),a=!1)):(Gq.error("Unable to locate the iframe anchor to append connection test iframe",["element id: "+a]),a=!1);if(a){a=window.__CHECK_CONNECTION_CONFIG.domainConfigs;if(!a){if(!window.__CHECK_CONNECTION_CONFIG.iframeUri){Gq.error("Missing iframe URL in old configuration");return}a=[{iframeUri:window.__CHECK_CONNECTION_CONFIG.iframeUri,domainSymbol:"youtube"}]}if(0!=a.length){for(var b=a.length,c=[],d=0;d<b;d++)c.push(new Gu(a[d].iframeUri,a[d].domainSymbol));
Gh(window,"message",Gv(c));for(d=0;d<b;d++)c[d].o()}}}},Gx=function(){if(window.__CHECK_CONNECTION_CONFIG){var a=window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;if(window.postMessage){var b=document.getElementById(a);b?b.value="1":Gq.error("Unable to locate the input element to storepostMessage test result",["element id: "+a])}}};G_checkConnectionMain=Gq.f(Gw);G_setPostMessageSupportFlag=Gq.f(Gx);
</script>
  <script>
  window.__CHECK_CONNECTION_CONFIG = {
  newResultElementId: 'checkConnection',
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\75https%3A%2F%2Faccounts.google.com\46v\075780246482',domainSymbol: 'youtube'}],
  iframeUri: '',
  iframeOrigin: '',
  connectivityElementId: 'dnConn',
  iframeParentElementId: 'cc_iframe_parent',
  postMsgSupportElementId: 'pstMsg',
  msgContent: 'accessible'
  };
  G_setPostMessageSupportFlag();
  G_checkConnectionMain();
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29tCg== */(function(){eval('var f,g=this,k=void 0,p=Array.prototype,q=function(a,b,c){return 2>=arguments.length?p.slice.call(a,b):p.slice.call(a,b,c)},s=function(a,b,c,d,e){c=a.split("."),d=g,c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(;c.length&&(e=c.shift());)c.length||b===k?d=d[e]?d[e]:d[e]={}:d[e]=b},t=function(a,b,c){if(b=typeof a,"object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;if(c=Object.prototype.toString.call(a),"[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},v=(new function(){},function(a,b){a.n=("E:"+b.message+":"+b.stack).slice(0,2048)}),w=function(a,b){for(b=Array(a);a--;)b[a]=255*Math.random()|0;return b},x=function(a,b){return a[b]<<24|a[b+1]<<16|a[b+2]<<8|a[b+3]},A=function(a,b){a.K.push(a.c.slice()),a.c[a.b]=k,z(a,a.b,b)},B=function(a,b,c){return c=function(){return a},b=function(){return c()},b.V=function(b){a=b},b},D=function(a,b,c,d){return function(){if(!d||a.s)return z(a,a.N,arguments),z(a,a.k,c),C(a,b)}},E=function(a,b,c,d){for(c=[],d=b-1;0<=d;d--)c[b-1-d]=a>>8*d&255;return c},F=function(a,b,c,d){if(8192>a.length)return String.fromCharCode.apply(null,a);for(b="",c=0;c<a.length;c+=8192)d=q(a,c,c+8192),b+=String.fromCharCode.apply(null,d);return b},C=function(a,b,c,d){return c=a.a(a.b),a.e&&c<a.e.length?(z(a,a.b,a.e.length),A(a,b)):z(a,a.b,b),d=a.t(),z(a,a.b,c),d},H=function(a,b,c,d){for(b={},b.O=a.a(G(a)),b.P=G(a),c=G(a)-1,d=G(a),b.self=a.a(d),b.D=[];c--;)d=G(a),b.D.push(a.a(d));return b},I=function(a,b,c,d){try{for(d=0;84941944608!=d;)a+=(b<<4^b>>>5)+b^d+c[d&3],d+=2654435769,b+=(a<<4^a>>>5)+a^d+c[d>>>11&3];return[a>>>24,a>>16&255,a>>8&255,a&255,b>>>24,b>>16&255,b>>8&255,b&255]}catch(e){throw e;}},z=function(a,b,c){if(b==a.b||b==a.m)a.c[b]?a.c[b].V(c):a.c[b]=B(c);else if(b!=a.d&&b!=a.f&&b!=a.h||!a.c[b])a.c[b]=J(c,a.a);b==a.r&&(a.u=k,z(a,a.b,a.a(a.b)+4))},K=function(a,b,c,d,e){for(a=a.replace(/\\r\\n/g,"\\n"),b=[],d=c=0;d<a.length;d++)e=a.charCodeAt(d),128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128);return b},L=function(a,b){return b<=a.aa?b==a.h||b==a.d||b==a.f||b==a.q?a.o:b==a.N||b==a.H||b==a.I||b==a.k?a.v:b==a.w?a.i:b==a.j||b==a.p?2:b==a.l?1:4:[1,2,4,a.o,a.v,a.i][b%a.ba]},G=function(a,b,c){if(b=a.a(a.b),!(b in a.e))throw a.g(a.Y),a.A;return a.u==k&&(a.u=x(a.e,b-4),a.C=k),a.C!=b>>3&&(a.C=b>>3,c=[0,0,0,a.a(a.r)],a.Z=I(a.u,a.C,c)),z(a,a.b,b+1),a.e[b]^a.Z[b%8]},J=function(a,b,c,d,e,h,l,n,m){return n=M,e=M.prototype,h=e.t,l=e.Q,m=e.g,d=function(){return c()},c=function(a,r,u){for(u=0,a=d[e.F],r=a===b,a=a&&a[e.F];a&&a!=h&&a!=l&&a!=n&&a!=m&&20>u;)u++,a=a[e.F];return c[e.ga+r+!(!a+(u>>2))]},d[e.J]=e,c[e.fa]=a,a=k,d},N=function(a,b,c,d,e,h){for(e=a.a(b),b=b==a.f?function(b,c,d,h){if(c=e.length,d=c-4>>3,e.da!=d){e.da=d,d=(d<<3)-4,h=[0,0,0,a.a(a.G)];try{e.ca=I(x(e,d),x(e,d+4),h)}catch(r){throw r;}}e.push(e.ca[c&7]^b)}:function(a){e.push(a)},d&&b(d&255),h=0,d=c.length;h<d;h++)b(c[h])},M=function(a,b,c,d,e,h){try{if(this.c=[],z(this,this.b,0),z(this,this.m,0),z(this,this.r,0),z(this,this.h,[]),z(this,this.d,[]),z(this,this.H,"object"==typeof window?window:g),z(this,this.I,this),z(this,this.l,0),z(this,this.p,0),z(this,this.G,0),z(this,this.f,w(4)),z(this,this.q,[]),z(this,this.k,{}),z(this,this.j,2048),this.s=true,a&&"!"==a[0])this.n=a;else{if(window.atob){for(c=window.atob(a),a=[],e=d=0;e<c.length;e++){for(h=c.charCodeAt(e);255<h;)a[d++]=h&255,h>>=8;a[d++]=h}b=a}else b=null;(this.e=b)&&this.e.length?(this.K=[],this.t()):this.g(this.U)}}catch(l){v(this,l)}};f=M.prototype,f.b=0,f.r=1,f.h=2,f.m=3,f.d=4,f.w=5,f.N=6,f.j=7,f.L=8,f.H=9,f.I=10,f.l=11,f.p=12,f.G=13,f.f=14,f.q=15,f.k=16,f.aa=17,f.R=15,f.$=12,f.S=10,f.T=42,f.ba=6,f.i=-1,f.o=-2,f.v=-3,f.U=17,f.W=21,f.B=22,f.ea=30,f.Y=31,f.X=33,f.A={},f.F="caller",f.J="toString",f.ga=34,f.fa=36,M.prototype.a=function(a,b){if(b=this.c[a],b===k)throw this.g(this.ea,0,a),this.A;return b()},M.prototype.ka=function(a,b,c,d){d=a[(b+2)%3],a[b]=a[b]-a[(b+1)%3]-d^(1==b?d<<c:d>>>c)},M.prototype.ja=function(a,b,c,d){if(3==a.length){for(c=0;3>c;c++)b[c]+=a[c];for(c=0,d=[13,8,13,12,16,5,3,10,15];9>c;c++)b[3](b,c%3,d[c])}},M.prototype.la=function(a,b){b.push(a[0]<<24|a[1]<<16|a[2]<<8|a[3]),b.push(a[4]<<24|a[5]<<16|a[6]<<8|a[7]),b.push(a[8]<<24|a[9]<<16|a[10]<<8|a[11])},M.prototype.g=function(a,b,c,d){d=this.a(this.m),a=[a,d>>8&255,d&255],c!=k&&a.push(c),0==this.a(this.h).length&&(this.c[this.h]=k,z(this,this.h,a)),c="",b&&(b.message&&(c+=b.message),b.stack&&(c+=":"+b.stack)),b=this.a(this.j),3<b&&(c=c.slice(0,b-3),b-=c.length+3,c=K(c),N(this,this.f,E(c.length,2).concat(c),this.$)),z(this,this.j,b)},f.M=[function(){},function(a,b,c,d,e){b=G(a),c=G(a),d=a.a(b),b=L(a,b),e=L(a,c),e==a.i||e==a.o?d=""+d:0<b&&(1==b?d&=255:2==b?d&=65535:4==b&&(d&=4294967295)),z(a,c,d)},function(a,b,c,d,e,h,l,n,m){if(b=G(a),c=L(a,b),0<c){for(d=0;c--;)d=d<<8|G(a);z(a,b,d)}else if(c!=a.v){if(d=G(a)<<8|G(a),c==a.i)if(c="",a.c[a.w]!=k)for(e=a.a(a.w);d--;)h=e[G(a)<<8|G(a)],c+=h;else{for(c=Array(d),e=0;e<d;e++)c[e]=G(a);for(d=c,c=[],h=e=0;e<d.length;)l=d[e++],128>l?c[h++]=String.fromCharCode(l):191<l&&224>l?(n=d[e++],c[h++]=String.fromCharCode((l&31)<<6|n&63)):(n=d[e++],m=d[e++],c[h++]=String.fromCharCode((l&15)<<12|(n&63)<<6|m&63));c=c.join("")}else for(c=Array(d),e=0;e<d;e++)c[e]=G(a);z(a,b,c)}},function(a){G(a)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),c=a.a(c),b=a.a(b),z(a,d,b[c])},function(a,b,c){b=G(a),c=G(a),b=a.a(b),z(a,c,t(b))},function(a,b,c,d,e){b=G(a),c=G(a),d=L(a,b),e=L(a,c),c!=a.h&&(d==a.i&&e==a.i?(a.c[c]==k&&z(a,c,""),z(a,c,a.a(c)+a.a(b))):e==a.o&&(0>d?(b=a.a(b),d==a.i&&(b=K(""+b)),c!=a.d&&c!=a.f&&c!=a.q||N(a,c,E(b.length,2)),N(a,c,b)):0<d&&N(a,c,E(a.a(b),d))))},function(a,b,c){b=G(a),c=G(a),z(a,c,function(a){return eval(a)}(a.a(b)))},function(a,b,c){b=G(a),c=G(a),z(a,c,a.a(c)-a.a(b))},function(a,b){b=H(a),z(a,b.P,b.O.apply(b.self,b.D))},function(a,b,c){b=G(a),c=G(a),z(a,c,a.a(c)%a.a(b))},function(a,b,c,d,e){b=G(a),c=a.a(G(a)),d=a.a(G(a)),e=a.a(G(a)),a.a(b).addEventListener(c,D(a,d,e,true),false)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)[a.a(c)]=a.a(d)},function(){},function(a,b,c){b=G(a),c=G(a),z(a,c,a.a(c)+a.a(b))},function(a,b,c){b=G(a),c=G(a),0!=a.a(b)&&z(a,a.b,a.a(c))},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)==a.a(c)&&z(a,d,a.a(d)+1)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)>a.a(c)&&z(a,d,a.a(d)+1)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),z(a,d,a.a(b)<<c)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),z(a,d,a.a(b)|a.a(c))},function(a,b){b=a.a(G(a)),A(a,b)},function(a,b,c,d){if(b=a.K.pop()){for(c=G(a);0<c;c--)d=G(a),b[d]=a.c[d];a.c=b}else z(a,a.b,a.e.length)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),z(a,d,(a.a(b)in a.a(c))+0)},function(a,b,c,d){b=G(a),c=a.a(G(a)),d=a.a(G(a)),z(a,b,D(a,c,d))},function(a,b,c){b=G(a),c=G(a),z(a,c,a.a(c)*a.a(b))},function(a,b,c,d){b=G(a),c=G(a),d=G(a),z(a,d,a.a(b)>>c)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),z(a,d,a.a(b)||a.a(c))},function(a,b,c,d,e){b=H(a),c=b.D,d=b.self,e=b.O;switch(c.length){case 0:c=new d[e];break;case 1:c=new d[e](c[0]);break;case 2:c=new d[e](c[0],c[1]);break;case 3:c=new d[e](c[0],c[1],c[2]);break;case 4:c=new d[e](c[0],c[1],c[2],c[3]);break;default:a.g(a.B);return}z(a,b.P,c)},function(a,b,c,d,e,h){if(b=G(a),c=G(a),d=G(a),e=G(a),b=a.a(b),c=a.a(c),d=a.a(d),a=a.a(e),"object"==t(b)){for(h in e=[],b)e.push(h);b=e}for(e=0,h=b.length;e<h;e+=d)c(b.slice(e,e+d),a)}],M.prototype.ia=function(a){return(a=window.performance)&&a.now?function(){return a.now()|0}:function(){return+new Date}}(),M.prototype.ha=function(a,b){return b=this.Q(),a&&a(b),b},M.prototype.t=function(a,b,c,d,e,h){try{for(b=5001,c=k,d=0,a=this.e.length;--b&&(d=this.a(this.b))<a;)try{z(this,this.m,d),e=G(this)%this.M.length,(c=this.M[e])?c(this):this.g(this.W,0,e)}catch(l){l!=this.A&&((h=this.a(this.l))?(z(this,h,l),z(this,this.l,0)):this.g(this.B,l))}b||this.g(this.X)}catch(n){try{this.g(this.B,n)}catch(m){v(this,m)}}return this.a(this.k)},M.prototype.Q=function(a,b,c,d,e,h,l,n,m,y,r){if(this.n)return this.n;try{if(this.s=false,b=this.a(this.d).length,c=this.a(this.f).length,d=this.a(this.j),this.c[this.L]&&C(this,this.a(this.L)),e=this.a(this.h),0<e.length&&N(this,this.d,E(e.length,2).concat(e),this.R),h=this.a(this.p)&255,h-=this.a(this.d).length+4,l=this.a(this.f),4<l.length&&(h-=l.length+3),0<h&&N(this,this.d,E(h,2).concat(w(h)),this.S),4<l.length&&N(this,this.d,E(l.length,2).concat(l),this.T),n=[3].concat(this.a(this.d)),window.btoa?(y=window.btoa(F(n)),m=y=y.replace(/\\+/g,"-").replace(/\\//g,"_").replace(/=/g,"")):m=k,m)m="!"+m;else for(m="",e=0;e<n.length;e++)r=n[e][this.J](16),1==r.length&&(r="0"+r),m+=r;this.a(this.d).length=b,this.a(this.f).length=c,z(this,this.j,d),a=m,this.s=true}catch(u){v(this,u),a=this.n}return a};try{window.addEventListener("unload",function(){},false)}catch(O){}s("botguard.bg",M),s("botguard.bg.prototype.invoke",M.prototype.ha);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('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');
  </script>
<script>
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var form = null;
    if (document.getElementById) {
      form = document.getElementById('gaia_loginform');
    }

    if (form && form.id &&
        (form.id.value == null || form.id.value == '')
        && (form.id.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['id'] && hashParams['id'] != '') {
        form.id.value = hashParams['id'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script>
  function gaia_setFocus() {
  var form = null;
  var isFocusableField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  if (inputElement.type != 'hidden' && inputElement.focus &&
  inputElement.style.display != 'none') {
  return true;
  }
  return false;
  };
  var isFocusableErrorField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var hasError = inputElement.className.indexOf('form-error') > -1;
  if (hasError && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  var isFocusableEmptyField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var isEmpty = inputElement.value == null || inputElement.value == '';
  if (isEmpty && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form) {
  var userAgent = navigator.userAgent.toLowerCase();
  var formFields = form.getElementsByTagName('input');
  for (var i = 0; i < formFields.length; i++) {
        var currentField = formFields[i];
        if (isFocusableErrorField(currentField)) {
          currentField.focus();
          
          var currentValue = currentField.value;
          currentField.value = '';
          currentField.value = currentValue;
          return;
        }
      }
      
      
      
        for (var j = 0; j < formFields.length; j++) {
          var currentField = formFields[j];
          if (isFocusableEmptyField(currentField)) {
            currentField.focus();
            return;
          }
        }
      
    }
  }

  
  
    gaia_attachEvent(window, 'load', gaia_setFocus);
  
  
</script>
<script>
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script>
(function() {
  var $ = function(id) { return document.getElementById(id); };
  var gaiaLoginForm = $('gaia_loginform');
  var chromeExt = 'chrome-extension://mfffpogegjflfpflabcdkioaeobkgjik';
  gaia_onChromeLoginSubmit = function(e) {
  if (window == window.parent) {
  return;
  }
  var checkboxElement = $('advanced-box');
  var chooseWhatToSync = checkboxElement && checkboxElement.checked;
  var attemptToken = new Date().getTime();
  var msg = {method: 'attemptLogin',
  id: gaiaLoginForm['id'].value,
  password: gaiaLoginForm['pw'].value,
  attemptToken: attemptToken,
  chooseWhatToSync: chooseWhatToSync};
  window.parent.postMessage(msg, chromeExt);
  console.log('Credentials sent');
  var continueUrlElement = gaiaLoginForm['continue'];
  if (continueUrlElement) {
  var prevAttemptIndex = continueUrlElement.value.indexOf('?attemptToken');
  if (prevAttemptIndex != -1) {
  continueUrlElement.value = continueUrlElement.value.substr(
  0, prevAttemptIndex);
  }
  continueUrlElement.value += '?attemptToken=' + attemptToken;
  }
  };
  gaia_attachEvent(gaiaLoginForm, 'submit', gaia_onChromeLoginSubmit);
})();
</script>
<script>
  (function(){
  var signinInput = document.getElementById('signIn');
  gaia_onLoginSubmit = function() {
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>

  </body>
</html>