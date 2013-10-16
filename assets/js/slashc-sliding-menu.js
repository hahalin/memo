(function(a) {
	var b = {
		init : function(c) {
			return this.each(function() {
				var d = a(this);
				if (!d.data("data")) {
					var e = d.children("h1").first(), f = {
						span : e.children("span").first(),
						home : e.children("a.slashc-sliding-menu-home").first()
					};
					f.text = f.span.html(), f.home.bind("click.slashcSlidingMenu", a.proxy(function(a) {
						b.goHome.call(this), a.preventDefault()
					}, d)), e.data("d", f);
					var g = d.children("p").first(), h = {
						span : g.children("span").first(),
						back : g.children("a.slashc-sliding-menu-back").first()
					};
					h.text = h.span.html(), h.back.bind("click.slashcSlidingMenu", a.proxy(function(a) {
						b.goBack.call(this), a.preventDefault()
					}, d)), g.data("d", h);
					var i = d.children("ul").first(), j;
					d.data("lx", -i.width()).data("lh", i.height()), b._iUl(i, d), i.css("height", d.data("lh")), d.removeData("lx").removeData("lh");
					var k = {
						h1 : e,
						p : g,
						ul : i,
						lx : 0,
						ttl : f.text
					}, l;
					i.find("ul").css("display", "none");
					if (c) {
						var m = i.find("li#" + c);
						if (m.length > 0) {
							var n = m.data("d"), o, p;
							n && (n.cul.css("display", "block"), f.span.html(n.txt), i.css("left", n.lx), k.lx = n.lx, k.ttl = n.txt, l = [], m.parentsUntil(".slashc-sliding-menu").each(function() {
								o = a(this), o.is("li") && ( p = o.data("d"), p.cul.css("display", "block"), l.unshift({
									lx : p.lx,
									ttl : p.txt
								}))
							}), l.unshift({
								lx : 0,
								ttl : f.text
							}))
						}
					}
					d.data("d", k), d.data("bc", l || [{
						lx : 0,
						ttl : f.text
					}])
				}
			})
		},
		goBack : function() {
			b._sUl(this, "back")
		},
		goHome : function() {
			b._sUl(this, "home")
		},
		_iUl : function(c, d) {
			var e = d.data("lx"), f = d.data("lh");
			c.children("li").has("ul").each(function() {
				var g = a(this), h = g.children("a").first();
				cul = g.children("ul").first(), cul.height() > f && d.data("lh", cul.height()), cul.css("left", g.width()).css("top", -g.position().top), h.bind("click.slashcSlidingMenu", a.proxy(function(a) {
					var c = this.data("d");
					c && (b._rUl(c.pul), c.cul.css("display", "block"), b._sUl(c.mnu, c.lx, c.txt)), a.preventDefault()
				}, g)), g.data("d", {
					lx : e,
					cul : cul,
					pul : c,
					mnu : d,
					txt : g.children("a").children("span").html()
				}), d.data("lx", e - cul.width()), b._iUl(cul, d)
			})
		},
		_sUl : function(b, c, d) {
			var e = b.data("d"), f = b.data("bc"), g = !0;
			if (c == "back" || c == "home") {
				var h;
				c == "back" ? h = f.pop() : ( h = f[0], h && (f.length = 1)), h && ( c = h.lx, d = h.ttl), g = !1
			}
			if (d) {
				c > 0 && ( c = 0);
				if (e.lx != c) {
					var i = e.h1.data("d");
					g && f.push({
						lx : e.lx,
						ttl : e.ttl
					}), e.lx = c, e.ul.stop().animate({
						left : c
					}, 300, "linear"), e.ttl = d, i.span.stop().fadeTo(150, 0, a.proxy(function() {
						this.h1.data("d").span.html(this.ttl)
					}, e)).fadeTo(150, 1);
					var j = [], k = f.length;
					while (k--)
					j[k] = f[k].ttl;
					j.push(d), b.trigger("menuSlide", [j])
				}
			}
		},
		_rUl : function(a) {
			a.children("li").children("ul").css("display", "none")
		}
	};
	a.fn.slashcSlidingMenu = function(a, c) {
		if ( typeof c == "undefined")
			return typeof a == "undefined" ? b.init.call(this) : b[a] ? b[a].call(this) : b.init.call(this, a);
		if (b[a])
			return c ? b[a].call(this, c) : b[a].call(this);
		return this
	}, a(document).ready(function() {
		a("div.slashc-sliding-menu").slashcSlidingMenu()
	})
})(jQuery)