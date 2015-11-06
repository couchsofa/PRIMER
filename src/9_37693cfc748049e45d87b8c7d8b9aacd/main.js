function ready(fn) {
	if (document.readyState != 'loading'){
		fn()
	} else {
		document.addEventListener('DOMContentLoaded', fn)
	}
};

if (typeof String.prototype.startsWith != 'function') {
	String.prototype.startsWith = function (str){
		return this.slice(0, str.length) == str;
	};
}

$.fn.preload = function() {
		this.each(function(){
			$('<img/>')[0].src = this;
		});
}

$(['bg0.gif','bg1.gif','bg2.gif','bg3.gif']).preload();

function restoreTerm(term){
	term.setBackgroundColor("#000000")
	term.setTextColor("#00E61B")
	term.blinkingCursor(true)
};

$(document).ready(function(){
		$(window).resize(function(){
				$('#foo').css({
						position:'absolute',
						left: ($(window).width() - $('#foo').outerWidth())/2
				});
		});
		// To initially run the function:
		$(window).resize();
});


ready(
	function(){
		var term = new Terminal()
		var foo = document.getElementById('foo')
		var currentDir = "/"

		restoreTerm(term)

		foo.appendChild(term.html)

		var switchHost = function(hostID) {
			colors = ['#ADC299', '#E6E65C', '#99FF66', '#8AB8E6']
			term.setTextColor(colors[hostID])
		}

		var twoOptionValidate = function(opt, opt2) {
			return (typeof opt === 'undefined' || opt.replace(/\s/g, '').length == 0) || (opt2 == 'undefined' || opt2.replace(/\s/g, '').length == 0)
		}

		var playConnectionSeq = function() {
			$('#foo').fadeOut('slow')
			$('body').fadeOut('slow')
			$('body').css('background-image','url(bg'+output+'.gif)')
			$('body').css('background-size','cover')
			//$('body').fadeIn('slow')
			setTimeout(function(){
				term.clear()
				//$('body').fadeOut('slow')
				if ( output == 3 ) {
					window.location = "../10_23693cff748o49r45d77b6c7d1b9afcd/";
				}
				host = opt.substr(opt.indexOf("@") + 1);
				term.print(msg)
				term.print(' ')
				term.print('['+host+']: Connection established!')
				switchHost(output)
				$('body').css('background-image', 'none')
				$('body').css('background-color', '#000000')
				$('body').fadeIn('slow')
				$('#foo').fadeIn('slow')
				$('input').focus()
			},1500)
		}

		function f(lastCommand) {
			term.input("",

				function (userInput) {
					lastCommand = userInput
					userInput = userInput.split(' ')
					cmd = userInput.shift()
					opt = userInput.shift()

					if ( userInput.length > 0 ) {
						opt2 = userInput.join([separator = ' '])
					} else {
						opt2 = 'undefined'
					}

					switch(cmd) {

						case 'credits':
							draw()
						break;

						case 'whoami':
							term.setBackgroundColor("#000000")
							term.setTextColor("#FF1111")
							output = JSON.parse(whoami())
							for (var line in output) {
								term.print(output[line])
							}
							glitch.replace(foo)
						break;

						case 'connect':
							if (typeof opt === 'undefined' ||
									opt.replace(/\s/g, '').length == 0) {
								term.print('usage: connect [user]@[host]')
							} else {
								output = JSON.parse(connect(opt, '#'))[0];
								if (output.startsWith('Error:')) {
									term.print(output)
								} else {
									term.password( opt + '\'s password: ',
										function (password){
											output = JSON.parse(connect(opt, password))
											msg = output[1]
											output = output[0]
											if (typeof output === 'string') {
												term.print(output)
											} else {
												currentDir = '/'
												playConnectionSeq()
											}
											f(lastCommand)
										})
									return false;
								}
							}
						break;

						case 'date':
							term.print(date())
						break;

						case 'hash':
							if (twoOptionValidate(opt,opt2)) {
								term.print('usage: hash [type] [file|string]')
							} else {
								file = JSON.parse(hash(opt, opt2, currentDir))
								term.print(' ')
								term.print(file)
								term.print(' ')
							}
						break;

						case 'decode':
							if (twoOptionValidate(opt,opt2)) {
								term.print('usage: decode [type] [file|string]')
							} else {
								file = JSON.parse(decode(opt, opt2, currentDir))
								term.print(' ')
								term.print(file)
								term.print(' ')
							}
						break;

						case 'encode':
							if (twoOptionValidate(opt,opt2)) {
								term.print('usage: encode [type] [file|string]')
							} else {
								file = JSON.parse(encode(opt, opt2, currentDir))
								term.print(' ')
								term.print(file)
								term.print(' ')
							}
						break;
						
						case 'encrypt':
							if (twoOptionValidate(opt,opt2)) {
								term.print('usage: encrypt [file|string] [key]')
							} else {
								file = JSON.parse(encrypt(opt, currentDir, opt2))
								term.print(' ')
								term.print(file)
								term.print(' ')
							}
						break;
						
						case 'decrypt':
							if (twoOptionValidate(opt,opt2)) {
								term.print('usage: decrypt [file|string] [key]')
							} else {
								file = JSON.parse(decrypt(opt, currentDir, opt2))
								term.print(' ')
								term.print(file)
								term.print(' ')
							}
						break;

						case 'help':
							printHelp(term)
						break;

						case 'clear':
							term.clear()
						break;

						case 'ls':
							if (typeof opt === 'undefined' ||
									opt.replace(/\s/g, '').length == 0) {opt = currentDir};
							term.print(ls(opt, currentDir))
						break;

						case 'cat':
							if (typeof opt === 'undefined' ||
									opt.replace(/\s/g, '').length == 0) {
								term.print('usage: cat [file]')
							} else {
								file = JSON.parse(cat(opt, currentDir))
								if (Array.isArray(file)) {
									term.print(' ')
									for (var line in file) {
										term.print(file[line])
									}
									term.print(' ')
								} else {
									term.print(' ')
									term.print(file)
									term.print(' ')
								}
								
							}
						break;

						case 'ps':
							output = JSON.parse(ps())
							for (var line in output) {
								term.print(output[line])
							}
						break;

						case 'cd':
							if (typeof opt === 'undefined' ||
									opt.replace(/\s/g, '').length == 0) {
								term.print(currentDir)
							} else {
								temp = cd(opt,currentDir)
								if (temp.startsWith('Error:')) {
									term.print(temp)
								} else {
									currentDir = temp
								}
							}
						break;

						case '':
							term.print(' ')
						break;

						default:
							term.print(cmd + ': unknown command!')
					}
					//recursive call
					f(lastCommand)
				}
			)
		}
		//initial call
		f('')
	}
)