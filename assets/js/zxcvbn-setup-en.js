var zxcvbnCheck = {
  input : document.getElementById('password-box'),
  output : document.getElementById('explanation'),
  // container : document.getElementsByClassName("site-content-contain")[0],
  container : document.getElementById('zxcvbn'),
  init : function() {
      //console.log(zxcvbnCheck.container);
      zxcvbnCheck.input.addEventListener("keyup", function (e) {
          zxcvbnCheck.checkPassword(this.value);
      });
  },
  checkPassword : function(pwd) {
    if (pwd != '') {
      var ret = zxcvbn(pwd);        
      zxcvbnCheck.output.innerHTML = '';
      zxcvbnCheck.output.innerHTML += 'It would take <strong>'+ret.crack_times_display.online_no_throttling_10_per_second+' </strong> to crack this password, at the rate of 10 tries per second';
      if(ret.crack_times_display.online_no_throttling_10_per_second != ret.crack_times_display.offline_fast_hashing_1e10_per_second ) {
          zxcvbnCheck.output.innerHTML += ' but only <em>'+ret.crack_times_display.offline_fast_hashing_1e10_per_second+'</em> at the rate of 10&nbsp;<sup>10</sup> tries per second.';
      }
      zxcvbnCheck.output.innerHTML += '.';
      className = 'strength'+(ret.score+1);
      zxcvbnCheck.container.setAttribute("class", 'strength'+(ret.score+1));
      zxcvbnCheck.input.setAttribute("class", 'strength'+(ret.score+1)); // nothing2hide specific                        
    } else {
      zxcvbnCheck.output.innerHTML  = '';
      zxcvbnCheck.container.setAttribute('class', 'site-content-contain'); // nothing2hide specific
      zxcvbnCheck.input.removeAttribute('class');
    }
  }
}
var element =  document.getElementById('password-box');
if (typeof(element) != 'undefined' && element != null) {
	zxcvbnCheck.init();
}
