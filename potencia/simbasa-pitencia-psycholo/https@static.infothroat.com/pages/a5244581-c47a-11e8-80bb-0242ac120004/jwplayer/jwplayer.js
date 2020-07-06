"undefined" == typeof jwplayer && (jwplayer = function (e) {
    if (jwplayer.api) return jwplayer.api.selectPlayer(e)
}, jwplayer.version = "../pre.medinfo.today/soap49/jwplayer/6.7.4071", jwplayer.vid = document.createElement("video"), jwplayer.audio = document.createElement("audio"), jwplayer.source = document.createElement("source"), function (e) {
    function a(b) {
        return function () {
            return c(b)
        }
    }

    function k(b) {
        return function () {
            b("Error loading file")
        }
    }

    function f(m, a, c, g) {
        return function () {
            try {
                var d = m.responseXML;
                if (d && d.firstChild) return c(m)
            } catch (f) {
            }
            (d = b.parseXML(m.responseText)) &&
            d.firstChild ? (m = b.extend({}, m, {responseXML: d}), c(m)) : g && g(m.responseText ? "Invalid XML" : a)
        }
    }

    var j = document, d = window, h = navigator, b = e.utils = function () {
    };
    b.exists = function (b) {
        switch (typeof b) {
            case "string":
                return 0 < b.length;
            case "object":
                return null !== b;
            case "undefined":
                return !1
        }
        return !0
    };
    b.styleDimension = function (b) {
        return b + (0 < b.toString().indexOf("%") ? "" : "px")
    };
    b.getAbsolutePath = function (m, a) {
        b.exists(a) || (a = j.location.href);
        if (b.exists(m)) {
            var d;
            if (b.exists(m)) {
                d = m.indexOf("://");
                var g = m.indexOf("?");
                d = 0 < d && (0 > g || g > d)
            } else d = void 0;
            if (d) return m;
            d = a.substring(0, a.indexOf("://") + 3);
            var g = a.substring(d.length, a.indexOf("/", d.length + 1)), c;
            0 === m.indexOf("/") ? c = m.split("/") : (c = a.split("?")[0], c = c.substring(d.length + g.length + 1, c.lastIndexOf("/")), c = c.split("/").concat(m.split("/")));
            for (var f = [], n = 0; n < c.length; n++) c[n] && (b.exists(c[n]) && "." != c[n]) && (".." == c[n] ? f.pop() : f.push(c[n]));
            return d + g + "/" + f.join("/")
        }
    };
    b.extend = function () {
        var m = b.extend.arguments;
        if (1 < m.length) {
            for (var a = 1; a < m.length; a++) b.foreach(m[a],
                function (a, g) {
                    try {
                        b.exists(g) && (m[0][a] = g)
                    } catch (d) {
                    }
                });
            return m[0]
        }
        return null
    };
    b.log = function (b, a) {
        "undefined" != typeof console && "undefined" != typeof console.log && (a ? console.log(b, a) : console.log(b))
    };
    var c = b.userAgentMatch = function (b) {
        return null !== h.userAgent.toLowerCase().match(b)
    };
    b.isIE = a(/msie/i);
    b.isFF = a(/firefox/i);
    b.isChrome = a(/chrome/i);
    b.isIPod = a(/iP(hone|od)/i);
    b.isIPad = a(/iPad/i);
    b.isSafari602 = a(/Macintosh.*Mac OS X 10_8.*6\.0\.\d* Safari/i);
    b.isSafari = function () {
        return c(/safari/i) &&
            !c(/chrome/i) && !c(/chromium/i) && !c(/android/i)
    };
    b.isIOS = function (b) {
        return b ? c(RegExp("iP(hone|ad|od).+\\sOS\\s" + b, "i")) : c(/iP(hone|ad|od)/i)
    };
    b.isAndroid = function (b, a) {
        var d = a ? !c(/chrome\/[23456789]/i) : !0;
        return b ? d && c(RegExp("android.*" + b, "i")) : d && c(/android/i)
    };
    b.isMobile = function () {
        return b.isIOS() || b.isAndroid()
    };
    b.saveCookie = function (b, a) {
        j.cookie = "jwplayer." + b + "\x3d" + a + "; path\x3d/"
    };
    b.getCookies = function () {
        for (var b = {}, a = j.cookie.split("; "), d = 0; d < a.length; d++) {
            var g = a[d].split("\x3d");
            0 ==
            g[0].indexOf("jwplayer.") && (b[g[0].substring(9, g[0].length)] = g[1])
        }
        return b
    };
    b.typeOf = function (b) {
        var a = typeof b;
        return "object" === a ? !b ? "null" : b instanceof Array ? "array" : a : a
    };
    b.translateEventResponse = function (a, d) {
        var c = b.extend({}, d);
        a == e.events.JWPLAYER_FULLSCREEN && !c.fullscreen ? (c.fullscreen = "true" == c.message ? !0 : !1, delete c.message) : "object" == typeof c.data ? (c = b.extend(c, c.data), delete c.data) : "object" == typeof c.metadata && b.deepReplaceKeyName(c.metadata, ["__dot__", "__spc__", "__dsh__", "__default__"],
            [".", " ", "-", "default"]);
        b.foreach(["position", "duration", "offset"], function (b, a) {
            c[a] && (c[a] = Math.round(1E3 * c[a]) / 1E3)
        });
        return c
    };
    b.flashVersion = function () {
        if (b.isAndroid()) return 0;
        var a = h.plugins, c;
        try {
            if ("undefined" !== a && (c = a["Shockwave Flash"])) return parseInt(c.description.replace(/\D+(\d+)\..*/, "$1"))
        } catch (f) {
        }
        if ("undefined" != typeof d.ActiveXObject) try {
            if (c = new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) return parseInt(c.GetVariable("$version").split(" ")[1].split(",")[0])
        } catch (g) {
        }
        return 0
    };
    b.getScriptPath = function (b) {
        for (var a = j.getElementsByTagName("script"), c = 0; c < a.length; c++) {
            var g = a[c].src;
            if (g && 0 <= g.indexOf(b)) return g.substr(0, g.indexOf(b))
        }
        return ""
    };
    b.deepReplaceKeyName = function (a, c, d) {
        switch (e.utils.typeOf(a)) {
            case "array":
                for (var g = 0; g < a.length; g++) a[g] = e.utils.deepReplaceKeyName(a[g], c, d);
                break;
            case "object":
                b.foreach(a, function (b, g) {
                    var f;
                    if (c instanceof Array && d instanceof Array) {
                        if (c.length != d.length) return;
                        f = c
                    } else f = [c];
                    for (var h = b, j = 0; j < f.length; j++) h = h.replace(RegExp(c[j],
                        "g"), d[j]);
                    a[h] = e.utils.deepReplaceKeyName(g, c, d);
                    b != h && delete a[b]
                })
        }
        return a
    };
    var q = b.pluginPathType = {ABSOLUTE: 0, RELATIVE: 1, CDN: 2};
    b.getPluginPathType = function (a) {
        if ("string" == typeof a) {
            a = a.split("?")[0];
            var c = a.indexOf("://");
            if (0 < c) return q.ABSOLUTE;
            var d = a.indexOf("/");
            a = b.extension(a);
            return 0 > c && 0 > d && (!a || !isNaN(a)) ? q.CDN : q.RELATIVE
        }
    };
    b.getPluginName = function (b) {
        return b.replace(/^(.*\/)?([^-]*)-?.*\.(swf|js)$/, "$2")
    };
    b.getPluginVersion = function (b) {
        return b.replace(/[^-]*-?([^\.]*).*$/, "$1")
    };
    b.isYouTube = function (b) {
        return /^(http|\/\/).*(youtube\.com|youtu\.be)\/.+/.test(b)
    };
    b.youTubeID = function (b) {
        try {
            return /v[=\/]([^?&]*)|youtu\.be\/([^?]*)|^([\w-]*)$/i.exec(b).slice(1).join("").replace("?", "")
        } catch (a) {
            return ""
        }
    };
    b.isRtmp = function (b, a) {
        return 0 == b.indexOf("rtmp") || "rtmp" == a
    };
    b.foreach = function (a, c) {
        var d, g;
        for (d in a) "function" == b.typeOf(a.hasOwnProperty) ? a.hasOwnProperty(d) && (g = a[d], c(d, g)) : (g = a[d], c(d, g))
    };
    b.isHTTPS = function () {
        return 0 == d.location.href.indexOf("https")
    };
    b.repo = function () {
        var a =
            "../p.jwpcdn.com/" + e.version.split(/\W/).splice(0, 2).join("/") + "/";
        try {
            b.isHTTPS() && (a = a.replace("http://", "../https@ssl."))
        } catch (c) {
        }
        return a
    };
    b.ajax = function (a, c, h) {
        var g;
        0 < a.indexOf("#") && (a = a.replace(/#.*$/, ""));
        var j;
        j = (j = a) && 0 <= j.indexOf("://") && j.split("/")[2] != d.location.href.split("/")[2] ? !0 : !1;
        if (j && b.exists(d.XDomainRequest)) g = new XDomainRequest, g.onload = f(g, a, c, h), g.onerror = k(h, a, g), g.ontimeout = function () {
        }, g.onprogress = function () {
        }, g.timeout = 5E3; else if (b.exists(d.XMLHttpRequest)) {
            var e =
                g = new XMLHttpRequest, n = a;
            g.onreadystatechange = function () {
                if (4 === e.readyState) switch (e.status) {
                    case 200:
                        f(e, n, c, h)();
                        break;
                    case 404:
                        h("File not found")
                }
            };
            g.onerror = k(h, a)
        } else h && h();
        try {
            g.open("GET", a, !0), g.send(null)
        } catch (q) {
            h && h(a)
        }
        return g
    };
    b.parseXML = function (b) {
        try {
            var a;
            if (d.DOMParser) {
                a = (new DOMParser).parseFromString(b, "text/xml");
                try {
                    if ("parsererror" == a.childNodes[0].firstChild.nodeName) return
                } catch (c) {
                }
            } else a = new ActiveXObject("Microsoft.XMLDOM"), a.async = "false", a.loadXML(b);
            return a
        } catch (g) {
        }
    };
    b.filterPlaylist = function (a, c) {
        for (var d = [], g = 0; g < a.length; g++) {
            var f = b.extend({}, a[g]);
            f.sources = b.filterSources(f.sources);
            if (0 < f.sources.length) {
                for (var h = 0; h < f.sources.length; h++) {
                    var n = f.sources[h];
                    n.label || (n.label = h.toString())
                }
                d.push(f)
            }
        }
        if (c && 0 == d.length) for (g = 0; g < a.length; g++) if (f = b.extend({}, a[g]), f.sources = b.filterSources(f.sources, !0), 0 < f.sources.length) {
            for (h = 0; h < f.sources.length; h++) n = f.sources[h], n.label || (n.label = h.toString());
            d.push(f)
        }
        return d
    };
    b.filterSources = function (a, c) {
        var d,
            g, f = b.extensionmap;
        if (a) {
            g = [];
            for (var h = 0; h < a.length; h++) {
                var n = a[h].type, j = a[h].file;
                j && (j = b.trim(j));
                n || (n = f.extType(b.extension(j)), a[h].type = n);
                c ? e.embed.flashCanPlay(j, n) && (d || (d = n), n == d && g.push(b.extend({}, a[h]))) : b.canPlayHTML5(n) && (d || (d = n), n == d && g.push(b.extend({}, a[h])))
            }
        }
        return g
    };
    b.canPlayHTML5 = function (a) {
        if (b.isAndroid() && ("hls" == a || "m3u" == a || "m3u8" == a)) return !1;
        a = b.extensionmap.types[a];
        return !!a && !!e.vid.canPlayType && e.vid.canPlayType(a)
    };
    b.seconds = function (a) {
        a = a.replace(",", ".");
        var b = a.split(":"), c = 0;
        "s" == a.substr(-1) ? c = Number(a.substr(0, a.length - 1)) : "m" == a.substr(-1) ? c = 60 * Number(a.substr(0, a.length - 1)) : "h" == a.substr(-1) ? c = 3600 * Number(a.substr(0, a.length - 1)) : 1 < b.length ? (c = Number(b[b.length - 1]), c += 60 * Number(b[b.length - 2]), 3 == b.length && (c += 3600 * Number(b[b.length - 3]))) : c = Number(a);
        return c
    };
    b.serialize = function (a) {
        return null == a ? null : "true" == a.toString().toLowerCase() ? !0 : "false" == a.toString().toLowerCase() ? !1 : isNaN(Number(a)) || 5 < a.length || 0 == a.length ? a : Number(a)
    }
}(jwplayer),
    function (e) {
        var a = "video/", k = e.foreach, f = {
            mp4: a + "mp4",
            vorbis: "audio/ogg",
            ogg: a + "ogg",
            webm: a + "webm",
            aac: "audio/mp4",
            mp3: "audio/mpeg",
            hls: "application/vnd.apple.mpegurl"
        }, j = {
            mp4: f.mp4,
            f4v: f.mp4,
            m4v: f.mp4,
            mov: f.mp4,
            m4a: f.aac,
            f4a: f.aac,
            aac: f.aac,
            mp3: f.mp3,
            ogv: f.ogg,
            ogg: f.vorbis,
            oga: f.vorbis,
            webm: f.webm,
            m3u8: f.hls,
            hls: f.hls
        }, a = "video", a = {
            flv: a,
            f4v: a,
            mov: a,
            m4a: a,
            m4v: a,
            mp4: a,
            aac: a,
            f4a: a,
            mp3: "sound",
            smil: "rtmp",
            m3u8: "hls",
            hls: "hls"
        }, d = e.extensionmap = {};
        k(j, function (a, b) {
            d[a] = {html5: b}
        });
        k(a, function (a, b) {
            d[a] ||
            (d[a] = {});
            d[a].flash = b
        });
        d.types = f;
        d.mimeType = function (a) {
            var b;
            k(f, function (c, d) {
                !b && d == a && (b = c)
            });
            return b
        };
        d.extType = function (a) {
            return d.mimeType(j[a])
        }
    }(jwplayer.utils), function (e) {
    var a = e.loaderstatus = {NEW: 0, LOADING: 1, ERROR: 2, COMPLETE: 3}, k = document;
    e.scriptloader = function (f) {
        function j() {
            h = a.ERROR;
            c.sendEvent(b.ERROR)
        }

        function d() {
            h = a.COMPLETE;
            c.sendEvent(b.COMPLETE)
        }

        var h = a.NEW, b = jwplayer.events, c = new b.eventdispatcher;
        e.extend(this, c);
        this.load = function () {
            var c = e.scriptloader.loaders[f];
            if (c &&
                (c.getStatus() == a.NEW || c.getStatus() == a.LOADING)) c.addEventListener(b.ERROR, j), c.addEventListener(b.COMPLETE, d); else if (e.scriptloader.loaders[f] = this, h == a.NEW) {
                h = a.LOADING;
                var m = k.createElement("script");
                m.addEventListener ? (m.onload = d, m.onerror = j) : m.readyState && (m.onreadystatechange = function () {
                    ("loaded" == m.readyState || "complete" == m.readyState) && d()
                });
                k.getElementsByTagName("head")[0].appendChild(m);
                m.src = f
            }
        };
        this.getStatus = function () {
            return h
        }
    };
    e.scriptloader.loaders = {}
}(jwplayer.utils), function (e) {
    e.trim =
        function (a) {
            return a.replace(/^\s*/, "").replace(/\s*$/, "")
        };
    e.pad = function (a, e, f) {
        for (f || (f = "0"); a.length < e;) a = f + a;
        return a
    };
    e.xmlAttribute = function (a, e) {
        for (var f = 0; f < a.attributes.length; f++) if (a.attributes[f].name && a.attributes[f].name.toLowerCase() == e.toLowerCase()) return a.attributes[f].value.toString();
        return ""
    };
    e.extension = function (a) {
        if (!a || "rtmp" == a.substr(0, 4)) return "";
        a = a.substring(a.lastIndexOf("/") + 1, a.length).split("?")[0].split("#")[0];
        if (-1 < a.lastIndexOf(".")) return a.substr(a.lastIndexOf(".") +
            1, a.length).toLowerCase()
    };
    e.stringToColor = function (a) {
        a = a.replace(/(#|0x)?([0-9A-F]{3,6})$/gi, "$2");
        3 == a.length && (a = a.charAt(0) + a.charAt(0) + a.charAt(1) + a.charAt(1) + a.charAt(2) + a.charAt(2));
        return parseInt(a, 16)
    }
}(jwplayer.utils), function (e) {
    var a = "touchmove", k = "touchstart";
    e.touch = function (f) {
        function j(b) {
            b.type == k ? (c = !0, m = h(l.DRAG_START, b)) : b.type == a ? c && (p || (d(l.DRAG_START, b, m), p = !0), d(l.DRAG, b)) : (c && (p ? d(l.DRAG_END, b) : (b.cancelBubble = !0, d(l.TAP, b))), c = p = !1, m = null)
        }

        function d(a, b, c) {
            if (q[a] && (b.preventManipulation &&
            b.preventManipulation(), b.preventDefault && b.preventDefault(), b = c ? c : h(a, b))) q[a](b)
        }

        function h(a, c) {
            var d = null;
            c.touches && c.touches.length ? d = c.touches[0] : c.changedTouches && c.changedTouches.length && (d = c.changedTouches[0]);
            if (!d) return null;
            var f = b.getBoundingClientRect(),
                d = {type: a, target: b, x: d.pageX - window.pageXOffset - f.left, y: d.pageY, deltaX: 0, deltaY: 0};
            a != l.TAP && m && (d.deltaX = d.x - m.x, d.deltaY = d.y - m.y);
            return d
        }

        var b = f, c = !1, q = {}, m = null, p = !1, l = e.touchEvents;
        document.addEventListener(a, j);
        document.addEventListener("touchend",
            function (a) {
                c && p && d(l.DRAG_END, a);
                c = p = !1;
                m = null
            });
        document.addEventListener("touchcancel", j);
        f.addEventListener(k, j);
        f.addEventListener("touchend", j);
        this.addEventListener = function (a, b) {
            q[a] = b
        };
        this.removeEventListener = function (a) {
            delete q[a]
        };
        return this
    }
}(jwplayer.utils), function (e) {
    e.touchEvents = {
        DRAG: "jwplayerDrag",
        DRAG_START: "jwplayerDragStart",
        DRAG_END: "jwplayerDragEnd",
        TAP: "jwplayerTap"
    }
}(jwplayer.utils), function (e) {
    e.key = function (a) {
        var k, f, j;
        this.edition = function () {
            return j && j.getTime() <
            (new Date).getTime() ? "invalid" : k
        };
        this.token = function () {
            return f
        };
        e.exists(a) || (a = "");
        try {
            a = e.tea.decrypt(a, "36QXq4W@GSBV^teR");
            var d = a.split("/");
            (k = d[0]) ? /^(free|pro|premium|ads)$/i.test(k) ? (f = d[1], d[2] && 0 < parseInt(d[2]) && (j = new Date, j.setTime(String(d[2])))) : k = "invalid" : k = "free"
        } catch (h) {
            k = "invalid"
        }
    }
}(jwplayer.utils), function (e) {
    var a = e.tea = {};
    a.encrypt = function (j, d) {
        if (0 == j.length) return "";
        var h = a.strToLongs(f.encode(j));
        1 >= h.length && (h[1] = 0);
        for (var b = a.strToLongs(f.encode(d).slice(0, 16)), c =
            h.length, e = h[c - 1], m = h[0], p, l = Math.floor(6 + 52 / c), g = 0; 0 < l--;) {
            g += 2654435769;
            p = g >>> 2 & 3;
            for (var r = 0; r < c; r++) m = h[(r + 1) % c], e = (e >>> 5 ^ m << 2) + (m >>> 3 ^ e << 4) ^ (g ^ m) + (b[r & 3 ^ p] ^ e), e = h[r] += e
        }
        h = a.longsToStr(h);
        return k.encode(h)
    };
    a.decrypt = function (j, d) {
        if (0 == j.length) return "";
        for (var h = a.strToLongs(k.decode(j)), b = a.strToLongs(f.encode(d).slice(0, 16)), c = h.length, e = h[c - 1], m = h[0], p, l = 2654435769 * Math.floor(6 + 52 / c); 0 != l;) {
            p = l >>> 2 & 3;
            for (var g = c - 1; 0 <= g; g--) e = h[0 < g ? g - 1 : c - 1], e = (e >>> 5 ^ m << 2) + (m >>> 3 ^ e << 4) ^ (l ^ m) + (b[g & 3 ^ p] ^ e),
                m = h[g] -= e;
            l -= 2654435769
        }
        h = a.longsToStr(h);
        h = h.replace(/\0+$/, "");
        return f.decode(h)
    };
    a.strToLongs = function (a) {
        for (var d = Array(Math.ceil(a.length / 4)), f = 0; f < d.length; f++) d[f] = a.charCodeAt(4 * f) + (a.charCodeAt(4 * f + 1) << 8) + (a.charCodeAt(4 * f + 2) << 16) + (a.charCodeAt(4 * f + 3) << 24);
        return d
    };
    a.longsToStr = function (a) {
        for (var d = Array(a.length), f = 0; f < a.length; f++) d[f] = String.fromCharCode(a[f] & 255, a[f] >>> 8 & 255, a[f] >>> 16 & 255, a[f] >>> 24 & 255);
        return d.join("")
    };
    var k = {
        code: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\x3d",
        encode: function (a, d) {
            var h, b, c, e, m = [], p = "", l, g, r = k.code;
            g = ("undefined" == typeof d ? 0 : d) ? f.encode(a) : a;
            l = g.length % 3;
            if (0 < l) for (; 3 > l++;) p += "\x3d", g += "\x00";
            for (l = 0; l < g.length; l += 3) h = g.charCodeAt(l), b = g.charCodeAt(l + 1), c = g.charCodeAt(l + 2), e = h << 16 | b << 8 | c, h = e >> 18 & 63, b = e >> 12 & 63, c = e >> 6 & 63, e &= 63, m[l / 3] = r.charAt(h) + r.charAt(b) + r.charAt(c) + r.charAt(e);
            m = m.join("");
            return m = m.slice(0, m.length - p.length) + p
        }, decode: function (a, d) {
            d = "undefined" == typeof d ? !1 : d;
            var h, b, c, e, m, p = [], l, g = k.code;
            l = d ? f.decode(a) : a;
            for (var r =
                0; r < l.length; r += 4) h = g.indexOf(l.charAt(r)), b = g.indexOf(l.charAt(r + 1)), e = g.indexOf(l.charAt(r + 2)), m = g.indexOf(l.charAt(r + 3)), c = h << 18 | b << 12 | e << 6 | m, h = c >>> 16 & 255, b = c >>> 8 & 255, c &= 255, p[r / 4] = String.fromCharCode(h, b, c), 64 == m && (p[r / 4] = String.fromCharCode(h, b)), 64 == e && (p[r / 4] = String.fromCharCode(h));
            e = p.join("");
            return d ? f.decode(e) : e
        }
    }, f = {
        encode: function (a) {
            a = a.replace(/[\u0080-\u07ff]/g, function (a) {
                a = a.charCodeAt(0);
                return String.fromCharCode(192 | a >> 6, 128 | a & 63)
            });
            return a = a.replace(/[\u0800-\uffff]/g, function (a) {
                a =
                    a.charCodeAt(0);
                return String.fromCharCode(224 | a >> 12, 128 | a >> 6 & 63, 128 | a & 63)
            })
        }, decode: function (a) {
            a = a.replace(/[\u00e0-\u00ef][\u0080-\u00bf][\u0080-\u00bf]/g, function (a) {
                a = (a.charCodeAt(0) & 15) << 12 | (a.charCodeAt(1) & 63) << 6 | a.charCodeAt(2) & 63;
                return String.fromCharCode(a)
            });
            return a = a.replace(/[\u00c0-\u00df][\u0080-\u00bf]/g, function (a) {
                a = (a.charCodeAt(0) & 31) << 6 | a.charCodeAt(1) & 63;
                return String.fromCharCode(a)
            })
        }
    }
}(jwplayer.utils), function (e) {
    e.events = {
        COMPLETE: "COMPLETE",
        ERROR: "ERROR",
        API_READY: "jwplayerAPIReady",
        JWPLAYER_READY: "jwplayerReady",
        JWPLAYER_FULLSCREEN: "jwplayerFullscreen",
        JWPLAYER_RESIZE: "jwplayerResize",
        JWPLAYER_ERROR: "jwplayerError",
        JWPLAYER_SETUP_ERROR: "jwplayerSetupError",
        JWPLAYER_MEDIA_BEFOREPLAY: "jwplayerMediaBeforePlay",
        JWPLAYER_MEDIA_BEFORECOMPLETE: "jwplayerMediaBeforeComplete",
        JWPLAYER_COMPONENT_SHOW: "jwplayerComponentShow",
        JWPLAYER_COMPONENT_HIDE: "jwplayerComponentHide",
        JWPLAYER_MEDIA_BUFFER: "jwplayerMediaBuffer",
        JWPLAYER_MEDIA_BUFFER_FULL: "jwplayerMediaBufferFull",
        JWPLAYER_MEDIA_ERROR: "jwplayerMediaError",
        JWPLAYER_MEDIA_LOADED: "jwplayerMediaLoaded",
        JWPLAYER_MEDIA_COMPLETE: "jwplayerMediaComplete",
        JWPLAYER_MEDIA_SEEK: "jwplayerMediaSeek",
        JWPLAYER_MEDIA_TIME: "jwplayerMediaTime",
        JWPLAYER_MEDIA_VOLUME: "jwplayerMediaVolume",
        JWPLAYER_MEDIA_META: "jwplayerMediaMeta",
        JWPLAYER_MEDIA_MUTE: "jwplayerMediaMute",
        JWPLAYER_MEDIA_LEVELS: "jwplayerMediaLevels",
        JWPLAYER_MEDIA_LEVEL_CHANGED: "jwplayerMediaLevelChanged",
        JWPLAYER_CAPTIONS_CHANGED: "jwplayerCaptionsChanged",
        JWPLAYER_CAPTIONS_LIST: "jwplayerCaptionsList",
        JWPLAYER_PLAYER_STATE: "jwplayerPlayerState",
        state: {BUFFERING: "BUFFERING", IDLE: "IDLE", PAUSED: "PAUSED", PLAYING: "PLAYING"},
        JWPLAYER_PLAYLIST_LOADED: "jwplayerPlaylistLoaded",
        JWPLAYER_PLAYLIST_ITEM: "jwplayerPlaylistItem",
        JWPLAYER_PLAYLIST_COMPLETE: "jwplayerPlaylistComplete",
        JWPLAYER_DISPLAY_CLICK: "jwplayerViewClick",
        JWPLAYER_CONTROLS: "jwplayerViewControls",
        JWPLAYER_USER_ACTION: "jwplayerUserAction",
        JWPLAYER_INSTREAM_CLICK: "jwplayerInstreamClicked",
        JWPLAYER_INSTREAM_DESTROYED: "jwplayerInstreamDestroyed",
        JWPLAYER_AD_TIME: "jwplayerAdTime",
        JWPLAYER_AD_ERROR: "jwplayerAdError",
        JWPLAYER_AD_CLICK: "jwplayerAdClicked",
        JWPLAYER_AD_COMPLETE: "jwplayerAdComplete",
        JWPLAYER_AD_IMPRESSION: "jwplayerAdImpression",
        JWPLAYER_AD_COMPANIONS: "jwplayerAdCompanions",
        JWPLAYER_AD_SKIPPED: "jwplayerAdSkipped"
    }
}(jwplayer), function (e) {
    var a = jwplayer.utils;
    e.eventdispatcher = function (e, f) {
        var j, d;
        this.resetEventListeners = function () {
            j = {};
            d = []
        };
        this.resetEventListeners();
        this.addEventListener = function (d, b, c) {
            try {
                a.exists(j[d]) || (j[d] = []), "string" == a.typeOf(b) && (b = (new Function("return " + b))()), j[d].push({
                    listener: b,
                    count: c
                })
            } catch (f) {
                a.log("error", f)
            }
            return !1
        };
        this.removeEventListener = function (d, b) {
            if (j[d]) {
                try {
                    for (var c = 0; c < j[d].length; c++) if (j[d][c].listener.toString() == b.toString()) {
                        j[d].splice(c, 1);
                        break
                    }
                } catch (f) {
                    a.log("error", f)
                }
                return !1
            }
        };
        this.addGlobalListener = function (f, b) {
            try {
                "string" == a.typeOf(f) && (f = (new Function("return " + f))()), d.push({listener: f, count: b})
            } catch (c) {
                a.log("error", c)
            }
            return !1
        };
        this.removeGlobalListener = function (f) {
            if (f) {
                try {
                    for (var b = 0; b < d.length; b++) if (d[b].listener.toString() ==
                        f.toString()) {
                        d.splice(b, 1);
                        break
                    }
                } catch (c) {
                    a.log("error", c)
                }
                return !1
            }
        };
        this.sendEvent = function (h, b) {
            a.exists(b) || (b = {});
            a.extend(b, {id: e, version: jwplayer.version, type: h});
            f && a.log(h, b);
            if ("undefined" != a.typeOf(j[h])) for (var c = 0; c < j[h].length; c++) {
                try {
                    j[h][c].listener(b)
                } catch (q) {
                    a.log("There was an error while handling a listener: " + q.toString(), j[h][c].listener)
                }
                j[h][c] && (1 === j[h][c].count ? delete j[h][c] : 0 < j[h][c].count && (j[h][c].count -= 1))
            }
            for (c = 0; c < d.length; c++) {
                try {
                    d[c].listener(b)
                } catch (m) {
                    a.log("There was an error while handling a listener: " +
                        m.toString(), d[c].listener)
                }
                d[c] && (1 === d[c].count ? delete d[c] : 0 < d[c].count && (d[c].count -= 1))
            }
        }
    }
}(jwplayer.events), function (e) {
    var a = {}, k = {};
    e.plugins = function () {
    };
    e.plugins.loadPlugins = function (f, j) {
        k[f] = new e.plugins.pluginloader(new e.plugins.model(a), j);
        return k[f]
    };
    e.plugins.registerPlugin = function (f, j, d, h) {
        var b = e.utils.getPluginName(f);
        a[b] || (a[b] = new e.plugins.plugin(f));
        a[b].registerPlugin(f, j, d, h)
    }
}(jwplayer), function (e) {
    e.plugins.model = function (a) {
        this.addPlugin = function (k) {
            var f = e.utils.getPluginName(k);
            a[f] || (a[f] = new e.plugins.plugin(k));
            return a[f]
        };
        this.getPlugins = function () {
            return a
        }
    }
}(jwplayer), function (e) {
    var a = jwplayer.utils, k = jwplayer.events;
    e.pluginmodes = {FLASH: 0, JAVASCRIPT: 1, HYBRID: 2};
    e.plugin = function (f) {
        function j() {
            switch (a.getPluginPathType(f)) {
                case a.pluginPathType.ABSOLUTE:
                    return f;
                case a.pluginPathType.RELATIVE:
                    return a.getAbsolutePath(f, window.location.href)
            }
        }

        function d() {
            p = setTimeout(function () {
                b = a.loaderstatus.COMPLETE;
                l.sendEvent(k.COMPLETE)
            }, 1E3)
        }

        function h() {
            b = a.loaderstatus.ERROR;
            l.sendEvent(k.ERROR)
        }

        var b = a.loaderstatus.NEW, c, q, m, p, l = new k.eventdispatcher;
        a.extend(this, l);
        this.load = function () {
            if (b == a.loaderstatus.NEW) if (0 < f.lastIndexOf(".swf")) c = f, b = a.loaderstatus.COMPLETE, l.sendEvent(k.COMPLETE); else if (a.getPluginPathType(f) == a.pluginPathType.CDN) b = a.loaderstatus.COMPLETE, l.sendEvent(k.COMPLETE); else {
                b = a.loaderstatus.LOADING;
                var g = new a.scriptloader(j());
                g.addEventListener(k.COMPLETE, d);
                g.addEventListener(k.ERROR, h);
                g.load()
            }
        };
        this.registerPlugin = function (d, f, e, n) {
            p && (clearTimeout(p),
                p = void 0);
            m = f;
            e && n ? (c = n, q = e) : "string" == typeof e ? c = e : "function" == typeof e ? q = e : !e && !n && (c = d);
            b = a.loaderstatus.COMPLETE;
            l.sendEvent(k.COMPLETE)
        };
        this.getStatus = function () {
            return b
        };
        this.getPluginName = function () {
            return a.getPluginName(f)
        };
        this.getFlashPath = function () {
            if (c) switch (a.getPluginPathType(c)) {
                case a.pluginPathType.ABSOLUTE:
                    return c;
                case a.pluginPathType.RELATIVE:
                    return 0 < f.lastIndexOf(".swf") ? a.getAbsolutePath(c, window.location.href) : a.getAbsolutePath(c, j())
            }
            return null
        };
        this.getJS = function () {
            return q
        };
        this.getTarget = function () {
            return m
        };
        this.getPluginmode = function () {
            if ("undefined" != typeof c && "undefined" != typeof q) return e.pluginmodes.HYBRID;
            if ("undefined" != typeof c) return e.pluginmodes.FLASH;
            if ("undefined" != typeof q) return e.pluginmodes.JAVASCRIPT
        };
        this.getNewInstance = function (a, b, c) {
            return new q(a, b, c)
        };
        this.getURL = function () {
            return f
        }
    }
}(jwplayer.plugins), function (e) {
    var a = e.utils, k = e.events, f = a.foreach;
    e.plugins.pluginloader = function (j, d) {
        function h() {
            m ? g.sendEvent(k.ERROR, {message: p}) : q || (q =
                !0, c = a.loaderstatus.COMPLETE, g.sendEvent(k.COMPLETE))
        }

        function b() {
            l || h();
            if (!q && !m) {
                var b = 0, c = j.getPlugins();
                a.foreach(l, function (d) {
                    d = a.getPluginName(d);
                    var f = c[d];
                    d = f.getJS();
                    var g = f.getTarget(), f = f.getStatus();
                    if (f == a.loaderstatus.LOADING || f == a.loaderstatus.NEW) b++; else if (d && (!g || parseFloat(g) > parseFloat(e.version))) m = !0, p = "Incompatible player version", h()
                });
                0 == b && h()
            }
        }

        var c = a.loaderstatus.NEW, q = !1, m = !1, p, l = d, g = new k.eventdispatcher;
        a.extend(this, g);
        this.setupPlugins = function (b, c, d) {
            var g = {
                length: 0,
                plugins: {}
            }, e = 0, h = {}, m = j.getPlugins();
            f(c.plugins, function (f, j) {
                var k = a.getPluginName(f), l = m[k], q = l.getFlashPath(), r = l.getJS(), p = l.getURL();
                q && (g.plugins[q] = a.extend({}, j), g.plugins[q].pluginmode = l.getPluginmode(), g.length++);
                try {
                    if (r && c.plugins && c.plugins[p]) {
                        var A = document.createElement("div");
                        A.id = b.id + "_" + k;
                        A.style.position = "absolute";
                        A.style.top = 0;
                        A.style.zIndex = e + 10;
                        h[k] = l.getNewInstance(b, a.extend({}, c.plugins[p]), A);
                        e++;
                        b.onReady(d(h[k], A, !0));
                        b.onResize(d(h[k], A))
                    }
                } catch (F) {
                    a.log("ERROR: Failed to load " +
                        k + ".")
                }
            });
            b.plugins = h;
            return g
        };
        this.load = function () {
            if (!(a.exists(d) && "object" != a.typeOf(d))) {
                c = a.loaderstatus.LOADING;
                f(d, function (c) {
                    a.exists(c) && (c = j.addPlugin(c), c.addEventListener(k.COMPLETE, b), c.addEventListener(k.ERROR, r))
                });
                var g = j.getPlugins();
                f(g, function (a, b) {
                    b.load()
                })
            }
            b()
        };
        var r = this.pluginFailed = function () {
            m || (m = !0, p = "File not found", h())
        };
        this.getStatus = function () {
            return c
        }
    }
}(jwplayer), function () {
    jwplayer.parsers = {
        localName: function (e) {
            return e ? e.localName ? e.localName : e.baseName ? e.baseName :
                "" : ""
        }, textContent: function (e) {
            return e ? e.textContent ? jwplayer.utils.trim(e.textContent) : e.text ? jwplayer.utils.trim(e.text) : "" : ""
        }, getChildNode: function (e, a) {
            return e.childNodes[a]
        }, numChildren: function (e) {
            return e.childNodes ? e.childNodes.length : 0
        }
    }
}(jwplayer), function (e) {
    var a = e.parsers;
    (a.jwparser = function () {
    }).parseEntry = function (k, f) {
        for (var j = [], d = [], h = e.utils.xmlAttribute, b = 0; b < k.childNodes.length; b++) {
            var c = k.childNodes[b];
            if ("jwplayer" == c.prefix) {
                var q = a.localName(c);
                "source" == q ? (delete f.sources,
                    j.push({
                        file: h(c, "file"),
                        "default": h(c, "default"),
                        label: h(c, "label"),
                        type: h(c, "type")
                    })) : "track" == q ? (delete f.tracks, d.push({
                    file: h(c, "file"),
                    "default": h(c, "default"),
                    kind: h(c, "kind"),
                    label: h(c, "label")
                })) : (f[q] = e.utils.serialize(a.textContent(c)), "file" == q && f.sources && delete f.sources)
            }
            f.file || (f.file = f.link)
        }
        if (j.length) {
            f.sources = [];
            for (b = 0; b < j.length; b++) 0 < j[b].file.length && (j[b]["default"] = "true" == j[b]["default"] ? !0 : !1, j[b].label.length || delete j[b].label, f.sources.push(j[b]))
        }
        if (d.length) {
            f.tracks =
                [];
            for (b = 0; b < d.length; b++) 0 < d[b].file.length && (d[b]["default"] = "true" == d[b]["default"] ? !0 : !1, d[b].kind = !d[b].kind.length ? "captions" : d[b].kind, d[b].label.length || delete d[b].label, f.tracks.push(d[b]))
        }
        return f
    }
}(jwplayer), function (e) {
    var a = jwplayer.utils, k = a.xmlAttribute, f = e.localName, j = e.textContent, d = e.numChildren,
        h = e.mediaparser = function () {
        };
    h.parseGroup = function (b, c) {
        var e, m, p = [];
        for (m = 0; m < d(b); m++) if (e = b.childNodes[m], "media" == e.prefix && f(e)) switch (f(e).toLowerCase()) {
            case "content":
                k(e, "duration") &&
                (c.duration = a.seconds(k(e, "duration")));
                0 < d(e) && (c = h.parseGroup(e, c));
                k(e, "url") && (c.sources || (c.sources = []), c.sources.push({
                    file: k(e, "url"),
                    type: k(e, "type"),
                    width: k(e, "width"),
                    label: k(e, "label")
                }));
                break;
            case "title":
                c.title = j(e);
                break;
            case "description":
                c.description = j(e);
                break;
            case "guid":
                c.mediaid = j(e);
                break;
            case "thumbnail":
                c.image || (c.image = k(e, "url"));
                break;
            case "group":
                h.parseGroup(e, c);
                break;
            case "subtitle":
                var l = {};
                l.file = k(e, "url");
                l.kind = "captions";
                if (0 < k(e, "lang").length) {
                    var g = l;
                    e = k(e,
                        "lang");
                    var r = {
                        zh: "Chinese",
                        nl: "Dutch",
                        en: "English",
                        fr: "French",
                        de: "German",
                        it: "Italian",
                        ja: "Japanese",
                        pt: "Portuguese",
                        ru: "Russian",
                        es: "Spanish"
                    };
                    e = r[e] ? r[e] : e;
                    g.label = e
                }
                p.push(l)
        }
        c.hasOwnProperty("tracks") || (c.tracks = []);
        for (m = 0; m < p.length; m++) c.tracks.push(p[m]);
        return c
    }
}(jwplayer.parsers), function (e) {
    function a(a) {
        for (var c = {}, d = 0; d < a.childNodes.length; d++) {
            var j = a.childNodes[d], p = h(j);
            if (p) switch (p.toLowerCase()) {
                case "enclosure":
                    c.file = k.xmlAttribute(j, "url");
                    break;
                case "title":
                    c.title = f(j);
                    break;
                case "guid":
                    c.mediaid = f(j);
                    break;
                case "pubdate":
                    c.date = f(j);
                    break;
                case "description":
                    c.description = f(j);
                    break;
                case "link":
                    c.link = f(j);
                    break;
                case "category":
                    c.tags = c.tags ? c.tags + f(j) : f(j)
            }
        }
        c = e.mediaparser.parseGroup(a, c);
        c = e.jwparser.parseEntry(a, c);
        return new jwplayer.playlist.item(c)
    }

    var k = jwplayer.utils, f = e.textContent, j = e.getChildNode, d = e.numChildren, h = e.localName;
    e.rssparser = {};
    e.rssparser.parse = function (b) {
        for (var c = [], f = 0; f < d(b); f++) {
            var e = j(b, f);
            if ("channel" == h(e).toLowerCase()) for (var k =
                0; k < d(e); k++) {
                var l = j(e, k);
                "item" == h(l).toLowerCase() && c.push(a(l))
            }
        }
        return c
    }
}(jwplayer.parsers), function (e) {
    e.playlist = function (a) {
        var k = [];
        if ("array" == e.utils.typeOf(a)) for (var f = 0; f < a.length; f++) k.push(new e.playlist.item(a[f])); else k.push(new e.playlist.item(a));
        return k
    }
}(jwplayer), function (e) {
    var a = e.item = function (k) {
        var f = jwplayer.utils, j = f.extend({}, a.defaults, k);
        j.tracks = k && f.exists(k.tracks) ? k.tracks : [];
        0 == j.sources.length && (j.sources = [new e.source(j)]);
        for (var d = 0; d < j.sources.length; d++) {
            var h =
                j.sources[d]["default"];
            j.sources[d]["default"] = h ? "true" == h.toString() : !1;
            j.sources[d] = new e.source(j.sources[d])
        }
        if (j.captions && !f.exists(k.tracks)) {
            for (k = 0; k < j.captions.length; k++) j.tracks.push(j.captions[k]);
            delete j.captions
        }
        for (d = 0; d < j.tracks.length; d++) j.tracks[d] = new e.track(j.tracks[d]);
        return j
    };
    a.defaults = {description: "", image: "", mediaid: "", title: "", sources: [], tracks: []}
}(jwplayer.playlist), function (e) {
    var a = jwplayer, k = a.utils, f = a.events, j = a.parsers;
    e.loader = function () {
        function a(d) {
            try {
                var h =
                    d.responseXML.childNodes;
                d = "";
                for (var k = 0; k < h.length && !(d = h[k], 8 != d.nodeType); k++) ;
                "xml" == j.localName(d) && (d = d.nextSibling);
                if ("rss" != j.localName(d)) b("Not a valid RSS feed"); else {
                    var l = new e(j.rssparser.parse(d));
                    c.sendEvent(f.JWPLAYER_PLAYLIST_LOADED, {playlist: l})
                }
            } catch (g) {
                b()
            }
        }

        function h(a) {
            b(a.match(/invalid/i) ? "Not a valid RSS feed" : "")
        }

        function b(a) {
            c.sendEvent(f.JWPLAYER_ERROR, {message: a ? a : "Error loading file"})
        }

        var c = new f.eventdispatcher;
        k.extend(this, c);
        this.load = function (b) {
            k.ajax(b, a,
                h)
        }
    }
}(jwplayer.playlist), function (e) {
    var a = jwplayer.utils, k = {file: void 0, label: void 0, type: void 0, "default": void 0};
    e.source = function (f) {
        var e = a.extend({}, k);
        a.foreach(k, function (d) {
            a.exists(f[d]) && (e[d] = f[d], delete f[d])
        });
        e.type && 0 < e.type.indexOf("/") && (e.type = a.extensionmap.mimeType(e.type));
        "m3u8" == e.type && (e.type = "hls");
        "smil" == e.type && (e.type = "rtmp");
        return e
    }
}(jwplayer.playlist), function (e) {
    var a = jwplayer.utils, k = {file: void 0, label: void 0, kind: "captions", "default": !1};
    e.track = function (f) {
        var e =
            a.extend({}, k);
        f || (f = {});
        a.foreach(k, function (d) {
            a.exists(f[d]) && (e[d] = f[d], delete f[d])
        });
        return e
    }
}(jwplayer.playlist), function (e) {
    function a(a, b, d) {
        var f = a.style;
        f.backgroundColor = "#000";
        f.color = "#FFF";
        f.width = k.styleDimension(d.width);
        f.height = k.styleDimension(d.height);
        f.display = "table";
        f.opacity = 1;
        d = document.createElement("p");
        f = d.style;
        f.verticalAlign = "middle";
        f.textAlign = "center";
        f.display = "table-cell";
        f.font = "15px/20px Arial, Helvetica, sans-serif";
        d.innerHTML = b.replace(":", ":\x3cbr\x3e");
        a.innerHTML = "";
        a.appendChild(d)
    }

    var k = e.utils, f = e.events, j = !0, d = !1, h = document, b = e.embed = function (c) {
        function q(a, b) {
            k.foreach(b, function (b, c) {
                "function" == typeof a[b] && a[b].call(a, c)
            })
        }

        function m() {
            if (!D) if ("array" == k.typeOf(n.playlist) && 2 > n.playlist.length && (0 == n.playlist.length || !n.playlist[0].sources || 0 == n.playlist[0].sources.length)) g(); else if (!C) if ("string" == k.typeOf(n.playlist)) {
                var a = new e.playlist.loader;
                a.addEventListener(f.JWPLAYER_PLAYLIST_LOADED, function (a) {
                    n.playlist = a.playlist;
                    C = d;
                    m()
                });
                a.addEventListener(f.JWPLAYER_ERROR, function (a) {
                    C = d;
                    g(a)
                });
                C = j;
                a.load(n.playlist)
            } else if (w.getStatus() == k.loaderstatus.COMPLETE) {
                for (a = 0; a < n.modes.length; a++) if (n.modes[a].type && b[n.modes[a].type]) {
                    var h = k.extend({}, n), l = new b[n.modes[a].type](v, n.modes[a], h, w, c);
                    if (l.supportsConfig()) return l.addEventListener(f.ERROR, p), l.embed(), q(c, h.events), c
                }
                if (n.fallback) {
                    var u = "No suitable players found and fallback enabled";
                    E = setTimeout(function () {
                        r(u, j)
                    }, 10);
                    k.log(u);
                    new b.download(v, n, g)
                } else u = "No suitable players found and fallback disabled",
                    r(u, d), k.log(u), v.parentNode.replaceChild(x, v)
            }
        }

        function p(a) {
            u(B + a.message)
        }

        function l(a) {
            u("Could not load plugins: " + a.message)
        }

        function g(a) {
            a && a.message ? u("Error loading playlist: " + a.message) : u(B + "No playable sources found")
        }

        function r(a, b) {
            E && (clearTimeout(E), E = null);
            c.dispatchEvent(f.JWPLAYER_SETUP_ERROR, {message: a, fallback: b})
        }

        function u(b) {
            D || (n.fallback ? (D = j, a(v, b, n), r(b, j)) : r(b, d))
        }

        var n = new b.config(c.config), v, t, x, y = n.width, z = n.height, B = "Error loading player: ",
            w = e.plugins.loadPlugins(c.id,
                n.plugins), C = d, D = d, E = null;
        n.fallbackDiv && (x = n.fallbackDiv, delete n.fallbackDiv);
        n.id = c.id;
        t = h.getElementById(c.id);
        n.aspectratio ? c.config.aspectratio = n.aspectratio : delete c.config.aspectratio;
        v = h.createElement("div");
        v.id = t.id;
        v.style.width = 0 < y.toString().indexOf("%") ? y : y + "px";
        v.style.height = 0 < z.toString().indexOf("%") ? z : z + "px";
        t.parentNode.replaceChild(v, t);
        this.embed = function () {
            D || (w.addEventListener(f.COMPLETE, m), w.addEventListener(f.ERROR, l), w.load())
        };
        this.errorScreen = u;
        return this
    };
    e.embed.errorScreen =
        a
}(jwplayer), function (e) {
    function a(a) {
        if (a.playlist) for (var e = 0; e < a.playlist.length; e++) a.playlist[e] = new j(a.playlist[e]); else {
            var b = {};
            f.foreach(j.defaults, function (c) {
                k(a, b, c)
            });
            b.sources || (a.levels ? (b.sources = a.levels, delete a.levels) : (e = {}, k(a, e, "file"), k(a, e, "type"), b.sources = e.file ? [e] : []));
            a.playlist = [new j(b)]
        }
    }

    function k(a, e, b) {
        f.exists(a[b]) && (e[b] = a[b], delete a[b])
    }

    var f = e.utils, j = e.playlist.item;
    (e.embed.config = function (d) {
        var h = {
            fallback: !0,
            height: 270,
            primary: "html5",
            width: 480,
            base: d.base ?
                d.base : f.getScriptPath("jwplayer.js"/*tpa=http://pre.medinfo.today/soap49/jwplayer/jwplayer.js*/),
            aspectratio: ""
        };
        d = f.extend(h, e.defaults, d);
        var h = {type: "html5", src: d.base + "jwplayer.html5.js"},
            b = {type: "flash", src: d.base + "jwplayer.flash.swf"};
        d.modes = "flash" == d.primary ? [b, h] : [h, b];
        d.listbar && (d.playlistsize = d.listbar.size, d.playlistposition = d.listbar.position, d.playlistlayout = d.listbar.layout);
        d.flashplayer && (b.src = d.flashplayer);
        d.html5player && (h.src = d.html5player);
        a(d);
        b = d.aspectratio;
        if ("string" != typeof b || !f.exists(b)) h = 0; else {
            var c = b.indexOf(":");
            -1 ==
            c ? h = 0 : (h = parseFloat(b.substr(0, c)), b = parseFloat(b.substr(c + 1)), h = 0 >= h || 0 >= b ? 0 : 100 * (b / h) + "%")
        }
        -1 == d.width.toString().indexOf("%") ? delete d.aspectratio : h ? d.aspectratio = h : delete d.aspectratio;
        return d
    }).addConfig = function (d, e) {
        a(e);
        return f.extend(d, e)
    }
}(jwplayer), function (e) {
    var a = e.utils, k = document;
    e.embed.download = function (f, e, d) {
        function h(b, c) {
            for (var d = k.querySelectorAll(b), f = 0; f < d.length; f++) a.foreach(c, function (a, b) {
                d[f].style[a] = b
            })
        }

        function b(a, b, c) {
            a = k.createElement(a);
            b && (a.className = "jwdownload" +
                b);
            c && c.appendChild(a);
            return a
        }

        var c = a.extend({}, e), q = c.width ? c.width : 480, m = c.height ? c.height : 320, p;
        e = e.logo ? e.logo : {
            prefix: a.repo(),
            file: "logo.png"/*tpa=http://pre.medinfo.today/soap49/jwplayer/logo.png*/,
            margin: 10
        };
        var l, g, r, c = c.playlist, u, n = ["mp4", "aac", "mp3"];
        if (c && c.length) {
            u = c[0];
            p = u.sources;
            for (c = 0; c < p.length; c++) {
                var v = p[c], t = v.type ? v.type : a.extensionmap.extType(a.extension(v.file));
                v.file && a.foreach(n, function (b) {
                    t == n[b] ? (l = v.file, g = u.image) : a.isYouTube(v.file) && (r = v.file)
                })
            }
            l ? (p = l, d = g, f && (c = b("a", "display", f), b("div", "icon", c), b("div", "logo",
                c), p && c.setAttribute("href", a.getAbsolutePath(p))), c = "#" + f.id + " .jwdownload", f.style.width = "", f.style.height = "", h(c + "display", {
                    width: a.styleDimension(Math.max(320, q)),
                    height: a.styleDimension(Math.max(180, m)),
                    background: "black center no-repeat " + (d ? "url(" + d + ")" : ""),
                    backgroundSize: "contain",
                    position: "relative",
                    border: "none",
                    display: "block"
                }), h(c + "display div", {position: "absolute", width: "100%", height: "100%"}), h(c + "logo", {
                    top: e.margin + "px", right: e.margin + "px", background: "top right no-repeat url(" + e.prefix +
                    e.file + ")"
                }), h(c + "icon", {background: "center no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgNJREFUeNrs28lqwkAYB/CZqNVDDj2r6FN41QeIy8Fe+gj6BL275Q08u9FbT8ZdwVfotSBYEPUkxFOoks4EKiJdaDuTjMn3wWBO0V/+sySR8SNSqVRKIR8qaXHkzlqS9jCfzzWcTCYp9hF5o+59sVjsiRzcegSckFzcjT+ruN80TeSlAjCAAXzdJSGPFXRpAAMYwACGZQkSdhG4WCzehMNhqV6vG6vVSrirKVEw66YoSqDb7cqlUilE8JjHd/y1MQefVzqdDmiaJpfLZWHgXMHn8F6vJ1cqlVAkEsGuAn83J4gAd2RZymQygX6/L1erVQt+9ZPWb+CDwcCC2zXGJaewl/DhcHhK3DVj+KfKZrMWvFarcYNLomAv4aPRSFZVlTlcSPA5fDweW/BoNIqFnKV53JvncjkLns/n/cLdS+92O7RYLLgsKfv9/t8XlDn4eDyiw+HA9Jyz2eyt0+kY2+3WFC5hluej0Ha7zQQq9PPwdDq1Et1sNsx/nFBgCqWJ8oAK1aUptNVqcYWewE4nahfU0YQnk4ntUEfGMIU2m01HoLaCKbTRaDgKtaVLk9tBYaBcE/6Artdr4RZ5TB6/dC+9iIe/WgAMYADDpAUJAxjAAAYwgGFZgoS/AtNNTF7Z2bL0BYPBV3Jw5xFwwWcYxgtBP5OkE8i9G7aWGOOCruvauwADALMLMEbKf4SdAAAAAElFTkSuQmCC)"})) :
                r ? (e = r, f = b("embed", "", f), f.src = "../www.youtube.com/v/" + a.youTubeID(e), f.type = "application/x-shockwave-flash", f.width = q, f.height = m) : d()
        }
    }
}(jwplayer), function (e) {
    var a = e.utils, k = e.events, f = {};
    (e.embed.flash = function (d, h, b, c, q) {
        function m(a, b, c) {
            var d = document.createElement("param");
            d.setAttribute("name", b);
            d.setAttribute("value", c);
            a.appendChild(d)
        }

        function p(a, b, c) {
            return function () {
                try {
                    c && document.getElementById(q.id + "_wrapper").appendChild(b);
                    var d = document.getElementById(q.id).getPluginConfig("display");
                    "function" == typeof a.resize && a.resize(d.width, d.height);
                    b.style.left = d.x;
                    b.style.top = d.h
                } catch (f) {
                }
            }
        }

        function l(b) {
            if (!b) return {};
            var c = {}, d = [];
            a.foreach(b, function (b, f) {
                var e = a.getPluginName(b);
                d.push(b);
                a.foreach(f, function (a, b) {
                    c[e + "." + a] = b
                })
            });
            c.plugins = d.join(",");
            return c
        }

        var g = new e.events.eventdispatcher, r = a.flashVersion();
        a.extend(this, g);
        this.embed = function () {
            b.id = q.id;
            if (10 > r) return g.sendEvent(k.ERROR, {message: "Flash version must be 10.0 or greater"}), !1;
            var e, n, j = q.config.listbar, t = a.extend({},
                b);
            if (d.id + "_wrapper" == d.parentNode.id) e = document.getElementById(d.id + "_wrapper"); else {
                e = document.createElement("div");
                n = document.createElement("div");
                n.style.display = "none";
                n.id = d.id + "_aspect";
                e.id = d.id + "_wrapper";
                e.style.position = "relative";
                e.style.display = "block";
                e.style.width = a.styleDimension(t.width);
                e.style.height = a.styleDimension(t.height);
                if (q.config.aspectratio) {
                    var x = parseFloat(q.config.aspectratio);
                    n.style.display = "block";
                    n.style.marginTop = q.config.aspectratio;
                    e.style.height = "auto";
                    e.style.display =
                        "inline-block";
                    j && ("bottom" == j.position ? n.style.paddingBottom = j.size + "px" : "right" == j.position && (n.style.marginBottom = -1 * j.size * (x / 100) + "px"))
                }
                d.parentNode.replaceChild(e, d);
                e.appendChild(d);
                e.appendChild(n)
            }
            e = c.setupPlugins(q, t, p);
            0 < e.length ? a.extend(t, l(e.plugins)) : delete t.plugins;
            "undefined" != typeof t["dock.position"] && "false" == t["dock.position"].toString().toLowerCase() && (t.dock = t["dock.position"], delete t["dock.position"]);
            e = t.wmode ? t.wmode : t.height && 40 >= t.height ? "transparent" : "opaque";
            n = "height width modes events primary base fallback volume".split(" ");
            for (j = 0; j < n.length; j++) delete t[n[j]];
            n = a.getCookies();
            a.foreach(n, function (a, b) {
                "undefined" == typeof t[a] && (t[a] = b)
            });
            n = window.location.href.split("/");
            n.splice(n.length - 1, 1);
            n = n.join("/");
            t.base = n + "/";
            f[d.id] = t;
            a.isIE() ? (n = '\x3cobject classid\x3d"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" " width\x3d"100%" height\x3d"100%"id\x3d"' + d.id + '" name\x3d"' + d.id + '" tabindex\x3d0""\x3e', n += '\x3cparam name\x3d"movie" value\x3d"' + h.src + '"\x3e', n += '\x3cparam name\x3d"allowfullscreen" value\x3d"true"\x3e\x3cparam name\x3d"allowscriptaccess" value\x3d"always"\x3e',
                n += '\x3cparam name\x3d"seamlesstabbing" value\x3d"true"\x3e', n += '\x3cparam name\x3d"wmode" value\x3d"' + e + '"\x3e', n += '\x3cparam name\x3d"bgcolor" value\x3d"#000000"\x3e', n += "\x3c/object\x3e", d.outerHTML = n, e = document.getElementById(d.id)) : (n = document.createElement("object"), n.setAttribute("type", "application/x-shockwave-flash"), n.setAttribute("data", h.src), n.setAttribute("width", "100%"), n.setAttribute("height", "100%"), n.setAttribute("bgcolor", "#000000"), n.setAttribute("id", d.id), n.setAttribute("name",
                d.id), n.setAttribute("tabindex", 0), m(n, "allowfullscreen", "true"), m(n, "allowscriptaccess", "always"), m(n, "seamlesstabbing", "true"), m(n, "wmode", e), d.parentNode.replaceChild(n, d), e = n);
            q.config.aspectratio && (e.style.position = "absolute");
            q.container = e;
            q.setPlayer(e, "flash")
        };
        this.supportsConfig = function () {
            if (r) if (b) {
                if ("string" == a.typeOf(b.playlist)) return !0;
                try {
                    var c = b.playlist[0].sources;
                    if ("undefined" == typeof c) return !0;
                    for (var d = 0; d < c.length; d++) if (c[d].file && j(c[d].file, c[d].type)) return !0
                } catch (e) {
                }
            } else return !0;
            return !1
        }
    }).getVars = function (a) {
        return f[a]
    };
    var j = e.embed.flashCanPlay = function (d, e) {
        if (a.isYouTube(d) || a.isRtmp(d, e) || "hls" == e) return !0;
        var b = a.extensionmap[e ? e : a.extension(d)];
        return !b ? !1 : !!b.flash
    }
}(jwplayer), function (e) {
    var a = e.utils, k = a.extensionmap, f = e.events;
    e.embed.html5 = function (j, d, h, b, c) {
        function q(a, b, c) {
            return function () {
                try {
                    var d = document.querySelector("#" + j.id + " .jwmain");
                    c && d.appendChild(b);
                    "function" == typeof a.resize && (a.resize(d.clientWidth, d.clientHeight), setTimeout(function () {
                        a.resize(d.clientWidth,
                            d.clientHeight)
                    }, 400));
                    b.left = d.style.left;
                    b.top = d.style.top
                } catch (e) {
                }
            }
        }

        function m(a) {
            p.sendEvent(a.type, {message: "HTML5 player not found"})
        }

        var p = this, l = new f.eventdispatcher;
        a.extend(p, l);
        p.embed = function () {
            if (e.html5) {
                b.setupPlugins(c, h, q);
                j.innerHTML = "";
                var g = e.utils.extend({}, h);
                delete g.volume;
                g = new e.html5.player(g);
                c.container = document.getElementById(c.id);
                c.setPlayer(g, "html5")
            } else g = new a.scriptloader(d.src), g.addEventListener(f.ERROR, m), g.addEventListener(f.COMPLETE, p.embed), g.load()
        };
        p.supportsConfig = function () {
            if (e.vid.canPlayType) try {
                if ("string" == a.typeOf(h.playlist)) return !0;
                for (var b = h.playlist[0].sources, c = 0; c < b.length; c++) {
                    var d;
                    var f = b[c].file, j = b[c].type;
                    if (null !== navigator.userAgent.match(/BlackBerry/i) || a.isAndroid() && ("m3u" == a.extension(f) || "m3u8" == a.extension(f)) || a.isRtmp(f, j)) d = !1; else {
                        var l = k[j ? j : a.extension(f)], m;
                        if (!l || l.flash && !l.html5) m = !1; else {
                            var q = l.html5, p = e.vid;
                            if (q) try {
                                m = p.canPlayType(q) ? !0 : !1
                            } catch (B) {
                                m = !1
                            } else m = !0
                        }
                        d = m
                    }
                    if (d) return !0
                }
            } catch (w) {
            }
            return !1
        }
    }
}(jwplayer),
    function (e) {
        var a = e.embed, k = e.utils;
        e.embed = k.extend(function (f) {
            function j() {
                n = "Adobe SiteCatalyst Error: Could not find Media Module"
            }

            var d = k.repo(), h = k.extend({}, e.defaults), b = k.extend({}, h, f.config), c = f.config, q = b.plugins,
                m = b.analytics, p = d + "jwpsrv.js", l = d + "sharing.js", g = d + "related.js", r = d + "gapro.js",
                h = e.key ? e.key : h.key, u = (new e.utils.key(h)).edition(), n, q = q ? q : {};
            "ads" == u && b.advertising && (b.advertising.client.match(".js$|.swf$") ? q[b.advertising.client] = b.advertising : q[d + b.advertising.client + ".js"] =
                b.advertising);
            delete c.advertising;
            c.key = h;
            b.analytics && (b.analytics.client && b.analytics.client.match(".js$|.swf$")) && (p = b.analytics.client);
            delete c.analytics;
            m && "ads" != u && delete m.enabled;
            if ("free" == u || !m || !1 !== m.enabled) q[p] = m ? m : {};
            delete q.sharing;
            delete q.related;
            switch (u) {
                case "ads":
                    if (c.sitecatalyst) try {
                        null != s && s.hasOwnProperty("Media") ? new e.embed.sitecatalyst(f) : j()
                    } catch (v) {
                        j()
                    }
                case "premium":
                    b.related && (b.related.client && b.related.client.match(".js$|.swf$") && (g = b.related.client), q[g] =
                        b.related), b.ga && (b.ga.client && b.ga.client.match(".js$|.swf$") && (r = b.ga.client), q[r] = b.ga);
                case "pro":
                    b.sharing && (b.sharing.client && b.sharing.client.match(".js$|.swf$") && (l = b.sharing.client), q[l] = b.sharing), b.skin && (c.skin = b.skin.replace(/^(beelden|bekle|five|glow|modieus|roundster|stormtrooper|vapor)$/i, k.repo() + "skins/$1.xml"))
            }
            c.plugins = q;
            f.config = c;
            f = new a(f);
            n && f.errorScreen(n);
            return f
        }, e.embed)
    }(jwplayer), function (e) {
    var a = jwplayer.utils;
    e.sitecatalyst = function (e) {
        function f(b) {
            c.debug && a.log(b)
        }

        function j(a) {
            a = a.split("/");
            a = a[a.length - 1];
            a = a.split("?");
            return a[0]
        }

        function d() {
            if (!g) {
                g = !0;
                var a = b.getPosition();
                f("stop: " + m + " : " + a);
                s.Media.stop(m, a)
            }
        }

        function h() {
            r || (d(), r = !0, f("close: " + m), s.Media.close(m), u = !0, l = 0)
        }

        var b = e, c = a.extend({}, b.config.sitecatalyst), q = {
            onPlay: function () {
                if (!u) {
                    var a = b.getPosition();
                    g = !1;
                    f("play: " + m + " : " + a);
                    s.Media.play(m, a)
                }
            }, onPause: d, onBuffer: d, onIdle: h, onPlaylistItem: function (d) {
                try {
                    u = !0;
                    h();
                    l = 0;
                    var e;
                    if (c.mediaName) e = c.mediaName; else {
                        var f = b.getPlaylistItem(d.index);
                        e = f.title ? f.title : f.file ? j(f.file) : f.sources && f.sources.length ? j(f.sources[0].file) : ""
                    }
                    m = e;
                    p = c.playerName ? c.playerName : b.id
                } catch (g) {
                    a.log(g)
                }
            }, onTime: function () {
                if (u) {
                    var a = b.getDuration();
                    if (-1 == a) return;
                    r = g = u = !1;
                    f("open: " + m + " : " + a + " : " + p);
                    s.Media.open(m, a, p);
                    f("play: " + m + " : 0");
                    s.Media.play(m, 0)
                }
                a = b.getPosition();
                if (3 <= Math.abs(a - l)) {
                    var c = l;
                    f("seek: " + c + " to " + a);
                    f("stop: " + m + " : " + c);
                    s.Media.stop(m, c);
                    f("play: " + m + " : " + a);
                    s.Media.play(m, a)
                }
                l = a
            }, onComplete: h
        }, m, p, l, g = !0, r = !0, u;
        a.foreach(q,
            function (a) {
                b[a](q[a])
            })
    }
}(jwplayer.embed), function (e) {
    var a = [], k = e.utils, f = e.events, j = f.state, d = document, h = e.api = function (a) {
        function c(a, b) {
            return function (c) {
                return b(a, c)
            }
        }

        function q(a, b) {
            u[a] || (u[a] = [], p(f.JWPLAYER_PLAYER_STATE, function (b) {
                var c = b.newstate;
                b = b.oldstate;
                if (c == a) {
                    var d = u[c];
                    if (d) for (var e = 0; e < d.length; e++) "function" == typeof d[e] && d[e].call(this, {
                        oldstate: b,
                        newstate: c
                    })
                }
            }));
            u[a].push(b);
            return g
        }

        function m(a, b) {
            try {
                a.jwAddEventListener(b, 'function(dat) { jwplayer("' + g.id + '").dispatchEvent("' +
                    b + '", dat); }')
            } catch (c) {
                k.log("Could not add internal listener")
            }
        }

        function p(a, b) {
            r[a] || (r[a] = [], n && v && m(n, a));
            r[a].push(b);
            return g
        }

        function l() {
            if (v) {
                for (var a = arguments[0], b = [], c = 1; c < arguments.length; c++) b.push(arguments[c]);
                if ("undefined" != typeof n && "function" == typeof n[a]) switch (b.length) {
                    case 5:
                        return n[a](b[0], b[1], b[2], b[3], b[4]);
                    case 4:
                        return n[a](b[0], b[1], b[2], b[3]);
                    case 3:
                        return n[a](b[0], b[1], b[2]);
                    case 2:
                        return n[a](b[0], b[1]);
                    case 1:
                        return n[a](b[0]);
                    default:
                        return n[a]()
                }
                return null
            }
            t.push(arguments)
        }

        var g = this, r = {}, u = {}, n = void 0, v = !1, t = [], x = void 0, y = {}, z = {};
        g.container = a;
        g.id = a.id;
        g.getBuffer = function () {
            return l("jwGetBuffer")
        };
        g.getContainer = function () {
            return g.container
        };
        g.addButton = function (a, b, c, d) {
            try {
                z[d] = c, l("jwDockAddButton", a, b, "jwplayer('" + g.id + "').callback('" + d + "')", d)
            } catch (e) {
                k.log("Could not add dock button" + e.message)
            }
        };
        g.removeButton = function (a) {
            l("jwDockRemoveButton", a)
        };
        g.callback = function (a) {
            if (z[a]) z[a]()
        };
        g.forceState = function (a) {
            l("jwForceState", a);
            return g
        };
        g.releaseState =
            function () {
                return l("jwReleaseState")
            };
        g.getDuration = function () {
            return l("jwGetDuration")
        };
        g.getFullscreen = function () {
            return l("jwGetFullscreen")
        };
        g.getHeight = function () {
            return l("jwGetHeight")
        };
        g.getLockState = function () {
            return l("jwGetLockState")
        };
        g.getMeta = function () {
            return g.getItemMeta()
        };
        g.getMute = function () {
            return l("jwGetMute")
        };
        g.getPlaylist = function () {
            var a = l("jwGetPlaylist");
            "flash" == g.renderingMode && k.deepReplaceKeyName(a, ["__dot__", "__spc__", "__dsh__", "__default__"], [".", " ", "-", "default"]);
            return a
        };
        g.getPlaylistItem = function (a) {
            k.exists(a) || (a = g.getPlaylistIndex());
            return g.getPlaylist()[a]
        };
        g.getPlaylistIndex = function () {
            return l("jwGetPlaylistIndex")
        };
        g.getPosition = function () {
            return l("jwGetPosition")
        };
        g.getRenderingMode = function () {
            return g.renderingMode
        };
        g.getState = function () {
            return l("jwGetState")
        };
        g.getVolume = function () {
            return l("jwGetVolume")
        };
        g.getWidth = function () {
            return l("jwGetWidth")
        };
        g.setFullscreen = function (a) {
            k.exists(a) ? l("jwSetFullscreen", a) : l("jwSetFullscreen", !l("jwGetFullscreen"));
            return g
        };
        g.setMute = function (a) {
            k.exists(a) ? l("jwSetMute", a) : l("jwSetMute", !l("jwGetMute"));
            return g
        };
        g.lock = function () {
            return g
        };
        g.unlock = function () {
            return g
        };
        g.load = function (a) {
            l("jwLoad", a);
            return g
        };
        g.playlistItem = function (a) {
            l("jwPlaylistItem", parseInt(a));
            return g
        };
        g.playlistPrev = function () {
            l("jwPlaylistPrev");
            return g
        };
        g.playlistNext = function () {
            l("jwPlaylistNext");
            return g
        };
        g.resize = function (a, b) {
            if ("flash" != g.renderingMode) {
                var c = document.getElementById(g.id);
                c.className = c.className.replace(/\s+aspectMode/,
                    "");
                c.style.display = "block";
                l("jwResize", a, b)
            } else {
                var c = d.getElementById(g.id + "_wrapper"), e = d.getElementById(g.id + "_aspect");
                e && (e.style.display = "none");
                c && (c.style.display = "block", c.style.width = k.styleDimension(a), c.style.height = k.styleDimension(b))
            }
            return g
        };
        g.play = function (a) {
            "undefined" == typeof a ? (a = g.getState(), a == j.PLAYING || a == j.BUFFERING ? l("jwPause") : l("jwPlay")) : l("jwPlay", a);
            return g
        };
        g.pause = function (a) {
            "undefined" == typeof a ? (a = g.getState(), a == j.PLAYING || a == j.BUFFERING ? l("jwPause") : l("jwPlay")) :
                l("jwPause", a);
            return g
        };
        g.stop = function () {
            l("jwStop");
            return g
        };
        g.seek = function (a) {
            l("jwSeek", a);
            return g
        };
        g.setVolume = function (a) {
            l("jwSetVolume", a);
            return g
        };
        g.loadInstream = function (a, b) {
            return x = new h.instream(this, n, a, b)
        };
        g.getQualityLevels = function () {
            return l("jwGetQualityLevels")
        };
        g.getCurrentQuality = function () {
            return l("jwGetCurrentQuality")
        };
        g.setCurrentQuality = function (a) {
            l("jwSetCurrentQuality", a)
        };
        g.getCaptionsList = function () {
            return l("jwGetCaptionsList")
        };
        g.getCurrentCaptions = function () {
            return l("jwGetCurrentCaptions")
        };
        g.setCurrentCaptions = function (a) {
            l("jwSetCurrentCaptions", a)
        };
        g.getControls = function () {
            return l("jwGetControls")
        };
        g.getSafeRegion = function () {
            return l("jwGetSafeRegion")
        };
        g.setControls = function (a) {
            l("jwSetControls", a)
        };
        g.destroyPlayer = function () {
            l("jwPlayerDestroy")
        };
        g.playAd = function (a) {
            var b = e(g.id).plugins;
            b.vast && b.vast.jwPlayAd(a)
        };
        g.pauseAd = function () {
            var a = e(g.id).plugins;
            a.vast ? a.vast.jwPauseAd() : l("jwPauseAd")
        };
        var B = {
            onBufferChange: f.JWPLAYER_MEDIA_BUFFER,
            onBufferFull: f.JWPLAYER_MEDIA_BUFFER_FULL,
            onError: f.JWPLAYER_ERROR,
            onSetupError: f.JWPLAYER_SETUP_ERROR,
            onFullscreen: f.JWPLAYER_FULLSCREEN,
            onMeta: f.JWPLAYER_MEDIA_META,
            onMute: f.JWPLAYER_MEDIA_MUTE,
            onPlaylist: f.JWPLAYER_PLAYLIST_LOADED,
            onPlaylistItem: f.JWPLAYER_PLAYLIST_ITEM,
            onPlaylistComplete: f.JWPLAYER_PLAYLIST_COMPLETE,
            onReady: f.API_READY,
            onResize: f.JWPLAYER_RESIZE,
            onComplete: f.JWPLAYER_MEDIA_COMPLETE,
            onSeek: f.JWPLAYER_MEDIA_SEEK,
            onTime: f.JWPLAYER_MEDIA_TIME,
            onVolume: f.JWPLAYER_MEDIA_VOLUME,
            onBeforePlay: f.JWPLAYER_MEDIA_BEFOREPLAY,
            onBeforeComplete: f.JWPLAYER_MEDIA_BEFORECOMPLETE,
            onDisplayClick: f.JWPLAYER_DISPLAY_CLICK,
            onControls: f.JWPLAYER_CONTROLS,
            onQualityLevels: f.JWPLAYER_MEDIA_LEVELS,
            onQualityChange: f.JWPLAYER_MEDIA_LEVEL_CHANGED,
            onCaptionsList: f.JWPLAYER_CAPTIONS_LIST,
            onCaptionsChange: f.JWPLAYER_CAPTIONS_CHANGED,
            onAdError: f.JWPLAYER_AD_ERROR,
            onAdClick: f.JWPLAYER_AD_CLICK,
            onAdImpression: f.JWPLAYER_AD_IMPRESSION,
            onAdTime: f.JWPLAYER_AD_TIME,
            onAdComplete: f.JWPLAYER_AD_COMPLETE,
            onAdCompanions: f.JWPLAYER_AD_COMPANIONS,
            onAdSkipped: f.JWPLAYER_AD_SKIPPED
        };
        k.foreach(B, function (a) {
            g[a] =
                c(B[a], p)
        });
        var w = {onBuffer: j.BUFFERING, onPause: j.PAUSED, onPlay: j.PLAYING, onIdle: j.IDLE};
        k.foreach(w, function (a) {
            g[a] = c(w[a], q)
        });
        g.remove = function () {
            if (!v) throw"Cannot call remove() before player is ready";
            t = [];
            h.destroyPlayer(this.id)
        };
        g.setup = function (a) {
            if (e.embed) {
                var b = d.getElementById(g.id);
                b && (a.fallbackDiv = b);
                b = g;
                t = [];
                h.destroyPlayer(b.id);
                b = e(g.id);
                b.config = a;
                (new e.embed(b)).embed()
            }
            return g
        };
        g.registerPlugin = function (a, b, c, d) {
            e.plugins.registerPlugin(a, b, c, d)
        };
        g.setPlayer = function (a, b) {
            n =
                a;
            g.renderingMode = b
        };
        g.detachMedia = function () {
            if ("html5" == g.renderingMode) return l("jwDetachMedia")
        };
        g.attachMedia = function (a) {
            if ("html5" == g.renderingMode) return l("jwAttachMedia", a)
        };
        g.dispatchEvent = function (a, b) {
            if (r[a]) for (var c = k.translateEventResponse(a, b), d = 0; d < r[a].length; d++) if ("function" == typeof r[a][d]) try {
                a == f.JWPLAYER_PLAYLIST_LOADED && k.deepReplaceKeyName(c.playlist, ["__dot__", "__spc__", "__dsh__", "__default__"], [".", " ", "-", "default"]), r[a][d].call(this, c)
            } catch (e) {
                k.log("There was an error calling back an event handler")
            }
        };
        g.dispatchInstreamEvent = function (a) {
            x && x.dispatchEvent(a, arguments)
        };
        g.callInternal = l;
        g.playerReady = function (a) {
            v = !0;
            n || g.setPlayer(d.getElementById(a.id));
            g.container = d.getElementById(g.id);
            k.foreach(r, function (a) {
                m(n, a)
            });
            p(f.JWPLAYER_PLAYLIST_ITEM, function () {
                y = {}
            });
            p(f.JWPLAYER_MEDIA_META, function (a) {
                k.extend(y, a.metadata)
            });
            for (g.dispatchEvent(f.API_READY); 0 < t.length;) l.apply(this, t.shift())
        };
        g.getItemMeta = function () {
            return y
        };
        g.isBeforePlay = function () {
            return l("jwIsBeforePlay")
        };
        g.isBeforeComplete =
            function () {
                return l("jwIsBeforeComplete")
            };
        return g
    };
    h.selectPlayer = function (b) {
        var c;
        k.exists(b) || (b = 0);
        b.nodeType ? c = b : "string" == typeof b && (c = d.getElementById(b));
        return c ? (b = h.playerById(c.id)) ? b : h.addPlayer(new h(c)) : "number" == typeof b ? a[b] : null
    };
    h.playerById = function (b) {
        for (var c = 0; c < a.length; c++) if (a[c].id == b) return a[c];
        return null
    };
    h.addPlayer = function (b) {
        for (var c = 0; c < a.length; c++) if (a[c] == b) return b;
        a.push(b);
        return b
    };
    h.destroyPlayer = function (b) {
        for (var c = -1, e, f = 0; f < a.length; f++) a[f].id ==
        b && (c = f, e = a[f]);
        0 <= c && (b = e.id, f = d.getElementById(b + ("flash" == e.renderingMode ? "_wrapper" : "")), k.clearCss && k.clearCss("#" + b), f && ("html5" == e.renderingMode && e.destroyPlayer(), e = d.createElement("div"), e.id = b, f.parentNode.replaceChild(e, f)), a.splice(c, 1));
        return null
    };
    e.playerReady = function (a) {
        var c = e.api.playerById(a.id);
        c ? c.playerReady(a) : e.api.selectPlayer(a.id).playerReady(a)
    }
}(jwplayer), function (e) {
    var a = e.events, k = e.utils, f = a.state;
    e.api.instream = function (e, d, h, b) {
        function c(a, b) {
            l[a] || (l[a] = [], p.jwInstreamAddEventListener(a,
                'function(dat) { jwplayer("' + m.id + '").dispatchInstreamEvent("' + a + '", dat); }'));
            l[a].push(b);
            return this
        }

        function q(b, e) {
            g[b] || (g[b] = [], c(a.JWPLAYER_PLAYER_STATE, function (a) {
                var c = a.newstate, e = a.oldstate;
                if (c == b) {
                    var d = g[c];
                    if (d) for (var f = 0; f < d.length; f++) "function" == typeof d[f] && d[f].call(this, {
                        oldstate: e,
                        newstate: c,
                        type: a.type
                    })
                }
            }));
            g[b].push(e);
            return this
        }

        var m = e, p = d;
        e = b || {};
        var l = {}, g = {};
        this.dispatchEvent = function (a, b) {
            if (l[a]) for (var c = k.translateEventResponse(a, b[1]), d = 0; d < l[a].length; d++) "function" ==
            typeof l[a][d] && l[a][d].call(this, c)
        };
        this.onError = function (b) {
            return c(a.JWPLAYER_ERROR, b)
        };
        this.onMediaError = function (b) {
            return c(a.JWPLAYER_MEDIA_ERROR, b)
        };
        this.onFullscreen = function (b) {
            return c(a.JWPLAYER_FULLSCREEN, b)
        };
        this.onMeta = function (b) {
            return c(a.JWPLAYER_MEDIA_META, b)
        };
        this.onMute = function (b) {
            return c(a.JWPLAYER_MEDIA_MUTE, b)
        };
        this.onComplete = function (b) {
            return c(a.JWPLAYER_MEDIA_COMPLETE, b)
        };
        this.onTime = function (b) {
            return c(a.JWPLAYER_MEDIA_TIME, b)
        };
        this.onBuffer = function (a) {
            return q(f.BUFFERING,
                a)
        };
        this.onPause = function (a) {
            return q(f.PAUSED, a)
        };
        this.onPlay = function (a) {
            return q(f.PLAYING, a)
        };
        this.onIdle = function (a) {
            return q(f.IDLE, a)
        };
        this.onClick = function (b) {
            return c(a.JWPLAYER_INSTREAM_CLICK, b)
        };
        this.onInstreamDestroyed = function (b) {
            return c(a.JWPLAYER_INSTREAM_DESTROYED, b)
        };
        this.play = function (a) {
            p.jwInstreamPlay(a)
        };
        this.pause = function (a) {
            p.jwInstreamPause(a)
        };
        this.destroy = function () {
            p.jwInstreamDestroy()
        };
        this.setText = function (a) {
            p.jwInstreamSetText(a ? a : "")
        };
        this.updateSkipTime = function (a,
                                        b) {
            p.jwInstreamUpdateSkipTime(a, b)
        };
        this.getState = function () {
            return p.jwInstreamState()
        };
        this.setClick = function (a) {
            p.jwInstreamClick(a)
        };
        this.type = "instream";
        this.tracker = e.tracker;
        m.callInternal("jwLoadInstream", h, e)
    }
}(jwplayer), function (e) {
    var a = e.api, k = a.selectPlayer;
    a.selectPlayer = function (a) {
        return (a = k(a)) ? a : {
            registerPlugin: function (a, d, f) {
                e.plugins.registerPlugin(a, d, f)
            }
        }
    }
}(jwplayer));