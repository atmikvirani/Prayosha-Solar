		
	function generateWind (speed = 2) {
		var c = document.createElement('canvas')
		var $ = c.getContext('2d')

		var w = (c.width = window.innerWidth)
		var h = (c.height = window.innerHeight)

		var txt = function () {
			var _t = 'WIND'.split('').join(String.fromCharCode(0x2004))
			$.font = '4em Poiret One'
			$.fillStyle = '#fff'
			$.fillText(_t, (c.width - $.measureText(_t).width) * 0.5, c.height * 0.5)
			return _t
		}

		var draw = function (a, b, t) {
			$.lineWidth = 0.8
			$.fillStyle = '#1c2b50'
			$.fillRect(0, 0, w, h)
			for (var i = -60; i < 60; i += 1) {
				$.strokeStyle = 'rgba(44, 66, 121, 0.84)'
				$.beginPath()
				$.moveTo(0, h / 2)
				for (var j = 0; j < w; j += 10) {
					$.lineTo(
						10 * Math.sin(i / 10) + j + 0.008 * j * j,
						Math.floor(
							h / 2 +
								(j / 2) * Math.sin(j / 50 - t / 50 - i / 118) +
								i * 0.9 * Math.sin(j / 25 - (i + t) / 65)
						)
					)
				}
				$.stroke()
			}
		}
		var t = 0

		window.addEventListener(
			'resize',
			function () {
				c.width = w = window.innerWidth
				c.height = h = window.innerHeight
				$.fillStyle = 'hsla(277, 95%, 55%, 1)'
			},
			false
		)

		var run = function () {
			window.requestAnimationFrame(run)
			t += speed
			draw(33, 52 * Math.sin(t / 2400), t)
			txt()
		}
		document.body.appendChild(c)
		run()
	}
	generateWind()