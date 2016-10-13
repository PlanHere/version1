(function() {
        window.$jit = function(a) {
            a = a || window;
            for (var b in $jit) {
                if ($jit[b].$extend) {
                    a[b] = $jit[b]
                }
            }
        };
        $jit.version = "2.0.1";
        var P = function(a) {
            return document.getElementById(a)
        };
        P.empty = function() {};
        P.extend = function(c, b) {
            for (var a in (b || {})) {
                c[a] = b[a]
            }
            return c
        };
        P.lambda = function(a) {
            return (typeof a == "function") ? a : function() {
                return a
            }
        };
        P.time = Date.now || function() {
            return +new Date
        };
        P.splat = function(a) {
            var b = P.type(a);
            return b ? ((b != "array") ? [a] : a) : []
        };
        P.type = function(a) {
            var b = P.type.s.call(a).match(/^\[object\s(.*)\]$/)[1].toLowerCase();
            if (b != "object") {
                return b
            }
            if (a && a.$$family) {
                return a.$$family
            }
            return (a && a.nodeName && a.nodeType == 1) ? "element" : b
        };
        P.type.s = Object.prototype.toString;
        P.each = function(f, b) {
            var d = P.type(f);
            if (d == "object") {
                for (var e in f) {
                    b(f[e], e)
                }
            } else {
                for (var a = 0, c = f.length; a < c; a++) {
                    b(f[a], a)
                }
            }
        };
        P.indexOf = function(c, d) {
            if (Array.indexOf) {
                return c.indexOf(d)
            }
            for (var a = 0, b = c.length; a < b; a++) {
                if (c[a] === d) {
                    return a
                }
            }
            return -1
        };
        P.map = function(c, a) {
            var b = [];
            P.each(c, function(d, e) {
                b.push(a(d, e))
            });
            return b
        };
        P.reduce = function(b, e, a) {
            var c = b.length;
            if (c == 0) {
                return a
            }
            var d = arguments.length == 3 ? a : b[--c];
            while (c--) {
                d = e(d, b[c])
            }
            return d
        };
        P.merge = function() {
            var b = {};
            for (var e = 0, c = arguments.length; e < c; e++) {
                var a = arguments[e];
                if (P.type(a) != "object") {
                    continue
                }
                for (var g in a) {
                    var d = a[g],
                        f = b[g];
                    b[g] = (f && P.type(d) == "object" && P.type(f) == "object") ? P.merge(f, d) : P.unlink(d)
                }
            }
            return b
        };
        P.unlink = function(e) {
            var b;
            switch (P.type(e)) {
                case "object":
                    b = {};
                    for (var a in e) {
                        b[a] = P.unlink(e[a])
                    }
                    break;
                case "array":
                    b = [];
                    for (var d = 0, c = e.length; d < c; d++) {
                        b[d] = P.unlink(e[d])
                    }
                    break;
                default:
                    return e
            }
            return b
        };
        P.zip = function() {
            if (arguments.length === 0) {
                return []
            }
            for (var f = 0, b = [], c = arguments.length, e = arguments[0].length; f < e; f++) {
                for (var d = 0, a = []; d < c; d++) {
                    a.push(arguments[d][f])
                }
                b.push(a)
            }
            return b
        };
        P.rgbToHex = function(b, d) {
            if (b.length < 3) {
                return null
            }
            if (b.length == 4 && b[3] == 0 && !d) {
                return "transparent"
            }
            var a = [];
            for (var c = 0; c < 3; c++) {
                var e = (b[c] - 0).toString(16);
                a.push(e.length == 1 ? "0" + e : e)
            }
            return d ? a : "#" + a.join("")
        };
        P.hexToRgb = function(d) {
            if (d.length != 7) {
                d = d.match(/^#?(\w{1,2})(\w{1,2})(\w{1,2})$/);
                d.shift();
                if (d.length != 3) {
                    return null
                }
                var b = [];
                for (var a = 0; a < 3; a++) {
                    var c = d[a];
                    if (c.length == 1) {
                        c += c
                    }
                    b.push(parseInt(c, 16))
                }
                return b
            } else {
                d = parseInt(d.slice(1), 16);
                return [d >> 16, d >> 8 & 255, d & 255]
            }
        };
        P.destroy = function(a) {
            P.clean(a);
            if (a.parentNode) {
                a.parentNode.removeChild(a)
            }
            if (a.clearAttributes) {
                a.clearAttributes()
            }
        };
        P.clean = function(c) {
            for (var d = c.childNodes, a = 0, b = d.length; a < b; a++) {
                P.destroy(d[a])
            }
        };
        P.addEvent = function(c, a, b) {
            if (c.addEventListener) {
                c.addEventListener(a, b, false)
            } else {
                c.attachEvent("on" + a, b)
            }
        };
        P.addEvents = function(a, c) {
            for (var b in c) {
                P.addEvent(a, b, c[b])
            }
        };
        P.hasClass = function(a, b) {
            return (" " + a.className + " ").indexOf(" " + b + " ") > -1
        };
        P.addClass = function(a, b) {
            if (!P.hasClass(a, b)) {
                a.className = (a.className + " " + b)
            }
        };
        P.removeClass = function(a, b) {
            a.className = a.className.replace(new RegExp("(^|\\s)" + b + "(?:\\s|$)"), "$1")
        };
        P.getPos = function(f) {
            var e = b(f);
            var c = d(f);
            return {
                x: e.x - c.x,
                y: e.y - c.y
            };

            function b(g) {
                var h = {
                    x: 0,
                    y: 0
                };
                while (g && !a(g)) {
                    h.x += g.offsetLeft;
                    h.y += g.offsetTop;
                    g = g.offsetParent
                }
                return h
            }

            function d(g) {
                var h = {
                    x: 0,
                    y: 0
                };
                while (g && !a(g)) {
                    h.x += g.scrollLeft;
                    h.y += g.scrollTop;
                    g = g.parentNode
                }
                return h
            }

            function a(g) {
                return (/^(?:body|html)$/i).test(g.tagName)
            }
        };
        P.event = {
            get: function(a, b) {
                b = b || window;
                return a || b.event
            },
            getWheel: function(a) {
                return a.wheelDelta ? a.wheelDelta / 120 : -(a.detail || 0) / 3
            },
            isRightClick: function(a) {
                return (a.which == 3 || a.button == 2)
            },
            getPos: function(c, d) {
                d = d || window;
                c = c || d.event;
                var a = d.document;
                a = a.documentElement || a.body;
                if (c.touches && c.touches.length) {
                    c = c.touches[0]
                }
                var b = {
                    x: c.pageX || (c.clientX + a.scrollLeft),
                    y: c.pageY || (c.clientY + a.scrollTop)
                };
                return b
            },
            stop: function(a) {
                if (a.stopPropagation) {
                    a.stopPropagation()
                }
                a.cancelBubble = true;
                if (a.preventDefault) {
                    a.preventDefault()
                } else {
                    a.returnValue = false
                }
            }
        };
        $jit.util = $jit.id = P;
        var B = function(a) {
            a = a || {};
            var b = function() {
                for (var d in this) {
                    if (typeof this[d] != "function") {
                        this[d] = P.unlink(this[d])
                    }
                }
                this.constructor = b;
                if (B.prototyping) {
                    return this
                }
                var e = this.initialize ? this.initialize.apply(this, arguments) : this;
                this.$$family = "class";
                return e
            };
            for (var c in B.Mutators) {
                if (!a[c]) {
                    continue
                }
                a = B.Mutators[c](a, a[c]);
                delete a[c]
            }
            P.extend(b, this);
            b.constructor = B;
            b.prototype = a;
            return b
        };
        B.Mutators = {
            Implements: function(b, a) {
                P.each(P.splat(a), function(d) {
                    B.prototyping = d;
                    var e = (typeof d == "function") ? new d : d;
                    for (var c in e) {
                        if (!(c in b)) {
                            b[c] = e[c]
                        }
                    }
                    delete B.prototyping
                });
                return b
            }
        };
        P.extend(B, {
            inherit: function(c, d) {
                for (var f in d) {
                    var b = d[f];
                    var e = c[f];
                    var a = P.type(b);
                    if (e && a == "function") {
                        if (b != e) {
                            B.override(c, f, b)
                        }
                    } else {
                        if (a == "object") {
                            c[f] = P.merge(e, b)
                        } else {
                            c[f] = b
                        }
                    }
                }
                return c
            },
            override: function(b, c, a) {
                var d = B.prototyping;
                if (d && b[c] != d[c]) {
                    d = null
                }
                var e = function() {
                    var g = this.parent;
                    this.parent = d ? d[c] : b[c];
                    var f = a.apply(this, arguments);
                    this.parent = g;
                    return f
                };
                b[c] = e
            }
        });
        B.prototype.implement = function() {
            var a = this.prototype;
            P.each(Array.prototype.slice.call(arguments || []), function(b) {
                B.inherit(a, b)
            });
            return this
        };
        $jit.Class = B;
        $jit.json = {
            prune: function(a, b) {
                this.each(a, function(c, d) {
                    if (d == b && c.children) {
                        delete c.children;
                        c.children = []
                    }
                })
            },
            getParent: function(c, b) {
                if (c.id == b) {
                    return false
                }
                var d = c.children;
                if (d && d.length > 0) {
                    for (var e = 0; e < d.length; e++) {
                        if (d[e].id == b) {
                            return c
                        } else {
                            var a = this.getParent(d[e], b);
                            if (a) {
                                return a
                            }
                        }
                    }
                }
                return false
            },
            getSubtree: function(c, b) {
                if (c.id == b) {
                    return c
                }
                for (var e = 0, d = c.children; d && e < d.length; e++) {
                    var a = this.getSubtree(d[e], b);
                    if (a != null) {
                        return a
                    }
                }
                return null
            },
            eachLevel: function(c, f, e, b) {
                if (f <= e) {
                    b(c, f);
                    if (!c.children) {
                        return
                    }
                    for (var a = 0, d = c.children; a < d.length; a++) {
                        this.eachLevel(d[a], f + 1, e, b)
                    }
                }
            },
            each: function(b, a) {
                this.eachLevel(b, 0, Number.MAX_VALUE, a)
            }
        };
        $jit.Trans = {
            $extend: true,
            linear: function(a) {
                return a
            }
        };
        var J = $jit.Trans;
        (function() {
            var b = function(c, d) {
                d = P.splat(d);
                return P.extend(c, {
                    easeIn: function(e) {
                        return c(e, d)
                    },
                    easeOut: function(e) {
                        return 1 - c(1 - e, d)
                    },
                    easeInOut: function(e) {
                        return (e <= 0.5) ? c(2 * e, d) / 2 : (2 - c(2 * (1 - e), d)) / 2
                    }
                })
            };
            var a = {
                Pow: function(c, d) {
                    return Math.pow(c, d[0] || 6)
                },
                Expo: function(c) {
                    return Math.pow(2, 8 * (c - 1))
                },
                Circ: function(c) {
                    return 1 - Math.sin(Math.acos(c))
                },
                Sine: function(c) {
                    return 1 - Math.sin((1 - c) * Math.PI / 2)
                },
                Back: function(c, d) {
                    d = d[0] || 1.618;
                    return Math.pow(c, 2) * ((d + 1) * c - d)
                },
                Bounce: function(f) {
                    var c;
                    for (var d = 0, e = 1; 1; d += e, e /= 2) {
                        if (f >= (7 - 4 * d) / 11) {
                            c = e * e - Math.pow((11 - 6 * d - 11 * f) / 4, 2);
                            break
                        }
                    }
                    return c
                },
                Elastic: function(c, d) {
                    return Math.pow(2, 10 * --c) * Math.cos(20 * c * Math.PI * (d[0] || 1) / 3)
                }
            };
            P.each(a, function(c, d) {
                J[d] = b(c)
            });
            P.each(["Quad", "Cubic", "Quart", "Quint"], function(c, d) {
                J[c] = b(function(e) {
                    return Math.pow(e, [d + 2])
                })
            })
        })();
        var x = new B({
            initialize: function(a) {
                this.setOptions(a)
            },
            setOptions: function(b) {
                var a = {
                    duration: 2500,
                    fps: 40,
                    transition: J.Quart.easeInOut,
                    compute: P.empty,
                    complete: P.empty,
                    link: "ignore"
                };
                this.opt = P.merge(a, b || {});
                return this
            },
            step: function() {
                var a = P.time(),
                    b = this.opt;
                if (a < this.time + b.duration) {
                    var c = b.transition((a - this.time) / b.duration);
                    b.compute(c)
                } else {
                    this.timer = clearInterval(this.timer);
                    b.compute(1);
                    b.complete()
                }
            },
            start: function() {
                if (!this.check()) {
                    return this
                }
                this.time = 0;
                this.startTimer();
                return this
            },
            startTimer: function() {
                var b = this,
                    a = this.opt.fps;
                if (this.timer) {
                    return false
                }
                this.time = P.time() - this.time;
                this.timer = setInterval((function() {
                    b.step()
                }), Math.round(1000 / a));
                return true
            },
            pause: function() {
                this.stopTimer();
                return this
            },
            resume: function() {
                this.startTimer();
                return this
            },
            stopTimer: function() {
                if (!this.timer) {
                    return false
                }
                this.time = P.time() - this.time;
                this.timer = clearInterval(this.timer);
                return true
            },
            check: function() {
                if (!this.timer) {
                    return true
                }
                if (this.opt.link == "cancel") {
                    this.stopTimer();
                    return true
                }
                return false
            }
        });
        var E = function() {
            var e = arguments;
            for (var b = 0, c = e.length, a = {}; b < c; b++) {
                var d = E[e[b]];
                if (d.$extend) {
                    P.extend(a, d)
                } else {
                    a[e[b]] = d
                }
            }
            return a
        };
        E.AreaChart = {
            $extend: true,
            animate: true,
            labelOffset: 3,
            type: "stacked",
            Tips: {
                enable: false,
                onShow: P.empty,
                onHide: P.empty
            },
            Events: {
                enable: false,
                onClick: P.empty
            },
            selectOnHover: true,
            showAggregates: true,
            showLabels: true,
            filterOnClick: false,
            restoreOnRightClick: false
        };
        E.Margin = {
            $extend: false,
            top: 0,
            left: 0,
            right: 0,
            bottom: 0
        };
        E.Canvas = {
            $extend: true,
            injectInto: "id",
            type: "2D",
            width: false,
            height: false,
            useCanvas: false,
            withLabels: true,
            background: false,
            Scene: {
                Lighting: {
                    enable: false,
                    ambient: [1, 1, 1],
                    directional: {
                        direction: {
                            x: -100,
                            y: -100,
                            z: -100
                        },
                        color: [0.5, 0.3, 0.1]
                    }
                }
            }
        };
        E.Tree = {
            $extend: true,
            orientation: "top",
            subtreeOffset: 8,
            siblingOffset: 5,
            indent: 10,
            multitree: false,
            align: "center"
        };
        E.Node = {
            $extend: false,
            overridable: false,
            type: "circle",
            color: "#f1f1f1",
            alpha: 1,
            dim: 3,
            height: 20,
            width: 90,
            autoHeight: false,
            autoWidth: false,
            lineWidth: 1,
            transform: true,
            align: "center",
            angularWidth: 1,
            span: 1,
            CanvasStyles: {}
        };
        E.Edge = {
            $extend: false,
            overridable: false,
            type: "line",
            color: "#f1f1f1",
            lineWidth: 1,
            dim: 15,
            alpha: 1,
            epsilon: 7,
            CanvasStyles: {}
        };
        E.Fx = {
            $extend: true,
            fps: 40,
            duration: 2500,
            transition: $jit.Trans.Quart.easeInOut,
            clearCanvas: true
        };
        E.Label = {
            $extend: false,
            overridable: false,
            type: "HTML",
            style: " ",
            size: 10,
            family: "sans-serif",
            textAlign: "center",
            textBaseline: "alphabetic",
            color: "#fff"
        };
        E.Tips = {
            $extend: false,
            enable: false,
            type: "auto",
            offsetX: 20,
            offsetY: 20,
            force: false,
            onShow: P.empty,
            onHide: P.empty
        };
        E.NodeStyles = {
            $extend: false,
            enable: false,
            type: "auto",
            stylesHover: false,
            stylesClick: false
        };
        E.Events = {
            $extend: false,
            enable: false,
            enableForEdges: false,
            type: "auto",
            onClick: P.empty,
            onRightClick: P.empty,
            onMouseMove: P.empty,
            onMouseEnter: P.empty,
            onMouseLeave: P.empty,
            onDragStart: P.empty,
            onDragMove: P.empty,
            onDragCancel: P.empty,
            onDragEnd: P.empty,
            onTouchStart: P.empty,
            onTouchMove: P.empty,
            onTouchEnd: P.empty,
            onMouseWheel: P.empty
        };
        E.Navigation = {
            $extend: false,
            enable: false,
            type: "auto",
            panning: false,
            zooming: false
        };
        E.Controller = {
            $extend: true,
            onBeforeCompute: P.empty,
            onAfterCompute: P.empty,
            onCreateLabel: P.empty,
            onPlaceLabel: P.empty,
            onComplete: P.empty,
            onBeforePlotLine: P.empty,
            onAfterPlotLine: P.empty,
            onBeforePlotNode: P.empty,
            onAfterPlotNode: P.empty,
            request: false
        };
        var y = {
            initialize: function(c, b) {
                this.viz = b;
                this.canvas = b.canvas;
                this.config = b.config[c];
                this.nodeTypes = b.fx.nodeTypes;
                var a = this.config.type;
                this.dom = a == "auto" ? (b.config.Label.type != "Native") : (a != "Native");
                this.labelContainer = this.dom && b.labels.getLabelContainer();
                this.isEnabled() && this.initializePost()
            },
            initializePost: P.empty,
            setAsProperty: P.lambda(false),
            isEnabled: function() {
                return this.config.enable
            },
            isLabel: function(f, b, d) {
                f = P.event.get(f, b);
                var c = this.labelContainer,
                    e = f.target || f.srcElement,
                    a = f.relatedTarget;
                if (d) {
                    return a && a == this.viz.canvas.getCtx().canvas && !!e && this.isDescendantOf(e, c)
                } else {
                    return this.isDescendantOf(e, c)
                }
            },
            isDescendantOf: function(a, b) {
                while (a && a.parentNode) {
                    if (a.parentNode == b) {
                        return a
                    }
                    a = a.parentNode
                }
                return false
            }
        };
        var K = {
            onMouseUp: P.empty,
            onMouseDown: P.empty,
            onMouseMove: P.empty,
            onMouseOver: P.empty,
            onMouseOut: P.empty,
            onMouseWheel: P.empty,
            onTouchStart: P.empty,
            onTouchMove: P.empty,
            onTouchEnd: P.empty,
            onTouchCancel: P.empty
        };
        var z = new B({
            initialize: function(a) {
                this.viz = a;
                this.canvas = a.canvas;
                this.node = false;
                this.edge = false;
                this.registeredObjects = [];
                this.attachEvents()
            },
            attachEvents: function() {
                var c = this.canvas.getElement(),
                    a = this;
                c.oncontextmenu = P.lambda(false);
                P.addEvents(c, {
                    mouseup: function(f, d) {
                        var e = P.event.get(f, d);
                        a.handleEvent("MouseUp", f, d, a.makeEventObject(f, d), P.event.isRightClick(e))
                    },
                    mousedown: function(f, d) {
                        var e = P.event.get(f, d);
                        a.handleEvent("MouseDown", f, d, a.makeEventObject(f, d), P.event.isRightClick(e))
                    },
                    mousemove: function(d, e) {
                        a.handleEvent("MouseMove", d, e, a.makeEventObject(d, e))
                    },
                    mouseover: function(d, e) {
                        a.handleEvent("MouseOver", d, e, a.makeEventObject(d, e))
                    },
                    mouseout: function(d, e) {
                        a.handleEvent("MouseOut", d, e, a.makeEventObject(d, e))
                    },
                    touchstart: function(d, e) {
                        a.handleEvent("TouchStart", d, e, a.makeEventObject(d, e))
                    },
                    touchmove: function(d, e) {
                        a.handleEvent("TouchMove", d, e, a.makeEventObject(d, e))
                    },
                    touchend: function(d, e) {
                        a.handleEvent("TouchEnd", d, e, a.makeEventObject(d, e))
                    }
                });
                var b = function(f, g) {
                    var d = P.event.get(f, g);
                    var e = P.event.getWheel(d);
                    a.handleEvent("MouseWheel", f, g, e)
                };
                if (!document.getBoxObjectFor && window.mozInnerScreenX == null) {
                    P.addEvent(c, "mousewheel", b)
                } else {
                    c.addEventListener("DOMMouseScroll", b, false)
                }
            },
            register: function(a) {
                this.registeredObjects.push(a)
            },
            handleEvent: function() {
                var b = Array.prototype.slice.call(arguments),
                    a = b.shift();
                for (var d = 0, e = this.registeredObjects, c = e.length; d < c; d++) {
                    e[d]["on" + a].apply(e[d], b)
                }
            },
            makeEventObject: function(e, g) {
                var d = this,
                    b = this.viz.graph,
                    f = this.viz.fx,
                    a = f.nodeTypes,
                    c = f.edgeTypes;
                return {
                    pos: false,
                    node: false,
                    edge: false,
                    contains: false,
                    getNodeCalled: false,
                    getEdgeCalled: false,
                    getPos: function() {
                        var m = d.viz.canvas,
                            l = m.getSize(),
                            k = m.getPos(),
                            n = m.translateOffsetX,
                            o = m.translateOffsetY,
                            h = m.scaleOffsetX,
                            j = m.scaleOffsetY,
                            i = P.event.getPos(e, g);
                        this.pos = {
                            x: (i.x - k.x - l.width / 2 - n) * 1 / h,
                            y: (i.y - k.y - l.height / 2 - o) * 1 / j
                        };
                        return this.pos
                    },
                    getNode: function() {
                        if (this.getNodeCalled) {
                            return this.node
                        }
                        this.getNodeCalled = true;
                        for (var h in b.nodes) {
                            var i = b.nodes[h],
                                j = i && a[i.getData("type")],
                                k = j && j.contains && j.contains.call(f, i, this.getPos());
                            if (k) {
                                this.contains = k;
                                return d.node = this.node = i
                            }
                        }
                        return d.node = this.node = false
                    },
                    getEdge: function() {
                        if (this.getEdgeCalled) {
                            return this.edge
                        }
                        this.getEdgeCalled = true;
                        var l = {};
                        for (var h in b.edges) {
                            var j = b.edges[h];
                            l[h] = true;
                            for (var i in j) {
                                if (i in l) {
                                    continue
                                }
                                var k = j[i],
                                    m = k && c[k.getData("type")],
                                    n = m && m.contains && m.contains.call(f, k, this.getPos());
                                if (n) {
                                    this.contains = n;
                                    return d.edge = this.edge = k
                                }
                            }
                        }
                        return d.edge = this.edge = false
                    },
                    getContains: function() {
                        if (this.getNodeCalled) {
                            return this.contains
                        }
                        this.getNode();
                        return this.contains
                    }
                }
            }
        });
        var D = {
            initializeExtras: function() {
                var a = new z(this),
                    b = this;
                P.each(["NodeStyles", "Tips", "Navigation", "Events"], function(d) {
                    var c = new D.Classes[d](d, b);
                    if (c.isEnabled()) {
                        a.register(c)
                    }
                    if (c.setAsProperty()) {
                        b[d.toLowerCase()] = c
                    }
                })
            }
        };
        D.Classes = {};
        D.Classes.Events = new B({
            Implements: [y, K],
            initializePost: function() {
                this.fx = this.viz.fx;
                this.ntypes = this.viz.fx.nodeTypes;
                this.etypes = this.viz.fx.edgeTypes;
                this.hovered = false;
                this.pressed = false;
                this.touched = false;
                this.touchMoved = false;
                this.moved = false
            },
            setAsProperty: P.lambda(true),
            onMouseUp: function(b, d, a, e) {
                var c = P.event.get(b, d);
                if (!this.moved) {
                    if (e) {
                        this.config.onRightClick(this.hovered, a, c)
                    } else {
                        this.config.onClick(this.pressed, a, c)
                    }
                }
                if (this.pressed) {
                    if (this.moved) {
                        this.config.onDragEnd(this.pressed, a, c)
                    } else {
                        this.config.onDragCancel(this.pressed, a, c)
                    }
                    this.pressed = this.moved = false
                }
            },
            onMouseOut: function(g, b, e) {
                var a = P.event.get(g, b),
                    f;
                if (this.dom && (f = this.isLabel(g, b, true))) {
                    this.config.onMouseLeave(this.viz.graph.getNode(f.id), e, a);
                    this.hovered = false;
                    return
                }
                var c = a.relatedTarget,
                    d = this.canvas.getElement();
                while (c && c.parentNode) {
                    if (d == c.parentNode) {
                        return
                    }
                    c = c.parentNode
                }
                if (this.hovered) {
                    this.config.onMouseLeave(this.hovered, e, a);
                    this.hovered = false
                }
            },
            onMouseOver: function(b, d, e) {
                var c = P.event.get(b, d),
                    a;
                if (this.dom && (a = this.isLabel(b, d, true))) {
                    this.hovered = this.viz.graph.getNode(a.id);
                    this.config.onMouseEnter(this.hovered, e, c)
                }
            },
            onMouseMove: function(f, h, b) {
                var a, c = P.event.get(f, h);
                if (this.pressed) {
                    this.moved = true;
                    this.config.onDragMove(this.pressed, b, c);
                    return
                }
                if (this.dom) {
                    this.config.onMouseMove(this.hovered, b, c)
                } else {
                    if (this.hovered) {
                        var d = this.hovered;
                        var e = d.nodeFrom ? this.etypes[d.getData("type")] : this.ntypes[d.getData("type")];
                        var g = e && e.contains && e.contains.call(this.fx, d, b.getPos());
                        if (g) {
                            this.config.onMouseMove(d, b, c);
                            return
                        } else {
                            this.config.onMouseLeave(d, b, c);
                            this.hovered = false
                        }
                    }
                    if (this.hovered = (b.getNode() || (this.config.enableForEdges && b.getEdge()))) {
                        this.config.onMouseEnter(this.hovered, b, c)
                    } else {
                        this.config.onMouseMove(false, b, c)
                    }
                }
            },
            onMouseWheel: function(a, b, c) {
                this.config.onMouseWheel(c, P.event.get(a, b))
            },
            onMouseDown: function(b, d, e) {
                var c = P.event.get(b, d),
                    a;
                if (this.dom) {
                    if (a = this.isLabel(b, d)) {
                        this.pressed = this.viz.graph.getNode(a.id)
                    }
                } else {
                    this.pressed = e.getNode() || (this.config.enableForEdges && e.getEdge())
                }
                this.pressed && this.config.onDragStart(this.pressed, e, c)
            },
            onTouchStart: function(b, d, e) {
                var c = P.event.get(b, d),
                    a;
                if (this.dom && (a = this.isLabel(b, d))) {
                    this.touched = this.viz.graph.getNode(a.id)
                } else {
                    this.touched = e.getNode() || (this.config.enableForEdges && e.getEdge())
                }
                this.touched && this.config.onTouchStart(this.touched, e, c)
            },
            onTouchMove: function(c, d, a) {
                var b = P.event.get(c, d);
                if (this.touched) {
                    this.touchMoved = true;
                    this.config.onTouchMove(this.touched, a, b)
                }
            },
            onTouchEnd: function(c, d, a) {
                var b = P.event.get(c, d);
                if (this.touched) {
                    if (this.touchMoved) {
                        this.config.onTouchEnd(this.touched, a, b)
                    } else {
                        this.config.onTouchCancel(this.touched, a, b)
                    }
                    this.touched = this.touchMoved = false
                }
            }
        });
        D.Classes.Tips = new B({
            Implements: [y, K],
            initializePost: function() {
                if (document.body) {
                    var a = P("_tooltip") || document.createElement("div");
                    a.id = "_tooltip";
                    a.className = "tip";
                    P.extend(a.style, {
                        position: "absolute",
                        display: "none",
                        zIndex: 13000
                    });
                    document.body.appendChild(a);
                    this.tip = a;
                    this.node = false
                }
            },
            setAsProperty: P.lambda(true),
            onMouseOut: function(d, e) {
                var b = P.event.get(d, e);
                if (this.dom && this.isLabel(d, e, true)) {
                    this.hide(true);
                    return
                }
                var c = d.relatedTarget,
                    a = this.canvas.getElement();
                while (c && c.parentNode) {
                    if (a == c.parentNode) {
                        return
                    }
                    c = c.parentNode
                }
                this.hide(false)
            },
            onMouseOver: function(c, a) {
                var b;
                if (this.dom && (b = this.isLabel(c, a, false))) {
                    this.node = this.viz.graph.getNode(b.id);
                    this.config.onShow(this.tip, this.node, b)
                }
            },
            onMouseMove: function(c, d, b) {
                if (this.dom && this.isLabel(c, d)) {
                    this.setTooltipPosition(P.event.getPos(c, d))
                }
                if (!this.dom) {
                    var a = b.getNode();
                    if (!a) {
                        this.hide(true);
                        return
                    }
                    if (this.config.force || !this.node || this.node.id != a.id) {
                        this.node = a;
                        this.config.onShow(this.tip, a, b.getContains())
                    }
                    this.setTooltipPosition(P.event.getPos(c, d))
                }
            },
            setTooltipPosition: function(c) {
                var h = this.tip,
                    a = h.style,
                    g = this.config;
                a.display = "";
                var e = {
                    height: document.body.clientHeight,
                    width: document.body.clientWidth
                };
                var f = {
                    width: h.offsetWidth,
                    height: h.offsetHeight
                };
                var b = g.offsetX,
                    d = g.offsetY;
                a.top = ((c.y + d + f.height > e.height) ? (c.y - f.height - d) : c.y + d) + "px";
                a.left = ((c.x + f.width + b > e.width) ? (c.x - f.width - b) : c.x + b) + "px"
            },
            hide: function(a) {
                this.tip.style.display = "none";
                a && this.config.onHide()
            }
        });
        D.Classes.NodeStyles = new B({
            Implements: [y, K],
            initializePost: function() {
                this.fx = this.viz.fx;
                this.types = this.viz.fx.nodeTypes;
                this.nStyles = this.config;
                this.nodeStylesOnHover = this.nStyles.stylesHover;
                this.nodeStylesOnClick = this.nStyles.stylesClick;
                this.hoveredNode = false;
                this.fx.nodeFxAnimation = new x();
                this.down = false;
                this.move = false
            },
            onMouseOut: function(d, a) {
                this.down = this.move = false;
                if (!this.hoveredNode) {
                    return
                }
                if (this.dom && this.isLabel(d, a, true)) {
                    this.toggleStylesOnHover(this.hoveredNode, false)
                }
                var b = d.relatedTarget,
                    c = this.canvas.getElement();
                while (b && b.parentNode) {
                    if (c == b.parentNode) {
                        return
                    }
                    b = b.parentNode
                }
                this.toggleStylesOnHover(this.hoveredNode, false);
                this.hoveredNode = false
            },
            onMouseOver: function(c, d) {
                var b;
                if (this.dom && (b = this.isLabel(c, d, true))) {
                    var a = this.viz.graph.getNode(b.id);
                    if (a.selected) {
                        return
                    }
                    this.hoveredNode = a;
                    this.toggleStylesOnHover(this.hoveredNode, true)
                }
            },
            onMouseDown: function(b, d, a, e) {
                if (e) {
                    return
                }
                var c;
                if (this.dom && (c = this.isLabel(b, d))) {
                    this.down = this.viz.graph.getNode(c.id)
                } else {
                    if (!this.dom) {
                        this.down = a.getNode()
                    }
                }
                this.move = false
            },
            onMouseUp: function(c, d, b, a) {
                if (a) {
                    return
                }
                if (!this.move) {
                    this.onClick(b.getNode())
                }
                this.down = this.move = false
            },
            getRestoredStyles: function(b, c) {
                var d = {},
                    e = this["nodeStylesOn" + c];
                for (var a in e) {
                    d[a] = b.styles["$" + a]
                }
                return d
            },
            toggleStylesOnHover: function(b, a) {
                if (this.nodeStylesOnHover) {
                    this.toggleStylesOn("Hover", b, a)
                }
            },
            toggleStylesOnClick: function(b, a) {
                if (this.nodeStylesOnClick) {
                    this.toggleStylesOn("Click", b, a)
                }
            },
            toggleStylesOn: function(d, h, b) {
                var a = this.viz;
                var c = this.nStyles;
                if (b) {
                    var e = this;
                    if (!h.styles) {
                        h.styles = P.merge(h.data, {})
                    }
                    for (var i in this["nodeStylesOn" + d]) {
                        var g = "$" + i;
                        if (!(g in h.styles)) {
                            h.styles[g] = h.getData(i)
                        }
                    }
                    a.fx.nodeFx(P.extend({
                        elements: {
                            id: h.id,
                            properties: e["nodeStylesOn" + d]
                        },
                        transition: J.Quart.easeOut,
                        duration: 300,
                        fps: 40
                    }, this.config))
                } else {
                    var f = this.getRestoredStyles(h, d);
                    a.fx.nodeFx(P.extend({
                        elements: {
                            id: h.id,
                            properties: f
                        },
                        transition: J.Quart.easeOut,
                        duration: 300,
                        fps: 40
                    }, this.config))
                }
            },
            onClick: function(b) {
                if (!b) {
                    return
                }
                var a = this.nodeStylesOnClick;
                if (!a) {
                    return
                }
                if (b.selected) {
                    this.toggleStylesOnClick(b, false);
                    delete b.selected
                } else {
                    this.viz.graph.eachNode(function(c) {
                        if (c.selected) {
                            for (var d in a) {
                                c.setData(d, c.styles["$" + d], "end")
                            }
                            delete c.selected
                        }
                    });
                    this.toggleStylesOnClick(b, true);
                    b.selected = true;
                    delete b.hovered;
                    this.hoveredNode = false
                }
            },
            onMouseMove: function(e, g, d) {
                if (this.down) {
                    this.move = true
                }
                if (this.dom && this.isLabel(e, g)) {
                    return
                }
                var b = this.nodeStylesOnHover;
                if (!b) {
                    return
                }
                if (!this.dom) {
                    if (this.hoveredNode) {
                        var a = this.types[this.hoveredNode.getData("type")];
                        var c = a && a.contains && a.contains.call(this.fx, this.hoveredNode, d.getPos());
                        if (c) {
                            return
                        }
                    }
                    var f = d.getNode();
                    if (!this.hoveredNode && !f) {
                        return
                    }
                    if (f.hovered) {
                        return
                    }
                    if (f && !f.selected) {
                        this.fx.nodeFxAnimation.stopTimer();
                        this.viz.graph.eachNode(function(h) {
                            if (h.hovered && !h.selected) {
                                for (var i in b) {
                                    h.setData(i, h.styles["$" + i], "end")
                                }
                                delete h.hovered
                            }
                        });
                        f.hovered = true;
                        this.hoveredNode = f;
                        this.toggleStylesOnHover(f, true)
                    } else {
                        if (this.hoveredNode && !this.hoveredNode.selected) {
                            this.fx.nodeFxAnimation.stopTimer();
                            this.toggleStylesOnHover(this.hoveredNode, false);
                            delete this.hoveredNode.hovered;
                            this.hoveredNode = false
                        }
                    }
                }
            }
        });
        D.Classes.Navigation = new B({
            Implements: [y, K],
            initializePost: function() {
                this.pos = false;
                this.pressed = false
            },
            onMouseWheel: function(d, e, c) {
                if (!this.config.zooming) {
                    return
                }
                P.event.stop(P.event.get(d, e));
                var b = this.config.zooming / 1000,
                    a = 1 + c * b;
                this.canvas.scale(a, a)
            },
            onMouseDown: function(h, b, f) {
                if (!this.config.panning) {
                    return
                }
                if (this.config.panning == "avoid nodes" && (this.dom ? this.isLabel(h, b) : f.getNode())) {
                    return
                }
                this.pressed = true;
                this.pos = f.getPos();
                var g = this.canvas,
                    a = g.translateOffsetX,
                    c = g.translateOffsetY,
                    d = g.scaleOffsetX,
                    e = g.scaleOffsetY;
                this.pos.x *= d;
                this.pos.x += a;
                this.pos.y *= e;
                this.pos.y += c
            },
            onMouseMove: function(a, b, k) {
                if (!this.config.panning) {
                    return
                }
                if (!this.pressed) {
                    return
                }
                if (this.config.panning == "avoid nodes" && (this.dom ? this.isLabel(a, b) : k.getNode())) {
                    return
                }
                var c = this.pos,
                    l = k.getPos(),
                    e = this.canvas,
                    d = e.translateOffsetX,
                    h = e.translateOffsetY,
                    f = e.scaleOffsetX,
                    i = e.scaleOffsetY;
                l.x *= f;
                l.y *= i;
                l.x += d;
                l.y += h;
                var g = l.x - c.x,
                    j = l.y - c.y;
                this.pos = l;
                this.canvas.translate(g * 1 / f, j * 1 / i)
            },
            onMouseUp: function(c, d, a, b) {
                if (!this.config.panning) {
                    return
                }
                this.pressed = false
            }
        });
        var G;
        (function() {
            var b = typeof HTMLCanvasElement,
                c = (b == "object" || b == "function");

            function a(f, d) {
                var g = document.createElement(f);
                for (var e in d) {
                    if (typeof d[e] == "object") {
                        P.extend(g[e], d[e])
                    } else {
                        g[e] = d[e]
                    }
                }
                if (f == "canvas" && !c && G_vmlCanvasManager) {
                    g = G_vmlCanvasManager.initElement(document.body.appendChild(g))
                }
                return g
            }
            $jit.Canvas = G = new B({
                canvases: [],
                pos: false,
                element: false,
                labelContainer: false,
                translateOffsetX: 0,
                translateOffsetY: 0,
                scaleOffsetX: 1,
                scaleOffsetY: 1,
                initialize: function(j, q) {
                    this.viz = j;
                    this.opt = this.config = q;
                    var f = P.type(q.injectInto) == "string" ? q.injectInto : q.injectInto.id,
                        k = q.type,
                        e = f + "-label",
                        i = P(f),
                        d = q.width || i.offsetWidth,
                        h = q.height || i.offsetHeight;
                    this.id = f;
                    var p = {
                        injectInto: f,
                        width: d,
                        height: h
                    };
                    this.element = a("div", {
                        id: f + "-canvaswidget",
                        style: {
                            position: "relative",
                            width: d + "px",
                            height: h + "px"
                        }
                    });
                    this.labelContainer = this.createLabelContainer(q.Label.type, e, p);
                    this.canvases.push(new G.Base[k]({
                        config: P.extend({
                            idSuffix: "-canvas"
                        }, p),
                        plot: function(r) {
                            j.fx.plot()
                        },
                        resize: function() {
                            j.refresh()
                        }
                    }));
                    var o = q.background;
                    if (o) {
                        var l = new G.Background[o.type](j, P.extend(o, p));
                        this.canvases.push(new G.Base[k](l))
                    }
                    var m = this.canvases.length;
                    while (m--) {
                        this.element.appendChild(this.canvases[m].canvas);
                        if (m > 0) {
                            this.canvases[m].plot()
                        }
                    }
                    this.element.appendChild(this.labelContainer);
                    i.appendChild(this.element);
                    var g = null,
                        n = this;
                    P.addEvent(window, "scroll", function() {
                        clearTimeout(g);
                        g = setTimeout(function() {
                            n.getPos(true)
                        }, 500)
                    })
                },
                getCtx: function(d) {
                    return this.canvases[d || 0].getCtx()
                },
                getConfig: function() {
                    return this.opt
                },
                getElement: function() {
                    return this.element
                },
                getSize: function(d) {
                    return this.canvases[d || 0].getSize()
                },
                resize: function(e, g) {
                    this.getPos(true);
                    this.translateOffsetX = this.translateOffsetY = 0;
                    this.scaleOffsetX = this.scaleOffsetY = 1;
                    for (var h = 0, d = this.canvases.length; h < d; h++) {
                        this.canvases[h].resize(e, g)
                    }
                    var f = this.element.style;
                    f.width = e + "px";
                    f.height = g + "px";
                    if (this.labelContainer) {
                        this.labelContainer.style.width = e + "px"
                    }
                },
                translate: function(g, e, f) {
                    this.translateOffsetX += g * this.scaleOffsetX;
                    this.translateOffsetY += e * this.scaleOffsetY;
                    for (var h = 0, d = this.canvases.length; h < d; h++) {
                        this.canvases[h].translate(g, e, f)
                    }
                },
                scale: function(l, f, e) {
                    var k = this.scaleOffsetX * l,
                        d = this.scaleOffsetY * f;
                    var i = this.translateOffsetX * (l - 1) / k,
                        j = this.translateOffsetY * (f - 1) / d;
                    this.scaleOffsetX = k;
                    this.scaleOffsetY = d;
                    for (var g = 0, h = this.canvases.length; g < h; g++) {
                        this.canvases[g].scale(l, f, true)
                    }
                    this.translate(i, j, false)
                },
                getPos: function(d) {
                    if (d || !this.pos) {
                        return this.pos = P.getPos(this.getElement())
                    }
                    return this.pos
                },
                clear: function(d) {
                    this.canvases[d || 0].clear()
                },
                path: function(d, f) {
                    var e = this.canvases[0].getCtx();
                    e.beginPath();
                    f(e);
                    e[d]();
                    e.closePath()
                },
                createLabelContainer: function(j, e, f) {
                    var g = "http://www.w3.org/2000/svg";
                    if (j == "HTML" || j == "Native") {
                        return a("div", {
                            id: e,
                            style: {
                                overflow: "visible",
                                position: "absolute",
                                top: 0,
                                left: 0,
                                width: f.width + "px",
                                height: 0
                            }
                        })
                    } else {
                        if (j == "SVG") {
                            var i = document.createElementNS(g, "svg:svg");
                            i.setAttribute("width", f.width);
                            i.setAttribute("height", f.height);
                            var d = i.style;
                            d.position = "absolute";
                            d.left = d.top = "0px";
                            var h = document.createElementNS(g, "svg:g");
                            h.setAttribute("width", f.width);
                            h.setAttribute("height", f.height);
                            h.setAttribute("x", 0);
                            h.setAttribute("y", 0);
                            h.setAttribute("id", e);
                            i.appendChild(h);
                            return i
                        }
                    }
                }
            });
            G.Base = {};
            G.Base["2D"] = new B({
                translateOffsetX: 0,
                translateOffsetY: 0,
                scaleOffsetX: 1,
                scaleOffsetY: 1,
                initialize: function(d) {
                    this.viz = d;
                    this.opt = d.config;
                    this.size = false;
                    this.createCanvas();
                    this.translateToCenter()
                },
                createCanvas: function() {
                    var d = this.opt,
                        f = d.width,
                        e = d.height;
                    this.canvas = a("canvas", {
                        id: d.injectInto + d.idSuffix,
                        width: f,
                        height: e,
                        style: {
                            position: "absolute",
                            top: 0,
                            left: 0,
                            width: f + "px",
                            height: e + "px"
                        }
                    })
                },
                getCtx: function() {
                    if (!this.ctx) {
                        return this.ctx = this.canvas.getContext("2d")
                    }
                    return this.ctx
                },
                getSize: function() {
                    if (this.size) {
                        return this.size
                    }
                    var d = this.canvas;
                    return this.size = {
                        width: d.width,
                        height: d.height
                    }
                },
                translateToCenter: function(f) {
                    var d = this.getSize(),
                        g = f ? (d.width - f.width - this.translateOffsetX * 2) : d.width;
                    height = f ? (d.height - f.height - this.translateOffsetY * 2) : d.height;
                    var e = this.getCtx();
                    f && e.scale(1 / this.scaleOffsetX, 1 / this.scaleOffsetY);
                    e.translate(g / 2, height / 2)
                },
                resize: function(g, f) {
                    var h = this.getSize(),
                        d = this.canvas,
                        e = d.style;
                    this.size = false;
                    d.width = g;
                    d.height = f;
                    e.width = g + "px";
                    e.height = f + "px";
                    if (!c) {
                        this.translateToCenter(h)
                    } else {
                        this.translateToCenter()
                    }
                    this.translateOffsetX = this.translateOffsetY = 0;
                    this.scaleOffsetX = this.scaleOffsetY = 1;
                    this.clear();
                    this.viz.resize(g, f, this)
                },
                translate: function(g, e, d) {
                    var f = this.scaleOffsetX,
                        h = this.scaleOffsetY;
                    this.translateOffsetX += g * f;
                    this.translateOffsetY += e * h;
                    this.getCtx().translate(g, e);
                    !d && this.plot()
                },
                scale: function(e, f, d) {
                    this.scaleOffsetX *= e;
                    this.scaleOffsetY *= f;
                    this.getCtx().scale(e, f);
                    !d && this.plot()
                },
                clear: function() {
                    var h = this.getSize(),
                        d = this.translateOffsetX,
                        g = this.translateOffsetY,
                        e = this.scaleOffsetX,
                        f = this.scaleOffsetY;
                    this.getCtx().clearRect((-h.width / 2 - d) * 1 / e, (-h.height / 2 - g) * 1 / f, h.width * 1 / e, h.height * 1 / f)
                },
                plot: function() {
                    this.clear();
                    this.viz.plot(this)
                }
            });
            G.Background = {};
            G.Background.Circles = new B({
                initialize: function(e, d) {
                    this.viz = e;
                    this.config = P.merge({
                        idSuffix: "-bkcanvas",
                        levelDistance: 100,
                        numberOfCircles: 6,
                        CanvasStyles: {},
                        offset: 0
                    }, d)
                },
                resize: function(d, e, f) {
                    this.plot(f)
                },
                plot: function(h) {
                    var g = h.canvas,
                        j = h.getCtx(),
                        d = this.config,
                        k = d.CanvasStyles;
                    for (var i in k) {
                        j[i] = k[i]
                    }
                    var f = d.numberOfCircles,
                        l = d.levelDistance;
                    for (var e = 1; e <= f; e++) {
                        j.beginPath();
                        j.arc(0, 0, l * e, 0, 2 * Math.PI, false);
                        j.stroke();
                        j.closePath()
                    }
                }
            })
        })();
        var Q = function(a, b) {
            this.theta = a || 0;
            this.rho = b || 0
        };
        $jit.Polar = Q;
        Q.prototype = {
            getc: function(a) {
                return this.toComplex(a)
            },
            getp: function() {
                return this
            },
            set: function(a) {
                a = a.getp();
                this.theta = a.theta;
                this.rho = a.rho
            },
            setc: function(a, b) {
                this.rho = Math.sqrt(a * a + b * b);
                this.theta = Math.atan2(b, a);
                if (this.theta < 0) {
                    this.theta += Math.PI * 2
                }
            },
            setp: function(a, b) {
                this.theta = a;
                this.rho = b
            },
            clone: function() {
                return new Q(this.theta, this.rho)
            },
            toComplex: function(a) {
                var b = Math.cos(this.theta) * this.rho;
                var c = Math.sin(this.theta) * this.rho;
                if (a) {
                    return {
                        x: b,
                        y: c
                    }
                }
                return new C(b, c)
            },
            add: function(a) {
                return new Q(this.theta + a.theta, this.rho + a.rho)
            },
            scale: function(a) {
                return new Q(this.theta, this.rho * a)
            },
            equals: function(a) {
                return this.theta == a.theta && this.rho == a.rho
            },
            $add: function(a) {
                this.theta = this.theta + a.theta;
                this.rho += a.rho;
                return this
            },
            $madd: function(a) {
                this.theta = (this.theta + a.theta) % (Math.PI * 2);
                this.rho += a.rho;
                return this
            },
            $scale: function(a) {
                this.rho *= a;
                return this
            },
            isZero: function() {
                var a = 0.0001,
                    b = Math.abs;
                return b(this.theta) < a && b(this.rho) < a
            },
            interpolate: function(f, i) {
                var e = Math.PI,
                    b = e * 2;
                var g = function(k) {
                    var l = (k < 0) ? (k % b) + b : k % b;
                    return l
                };
                var c = this.theta,
                    j = f.theta;
                var d, a = Math.abs(c - j);
                if (a == e) {
                    if (c > j) {
                        d = g((j + ((c - b) - j) * i))
                    } else {
                        d = g((j - b + (c - (j)) * i))
                    }
                } else {
                    if (a >= e) {
                        if (c > j) {
                            d = g((j + ((c - b) - j) * i))
                        } else {
                            d = g((j - b + (c - (j - b)) * i))
                        }
                    } else {
                        d = g((j + (c - j) * i))
                    }
                }
                var h = (this.rho - f.rho) * i + f.rho;
                return {
                    theta: d,
                    rho: h
                }
            }
        };
        var H = function(a, b) {
            return new Q(a, b)
        };
        Q.KER = H(0, 0);
        var C = function(a, b) {
            this.x = a || 0;
            this.y = b || 0
        };
        $jit.Complex = C;
        C.prototype = {
            getc: function() {
                return this
            },
            getp: function(a) {
                return this.toPolar(a)
            },
            set: function(a) {
                a = a.getc(true);
                this.x = a.x;
                this.y = a.y
            },
            setc: function(a, b) {
                this.x = a;
                this.y = b
            },
            setp: function(a, b) {
                this.x = Math.cos(a) * b;
                this.y = Math.sin(a) * b
            },
            clone: function() {
                return new C(this.x, this.y)
            },
            toPolar: function(c) {
                var b = this.norm();
                var a = Math.atan2(this.y, this.x);
                if (a < 0) {
                    a += Math.PI * 2
                }
                if (c) {
                    return {
                        theta: a,
                        rho: b
                    }
                }
                return new Q(a, b)
            },
            norm: function() {
                return Math.sqrt(this.squaredNorm())
            },
            squaredNorm: function() {
                return this.x * this.x + this.y * this.y
            },
            add: function(a) {
                return new C(this.x + a.x, this.y + a.y)
            },
            prod: function(a) {
                return new C(this.x * a.x - this.y * a.y, this.y * a.x + this.x * a.y)
            },
            conjugate: function() {
                return new C(this.x, -this.y)
            },
            scale: function(a) {
                return new C(this.x * a, this.y * a)
            },
            equals: function(a) {
                return this.x == a.x && this.y == a.y
            },
            $add: function(a) {
                this.x += a.x;
                this.y += a.y;
                return this
            },
            $prod: function(a) {
                var b = this.x,
                    c = this.y;
                this.x = b * a.x - c * a.y;
                this.y = c * a.x + b * a.y;
                return this
            },
            $conjugate: function() {
                this.y = -this.y;
                return this
            },
            $scale: function(a) {
                this.x *= a;
                this.y *= a;
                return this
            },
            $div: function(d) {
                var b = this.x,
                    a = this.y;
                var c = d.squaredNorm();
                this.x = b * d.x + a * d.y;
                this.y = a * d.x - b * d.y;
                return this.$scale(1 / c)
            },
            isZero: function() {
                var a = 0.0001,
                    b = Math.abs;
                return b(this.x) < a && b(this.y) < a
            }
        };
        var A = function(a, b) {
            return new C(a, b)
        };
        C.KER = A(0, 0);
        $jit.Graph = new B({
            initialize: function(g, b, c, e) {
                var a = {
                    klass: C,
                    Node: {}
                };
                this.Node = b;
                this.Edge = c;
                this.Label = e;
                this.opt = P.merge(a, g || {});
                this.nodes = {};
                this.edges = {};
                var d = this;
                this.nodeList = {};
                for (var f in I) {
                    d.nodeList[f] = (function(h) {
                        return function() {
                            var i = Array.prototype.slice.call(arguments);
                            d.eachNode(function(j) {
                                j[h].apply(j, i)
                            })
                        }
                    })(f)
                }
            },
            getNode: function(a) {
                if (this.hasNode(a)) {
                    return this.nodes[a]
                }
                return false
            },
            get: function(a) {
                return this.getNode(a)
            },
            getByName: function(b) {
                for (var c in this.nodes) {
                    var a = this.nodes[c];
                    if (a.name == b) {
                        return a
                    }
                }
                return false
            },
            getAdjacence: function(a, b) {
                if (a in this.edges) {
                    return this.edges[a][b]
                }
                return false
            },
            addNode: function(a) {
                if (!this.nodes[a.id]) {
                    var b = this.edges[a.id] = {};
                    this.nodes[a.id] = new N.Node(P.extend({
                        id: a.id,
                        name: a.name,
                        data: P.merge(a.data || {}, {}),
                        adjacencies: b
                    }, this.opt.Node), this.opt.klass, this.Node, this.Edge, this.Label)
                }
                return this.nodes[a.id]
            },
            addAdjacence: function(d, e, b) {
                if (!this.hasNode(d.id)) {
                    this.addNode(d)
                }
                if (!this.hasNode(e.id)) {
                    this.addNode(e)
                }
                d = this.nodes[d.id];
                e = this.nodes[e.id];
                if (!d.adjacentTo(e)) {
                    var a = this.edges[d.id] = this.edges[d.id] || {};
                    var c = this.edges[e.id] = this.edges[e.id] || {};
                    a[e.id] = c[d.id] = new N.Adjacence(d, e, b, this.Edge, this.Label);
                    return a[e.id]
                }
                return this.edges[d.id][e.id]
            },
            removeNode: function(c) {
                if (this.hasNode(c)) {
                    delete this.nodes[c];
                    var a = this.edges[c];
                    for (var b in a) {
                        delete this.edges[b][c]
                    }
                    delete this.edges[c]
                }
            },
            removeAdjacence: function(a, b) {
                delete this.edges[a][b];
                delete this.edges[b][a]
            },
            hasNode: function(a) {
                return a in this.nodes
            },
            empty: function() {
                this.nodes = {};
                this.edges = {}
            }
        });
        var N = $jit.Graph;
        var I;
        (function() {
            var b = function(g, e, d, i, f) {
                var j;
                d = d || "current";
                g = "$" + (g ? g + "-" : "");
                if (d == "current") {
                    j = this.data
                } else {
                    if (d == "start") {
                        j = this.startData
                    } else {
                        if (d == "end") {
                            j = this.endData
                        }
                    }
                }
                var h = g + e;
                if (i) {
                    return j[h]
                }
                if (!this.Config.overridable) {
                    return f[e] || 0
                }
                return (h in j) ? j[h] : ((h in this.data) ? this.data[h] : (f[e] || 0))
            };
            var c = function(g, e, h, f) {
                f = f || "current";
                g = "$" + (g ? g + "-" : "");
                var d;
                if (f == "current") {
                    d = this.data
                } else {
                    if (f == "start") {
                        d = this.startData
                    } else {
                        if (f == "end") {
                            d = this.endData
                        }
                    }
                }
                d[g + e] = h
            };
            var a = function(f, e) {
                f = "$" + (f ? f + "-" : "");
                var d = this;
                P.each(e, function(g) {
                    var h = f + g;
                    delete d.data[h];
                    delete d.endData[h];
                    delete d.startData[h]
                })
            };
            I = {
                getData: function(f, e, d) {
                    return b.call(this, "", f, e, d, this.Config)
                },
                setData: function(f, d, e) {
                    c.call(this, "", f, d, e)
                },
                setDataset: function(h, f) {
                    h = P.splat(h);
                    for (var g in f) {
                        for (var i = 0, e = P.splat(f[g]), d = h.length; i < d; i++) {
                            this.setData(g, e[i], h[i])
                        }
                    }
                },
                removeData: function() {
                    a.call(this, "", Array.prototype.slice.call(arguments))
                },
                getCanvasStyle: function(f, e, d) {
                    return b.call(this, "canvas", f, e, d, this.Config.CanvasStyles)
                },
                setCanvasStyle: function(f, d, e) {
                    c.call(this, "canvas", f, d, e)
                },
                setCanvasStyles: function(h, f) {
                    h = P.splat(h);
                    for (var g in f) {
                        for (var i = 0, e = P.splat(f[g]), d = h.length; i < d; i++) {
                            this.setCanvasStyle(g, e[i], h[i])
                        }
                    }
                },
                removeCanvasStyle: function() {
                    a.call(this, "canvas", Array.prototype.slice.call(arguments))
                },
                getLabelData: function(f, e, d) {
                    return b.call(this, "label", f, e, d, this.Label)
                },
                setLabelData: function(f, d, e) {
                    c.call(this, "label", f, d, e)
                },
                setLabelDataset: function(h, f) {
                    h = P.splat(h);
                    for (var g in f) {
                        for (var i = 0, e = P.splat(f[g]), d = h.length; i < d; i++) {
                            this.setLabelData(g, e[i], h[i])
                        }
                    }
                },
                removeLabelData: function() {
                    a.call(this, "label", Array.prototype.slice.call(arguments))
                }
            }
        })();
        N.Node = new B({
            initialize: function(d, c, f, b, e) {
                var a = {
                    id: "",
                    name: "",
                    data: {},
                    startData: {},
                    endData: {},
                    adjacencies: {},
                    selected: false,
                    drawn: false,
                    exist: false,
                    angleSpan: {
                        begin: 0,
                        end: 0
                    },
                    pos: new c,
                    startPos: new c,
                    endPos: new c
                };
                P.extend(this, P.extend(a, d));
                this.Config = this.Node = f;
                this.Edge = b;
                this.Label = e
            },
            adjacentTo: function(a) {
                return a.id in this.adjacencies
            },
            getAdjacency: function(a) {
                return this.adjacencies[a]
            },
            getPos: function(a) {
                a = a || "current";
                if (a == "current") {
                    return this.pos
                } else {
                    if (a == "end") {
                        return this.endPos
                    } else {
                        if (a == "start") {
                            return this.startPos
                        }
                    }
                }
            },
            setPos: function(a, b) {
                b = b || "current";
                var c;
                if (b == "current") {
                    c = this.pos
                } else {
                    if (b == "end") {
                        c = this.endPos
                    } else {
                        if (b == "start") {
                            c = this.startPos
                        }
                    }
                }
                c.set(a)
            }
        });
        N.Node.implement(I);
        N.Adjacence = new B({
            initialize: function(b, a, e, c, d) {
                this.nodeFrom = b;
                this.nodeTo = a;
                this.data = e || {};
                this.startData = {};
                this.endData = {};
                this.Config = this.Edge = c;
                this.Label = d
            }
        });
        N.Adjacence.implement(I);
        N.Util = {
            filter: function(a) {
                if (!a || !(P.type(a) == "string")) {
                    return function() {
                        return true
                    }
                }
                var b = a.split(" ");
                return function(c) {
                    for (var d = 0; d < b.length; d++) {
                        if (c[b[d]]) {
                            return false
                        }
                    }
                    return true
                }
            },
            getNode: function(b, a) {
                return b.nodes[a]
            },
            eachNode: function(b, d, c) {
                var e = this.filter(c);
                for (var a in b.nodes) {
                    if (e(b.nodes[a])) {
                        d(b.nodes[a])
                    }
                }
            },
            each: function(c, a, b) {
                this.eachNode(c, a, b)
            },
            eachAdjacency: function(h, f, b) {
                var g = h.adjacencies,
                    a = this.filter(b);
                for (var d in g) {
                    var c = g[d];
                    if (a(c)) {
                        if (c.nodeFrom != h) {
                            var e = c.nodeFrom;
                            c.nodeFrom = c.nodeTo;
                            c.nodeTo = e
                        }
                        f(c, d)
                    }
                }
            },
            computeLevels: function(f, d, e, h) {
                e = e || 0;
                var b = this.filter(h);
                this.eachNode(f, function(i) {
                    i._flag = false;
                    i._depth = -1
                }, h);
                var a = f.getNode(d);
                a._depth = e;
                var c = [a];
                while (c.length != 0) {
                    var g = c.pop();
                    g._flag = true;
                    this.eachAdjacency(g, function(j) {
                        var i = j.nodeTo;
                        if (i._flag == false && b(i)) {
                            if (i._depth < 0) {
                                i._depth = g._depth + 1 + e
                            }
                            c.unshift(i)
                        }
                    }, h)
                }
            },
            eachBFS: function(g, e, b, a) {
                var f = this.filter(a);
                this.clean(g);
                var c = [g.getNode(e)];
                while (c.length != 0) {
                    var d = c.pop();
                    d._flag = true;
                    b(d, d._depth);
                    this.eachAdjacency(d, function(i) {
                        var h = i.nodeTo;
                        if (h._flag == false && f(h)) {
                            h._flag = true;
                            c.unshift(h)
                        }
                    }, a)
                }
            },
            eachLevel: function(d, i, g, c, e) {
                var a = d._depth,
                    h = this.filter(e),
                    b = this;
                g = g === false ? Number.MAX_VALUE - a : g;
                (function f(k, m, l) {
                    var j = k._depth;
                    if (j >= m && j <= l && h(k)) {
                        c(k, j)
                    }
                    if (j < l) {
                        b.eachAdjacency(k, function(o) {
                            var n = o.nodeTo;
                            if (n._depth > j) {
                                f(n, m, l)
                            }
                        })
                    }
                })(d, i + a, g + a)
            },
            eachSubgraph: function(a, c, b) {
                this.eachLevel(a, 0, false, c, b)
            },
            eachSubnode: function(a, c, b) {
                this.eachLevel(a, 1, 1, c, b)
            },
            anySubnode: function(d, e, b) {
                var c = false;
                e = e || P.lambda(true);
                var a = P.type(e) == "string" ? function(f) {
                    return f[e]
                } : e;
                this.eachSubnode(d, function(f) {
                    if (a(f)) {
                        c = true
                    }
                }, b);
                return c
            },
            getSubnodes: function(g, e, c) {
                var f = [],
                    b = this;
                e = e || 0;
                var d, a;
                if (P.type(e) == "array") {
                    d = e[0];
                    a = e[1]
                } else {
                    d = e;
                    a = Number.MAX_VALUE - g._depth
                }
                this.eachLevel(g, d, a, function(h) {
                    f.push(h)
                }, c);
                return f
            },
            getParents: function(a) {
                var b = [];
                this.eachAdjacency(a, function(d) {
                    var c = d.nodeTo;
                    if (c._depth < a._depth) {
                        b.push(c)
                    }
                });
                return b
            },
            isDescendantOf: function(d, b) {
                if (d.id == b) {
                    return true
                }
                var e = this.getParents(d),
                    c = false;
                for (var a = 0; !c && a < e.length; a++) {
                    c = c || this.isDescendantOf(e[a], b)
                }
                return c
            },
            clean: function(a) {
                this.eachNode(a, function(b) {
                    b._flag = false
                })
            },
            getClosestNodeToOrigin: function(a, c, b) {
                return this.getClosestNodeToPos(a, Q.KER, c, b)
            },
            getClosestNodeToPos: function(f, e, b, c) {
                var a = null;
                b = b || "current";
                e = e && e.getc(true) || C.KER;
                var d = function(i, j) {
                    var g = i.x - j.x,
                        h = i.y - j.y;
                    return g * g + h * h
                };
                this.eachNode(f, function(g) {
                    a = (a == null || d(g.getPos(b).getc(true), e) < d(a.getPos(b).getc(true), e)) ? g : a
                }, c);
                return a
            }
        };
        P.each(["get", "getNode", "each", "eachNode", "computeLevels", "eachBFS", "clean", "getClosestNodeToPos", "getClosestNodeToOrigin"], function(a) {
            N.prototype[a] = function() {
                return N.Util[a].apply(N.Util, [this].concat(Array.prototype.slice.call(arguments)))
            }
        });
        P.each(["eachAdjacency", "eachLevel", "eachSubgraph", "eachSubnode", "anySubnode", "getSubnodes", "getParents", "isDescendantOf"], function(a) {
            N.Node.prototype[a] = function() {
                return N.Util[a].apply(N.Util, [this].concat(Array.prototype.slice.call(arguments)))
            }
        });
        N.Op = {
            options: {
                type: "nothing",
                duration: 2000,
                hideLabels: true,
                fps: 30
            },
            initialize: function(a) {
                this.viz = a
            },
            removeNode: function(h, f) {
                var c = this.viz;
                var b = P.merge(this.options, c.controller, f);
                var d = P.splat(h);
                var g, a, e;
                switch (b.type) {
                    case "nothing":
                        for (g = 0; g < d.length; g++) {
                            c.graph.removeNode(d[g])
                        }
                        break;
                    case "replot":
                        this.removeNode(d, {
                            type: "nothing"
                        });
                        c.labels.clearLabels();
                        c.refresh(true);
                        break;
                    case "fade:seq":
                    case "fade":
                        a = this;
                        for (g = 0; g < d.length; g++) {
                            e = c.graph.getNode(d[g]);
                            e.setData("alpha", 0, "end")
                        }
                        c.fx.animate(P.merge(b, {
                            modes: ["node-property:alpha"],
                            onComplete: function() {
                                a.removeNode(d, {
                                    type: "nothing"
                                });
                                c.labels.clearLabels();
                                c.reposition();
                                c.fx.animate(P.merge(b, {
                                    modes: ["linear"]
                                }))
                            }
                        }));
                        break;
                    case "fade:con":
                        a = this;
                        for (g = 0; g < d.length; g++) {
                            e = c.graph.getNode(d[g]);
                            e.setData("alpha", 0, "end");
                            e.ignore = true
                        }
                        c.reposition();
                        c.fx.animate(P.merge(b, {
                            modes: ["node-property:alpha", "linear"],
                            onComplete: function() {
                                a.removeNode(d, {
                                    type: "nothing"
                                });
                                b.onComplete && b.onComplete()
                            }
                        }));
                        break;
                    case "iter":
                        a = this;
                        c.fx.sequence({
                            condition: function() {
                                return d.length != 0
                            },
                            step: function() {
                                a.removeNode(d.shift(), {
                                    type: "nothing"
                                });
                                c.labels.clearLabels()
                            },
                            onComplete: function() {
                                b.onComplete && b.onComplete()
                            },
                            duration: Math.ceil(b.duration / d.length)
                        });
                        break;
                    default:
                        this.doError()
                }
            },
            removeEdge: function(d, h) {
                var c = this.viz;
                var f = P.merge(this.options, c.controller, h);
                var g = (P.type(d[0]) == "string") ? [d] : d;
                var b, e, a;
                switch (f.type) {
                    case "nothing":
                        for (b = 0; b < g.length; b++) {
                            c.graph.removeAdjacence(g[b][0], g[b][1])
                        }
                        break;
                    case "replot":
                        this.removeEdge(g, {
                            type: "nothing"
                        });
                        c.refresh(true);
                        break;
                    case "fade:seq":
                    case "fade":
                        e = this;
                        for (b = 0; b < g.length; b++) {
                            a = c.graph.getAdjacence(g[b][0], g[b][1]);
                            if (a) {
                                a.setData("alpha", 0, "end")
                            }
                        }
                        c.fx.animate(P.merge(f, {
                            modes: ["edge-property:alpha"],
                            onComplete: function() {
                                e.removeEdge(g, {
                                    type: "nothing"
                                });
                                c.reposition();
                                c.fx.animate(P.merge(f, {
                                    modes: ["linear"]
                                }))
                            }
                        }));
                        break;
                    case "fade:con":
                        e = this;
                        for (b = 0; b < g.length; b++) {
                            a = c.graph.getAdjacence(g[b][0], g[b][1]);
                            if (a) {
                                a.setData("alpha", 0, "end");
                                a.ignore = true
                            }
                        }
                        c.reposition();
                        c.fx.animate(P.merge(f, {
                            modes: ["edge-property:alpha", "linear"],
                            onComplete: function() {
                                e.removeEdge(g, {
                                    type: "nothing"
                                });
                                f.onComplete && f.onComplete()
                            }
                        }));
                        break;
                    case "iter":
                        e = this;
                        c.fx.sequence({
                            condition: function() {
                                return g.length != 0
                            },
                            step: function() {
                                e.removeEdge(g.shift(), {
                                    type: "nothing"
                                });
                                c.labels.clearLabels()
                            },
                            onComplete: function() {
                                f.onComplete()
                            },
                            duration: Math.ceil(f.duration / g.length)
                        });
                        break;
                    default:
                        this.doError()
                }
            },
            sum: function(b, f) {
                var c = this.viz;
                var h = P.merge(this.options, c.controller, f),
                    a = c.root;
                var e;
                c.root = f.id || c.root;
                switch (h.type) {
                    case "nothing":
                        e = c.construct(b);
                        e.eachNode(function(i) {
                            i.eachAdjacency(function(j) {
                                c.graph.addAdjacence(j.nodeFrom, j.nodeTo, j.data)
                            })
                        });
                        break;
                    case "replot":
                        c.refresh(true);
                        this.sum(b, {
                            type: "nothing"
                        });
                        c.refresh(true);
                        break;
                    case "fade:seq":
                    case "fade":
                    case "fade:con":
                        that = this;
                        e = c.construct(b);
                        var d = this.preprocessSum(e);
                        var g = !d ? ["node-property:alpha"] : ["node-property:alpha", "edge-property:alpha"];
                        c.reposition();
                        if (h.type != "fade:con") {
                            c.fx.animate(P.merge(h, {
                                modes: ["linear"],
                                onComplete: function() {
                                    c.fx.animate(P.merge(h, {
                                        modes: g,
                                        onComplete: function() {
                                            h.onComplete()
                                        }
                                    }))
                                }
                            }))
                        } else {
                            c.graph.eachNode(function(i) {
                                if (i.id != a && i.pos.isZero()) {
                                    i.pos.set(i.endPos);
                                    i.startPos.set(i.endPos)
                                }
                            });
                            c.fx.animate(P.merge(h, {
                                modes: ["linear"].concat(g)
                            }))
                        }
                        break;
                    default:
                        this.doError()
                }
            },
            morph: function(j, g, e) {
                e = e || {};
                var c = this.viz;
                var i = P.merge(this.options, c.controller, g),
                    d = c.root;
                var b;
                c.root = g.id || c.root;
                switch (i.type) {
                    case "nothing":
                        b = c.construct(j);
                        b.eachNode(function(l) {
                            var m = c.graph.hasNode(l.id);
                            l.eachAdjacency(function(r) {
                                var o = !!c.graph.getAdjacence(r.nodeFrom.id, r.nodeTo.id);
                                c.graph.addAdjacence(r.nodeFrom, r.nodeTo, r.data);
                                if (o) {
                                    var p = c.graph.getAdjacence(r.nodeFrom.id, r.nodeTo.id);
                                    for (var q in (r.data || {})) {
                                        p.data[q] = r.data[q]
                                    }
                                }
                            });
                            if (m) {
                                var n = c.graph.getNode(l.id);
                                for (var k in (l.data || {})) {
                                    n.data[k] = l.data[k]
                                }
                            }
                        });
                        c.graph.eachNode(function(k) {
                            k.eachAdjacency(function(l) {
                                if (!b.getAdjacence(l.nodeFrom.id, l.nodeTo.id)) {
                                    c.graph.removeAdjacence(l.nodeFrom.id, l.nodeTo.id)
                                }
                            });
                            if (!b.hasNode(k.id)) {
                                c.graph.removeNode(k.id)
                            }
                        });
                        break;
                    case "replot":
                        c.labels.clearLabels(true);
                        this.morph(j, {
                            type: "nothing"
                        });
                        c.refresh(true);
                        c.refresh(true);
                        break;
                    case "fade:seq":
                    case "fade":
                    case "fade:con":
                        that = this;
                        b = c.construct(j);
                        var a = ("node-property" in e) && P.map(P.splat(e["node-property"]), function(k) {
                            return "$" + k
                        });
                        c.graph.eachNode(function(m) {
                            var l = b.getNode(m.id);
                            if (!l) {
                                m.setData("alpha", 1);
                                m.setData("alpha", 1, "start");
                                m.setData("alpha", 0, "end");
                                m.ignore = true
                            } else {
                                var n = l.data;
                                for (var k in n) {
                                    if (a && (P.indexOf(a, k) > -1)) {
                                        m.endData[k] = n[k]
                                    } else {
                                        m.data[k] = n[k]
                                    }
                                }
                            }
                        });
                        c.graph.eachNode(function(k) {
                            if (k.ignore) {
                                return
                            }
                            k.eachAdjacency(function(n) {
                                if (n.nodeFrom.ignore || n.nodeTo.ignore) {
                                    return
                                }
                                var m = b.getNode(n.nodeFrom.id);
                                var l = b.getNode(n.nodeTo.id);
                                if (!m.adjacentTo(l)) {
                                    var n = c.graph.getAdjacence(m.id, l.id);
                                    h = true;
                                    n.setData("alpha", 1);
                                    n.setData("alpha", 1, "start");
                                    n.setData("alpha", 0, "end")
                                }
                            })
                        });
                        var h = this.preprocessSum(b);
                        var f = !h ? ["node-property:alpha"] : ["node-property:alpha", "edge-property:alpha"];
                        f[0] = f[0] + (("node-property" in e) ? (":" + P.splat(e["node-property"]).join(":")) : "");
                        f[1] = (f[1] || "edge-property:alpha") + (("edge-property" in e) ? (":" + P.splat(e["edge-property"]).join(":")) : "");
                        if ("label-property" in e) {
                            f.push("label-property:" + P.splat(e["label-property"]).join(":"))
                        }
                        if (c.reposition) {
                            c.reposition()
                        } else {
                            c.compute("end")
                        }
                        c.graph.eachNode(function(k) {
                            if (k.id != d && k.pos.getp().equals(Q.KER)) {
                                k.pos.set(k.endPos);
                                k.startPos.set(k.endPos)
                            }
                        });
                        c.fx.animate(P.merge(i, {
                            modes: [e.position || "polar"].concat(f),
                            onComplete: function() {
                                c.graph.eachNode(function(k) {
                                    if (k.ignore) {
                                        c.graph.removeNode(k.id)
                                    }
                                });
                                c.graph.eachNode(function(k) {
                                    k.eachAdjacency(function(l) {
                                        if (l.ignore) {
                                            c.graph.removeAdjacence(l.nodeFrom.id, l.nodeTo.id)
                                        }
                                    })
                                });
                                i.onComplete()
                            }
                        }));
                        break;
                    default:
                }
            },
            contract: function(d, a) {
                var b = this.viz;
                if (d.collapsed || !d.anySubnode(P.lambda(true))) {
                    return
                }
                a = P.merge(this.options, b.config, a || {}, {
                    modes: ["node-property:alpha:span", "linear"]
                });
                d.collapsed = true;
                (function c(e) {
                    e.eachSubnode(function(f) {
                        f.ignore = true;
                        f.setData("alpha", 0, a.type == "animate" ? "end" : "current");
                        c(f)
                    })
                })(d);
                if (a.type == "animate") {
                    b.compute("end");
                    if (b.rotated) {
                        b.rotate(b.rotated, "none", {
                            property: "end"
                        })
                    }(function c(e) {
                        e.eachSubnode(function(f) {
                            f.setPos(d.getPos("end"), "end");
                            c(f)
                        })
                    })(d);
                    b.fx.animate(a)
                } else {
                    if (a.type == "replot") {
                        b.refresh()
                    }
                }
            },
            expand: function(d, a) {
                if (!("collapsed" in d)) {
                    return
                }
                var b = this.viz;
                a = P.merge(this.options, b.config, a || {}, {
                    modes: ["node-property:alpha:span", "linear"]
                });
                delete d.collapsed;
                (function c(e) {
                    e.eachSubnode(function(f) {
                        delete f.ignore;
                        f.setData("alpha", 1, a.type == "animate" ? "end" : "current");
                        c(f)
                    })
                })(d);
                if (a.type == "animate") {
                    b.compute("end");
                    if (b.rotated) {
                        b.rotate(b.rotated, "none", {
                            property: "end"
                        })
                    }
                    b.fx.animate(a)
                } else {
                    if (a.type == "replot") {
                        b.refresh()
                    }
                }
            },
            preprocessSum: function(a) {
                var b = this.viz;
                a.eachNode(function(e) {
                    if (!b.graph.hasNode(e.id)) {
                        b.graph.addNode(e);
                        var d = b.graph.getNode(e.id);
                        d.setData("alpha", 0);
                        d.setData("alpha", 0, "start");
                        d.setData("alpha", 1, "end")
                    }
                });
                var c = false;
                a.eachNode(function(d) {
                    d.eachAdjacency(function(e) {
                        var g = b.graph.getNode(e.nodeFrom.id);
                        var f = b.graph.getNode(e.nodeTo.id);
                        if (!g.adjacentTo(f)) {
                            var e = b.graph.addAdjacence(g, f, e.data);
                            if (g.startAlpha == g.endAlpha && f.startAlpha == f.endAlpha) {
                                c = true;
                                e.setData("alpha", 0);
                                e.setData("alpha", 0, "start");
                                e.setData("alpha", 1, "end")
                            }
                        }
                    })
                });
                return c
            }
        };
        var R = {
            none: {
                render: P.empty,
                contains: P.lambda(false)
            },
            circle: {
                render: function(d, b, c, e) {
                    var a = e.getCtx();
                    a.beginPath();
                    a.arc(b.x, b.y, c, 0, Math.PI * 2, true);
                    a.closePath();
                    a[d]()
                },
                contains: function(f, b, c) {
                    var e = f.x - b.x,
                        a = f.y - b.y,
                        d = e * e + a * a;
                    return d <= c * c
                }
            },
            ellipse: {
                render: function(b, k, h, j, g) {
                    var i = g.getCtx(),
                        e = 1,
                        f = 1,
                        a = 1,
                        c = 1,
                        d = 0;
                    if (h > j) {
                        d = h / 2;
                        f = j / h;
                        c = h / j
                    } else {
                        d = j / 2;
                        e = h / j;
                        a = j / h
                    }
                    i.save();
                    i.scale(e, f);
                    i.beginPath();
                    i.arc(k.x * a, k.y * c, d, 0, Math.PI * 2, true);
                    i.closePath();
                    i[b]();
                    i.restore()
                },
                contains: function(h, a, g, i) {
                    var b = 0,
                        c = 1,
                        d = 1,
                        e = 0,
                        f = 0,
                        j = 0;
                    if (g > i) {
                        b = g / 2;
                        d = i / g
                    } else {
                        b = i / 2;
                        c = g / i
                    }
                    e = (h.x - a.x) * (1 / c);
                    f = (h.y - a.y) * (1 / d);
                    j = e * e + f * f;
                    return j <= b * b
                }
            },
            square: {
                render: function(a, c, d, b) {
                    b.getCtx()[a + "Rect"](c.x - d, c.y - d, 2 * d, 2 * d)
                },
                contains: function(c, a, b) {
                    return Math.abs(a.x - c.x) <= b && Math.abs(a.y - c.y) <= b
                }
            },
            rectangle: {
                render: function(d, b, e, c, a) {
                    a.getCtx()[d + "Rect"](b.x - e / 2, b.y - c / 2, e, c)
                },
                contains: function(c, d, a, b) {
                    return Math.abs(d.x - c.x) <= a / 2 && Math.abs(d.y - c.y) <= b / 2
                }
            },
            triangle: {
                render: function(b, a, e, h) {
                    var i = h.getCtx(),
                        f = a.x,
                        g = a.y - e,
                        j = f - e,
                        k = a.y + e,
                        c = f + e,
                        d = k;
                    i.beginPath();
                    i.moveTo(f, g);
                    i.lineTo(j, k);
                    i.lineTo(c, d);
                    i.closePath();
                    i[b]()
                },
                contains: function(c, a, b) {
                    return R.circle.contains(c, a, b)
                }
            },
            star: {
                render: function(b, e, g, a) {
                    var c = a.getCtx(),
                        d = Math.PI / 5;
                    c.save();
                    c.translate(e.x, e.y);
                    c.beginPath();
                    c.moveTo(g, 0);
                    for (var f = 0; f < 9; f++) {
                        c.rotate(d);
                        if (f % 2 == 0) {
                            c.lineTo((g / 0.525731) * 0.200811, 0)
                        } else {
                            c.lineTo(g, 0)
                        }
                    }
                    c.closePath();
                    c[b]();
                    c.restore()
                },
                contains: function(c, a, b) {
                    return R.circle.contains(c, a, b)
                }
            }
        };
        var F = {
            line: {
                render: function(c, d, a) {
                    var b = a.getCtx();
                    b.beginPath();
                    b.moveTo(c.x, c.y);
                    b.lineTo(d.x, d.y);
                    b.stroke()
                },
                contains: function(i, f, c, k) {
                    var e = Math.min,
                        b = Math.max,
                        g = e(i.x, f.x),
                        j = b(i.x, f.x),
                        h = e(i.y, f.y),
                        a = b(i.y, f.y);
                    if (c.x >= g && c.x <= j && c.y >= h && c.y <= a) {
                        if (Math.abs(f.x - i.x) <= k) {
                            return true
                        }
                        var d = (f.y - i.y) / (f.x - i.x) * (c.x - i.x) + i.y;
                        return Math.abs(d - c.y) <= k
                    }
                    return false
                }
            },
            arrow: {
                render: function(k, j, e, g, h) {
                    var i = h.getCtx();
                    if (g) {
                        var f = k;
                        k = j;
                        j = f
                    }
                    var b = new C(j.x - k.x, j.y - k.y);
                    b.$scale(e / b.norm());
                    var d = new C(j.x - b.x, j.y - b.y),
                        c = new C(-b.y / 2, b.x / 2),
                        l = d.add(c),
                        a = d.$add(c.$scale(-1));
                    i.beginPath();
                    i.moveTo(k.x, k.y);
                    i.lineTo(j.x, j.y);
                    i.stroke();
                    i.beginPath();
                    i.moveTo(l.x, l.y);
                    i.lineTo(a.x, a.y);
                    i.lineTo(j.x, j.y);
                    i.closePath();
                    i.fill()
                },
                contains: function(a, b, c, d) {
                    return F.line.contains(a, b, c, d)
                }
            },
            hyperline: {
                render: function(a, j, h, f) {
                    var i = f.getCtx();
                    var e = d(a, j);
                    if (e.a > 1000 || e.b > 1000 || e.ratio < 0) {
                        i.beginPath();
                        i.moveTo(a.x * h, a.y * h);
                        i.lineTo(j.x * h, j.y * h);
                        i.stroke()
                    } else {
                        var b = Math.atan2(j.y - e.y, j.x - e.x);
                        var c = Math.atan2(a.y - e.y, a.x - e.x);
                        var g = g(b, c);
                        i.beginPath();
                        i.arc(e.x * h, e.y * h, e.ratio * h, b, c, g);
                        i.stroke()
                    }

                    function d(k, l) {
                        var s = (k.x * l.y - k.y * l.x),
                            T = s;
                        var t = k.squaredNorm(),
                            u = l.squaredNorm();
                        if (s == 0) {
                            return {
                                x: 0,
                                y: 0,
                                ratio: -1
                            }
                        }
                        var m = (k.y * u - l.y * t + k.y - l.y) / s;
                        var o = (l.x * t - k.x * u + l.x - k.x) / T;
                        var n = -m / 2;
                        var p = -o / 2;
                        var q = (m * m + o * o) / 4 - 1;
                        if (q < 0) {
                            return {
                                x: 0,
                                y: 0,
                                ratio: -1
                            }
                        }
                        var r = Math.sqrt(q);
                        var v = {
                            x: n,
                            y: p,
                            ratio: r > 1000 ? -1 : r,
                            a: m,
                            b: o
                        };
                        return v
                    }

                    function g(l, k) {
                        return (l < k) ? ((l + Math.PI > k) ? false : true) : ((k + Math.PI > l) ? true : false)
                    }
                },
                contains: P.lambda(false)
            }
        };
        N.Plot = {
            initialize: function(a, b) {
                this.viz = a;
                this.config = a.config;
                this.node = a.config.Node;
                this.edge = a.config.Edge;
                this.animation = new x;
                this.nodeTypes = new b.Plot.NodeTypes;
                this.edgeTypes = new b.Plot.EdgeTypes;
                this.labels = a.labels
            },
            nodeHelper: R,
            edgeHelper: F,
            Interpolator: {
                map: {
                    border: "color",
                    color: "color",
                    width: "number",
                    height: "number",
                    dim: "number",
                    alpha: "number",
                    lineWidth: "number",
                    angularWidth: "number",
                    span: "number",
                    valueArray: "array-number",
                    dimArray: "array-number"
                },
                canvas: {
                    globalAlpha: "number",
                    fillStyle: "color",
                    strokeStyle: "color",
                    lineWidth: "number",
                    shadowBlur: "number",
                    shadowColor: "color",
                    shadowOffsetX: "number",
                    shadowOffsetY: "number",
                    miterLimit: "number"
                },
                label: {
                    size: "number",
                    color: "color"
                },
                compute: function(c, a, b) {
                    return c + (a - c) * b
                },
                moebius: function(e, g, c, f) {
                    var h = f.scale(-c);
                    if (h.norm() < 1) {
                        var b = h.x,
                            d = h.y;
                        var a = e.startPos.getc().moebiusTransformation(h);
                        e.pos.setc(a.x, a.y);
                        h.x = b;
                        h.y = d
                    }
                },
                linear: function(b, c, a) {
                    var d = b.startPos.getc(true);
                    var e = b.endPos.getc(true);
                    b.pos.setc(this.compute(d.x, e.x, a), this.compute(d.y, e.y, a))
                },
                polar: function(f, b, e) {
                    var a = f.startPos.getp(true);
                    var d = f.endPos.getp();
                    var c = d.interpolate(a, e);
                    f.pos.setp(c.theta, c.rho)
                },
                number: function(b, e, g, c, a) {
                    var d = b[c](e, "start");
                    var f = b[c](e, "end");
                    b[a](e, this.compute(d, f, g))
                },
                color: function(f, h, i, c, e) {
                    var b = P.hexToRgb(f[c](h, "start"));
                    var a = P.hexToRgb(f[c](h, "end"));
                    var d = this.compute;
                    var g = P.rgbToHex([parseInt(d(b[0], a[0], i)), parseInt(d(b[1], a[1], i)), parseInt(d(b[2], a[2], i))]);
                    f[e](h, g)
                },
                "array-number": function(e, f, i, m, c) {
                    var l = e[m](f, "start"),
                        k = e[m](f, "end"),
                        g = [];
                    for (var o = 0, d = l.length; o < d; o++) {
                        var h = l[o],
                            j = k[o];
                        if (h.length) {
                            for (var a = 0, n = h.length, b = []; a < n; a++) {
                                b.push(this.compute(h[a], j[a], i))
                            }
                            g.push(b)
                        } else {
                            g.push(this.compute(h, j, i))
                        }
                    }
                    e[c](f, g)
                },
                node: function(g, b, i, h, a, f) {
                    h = this[h];
                    if (b) {
                        var c = b.length;
                        for (var e = 0; e < c; e++) {
                            var d = b[e];
                            this[h[d]](g, d, i, a, f)
                        }
                    } else {
                        for (var d in h) {
                            this[h[d]](g, d, i, a, f)
                        }
                    }
                },
                edge: function(h, b, d, f, c, e) {
                    var g = h.adjacencies;
                    for (var a in g) {
                        this["node"](g[a], b, d, f, c, e)
                    }
                },
                "node-property": function(a, b, c) {
                    this["node"](a, b, c, "map", "getData", "setData")
                },
                "edge-property": function(a, b, c) {
                    this["edge"](a, b, c, "map", "getData", "setData")
                },
                "label-property": function(a, b, c) {
                    this["node"](a, b, c, "label", "getLabelData", "setLabelData")
                },
                "node-style": function(a, b, c) {
                    this["node"](a, b, c, "canvas", "getCanvasStyle", "setCanvasStyle")
                },
                "edge-style": function(a, b, c) {
                    this["edge"](a, b, c, "canvas", "getCanvasStyle", "setCanvasStyle")
                }
            },
            sequence: function(a) {
                var c = this;
                a = P.merge({
                    condition: P.lambda(false),
                    step: P.empty,
                    onComplete: P.empty,
                    duration: 200
                }, a || {});
                var b = setInterval(function() {
                    if (a.condition()) {
                        a.step()
                    } else {
                        clearInterval(b);
                        a.onComplete()
                    }
                    c.viz.refresh(true)
                }, a.duration)
            },
            prepare: function(f) {
                var h = this.viz.graph,
                    e = {
                        "node-property": {
                            getter: "getData",
                            setter: "setData"
                        },
                        "edge-property": {
                            getter: "getData",
                            setter: "setData"
                        },
                        "node-style": {
                            getter: "getCanvasStyle",
                            setter: "setCanvasStyle"
                        },
                        "edge-style": {
                            getter: "getCanvasStyle",
                            setter: "setCanvasStyle"
                        }
                    };
                var b = {};
                if (P.type(f) == "array") {
                    for (var a = 0, c = f.length; a < c; a++) {
                        var g = f[a].split(":");
                        b[g.shift()] = g
                    }
                } else {
                    for (var d in f) {
                        if (d == "position") {
                            b[f.position] = []
                        } else {
                            b[d] = P.splat(f[d])
                        }
                    }
                }
                h.eachNode(function(i) {
                    i.startPos.set(i.pos);
                    P.each(["node-property", "node-style"], function(k) {
                        if (k in b) {
                            var j = b[k];
                            for (var l = 0, m = j.length; l < m; l++) {
                                i[e[k].setter](j[l], i[e[k].getter](j[l]), "start")
                            }
                        }
                    });
                    P.each(["edge-property", "edge-style"], function(k) {
                        if (k in b) {
                            var j = b[k];
                            i.eachAdjacency(function(m) {
                                for (var l = 0, n = j.length; l < n; l++) {
                                    m[e[k].setter](j[l], m[e[k].getter](j[l]), "start")
                                }
                            })
                        }
                    })
                });
                return b
            },
            animate: function(f, h) {
                f = P.merge(this.viz.config, f || {});
                var b = this,
                    a = this.viz,
                    e = a.graph,
                    d = this.Interpolator,
                    g = f.type === "nodefx" ? this.nodeFxAnimation : this.animation;
                var c = this.prepare(f.modes);
                if (f.hideLabels) {
                    this.labels.hideLabels(true)
                }
                g.setOptions(P.extend(f, {
                    $animating: false,
                    compute: function(i) {
                        e.eachNode(function(k) {
                            for (var j in c) {
                                d[j](k, c[j], i, h)
                            }
                        });
                        b.plot(f, this.$animating, i);
                        this.$animating = true
                    },
                    complete: function() {
                        if (f.hideLabels) {
                            b.labels.hideLabels(false)
                        }
                        b.plot(f);
                        f.onComplete()
                    }
                })).start()
            },
            nodeFx: function(f) {
                var a = this.viz,
                    j = a.graph,
                    c = this.nodeFxAnimation,
                    i = P.merge(this.viz.config, {
                        elements: {
                            id: false,
                            properties: {}
                        },
                        reposition: false
                    });
                f = P.merge(i, f || {}, {
                    onBeforeCompute: P.empty,
                    onAfterCompute: P.empty
                });
                c.stopTimer();
                var b = f.elements.properties;
                if (!f.elements.id) {
                    j.eachNode(function(k) {
                        for (var l in b) {
                            k.setData(l, b[l], "end")
                        }
                    })
                } else {
                    var h = P.splat(f.elements.id);
                    P.each(h, function(k) {
                        var l = j.getNode(k);
                        if (l) {
                            for (var m in b) {
                                l.setData(m, b[m], "end")
                            }
                        }
                    })
                }
                var d = [];
                for (var g in b) {
                    d.push(g)
                }
                var e = ["node-property:" + d.join(":")];
                if (f.reposition) {
                    e.push("linear");
                    a.compute("end")
                }
                this.animate(P.merge(f, {
                    modes: e,
                    type: "nodefx"
                }))
            },
            plot: function(g, i) {
                var k = this.viz,
                    c = k.graph,
                    f = k.canvas,
                    h = k.root,
                    b = this,
                    j = f.getCtx(),
                    d = Math.min,
                    g = g || this.viz.controller;
                g.clearCanvas && f.clear();
                var a = c.getNode(h);
                if (!a) {
                    return
                }
                var e = !!a.visited;
                c.eachNode(function(l) {
                    var m = l.getData("alpha");
                    l.eachAdjacency(function(o) {
                        var n = o.nodeTo;
                        if (!!n.visited === e && l.drawn && n.drawn) {
                            !i && g.onBeforePlotLine(o);
                            b.plotLine(o, f, i);
                            !i && g.onAfterPlotLine(o)
                        }
                    });
                    if (l.drawn) {
                        !i && g.onBeforePlotNode(l);
                        b.plotNode(l, f, i);
                        !i && g.onAfterPlotNode(l)
                    }
                    if (!b.labelsHidden && g.withLabels) {
                        if (l.drawn && m >= 0.95) {
                            b.labels.plotLabel(f, l, g)
                        } else {
                            b.labels.hideLabel(l, false)
                        }
                    }
                    l.visited = !e
                })
            },
            plotTree: function(d, g, i) {
                var c = this,
                    b = this.viz,
                    f = b.canvas,
                    e = this.config,
                    a = f.getCtx();
                var h = d.getData("alpha");
                d.eachSubnode(function(j) {
                    if (g.plotSubtree(d, j) && j.exist && j.drawn) {
                        var k = d.getAdjacency(j.id);
                        !i && g.onBeforePlotLine(k);
                        c.plotLine(k, f, i);
                        !i && g.onAfterPlotLine(k);
                        c.plotTree(j, g, i)
                    }
                });
                if (d.drawn) {
                    !i && g.onBeforePlotNode(d);
                    this.plotNode(d, f, i);
                    !i && g.onAfterPlotNode(d);
                    if (!g.hideLabels && g.withLabels && h >= 0.95) {
                        this.labels.plotLabel(f, d, g)
                    } else {
                        this.labels.hideLabel(d, false)
                    }
                } else {
                    this.labels.hideLabel(d, true)
                }
            },
            plotNode: function(f, g, i) {
                var b = f.getData("type"),
                    c = this.node.CanvasStyles;
                if (b != "none") {
                    var h = f.getData("lineWidth"),
                        d = f.getData("color"),
                        e = f.getData("alpha"),
                        a = g.getCtx();
                    a.save();
                    a.lineWidth = h;
                    a.fillStyle = a.strokeStyle = d;
                    a.globalAlpha = e;
                    for (var j in c) {
                        a[j] = f.getCanvasStyle(j)
                    }
                    this.nodeTypes[b].render.call(this, f, g, i);
                    a.restore()
                }
            },
            plotLine: function(b, g, i) {
                var c = b.getData("type"),
                    e = this.edge.CanvasStyles;
                if (c != "none") {
                    var h = b.getData("lineWidth"),
                        f = b.getData("color"),
                        k = g.getCtx(),
                        d = b.nodeFrom,
                        a = b.nodeTo;
                    k.save();
                    k.lineWidth = h;
                    k.fillStyle = k.strokeStyle = f;
                    k.globalAlpha = Math.min(d.getData("alpha"), a.getData("alpha"), b.getData("alpha"));
                    for (var j in e) {
                        k[j] = b.getCanvasStyle(j)
                    }
                    this.edgeTypes[c].render.call(this, b, g, i);
                    k.restore()
                }
            }
        };
        N.Plot3D = P.merge(N.Plot, {
            Interpolator: {
                linear: function(b, c, a) {
                    var d = b.startPos.getc(true);
                    var e = b.endPos.getc(true);
                    b.pos.setc(this.compute(d.x, e.x, a), this.compute(d.y, e.y, a), this.compute(d.z, e.z, a))
                }
            },
            plotNode: function(a, b) {
                if (a.getData("type") == "none") {
                    return
                }
                this.plotElement(a, b, {
                    getAlpha: function() {
                        return a.getData("alpha")
                    }
                })
            },
            plotLine: function(b, a) {
                if (b.getData("type") == "none") {
                    return
                }
                this.plotElement(b, a, {
                    getAlpha: function() {
                        return Math.min(b.nodeFrom.getData("alpha"), b.nodeTo.getData("alpha"), b.getData("alpha"))
                    }
                })
            },
            plotElement: function(b, ad, q) {
                var e = ad.getCtx(),
                    ac = new Matrix4,
                    u = ad.config.Scene.Lighting,
                    a = ad.canvases[0],
                    p = a.program,
                    c = a.camera;
                if (!b.geometry) {
                    b.geometry = new O3D[b.getData("type")]
                }
                b.geometry.update(b);
                if (!b.webGLVertexBuffer) {
                    var s = [],
                        ag = [],
                        k = [],
                        m = 0,
                        h = b.geometry;
                    for (var d = 0, f = h.vertices, aa = h.faces, ab = aa.length; d < ab; d++) {
                        var n = aa[d],
                            ae = f[n.a],
                            af = f[n.b],
                            ah = f[n.c],
                            r = n.d ? f[n.d] : false,
                            i = n.normal;
                        s.push(ae.x, ae.y, ae.z);
                        s.push(af.x, af.y, af.z);
                        s.push(ah.x, ah.y, ah.z);
                        if (r) {
                            s.push(r.x, r.y, r.z)
                        }
                        k.push(i.x, i.y, i.z);
                        k.push(i.x, i.y, i.z);
                        k.push(i.x, i.y, i.z);
                        if (r) {
                            k.push(i.x, i.y, i.z)
                        }
                        ag.push(m, m + 1, m + 2);
                        if (r) {
                            ag.push(m, m + 2, m + 3);
                            m += 4
                        } else {
                            m += 3
                        }
                    }
                    b.webGLVertexBuffer = e.createBuffer();
                    e.bindBuffer(e.ARRAY_BUFFER, b.webGLVertexBuffer);
                    e.bufferData(e.ARRAY_BUFFER, new Float32Array(s), e.STATIC_DRAW);
                    b.webGLFaceBuffer = e.createBuffer();
                    e.bindBuffer(e.ELEMENT_ARRAY_BUFFER, b.webGLFaceBuffer);
                    e.bufferData(e.ELEMENT_ARRAY_BUFFER, new Uint16Array(ag), e.STATIC_DRAW);
                    b.webGLFaceCount = ag.length;
                    b.webGLNormalBuffer = e.createBuffer();
                    e.bindBuffer(e.ARRAY_BUFFER, b.webGLNormalBuffer);
                    e.bufferData(e.ARRAY_BUFFER, new Float32Array(k), e.STATIC_DRAW)
                }
                ac.multiply(c.matrix, b.geometry.matrix);
                e.uniformMatrix4fv(p.viewMatrix, false, ac.flatten());
                e.uniformMatrix4fv(p.projectionMatrix, false, c.projectionMatrix.flatten());
                var o = Matrix4.makeInvert(ac);
                o.$transpose();
                e.uniformMatrix4fv(p.normalMatrix, false, o.flatten());
                var g = P.hexToRgb(b.getData("color"));
                g.push(q.getAlpha());
                e.uniform4f(p.color, g[0] / 255, g[1] / 255, g[2] / 255, g[3]);
                e.uniform1i(p.enableLighting, u.enable);
                if (u.enable) {
                    if (u.ambient) {
                        var l = u.ambient;
                        e.uniform3f(p.ambientColor, l[0], l[1], l[2])
                    }
                    if (u.directional) {
                        var j = u.directional,
                            g = j.color,
                            t = j.direction,
                            v = new Vector3(t.x, t.y, t.z).normalize().$scale(-1);
                        e.uniform3f(p.lightingDirection, v.x, v.y, v.z);
                        e.uniform3f(p.directionalColor, g[0], g[1], g[2])
                    }
                }
                e.bindBuffer(e.ARRAY_BUFFER, b.webGLVertexBuffer);
                e.vertexAttribPointer(p.position, 3, e.FLOAT, false, 0, 0);
                e.bindBuffer(e.ARRAY_BUFFER, b.webGLNormalBuffer);
                e.vertexAttribPointer(p.normal, 3, e.FLOAT, false, 0, 0);
                e.bindBuffer(e.ELEMENT_ARRAY_BUFFER, b.webGLFaceBuffer);
                e.drawElements(e.TRIANGLES, b.webGLFaceCount, e.UNSIGNED_SHORT, 0)
            }
        });
        N.Label = {};
        N.Label.Native = new B({
            initialize: function(a) {
                this.viz = a
            },
            plotLabel: function(e, d, b) {
                var c = e.getCtx();
                var a = d.pos.getc(true);
                c.font = d.getLabelData("style") + " " + d.getLabelData("size") + "px " + d.getLabelData("family");
                c.textAlign = d.getLabelData("textAlign");
                c.fillStyle = c.strokeStyle = d.getLabelData("color");
                c.textBaseline = d.getLabelData("textBaseline");
                this.renderLabel(e, d, b)
            },
            renderLabel: function(e, d, b) {
                var c = e.getCtx();
                var a = d.pos.getc(true);
                c.fillText(d.name, a.x, a.y + d.getData("height") / 2)
            },
            hideLabel: P.empty,
            hideLabels: P.empty
        });
        N.Label.DOM = new B({
            labelsHidden: false,
            labelContainer: false,
            labels: {},
            getLabelContainer: function() {
                return this.labelContainer ? this.labelContainer : this.labelContainer = document.getElementById(this.viz.config.labelContainer)
            },
            getLabel: function(a) {
                return (a in this.labels && this.labels[a] != null) ? this.labels[a] : this.labels[a] = document.getElementById(a)
            },
            hideLabels: function(a) {
                var b = this.getLabelContainer();
                if (a) {
                    b.style.display = "none"
                } else {
                    b.style.display = ""
                }
                this.labelsHidden = a
            },
            clearLabels: function(b) {
                for (var a in this.labels) {
                    if (b || !this.viz.graph.hasNode(a)) {
                        this.disposeLabel(a);
                        delete this.labels[a]
                    }
                }
            },
            disposeLabel: function(a) {
                var b = this.getLabel(a);
                if (b && b.parentNode) {
                    b.parentNode.removeChild(b)
                }
            },
            hideLabel: function(b, c) {
                b = P.splat(b);
                var a = c ? "" : "none",
                    e, d = this;
                P.each(b, function(f) {
                    var g = d.getLabel(f.id);
                    if (g) {
                        g.style.display = a
                    }
                })
            },
            fitsInCanvas: function(c, b) {
                var a = b.getSize();
                if (c.x >= a.width || c.x < 0 || c.y >= a.height || c.y < 0) {
                    return false
                }
                return true
            }
        });
        N.Label.HTML = new B({
            Implements: N.Label.DOM,
            plotLabel: function(d, b, f) {
                var e = b.id,
                    c = this.getLabel(e);
                if (!c && !(c = document.getElementById(e))) {
                    c = document.createElement("div");
                    var a = this.getLabelContainer();
                    c.id = e;
                    c.className = "node";
                    c.style.position = "absolute";
                    f.onCreateLabel(c, b);
                    a.appendChild(c);
                    this.labels[b.id] = c
                }
                this.placeLabel(c, b, f)
            }
        });
        N.Label.SVG = new B({
            Implements: N.Label.DOM,
            plotLabel: function(f, h, g) {
                var d = h.id,
                    c = this.getLabel(d);
                if (!c && !(c = document.getElementById(d))) {
                    var b = "http://www.w3.org/2000/svg";
                    c = document.createElementNS(b, "svg:text");
                    var e = document.createElementNS(b, "svg:tspan");
                    c.appendChild(e);
                    var a = this.getLabelContainer();
                    c.setAttribute("id", d);
                    c.setAttribute("class", "node");
                    a.appendChild(c);
                    g.onCreateLabel(c, h);
                    this.labels[h.id] = c
                }
                this.placeLabel(c, h, g)
            }
        });
        N.Geom = new B({
            initialize: function(a) {
                this.viz = a;
                this.config = a.config;
                this.node = a.config.Node;
                this.edge = a.config.Edge
            },
            translate: function(a, b) {
                b = P.splat(b);
                this.viz.graph.eachNode(function(c) {
                    P.each(b, function(d) {
                        c.getPos(d).$add(a)
                    })
                })
            },
            setRightLevelToShow: function(d, c, f) {
                var b = this.getRightLevelToShow(d, c),
                    e = this.viz.labels,
                    a = P.merge({
                        execShow: true,
                        execHide: true,
                        onHide: P.empty,
                        onShow: P.empty
                    }, f || {});
                d.eachLevel(0, this.config.levelsToShow, function(g) {
                    var h = g._depth - d._depth;
                    if (h > b) {
                        a.onHide(g);
                        if (a.execHide) {
                            g.drawn = false;
                            g.exist = false;
                            e.hideLabel(g, false)
                        }
                    } else {
                        a.onShow(g);
                        if (a.execShow) {
                            g.exist = true
                        }
                    }
                });
                d.drawn = true
            },
            getRightLevelToShow: function(d, b) {
                var c = this.config;
                var a = c.levelsToShow;
                var e = c.constrained;
                if (!e) {
                    return a
                }
                while (!this.treeFitsInCanvas(d, b, a) && a > 1) {
                    a--
                }
                return a
            }
        });
        var O = {
            construct: function(a) {
                var c = (P.type(a) == "array");
                var b = new N(this.graphOptions, this.config.Node, this.config.Edge, this.config.Label);
                if (!c) {
                    (function(f, g) {
                        f.addNode(g);
                        if (g.children) {
                            for (var d = 0, e = g.children; d < e.length; d++) {
                                f.addAdjacence(g, e[d]);
                                arguments.callee(f, e[d])
                            }
                        }
                    })(b, a)
                } else {
                    (function(j, i) {
                        var g = function(q) {
                            for (var n = 0, p = i.length; n < p; n++) {
                                if (i[n].id == q) {
                                    return i[n]
                                }
                            }
                            var o = {
                                id: q,
                                name: q
                            };
                            return j.addNode(o)
                        };
                        for (var m = 0, f = i.length; m < f; m++) {
                            j.addNode(i[m]);
                            var l = i[m].adjacencies;
                            if (l) {
                                for (var e = 0, k = l.length; e < k; e++) {
                                    var h = l[e],
                                        d = {};
                                    if (typeof l[e] != "string") {
                                        d = P.merge(h.data, {});
                                        h = h.nodeTo
                                    }
                                    j.addAdjacence(i[m], g(h), d)
                                }
                            }
                        }
                    })(b, a)
                }
                return b
            },
            loadJSON: function(a, b) {
                this.json = a;
                if (this.labels && this.labels.clearLabels) {
                    this.labels.clearLabels(true)
                }
                this.graph = this.construct(a);
                if (P.type(a) != "array") {
                    this.root = a.id
                } else {
                    this.root = a[b ? b : 0].id
                }
            },
            toJSON: function(b) {
                b = b || "tree";
                if (b == "tree") {
                    var e = {};
                    var a = this.graph.getNode(this.root);
                    var e = (function c(f) {
                        var h = {};
                        h.id = f.id;
                        h.name = f.name;
                        h.data = f.data;
                        var g = [];
                        f.eachSubnode(function(i) {
                            g.push(c(i))
                        });
                        h.children = g;
                        return h
                    })(a);
                    return e
                } else {
                    var e = [];
                    var d = !!this.graph.getNode(this.root).visited;
                    this.graph.eachNode(function(g) {
                        var h = {};
                        h.id = g.id;
                        h.name = g.name;
                        h.data = g.data;
                        var f = [];
                        g.eachAdjacency(function(k) {
                            var i = k.nodeTo;
                            if (!!i.visited === d) {
                                var j = {};
                                j.nodeTo = i.id;
                                j.data = k.data;
                                f.push(j)
                            }
                        });
                        h.adjacencies = f;
                        e.push(h);
                        g.visited = !d
                    });
                    return e
                }
            }
        };
        var L = $jit.Layouts = {};
        var M = {
            label: null,
            compute: function(d, b, a) {
                this.initializeLabel(a);
                var c = this.label,
                    e = c.style;
                d.eachNode(function(f) {
                    var k = f.getData("autoWidth"),
                        j = f.getData("autoHeight");
                    if (k || j) {
                        delete f.data.$width;
                        delete f.data.$height;
                        delete f.data.$dim;
                        var h = f.getData("width"),
                            i = f.getData("height");
                        e.width = k ? "auto" : h + "px";
                        e.height = j ? "auto" : i + "px";
                        c.innerHTML = f.name;
                        var m = c.offsetWidth,
                            g = c.offsetHeight;
                        var l = f.getData("type");
                        if (P.indexOf(["circle", "square", "triangle", "star"], l) === -1) {
                            f.setData("width", m);
                            f.setData("height", g)
                        } else {
                            var n = m > g ? m : g;
                            f.setData("width", n);
                            f.setData("height", n);
                            f.setData("dim", n)
                        }
                    }
                })
            },
            initializeLabel: function(a) {
                if (!this.label) {
                    this.label = document.createElement("div");
                    document.body.appendChild(this.label)
                }
                this.setLabelStyles(a)
            },
            setLabelStyles: function(a) {
                P.extend(this.label.style, {
                    visibility: "hidden",
                    position: "absolute",
                    width: "auto",
                    height: "auto"
                });
                this.label.className = "jit-autoadjust-label"
            }
        };
        L.Tree = (function() {
            var j = Array.prototype.slice;

            function a(l, q, t, n, s) {
                var o = q.Node;
                var r = q.multitree;
                if (o.overridable) {
                    var m = -1,
                        p = -1;
                    l.eachNode(function(u) {
                        if (u._depth == t && (!r || ("$orn" in u.data) && u.data.$orn == n)) {
                            var T = u.getData("width", s);
                            var v = u.getData("height", s);
                            m = (m < T) ? T : m;
                            p = (p < v) ? v : p
                        }
                    });
                    return {
                        width: m < 0 ? o.width : m,
                        height: p < 0 ? o.height : p
                    }
                } else {
                    return o
                }
            }

            function i(o, l, m, p) {
                var n = (p == "left" || p == "right") ? "y" : "x";
                o.getPos(l)[n] += m
            }

            function c(m, l) {
                var n = [];
                P.each(m, function(o) {
                    o = j.call(o);
                    o[0] += l;
                    o[1] += l;
                    n.push(o)
                });
                return n
            }

            function k(l, o) {
                if (l.length == 0) {
                    return o
                }
                if (o.length == 0) {
                    return l
                }
                var m = l.shift(),
                    n = o.shift();
                return [
                    [m[0], n[1]]
                ].concat(k(l, o))
            }

            function e(n, m) {
                m = m || [];
                if (n.length == 0) {
                    return m
                }
                var l = n.pop();
                return e(n, k(l, m))
            }

            function b(m, o, l, p, n) {
                if (m.length <= n || o.length <= n) {
                    return 0
                }
                var q = m[n][1],
                    r = o[n][0];
                return Math.max(b(m, o, l, p, ++n) + l, q - r + p)
            }

            function d(l, n, o) {
                function m(s, q, t) {
                    if (q.length <= t) {
                        return []
                    }
                    var r = q[t],
                        p = b(s, r, n, o, 0);
                    return [p].concat(m(k(s, c(r, p)), q, ++t))
                }
                return m([], l, 0)
            }

            function g(l, m, n) {
                function p(s, q, t) {
                    if (q.length <= t) {
                        return []
                    }
                    var r = q[t],
                        u = -b(r, s, m, n, 0);
                    return [u].concat(p(k(c(r, u), s), q, ++t))
                }
                l = j.call(l);
                var o = p([], l.reverse(), 0);
                return o.reverse()
            }

            function h(r, l, o, q) {
                var n = d(r, l, o),
                    s = g(r, l, o);
                if (q == "left") {
                    s = n
                } else {
                    if (q == "right") {
                        n = s
                    }
                }
                for (var m = 0, p = []; m < n.length; m++) {
                    p[m] = (n[m] + s[m]) / 2
                }
                return p
            }

            function f(af, s, ae, l, n) {
                var ac = l.multitree;
                var t = ["x", "y"],
                    Z = ["width", "height"];
                var ad = +(n == "left" || n == "right");
                var v = t[ad],
                    m = t[1 - ad];
                var q = l.Node;
                var aa = Z[ad],
                    o = Z[1 - ad];
                var ab = l.siblingOffset;
                var p = l.subtreeOffset;
                var r = l.align;

                function u(ao, ak, X) {
                    var S = ao.getData(aa, ae);
                    var Y = ak || (ao.getData(o, ae));
                    var U = [],
                        W = [],
                        aj = false;
                    var T = Y + l.levelDistance;
                    ao.eachSubnode(function(ag) {
                        if (ag.exist && (!ac || ("$orn" in ag.data) && ag.data.$orn == n)) {
                            if (!aj) {
                                aj = a(af, l, ag._depth, n, ae)
                            }
                            var ah = u(ag, aj[o], X + T);
                            U.push(ah.tree);
                            W.push(ah.extent)
                        }
                    });
                    var al = h(W, p, ab, r);
                    for (var am = 0, an = [], ai = []; am < U.length; am++) {
                        i(U[am], ae, al[am], n);
                        ai.push(c(W[am], al[am]))
                    }
                    var V = [
                        [-S / 2, S / 2]
                    ].concat(e(ai));
                    ao.getPos(ae)[v] = 0;
                    if (n == "top" || n == "left") {
                        ao.getPos(ae)[m] = X
                    } else {
                        ao.getPos(ae)[m] = -X
                    }
                    return {
                        tree: ao,
                        extent: V
                    }
                }
                u(s, false, 0)
            }
            return new B({
                compute: function(m, n) {
                    var l = m || "start";
                    var o = this.graph.getNode(this.root);
                    P.extend(o, {
                        drawn: true,
                        exist: true,
                        selected: true
                    });
                    M.compute(this.graph, l, this.config);
                    if (!!n || !("_depth" in o)) {
                        this.graph.computeLevels(this.root, 0, "ignore")
                    }
                    this.computePositions(o, l)
                },
                computePositions: function(p, t) {
                    var r = this.config;
                    var s = r.multitree;
                    var m = r.align;
                    var q = m !== "center" && r.indent;
                    var l = r.orientation;
                    var n = s ? ["top", "right", "bottom", "left"] : [l];
                    var o = this;
                    P.each(n, function(T) {
                        f(o.graph, p, t, o.config, T, t);
                        var v = ["x", "y"][+(T == "left" || T == "right")];
                        (function u(S) {
                            S.eachSubnode(function(V) {
                                if (V.exist && (!s || ("$orn" in V.data) && V.data.$orn == T)) {
                                    V.getPos(t)[v] += S.getPos(t)[v];
                                    if (q) {
                                        V.getPos(t)[v] += m == "left" ? q : -q
                                    }
                                    u(V)
                                }
                            })
                        })(p)
                    })
                }
            })
        })();
        $jit.ST = (function() {
            var a = [];

            function c(d) {
                d = d || this.clickedNode;
                if (!this.config.constrained) {
                    return []
                }
                var g = this.geom;
                var i = this.graph;
                var f = this.canvas;
                var h = d._depth,
                    l = [];
                i.eachNode(function(m) {
                    if (m.exist && !m.selected) {
                        if (m.isDescendantOf(d.id)) {
                            if (m._depth <= h) {
                                l.push(m)
                            }
                        } else {
                            l.push(m)
                        }
                    }
                });
                var k = g.getRightLevelToShow(d, f);
                d.eachLevel(k, k, function(m) {
                    if (m.exist && !m.selected) {
                        l.push(m)
                    }
                });
                for (var j = 0; j < a.length; j++) {
                    var e = this.graph.getNode(a[j]);
                    if (!e.isDescendantOf(d.id)) {
                        l.push(e)
                    }
                }
                return l
            }

            function b(f) {
                var d = [],
                    e = this.config;
                f = f || this.clickedNode;
                this.clickedNode.eachLevel(0, e.levelsToShow, function(g) {
                    if (e.multitree && !("$orn" in g.data) && g.anySubnode(function(h) {
                            return h.exist && !h.drawn
                        })) {
                        d.push(g)
                    } else {
                        if (g.drawn && !g.anySubnode("drawn")) {
                            d.push(g)
                        }
                    }
                });
                return d
            }
            return new B({
                Implements: [O, D, L.Tree],
                initialize: function(f) {
                    var g = $jit.ST;
                    var d = {
                        levelsToShow: 2,
                        levelDistance: 30,
                        constrained: true,
                        Node: {
                            type: "rectangle"
                        },
                        duration: 700,
                        offsetX: 0,
                        offsetY: 0
                    };
                    this.controller = this.config = P.merge(E("Canvas", "Fx", "Tree", "Node", "Edge", "Controller", "Tips", "NodeStyles", "Events", "Navigation", "Label"), d, f);
                    var e = this.config;
                    if (e.useCanvas) {
                        this.canvas = e.useCanvas;
                        this.config.labelContainer = this.canvas.id + "-label"
                    } else {
                        if (e.background) {
                            e.background = P.merge({
                                type: "Circles"
                            }, e.background)
                        }
                        this.canvas = new G(this, e);
                        this.config.labelContainer = (typeof e.injectInto == "string" ? e.injectInto : e.injectInto.id) + "-label"
                    }
                    this.graphOptions = {
                        klass: C
                    };
                    this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                    this.labels = new g.Label[e.Label.type](this);
                    this.fx = new g.Plot(this, g);
                    this.op = new g.Op(this);
                    this.group = new g.Group(this);
                    this.geom = new g.Geom(this);
                    this.clickedNode = null;
                    this.initializeExtras()
                },
                plot: function() {
                    this.fx.plot(this.controller)
                },
                switchPosition: function(e, f, h) {
                    var g = this.geom,
                        d = this.fx,
                        i = this;
                    if (!d.busy) {
                        d.busy = true;
                        this.contract({
                            onComplete: function() {
                                g.switchOrientation(e);
                                i.compute("end", false);
                                d.busy = false;
                                if (f == "animate") {
                                    i.onClick(i.clickedNode.id, h)
                                } else {
                                    if (f == "replot") {
                                        i.select(i.clickedNode.id, h)
                                    }
                                }
                            }
                        }, e)
                    }
                },
                switchAlignment: function(f, d, e) {
                    this.config.align = f;
                    if (d == "animate") {
                        this.select(this.clickedNode.id, e)
                    } else {
                        if (d == "replot") {
                            this.onClick(this.clickedNode.id, e)
                        }
                    }
                },
                addNodeInPath: function(d) {
                    a.push(d);
                    this.select((this.clickedNode && this.clickedNode.id) || this.root)
                },
                clearNodesInPath: function(d) {
                    a.length = 0;
                    this.select((this.clickedNode && this.clickedNode.id) || this.root)
                },
                refresh: function() {
                    this.reposition();
                    this.select((this.clickedNode && this.clickedNode.id) || this.root)
                },
                reposition: function() {
                    this.graph.computeLevels(this.root, 0, "ignore");
                    this.geom.setRightLevelToShow(this.clickedNode, this.canvas);
                    this.graph.eachNode(function(d) {
                        if (d.exist) {
                            d.drawn = true
                        }
                    });
                    this.compute("end")
                },
                requestNodes: function(i, h) {
                    var d = P.merge(this.controller, h),
                        g = this.config.levelsToShow;
                    if (d.request) {
                        var e = [],
                            f = i._depth;
                        i.eachLevel(0, g, function(j) {
                            if (j.drawn && !j.anySubnode()) {
                                e.push(j);
                                j._level = g - (j._depth - f)
                            }
                        });
                        this.group.requestNodes(e, d)
                    } else {
                        d.onComplete()
                    }
                },
                contract: function(f, e) {
                    var h = this.config.orientation;
                    var g = this.geom,
                        i = this.group;
                    if (e) {
                        g.switchOrientation(e)
                    }
                    var d = c.call(this);
                    if (e) {
                        g.switchOrientation(h)
                    }
                    i.contract(d, P.merge(this.controller, f))
                },
                move: function(d, g) {
                    this.compute("end", false);
                    var f = g.Move,
                        e = {
                            x: f.offsetX,
                            y: f.offsetY
                        };
                    if (f.enable) {
                        this.geom.translate(d.endPos.add(e).$scale(-1), "end")
                    }
                    this.fx.animate(P.merge(this.controller, {
                        modes: ["linear"]
                    }, g))
                },
                expand: function(d, f) {
                    var e = b.call(this, d);
                    this.group.expand(e, P.merge(this.controller, f))
                },
                selectPath: function(g) {
                    var h = this;
                    this.graph.eachNode(function(i) {
                        i.selected = false
                    });

                    function e(i) {
                        if (i == null || i.selected) {
                            return
                        }
                        i.selected = true;
                        P.each(h.group.getSiblings([i])[i.id], function(k) {
                            k.exist = true;
                            k.drawn = true
                        });
                        var j = i.getParents();
                        j = (j.length > 0) ? j[0] : null;
                        e(j)
                    }
                    for (var f = 0, d = [g.id].concat(a); f < d.length; f++) {
                        e(this.graph.getNode(d[f]))
                    }
                },
                setRoot: function(e, f, g) {
                    if (this.busy) {
                        return
                    }
                    this.busy = true;
                    var h = this,
                        k = this.canvas;
                    var j = this.graph.getNode(this.root);
                    var d = this.graph.getNode(e);

                    function i() {
                        if (this.config.multitree && d.data.$orn) {
                            var m = d.data.$orn;
                            var l = {
                                left: "right",
                                right: "left",
                                top: "bottom",
                                bottom: "top"
                            }[m];
                            j.data.$orn = l;
                            (function n(o) {
                                o.eachSubnode(function(p) {
                                    if (p.id != e) {
                                        p.data.$orn = l;
                                        n(p)
                                    }
                                })
                            })(j);
                            delete d.data.$orn
                        }
                        this.root = e;
                        this.clickedNode = d;
                        this.graph.computeLevels(this.root, 0, "ignore");
                        this.geom.setRightLevelToShow(d, k, {
                            execHide: false,
                            onShow: function(o) {
                                if (!o.drawn) {
                                    o.drawn = true;
                                    o.setData("alpha", 1, "end");
                                    o.setData("alpha", 0);
                                    o.pos.setc(d.pos.x, d.pos.y)
                                }
                            }
                        });
                        this.compute("end");
                        this.busy = true;
                        this.fx.animate({
                            modes: ["linear", "node-property:alpha"],
                            onComplete: function() {
                                h.busy = false;
                                h.onClick(e, {
                                    onComplete: function() {
                                        g && g.onComplete()
                                    }
                                })
                            }
                        })
                    }
                    delete j.data.$orns;
                    if (f == "animate") {
                        i.call(this);
                        h.selectPath(d)
                    } else {
                        if (f == "replot") {
                            i.call(this);
                            this.select(this.root)
                        }
                    }
                },
                addSubtree: function(e, f, d) {
                    if (f == "replot") {
                        this.op.sum(e, P.extend({
                            type: "replot"
                        }, d || {}))
                    } else {
                        if (f == "animate") {
                            this.op.sum(e, P.extend({
                                type: "fade:seq"
                            }, d || {}))
                        }
                    }
                },
                removeSubtree: function(e, d, f, h) {
                    var i = this.graph.getNode(e),
                        g = [];
                    i.eachLevel(+!d, false, function(j) {
                        g.push(j.id)
                    });
                    if (f == "replot") {
                        this.op.removeNode(g, P.extend({
                            type: "replot"
                        }, h || {}))
                    } else {
                        if (f == "animate") {
                            this.op.removeNode(g, P.extend({
                                type: "fade:seq"
                            }, h || {}))
                        }
                    }
                },
                select: function(h, e) {
                    var i = this.group,
                        k = this.geom;
                    var d = this.graph.getNode(h),
                        f = this.canvas;
                    var j = this.graph.getNode(this.root);
                    var g = P.merge(this.controller, e);
                    var l = this;
                    g.onBeforeCompute(d);
                    this.selectPath(d);
                    this.clickedNode = d;
                    this.requestNodes(d, {
                        onComplete: function() {
                            i.hide(i.prepare(c.call(l)), g);
                            k.setRightLevelToShow(d, f);
                            l.compute("current");
                            l.graph.eachNode(function(n) {
                                var o = n.pos.getc(true);
                                n.startPos.setc(o.x, o.y);
                                n.endPos.setc(o.x, o.y);
                                n.visited = false
                            });
                            var m = {
                                x: g.offsetX,
                                y: g.offsetY
                            };
                            l.geom.translate(d.endPos.add(m).$scale(-1), ["start", "current", "end"]);
                            i.show(b.call(l));
                            l.plot();
                            g.onAfterCompute(l.clickedNode);
                            g.onComplete()
                        }
                    })
                },
                onClick: function(g, i) {
                    var e = this.canvas,
                        j = this,
                        h = this.geom,
                        d = this.config;
                    var k = {
                        Move: {
                            enable: true,
                            offsetX: d.offsetX || 0,
                            offsetY: d.offsetY || 0
                        },
                        setRightLevelToShowConfig: false,
                        onBeforeRequest: P.empty,
                        onBeforeContract: P.empty,
                        onBeforeMove: P.empty,
                        onBeforeExpand: P.empty
                    };
                    var f = P.merge(this.controller, k, i);
                    if (!this.busy) {
                        this.busy = true;
                        var l = this.graph.getNode(g);
                        this.selectPath(l, this.clickedNode);
                        this.clickedNode = l;
                        f.onBeforeCompute(l);
                        f.onBeforeRequest(l);
                        this.requestNodes(l, {
                            onComplete: function() {
                                f.onBeforeContract(l);
                                j.contract({
                                    onComplete: function() {
                                        h.setRightLevelToShow(l, e, f.setRightLevelToShowConfig);
                                        f.onBeforeMove(l);
                                        j.move(l, {
                                            Move: f.Move,
                                            onComplete: function() {
                                                f.onBeforeExpand(l);
                                                j.expand(l, {
                                                    onComplete: function() {
                                                        j.busy = false;
                                                        f.onAfterCompute(g);
                                                        f.onComplete()
                                                    }
                                                })
                                            }
                                        })
                                    }
                                })
                            }
                        })
                    }
                }
            })
        })();
        $jit.ST.$extend = true;
        $jit.ST.Op = new B({
            Implements: N.Op
        });
        $jit.ST.Group = new B({
            initialize: function(a) {
                this.viz = a;
                this.canvas = a.canvas;
                this.config = a.config;
                this.animation = new x;
                this.nodes = null
            },
            requestNodes: function(h, b) {
                var f = 0,
                    a = h.length,
                    d = {};
                var g = function() {
                    b.onComplete()
                };
                var c = this.viz;
                if (a == 0) {
                    g()
                }
                for (var e = 0; e < a; e++) {
                    d[h[e].id] = h[e];
                    b.request(h[e].id, h[e]._level, {
                        onComplete: function(i, j) {
                            if (j && j.children) {
                                j.id = i;
                                c.op.sum(j, {
                                    type: "nothing"
                                })
                            }
                            if (++f == a) {
                                c.graph.computeLevels(c.root, 0);
                                g()
                            }
                        }
                    })
                }
            },
            contract: function(d, a) {
                var b = this.viz;
                var c = this;
                d = this.prepare(d);
                this.animation.setOptions(P.merge(a, {
                    $animating: false,
                    compute: function(e) {
                        if (e == 1) {
                            e = 0.99
                        }
                        c.plotStep(1 - e, a, this.$animating);
                        this.$animating = "contract"
                    },
                    complete: function() {
                        c.hide(d, a)
                    }
                })).start()
            },
            hide: function(e, b) {
                var c = this.viz;
                for (var d = 0; d < e.length; d++) {
                    if (true || !b || !b.request) {
                        e[d].eachLevel(1, false, function(f) {
                            if (f.exist) {
                                P.extend(f, {
                                    drawn: false,
                                    exist: false
                                })
                            }
                        })
                    } else {
                        var a = [];
                        e[d].eachLevel(1, false, function(f) {
                            a.push(f.id)
                        });
                        c.op.removeNode(a, {
                            type: "nothing"
                        });
                        c.labels.clearLabels()
                    }
                }
                b.onComplete()
            },
            expand: function(a, b) {
                var c = this;
                this.show(a);
                this.animation.setOptions(P.merge(b, {
                    $animating: false,
                    compute: function(d) {
                        c.plotStep(d, b, this.$animating);
                        this.$animating = "expand"
                    },
                    complete: function() {
                        c.plotStep(undefined, b, false);
                        b.onComplete()
                    }
                })).start()
            },
            show: function(b) {
                var a = this.config;
                this.prepare(b);
                P.each(b, function(c) {
                    if (a.multitree && !("$orn" in c.data)) {
                        delete c.data.$orns;
                        var d = " ";
                        c.eachSubnode(function(e) {
                            if (("$orn" in e.data) && d.indexOf(e.data.$orn) < 0 && e.exist && !e.drawn) {
                                d += e.data.$orn + " "
                            }
                        });
                        c.data.$orns = d
                    }
                    c.eachLevel(0, a.levelsToShow, function(e) {
                        if (e.exist) {
                            e.drawn = true
                        }
                    })
                })
            },
            prepare: function(a) {
                this.nodes = this.getNodesWithChildren(a);
                return this.nodes
            },
            getNodesWithChildren: function(g) {
                var b = [],
                    a = this.config,
                    c = this.viz.root;
                g.sort(function(h, i) {
                    return (h._depth <= i._depth) - (h._depth >= i._depth)
                });
                for (var f = 0; f < g.length; f++) {
                    if (g[f].anySubnode("exist")) {
                        for (var e = f + 1, d = false; !d && e < g.length; e++) {
                            if (!a.multitree || "$orn" in g[e].data) {
                                d = d || g[f].isDescendantOf(g[e].id)
                            }
                        }
                        if (!d) {
                            b.push(g[f])
                        }
                    }
                }
                return b
            },
            plotStep: function(k, b, h) {
                var l = this.viz,
                    e = this.config,
                    f = l.canvas,
                    j = f.getCtx(),
                    i = this.nodes;
                var c, d;
                var g = {};
                for (c = 0; c < i.length; c++) {
                    d = i[c];
                    g[d.id] = [];
                    var m = e.multitree && !("$orn" in d.data);
                    var a = m && d.data.$orns;
                    d.eachSubgraph(function(n) {
                        if (m && a && a.indexOf(n.data.$orn) > 0 && n.drawn) {
                            n.drawn = false;
                            g[d.id].push(n)
                        } else {
                            if ((!m || !a) && n.drawn) {
                                n.drawn = false;
                                g[d.id].push(n)
                            }
                        }
                    });
                    d.drawn = true
                }
                if (i.length > 0) {
                    l.fx.plot()
                }
                for (c in g) {
                    P.each(g[c], function(n) {
                        n.drawn = true
                    })
                }
                for (c = 0; c < i.length; c++) {
                    d = i[c];
                    j.save();
                    l.fx.plotSubtree(d, b, k, h);
                    j.restore()
                }
            },
            getSiblings: function(b) {
                var a = {};
                P.each(b, function(c) {
                    var d = c.getParents();
                    if (d.length == 0) {
                        a[c.id] = [c]
                    } else {
                        var e = [];
                        d[0].eachSubnode(function(f) {
                            e.push(f)
                        });
                        a[c.id] = e
                    }
                });
                return a
            }
        });
        $jit.ST.Geom = new B({
            Implements: N.Geom,
            switchOrientation: function(a) {
                this.config.orientation = a
            },
            dispatch: function() {
                var a = Array.prototype.slice.call(arguments);
                var d = a.shift(),
                    b = a.length;
                var c = function(e) {
                    return typeof e == "function" ? e() : e
                };
                if (b == 2) {
                    return (d == "top" || d == "bottom") ? c(a[0]) : c(a[1])
                } else {
                    if (b == 4) {
                        switch (d) {
                            case "top":
                                return c(a[0]);
                            case "right":
                                return c(a[1]);
                            case "bottom":
                                return c(a[2]);
                            case "left":
                                return c(a[3])
                        }
                    }
                }
                return undefined
            },
            getSize: function(c, d) {
                var f = c.data,
                    e = this.config;
                var h = e.siblingOffset;
                var g = (e.multitree && ("$orn" in f) && f.$orn) || e.orientation;
                var b = c.getData("width") + h;
                var a = c.getData("height") + h;
                if (!d) {
                    return this.dispatch(g, a, b)
                } else {
                    return this.dispatch(g, b, a)
                }
            },
            getTreeBaseSize: function(b, f, a) {
                var e = this.getSize(b, true),
                    c = 0,
                    d = this;
                if (a(f, b)) {
                    return e
                }
                if (f === 0) {
                    return 0
                }
                b.eachSubnode(function(g) {
                    c += d.getTreeBaseSize(g, f - 1, a)
                });
                return (e > c ? e : c) + this.config.subtreeOffset
            },
            getEdge: function(e, g, b) {
                var f = function(i, h) {
                    return function() {
                        return e.pos.add(new C(i, h))
                    }
                };
                var c = this.node;
                var a = e.getData("width");
                var d = e.getData("height");
                if (g == "begin") {
                    if (c.align == "center") {
                        return this.dispatch(b, f(0, d / 2), f(-a / 2, 0), f(0, -d / 2), f(a / 2, 0))
                    } else {
                        if (c.align == "left") {
                            return this.dispatch(b, f(0, d), f(0, 0), f(0, 0), f(a, 0))
                        } else {
                            if (c.align == "right") {
                                return this.dispatch(b, f(0, 0), f(-a, 0), f(0, -d), f(0, 0))
                            } else {
                                throw "align: not implemented"
                            }
                        }
                    }
                } else {
                    if (g == "end") {
                        if (c.align == "center") {
                            return this.dispatch(b, f(0, -d / 2), f(a / 2, 0), f(0, d / 2), f(-a / 2, 0))
                        } else {
                            if (c.align == "left") {
                                return this.dispatch(b, f(0, 0), f(a, 0), f(0, d), f(0, 0))
                            } else {
                                if (c.align == "right") {
                                    return this.dispatch(b, f(0, -d), f(0, 0), f(0, 0), f(-a, 0))
                                } else {
                                    throw "align: not implemented"
                                }
                            }
                        }
                    }
                }
            },
            getScaledTreePosition: function(g, c) {
                var e = this.node;
                var b = g.getData("width");
                var a = g.getData("height");
                var d = (this.config.multitree && ("$orn" in g.data) && g.data.$orn) || this.config.orientation;
                var f = function(i, h) {
                    return function() {
                        return g.pos.add(new C(i, h)).$scale(1 - c)
                    }
                };
                if (e.align == "left") {
                    return this.dispatch(d, f(0, a), f(0, 0), f(0, 0), f(b, 0))
                } else {
                    if (e.align == "center") {
                        return this.dispatch(d, f(0, a / 2), f(-b / 2, 0), f(0, -a / 2), f(b / 2, 0))
                    } else {
                        if (e.align == "right") {
                            return this.dispatch(d, f(0, 0), f(-b, 0), f(0, -a), f(0, 0))
                        } else {
                            throw "align: not implemented"
                        }
                    }
                }
            },
            treeFitsInCanvas: function(g, c, e) {
                var f = c.getSize();
                var d = (this.config.multitree && ("$orn" in g.data) && g.data.$orn) || this.config.orientation;
                var b = this.dispatch(d, f.width, f.height);
                var a = this.getTreeBaseSize(g, e, function(h, i) {
                    return h === 0 || !i.anySubnode()
                });
                return (a < b)
            }
        });
        $jit.ST.Plot = new B({
            Implements: N.Plot,
            plotSubtree: function(e, h, d, i) {
                var b = this.viz,
                    g = b.canvas,
                    f = b.config;
                d = Math.min(Math.max(0.001, d), 1);
                if (d >= 0) {
                    e.drawn = false;
                    var a = g.getCtx();
                    var c = b.geom.getScaledTreePosition(e, d);
                    a.translate(c.x, c.y);
                    a.scale(d, d)
                }
                this.plotTree(e, P.merge(h, {
                    withLabels: true,
                    hideLabels: !!d,
                    plotSubtree: function(j, l) {
                        var m = f.multitree && !("$orn" in e.data);
                        var k = m && e.getData("orns");
                        return !m || k.indexOf(e.getData("orn")) > -1
                    }
                }), i);
                if (d >= 0) {
                    e.drawn = true
                }
            },
            getAlignedPos: function(f, d, c) {
                var e = this.node;
                var b, a;
                if (e.align == "center") {
                    b = {
                        x: f.x - d / 2,
                        y: f.y - c / 2
                    }
                } else {
                    if (e.align == "left") {
                        a = this.config.orientation;
                        if (a == "bottom" || a == "top") {
                            b = {
                                x: f.x - d / 2,
                                y: f.y
                            }
                        } else {
                            b = {
                                x: f.x,
                                y: f.y - c / 2
                            }
                        }
                    } else {
                        if (e.align == "right") {
                            a = this.config.orientation;
                            if (a == "bottom" || a == "top") {
                                b = {
                                    x: f.x - d / 2,
                                    y: f.y - c
                                }
                            } else {
                                b = {
                                    x: f.x - d,
                                    y: f.y - c / 2
                                }
                            }
                        } else {
                            throw "align: not implemented"
                        }
                    }
                }
                return b
            },
            getOrientation: function(c) {
                var e = this.config;
                var b = e.orientation;
                if (e.multitree) {
                    var d = c.nodeFrom;
                    var a = c.nodeTo;
                    b = (("$orn" in d.data) && d.data.$orn) || (("$orn" in a.data) && a.data.$orn)
                }
                return b
            }
        });
        $jit.ST.Label = {};
        $jit.ST.Label.Native = new B({
            Implements: N.Label.Native,
            renderLabel: function(f, h, g) {
                var b = f.getCtx(),
                    d = h.pos.getc(true),
                    a = h.getData("width"),
                    c = h.getData("height"),
                    e = this.viz.fx.getAlignedPos(d, a, c);
                b.fillText(h.name, e.x + a / 2, e.y + c / 2)
            }
        });
        $jit.ST.Label.DOM = new B({
            Implements: N.Label.DOM,
            placeLabel: function(a, h, n) {
                var r = h.pos.getc(true),
                    b = this.viz.config,
                    f = b.Node,
                    k = this.viz.canvas,
                    q = h.getData("width"),
                    d = h.getData("height"),
                    i = k.getSize(),
                    m, c;
                var s = k.translateOffsetX,
                    g = k.translateOffsetY,
                    o = k.scaleOffsetX,
                    p = k.scaleOffsetY,
                    j = r.x * o + s,
                    l = r.y * p + g;
                if (f.align == "center") {
                    m = {
                        x: Math.round(j - q / 2 + i.width / 2),
                        y: Math.round(l - d / 2 + i.height / 2)
                    }
                } else {
                    if (f.align == "left") {
                        c = b.orientation;
                        if (c == "bottom" || c == "top") {
                            m = {
                                x: Math.round(j - q / 2 + i.width / 2),
                                y: Math.round(l + i.height / 2)
                            }
                        } else {
                            m = {
                                x: Math.round(j + i.width / 2),
                                y: Math.round(l - d / 2 + i.height / 2)
                            }
                        }
                    } else {
                        if (f.align == "right") {
                            c = b.orientation;
                            if (c == "bottom" || c == "top") {
                                m = {
                                    x: Math.round(j - q / 2 + i.width / 2),
                                    y: Math.round(l - d + i.height / 2)
                                }
                            } else {
                                m = {
                                    x: Math.round(j - q + i.width / 2),
                                    y: Math.round(l - d / 2 + i.height / 2)
                                }
                            }
                        } else {
                            throw "align: not implemented"
                        }
                    }
                }
                var e = a.style;
                e.left = m.x + "px";
                e.top = m.y + "px";
                e.display = this.fitsInCanvas(m, k) ? "" : "none";
                n.onPlaceLabel(a, h)
            }
        });
        $jit.ST.Label.SVG = new B({
            Implements: [$jit.ST.Label.DOM, N.Label.SVG],
            initialize: function(a) {
                this.viz = a
            }
        });
        $jit.ST.Label.HTML = new B({
            Implements: [$jit.ST.Label.DOM, N.Label.HTML],
            initialize: function(a) {
                this.viz = a
            }
        });
        $jit.ST.Plot.NodeTypes = new B({
            none: {
                render: P.empty,
                contains: P.lambda(false)
            },
            circle: {
                render: function(b, c) {
                    var d = b.getData("dim"),
                        a = this.getAlignedPos(b.pos.getc(true), d, d),
                        e = d / 2;
                    this.nodeHelper.circle.render("fill", {
                        x: a.x + e,
                        y: a.y + e
                    }, e, c)
                },
                contains: function(c, b) {
                    var e = c.getData("dim"),
                        d = this.getAlignedPos(c.pos.getc(true), e, e),
                        a = e / 2;
                    this.nodeHelper.circle.contains({
                        x: d.x + a,
                        y: d.y + a
                    }, b, a)
                }
            },
            square: {
                render: function(b, c) {
                    var d = b.getData("dim"),
                        e = d / 2,
                        a = this.getAlignedPos(b.pos.getc(true), d, d);
                    this.nodeHelper.square.render("fill", {
                        x: a.x + e,
                        y: a.y + e
                    }, e, c)
                },
                contains: function(c, b) {
                    var e = c.getData("dim"),
                        d = this.getAlignedPos(c.pos.getc(true), e, e),
                        a = e / 2;
                    this.nodeHelper.square.contains({
                        x: d.x + a,
                        y: d.y + a
                    }, b, a)
                }
            },
            ellipse: {
                render: function(d, b) {
                    var e = d.getData("width"),
                        c = d.getData("height"),
                        a = this.getAlignedPos(d.pos.getc(true), e, c);
                    this.nodeHelper.ellipse.render("fill", {
                        x: a.x + e / 2,
                        y: a.y + c / 2
                    }, e, c, b)
                },
                contains: function(e, b) {
                    var a = e.getData("width"),
                        c = e.getData("height"),
                        d = this.getAlignedPos(e.pos.getc(true), a, c);
                    this.nodeHelper.ellipse.contains({
                        x: d.x + a / 2,
                        y: d.y + c / 2
                    }, b, a, c)
                }
            },
            rectangle: {
                render: function(d, b) {
                    var e = d.getData("width"),
                        c = d.getData("height"),
                        a = this.getAlignedPos(d.pos.getc(true), e, c);
                    this.nodeHelper.rectangle.render("fill", {
                        x: a.x + e / 2,
                        y: a.y + c / 2
                    }, e, c, b)
                },
                contains: function(e, b) {
                    var a = e.getData("width"),
                        c = e.getData("height"),
                        d = this.getAlignedPos(e.pos.getc(true), a, c);
                    this.nodeHelper.rectangle.contains({
                        x: d.x + a / 2,
                        y: d.y + c / 2
                    }, b, a, c)
                }
            }
        });
        $jit.ST.Plot.EdgeTypes = new B({
            none: P.empty,
            line: {
                render: function(b, f) {
                    var h = this.getOrientation(b),
                        a = b.nodeFrom,
                        g = b.nodeTo,
                        c = a._depth < g._depth,
                        d = this.viz.geom.getEdge(c ? a : g, "begin", h),
                        e = this.viz.geom.getEdge(c ? g : a, "end", h);
                    this.edgeHelper.line.render(d, e, f)
                },
                contains: function(b, d) {
                    var h = this.getOrientation(b),
                        f = b.nodeFrom,
                        a = b.nodeTo,
                        c = f._depth < a._depth,
                        e = this.viz.geom.getEdge(c ? f : a, "begin", h),
                        g = this.viz.geom.getEdge(c ? a : f, "end", h);
                    return this.edgeHelper.line.contains(e, g, d, this.edge.epsilon)
                }
            },
            arrow: {
                render: function(b, g) {
                    var c = this.getOrientation(b),
                        f = b.nodeFrom,
                        h = b.nodeTo,
                        d = b.getData("dim"),
                        j = this.viz.geom.getEdge(f, "begin", c),
                        i = this.viz.geom.getEdge(h, "end", c),
                        a = b.data.$direction,
                        e = (a && a.length > 1 && a[0] != f.id);
                    this.edgeHelper.arrow.render(j, i, d, e, g)
                },
                contains: function(b, d) {
                    var h = this.getOrientation(b),
                        f = b.nodeFrom,
                        a = b.nodeTo,
                        c = f._depth < a._depth,
                        e = this.viz.geom.getEdge(c ? f : a, "begin", h),
                        g = this.viz.geom.getEdge(c ? a : f, "end", h);
                    return this.edgeHelper.arrow.contains(e, g, d, this.edge.epsilon)
                }
            },
            "quadratic:begin": {
                render: function(b, h) {
                    var c = this.getOrientation(b);
                    var d = b.nodeFrom,
                        a = b.nodeTo,
                        i = d._depth < a._depth,
                        g = this.viz.geom.getEdge(i ? d : a, "begin", c),
                        f = this.viz.geom.getEdge(i ? a : d, "end", c),
                        e = b.getData("dim"),
                        j = h.getCtx();
                    j.beginPath();
                    j.moveTo(g.x, g.y);
                    switch (c) {
                        case "left":
                            j.quadraticCurveTo(g.x + e, g.y, f.x, f.y);
                            break;
                        case "right":
                            j.quadraticCurveTo(g.x - e, g.y, f.x, f.y);
                            break;
                        case "top":
                            j.quadraticCurveTo(g.x, g.y + e, f.x, f.y);
                            break;
                        case "bottom":
                            j.quadraticCurveTo(g.x, g.y - e, f.x, f.y);
                            break
                    }
                    j.stroke()
                }
            },
            "quadratic:end": {
                render: function(b, h) {
                    var c = this.getOrientation(b);
                    var d = b.nodeFrom,
                        a = b.nodeTo,
                        i = d._depth < a._depth,
                        g = this.viz.geom.getEdge(i ? d : a, "begin", c),
                        f = this.viz.geom.getEdge(i ? a : d, "end", c),
                        e = b.getData("dim"),
                        j = h.getCtx();
                    j.beginPath();
                    j.moveTo(g.x, g.y);
                    switch (c) {
                        case "left":
                            j.quadraticCurveTo(f.x - e, f.y, f.x, f.y);
                            break;
                        case "right":
                            j.quadraticCurveTo(f.x + e, f.y, f.x, f.y);
                            break;
                        case "top":
                            j.quadraticCurveTo(f.x, f.y - e, f.x, f.y);
                            break;
                        case "bottom":
                            j.quadraticCurveTo(f.x, f.y + e, f.x, f.y);
                            break
                    }
                    j.stroke()
                }
            },
            bezier: {
                render: function(b, h) {
                    var c = this.getOrientation(b),
                        d = b.nodeFrom,
                        a = b.nodeTo,
                        i = d._depth < a._depth,
                        g = this.viz.geom.getEdge(i ? d : a, "begin", c),
                        f = this.viz.geom.getEdge(i ? a : d, "end", c),
                        e = b.getData("dim"),
                        j = h.getCtx();
                    j.beginPath();
                    j.moveTo(g.x, g.y);
                    switch (c) {
                        case "left":
                            j.bezierCurveTo(g.x + e, g.y, f.x - e, f.y, f.x, f.y);
                            break;
                        case "right":
                            j.bezierCurveTo(g.x - e, g.y, f.x + e, f.y, f.x, f.y);
                            break;
                        case "top":
                            j.bezierCurveTo(g.x, g.y + e, f.x, f.y - e, f.x, f.y);
                            break;
                        case "bottom":
                            j.bezierCurveTo(g.x, g.y - e, f.x, f.y + e, f.x, f.y);
                            break
                    }
                    j.stroke()
                }
            }
        });
        $jit.ST.Plot.NodeTypes.implement({
            "areachart-stacked": {
                render: function(d, am) {
                    var f = d.pos.getc(true),
                        aw = d.getData("width"),
                        at = d.getData("height"),
                        v = this.getAlignedPos(f, aw, at),
                        ar = v.x,
                        au = v.y,
                        o = d.getData("stringArray"),
                        ai = d.getData("dimArray"),
                        aq = d.getData("valueArray"),
                        an = P.reduce(aq, function(T, S) {
                            return T + S[0]
                        }, 0),
                        ap = P.reduce(aq, function(T, S) {
                            return T + S[1]
                        }, 0),
                        r = d.getData("colorArray"),
                        ao = r.length,
                        b = d.getData("config"),
                        q = d.getData("gradient"),
                        s = b.showLabels,
                        m = b.showAggregates,
                        al = b.Label,
                        g = d.getData("prev");
                    var n = am.getCtx(),
                        t = d.getData("border");
                    if (r && ai && o) {
                        for (var u = 0, aj = ai.length, p = 0, ak = 0, c = 0; u < aj; u++) {
                            n.fillStyle = n.strokeStyle = r[u % ao];
                            n.save();
                            if (q && (ai[u][0] > 0 || ai[u][1] > 0)) {
                                var i = p + ai[u][0],
                                    k = ak + ai[u][1],
                                    ah = Math.atan((k - i) / aw),
                                    a = 55;
                                var e = n.createLinearGradient(ar + aw / 2, au - (i + k) / 2, ar + aw / 2 + a * Math.sin(ah), au - (i + k) / 2 + a * Math.cos(ah));
                                var j = P.rgbToHex(P.map(P.hexToRgb(r[u % ao].slice(1)), function(S) {
                                    return (S * 0.85) >> 0
                                }));
                                e.addColorStop(0, r[u % ao]);
                                e.addColorStop(1, j);
                                n.fillStyle = e
                            }
                            n.beginPath();
                            n.moveTo(ar, au - p);
                            n.lineTo(ar + aw, au - ak);
                            n.lineTo(ar + aw, au - ak - ai[u][1]);
                            n.lineTo(ar, au - p - ai[u][0]);
                            n.lineTo(ar, au - p);
                            n.fill();
                            n.restore();
                            if (t) {
                                var h = t.name == o[u];
                                var av = h ? 0.7 : 0.8;
                                var j = P.rgbToHex(P.map(P.hexToRgb(r[u % ao].slice(1)), function(S) {
                                    return (S * av) >> 0
                                }));
                                n.strokeStyle = j;
                                n.lineWidth = h ? 4 : 1;
                                n.save();
                                n.beginPath();
                                if (t.index === 0) {
                                    n.moveTo(ar, au - p);
                                    n.lineTo(ar, au - p - ai[u][0])
                                } else {
                                    n.moveTo(ar + aw, au - ak);
                                    n.lineTo(ar + aw, au - ak - ai[u][1])
                                }
                                n.stroke();
                                n.restore()
                            }
                            p += (ai[u][0] || 0);
                            ak += (ai[u][1] || 0);
                            if (ai[u][0] > 0) {
                                c += (aq[u][0] || 0)
                            }
                        }
                        if (g && al.type == "Native") {
                            n.save();
                            n.beginPath();
                            n.fillStyle = n.strokeStyle = al.color;
                            n.font = al.style + " " + al.size + "px " + al.family;
                            n.textAlign = "center";
                            n.textBaseline = "middle";
                            var l = m(d.name, an, ap, d, c);
                            if (l !== false) {
                                n.fillText(l !== true ? l : c, ar, au - p - b.labelOffset - al.size / 2, aw)
                            }
                            if (s(d.name, an, ap, d)) {
                                n.fillText(d.name, ar, au + al.size / 2 + b.labelOffset)
                            }
                            n.restore()
                        }
                    }
                },
                contains: function(b, q) {
                    var k = b.pos.getc(true),
                        h = b.getData("width"),
                        f = b.getData("height"),
                        g = this.getAlignedPos(k, h, f),
                        i = g.x,
                        j = g.y,
                        e = b.getData("dimArray"),
                        m = q.x - i;
                    if (q.x < i || q.x > i + h || q.y > j || q.y < j - f) {
                        return false
                    }
                    for (var p = 0, a = e.length, l = j, d = j; p < a; p++) {
                        var c = e[p];
                        l -= c[0];
                        d -= c[1];
                        var o = l + (d - l) * m / h;
                        if (q.y >= o) {
                            var n = +(m > h / 2);
                            return {
                                name: b.getData("stringArray")[p],
                                color: b.getData("colorArray")[p],
                                value: b.getData("valueArray")[p][n],
                                index: n
                            }
                        }
                    }
                    return false
                }
            }
        });
        $jit.AreaChart = new B({
            st: null,
            colors: ["#416D9C", "#70A35E", "#EBB056", "#C74243", "#83548B", "#909291", "#557EAA"],
            selected: {},
            busy: false,
            initialize: function(e) {
                this.controller = this.config = P.merge(E("Canvas", "Margin", "Label", "AreaChart"), {
                    Label: {
                        type: "Native"
                    }
                }, e);
                var d = this.config.showLabels,
                    b = P.type(d),
                    a = this.config.showAggregates,
                    c = P.type(a);
                this.config.showLabels = b == "function" ? d : P.lambda(d);
                this.config.showAggregates = c == "function" ? a : P.lambda(a);
                this.initializeViz()
            },
            initializeViz: function() {
                var b = this.config,
                    g = this,
                    c = b.type.split(":")[0],
                    a = {};
                var e = new $jit.ST({
                    injectInto: b.injectInto,
                    width: b.width,
                    height: b.height,
                    orientation: "bottom",
                    levelDistance: 0,
                    siblingOffset: 0,
                    subtreeOffset: 0,
                    withLabels: b.Label.type != "Native",
                    useCanvas: b.useCanvas,
                    Label: {
                        type: b.Label.type
                    },
                    Node: {
                        overridable: true,
                        type: "areachart-" + c,
                        align: "left",
                        width: 1,
                        height: 1
                    },
                    Edge: {
                        type: "none"
                    },
                    Tips: {
                        enable: b.Tips.enable,
                        type: "Native",
                        force: true,
                        onShow: function(h, i, k) {
                            var j = k;
                            b.Tips.onShow(h, j, i)
                        }
                    },
                    Events: {
                        enable: true,
                        type: "Native",
                        onClick: function(i, h, k) {
                            if (!b.filterOnClick && !b.Events.enable) {
                                return
                            }
                            var j = h.getContains();
                            if (j) {
                                b.filterOnClick && g.filter(j.name)
                            }
                            b.Events.enable && b.Events.onClick(j, h, k)
                        },
                        onRightClick: function(i, h, j) {
                            if (!b.restoreOnRightClick) {
                                return
                            }
                            g.restore()
                        },
                        onMouseMove: function(i, h, k) {
                            if (!b.selectOnHover) {
                                return
                            }
                            if (i) {
                                var j = h.getContains();
                                g.select(i.id, j.name, j.index)
                            } else {
                                g.select(false, false, false)
                            }
                        }
                    },
                    onCreateLabel: function(o, r) {
                        var i = b.Label,
                            j = r.getData("valueArray"),
                            q = P.reduce(j, function(v, u) {
                                return v + u[0]
                            }, 0),
                            l = P.reduce(j, function(v, u) {
                                return v + u[1]
                            }, 0);
                        if (r.getData("prev")) {
                            var m = {
                                wrapper: document.createElement("div"),
                                aggregate: document.createElement("div"),
                                label: document.createElement("div")
                            };
                            var h = m.wrapper,
                                k = m.label,
                                t = m.aggregate,
                                s = h.style,
                                n = k.style,
                                p = t.style;
                            a[r.id] = m;
                            h.appendChild(k);
                            h.appendChild(t);
                            if (!b.showLabels(r.name, q, l, r)) {
                                k.style.display = "none"
                            }
                            if (!b.showAggregates(r.name, q, l, r)) {
                                t.style.display = "none"
                            }
                            s.position = "relative";
                            s.overflow = "visible";
                            s.fontSize = i.size + "px";
                            s.fontFamily = i.family;
                            s.color = i.color;
                            s.textAlign = "center";
                            p.position = n.position = "absolute";
                            o.style.width = r.getData("width") + "px";
                            o.style.height = r.getData("height") + "px";
                            k.innerHTML = r.name;
                            o.appendChild(h)
                        }
                    },
                    onPlaceLabel: function(h, n) {
                        if (!n.getData("prev")) {
                            return
                        }
                        var j = a[n.id],
                            Y = j.wrapper.style,
                            Z = j.label.style,
                            o = j.aggregate.style,
                            q = n.getData("width"),
                            s = n.getData("height"),
                            t = n.getData("dimArray"),
                            W = n.getData("valueArray"),
                            r = P.reduce(W, function(S, T) {
                                return S + T[0]
                            }, 0),
                            v = P.reduce(W, function(S, T) {
                                return S + T[1]
                            }, 0),
                            u = parseInt(Y.fontSize, 10),
                            p = h.style;
                        if (t && W) {
                            if (b.showLabels(n.name, r, v, n)) {
                                Z.display = ""
                            } else {
                                Z.display = "none"
                            }
                            var X = b.showAggregates(n.name, r, v, n);
                            if (X !== false) {
                                o.display = ""
                            } else {
                                o.display = "none"
                            }
                            Y.width = o.width = Z.width = h.style.width = q + "px";
                            o.left = Z.left = -q / 2 + "px";
                            for (var k = 0, m = W.length, l = 0, i = 0; k < m; k++) {
                                if (t[k][0] > 0) {
                                    l += W[k][0];
                                    i += t[k][0]
                                }
                            }
                            o.top = (-u - b.labelOffset) + "px";
                            Z.top = (b.labelOffset + i) + "px";
                            h.style.top = parseInt(h.style.top, 10) - i + "px";
                            h.style.height = Y.height = i + "px";
                            j.aggregate.innerHTML = X !== true ? X : l
                        }
                    }
                });
                var f = e.canvas.getSize(),
                    d = b.Margin;
                e.config.offsetY = -f.height / 2 + d.bottom + (b.showLabels && (b.labelOffset + b.Label.size));
                e.config.offsetX = (d.right - d.left) / 2;
                this.delegate = e;
                this.canvas = this.delegate.canvas
            },
            loadJSON: function(d) {
                var i = P.time(),
                    t = [],
                    e = this.delegate,
                    a = P.splat(d.label),
                    k = P.splat(d.color || this.colors),
                    c = this.config,
                    l = !!c.type.split(":")[1],
                    h = c.animate;
                for (var g = 0, j = d.values, m = j.length; g < m - 1; g++) {
                    var b = j[g],
                        q = j[g - 1],
                        p = j[g + 1];
                    var f = P.splat(j[g].values),
                        n = P.splat(j[g + 1].values);
                    var u = P.zip(f, n);
                    var r = 0,
                        s = 0;
                    t.push({
                        id: i + b.label,
                        name: b.label,
                        data: {
                            value: u,
                            "$valueArray": u,
                            "$colorArray": k,
                            "$stringArray": a,
                            "$next": p.label,
                            "$prev": q ? q.label : false,
                            "$config": c,
                            "$gradient": l
                        },
                        children: []
                    })
                }
                var o = {
                    id: i + "$root",
                    name: "",
                    data: {
                        "$type": "none",
                        "$width": 1,
                        "$height": 1
                    },
                    children: t
                };
                e.loadJSON(o);
                this.normalizeDims();
                e.compute();
                e.select(e.root);
                if (h) {
                    e.fx.animate({
                        modes: ["node-property:height:dimArray"],
                        duration: 1500
                    })
                }
            },
            updateJSON: function(i, g) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                var a = this.delegate,
                    j = a.graph,
                    d = i.label && P.splat(i.label),
                    k = i.values,
                    h = this.config.animate,
                    b = this,
                    c = {};
                for (var e = 0, f = k.length; e < f; e++) {
                    c[k[e].label] = k[e]
                }
                j.eachNode(function(l) {
                    var p = c[l.name],
                        o = l.getData("stringArray"),
                        m = l.getData("valueArray"),
                        n = l.getData("next");
                    if (p) {
                        p.values = P.splat(p.values);
                        P.each(m, function(r, q) {
                            r[0] = p.values[q];
                            if (d) {
                                o[q] = d[q]
                            }
                        });
                        l.setData("valueArray", m)
                    }
                    if (n) {
                        p = c[n];
                        if (p) {
                            P.each(m, function(r, q) {
                                r[1] = p.values[q]
                            })
                        }
                    }
                });
                this.normalizeDims();
                a.compute();
                a.select(a.root);
                if (h) {
                    a.fx.animate({
                        modes: ["node-property:height:dimArray"],
                        duration: 1500,
                        onComplete: function() {
                            b.busy = false;
                            g && g.onComplete()
                        }
                    })
                }
            },
            filter: function(d, b) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                if (this.config.Tips.enable) {
                    this.delegate.tips.hide()
                }
                this.select(false, false, false);
                var a = P.splat(d);
                var c = this.delegate.graph.getNode(this.delegate.root);
                var e = this;
                this.normalizeDims();
                c.eachAdjacency(function(i) {
                    var f = i.nodeTo,
                        g = f.getData("dimArray", "end"),
                        h = f.getData("stringArray");
                    f.setData("dimArray", P.map(g, function(j, k) {
                        return (P.indexOf(a, h[k]) > -1) ? j : [0, 0]
                    }), "end")
                });
                this.delegate.fx.animate({
                    modes: ["node-property:dimArray"],
                    duration: 1500,
                    onComplete: function() {
                        e.busy = false;
                        b && b.onComplete()
                    }
                })
            },
            restore: function(a) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                if (this.config.Tips.enable) {
                    this.delegate.tips.hide()
                }
                this.select(false, false, false);
                this.normalizeDims();
                var b = this;
                this.delegate.fx.animate({
                    modes: ["node-property:height:dimArray"],
                    duration: 1500,
                    onComplete: function() {
                        b.busy = false;
                        a && a.onComplete()
                    }
                })
            },
            select: function(f, b, c) {
                if (!this.config.selectOnHover) {
                    return
                }
                var e = this.selected;
                if (e.id != f || e.name != b || e.index != c) {
                    e.id = f;
                    e.name = b;
                    e.index = c;
                    this.delegate.graph.eachNode(function(g) {
                        g.setData("border", false)
                    });
                    if (f) {
                        var a = this.delegate.graph.getNode(f);
                        a.setData("border", e);
                        var d = c === 0 ? "prev" : "next";
                        d = a.getData(d);
                        if (d) {
                            a = this.delegate.graph.getByName(d);
                            if (a) {
                                a.setData("border", {
                                    name: b,
                                    index: 1 - c
                                })
                            }
                        }
                    }
                    this.delegate.plot()
                }
            },
            getLegend: function() {
                var d = {};
                var c;
                this.delegate.graph.getNode(this.delegate.root).eachAdjacency(function(e) {
                    c = e.nodeTo
                });
                var a = c.getData("colorArray"),
                    b = a.length;
                P.each(c.getData("stringArray"), function(f, e) {
                    d[f] = a[e % b]
                });
                return d
            },
            getMaxValue: function() {
                var a = 0;
                this.delegate.graph.eachNode(function(f) {
                    var e = f.getData("valueArray"),
                        c = 0,
                        b = 0;
                    P.each(e, function(g) {
                        c += +g[0];
                        b += +g[1]
                    });
                    var d = b > c ? b : c;
                    a = a > d ? a : d
                });
                return a
            },
            normalizeDims: function() {
                var b = this.delegate.graph.getNode(this.delegate.root),
                    e = 0;
                b.eachAdjacency(function() {
                    e++
                });
                var c = this.getMaxValue() || 1,
                    i = this.delegate.canvas.getSize(),
                    f = this.config,
                    d = f.Margin,
                    a = f.labelOffset + f.Label.size,
                    h = (i.width - (d.left + d.right)) / e,
                    g = f.animate,
                    j = i.height - (d.top + d.bottom) - (f.showAggregates && a) - (f.showLabels && a);
                this.delegate.graph.eachNode(function(k) {
                    var n = 0,
                        l = 0,
                        p = [];
                    P.each(k.getData("valueArray"), function(q) {
                        n += +q[0];
                        l += +q[1];
                        p.push([0, 0])
                    });
                    var m = l > n ? l : n;
                    k.setData("width", h);
                    if (g) {
                        k.setData("height", m * j / c, "end");
                        k.setData("dimArray", P.map(k.getData("valueArray"), function(q) {
                            return [q[0] * j / c, q[1] * j / c]
                        }), "end");
                        var o = k.getData("dimArray");
                        if (!o) {
                            k.setData("dimArray", p)
                        }
                    } else {
                        k.setData("height", m * j / c);
                        k.setData("dimArray", P.map(k.getData("valueArray"), function(q) {
                            return [q[0] * j / c, q[1] * j / c]
                        }))
                    }
                })
            }
        });
        E.BarChart = {
            $extend: true,
            animate: true,
            type: "stacked",
            labelOffset: 3,
            barsOffset: 0,
            hoveredColor: "#9fd4ff",
            orientation: "horizontal",
            showAggregates: true,
            showLabels: true,
            Tips: {
                enable: false,
                onShow: P.empty,
                onHide: P.empty
            },
            Events: {
                enable: false,
                onClick: P.empty
            }
        };
        $jit.ST.Plot.NodeTypes.implement({
            "barchart-stacked": {
                render: function(i, ae) {
                    var t = i.pos.getc(true),
                        j = i.getData("width"),
                        l = i.getData("height"),
                        n = this.getAlignedPos(t, j, l),
                        o = n.x,
                        p = n.y,
                        m = i.getData("dimArray"),
                        ab = i.getData("valueArray"),
                        ac = i.getData("colorArray"),
                        af = ac.length,
                        b = i.getData("stringArray");
                    var g = ae.getCtx(),
                        u = {},
                        f = i.getData("border"),
                        q = i.getData("gradient"),
                        ah = i.getData("config"),
                        ag = ah.orientation == "horizontal",
                        ad = ah.showAggregates,
                        k = ah.showLabels,
                        r = ah.Label;
                    if (ac && m && b) {
                        for (var c = 0, h = m.length, d = 0, v = 0; c < h; c++) {
                            g.fillStyle = g.strokeStyle = ac[c % af];
                            if (q) {
                                var a;
                                if (ag) {
                                    a = g.createLinearGradient(o + d + m[c] / 2, p, o + d + m[c] / 2, p + l)
                                } else {
                                    a = g.createLinearGradient(o, p - d - m[c] / 2, o + j, p - d - m[c] / 2)
                                }
                                var e = P.rgbToHex(P.map(P.hexToRgb(ac[c % af].slice(1)), function(S) {
                                    return (S * 0.5) >> 0
                                }));
                                a.addColorStop(0, e);
                                a.addColorStop(0.5, ac[c % af]);
                                a.addColorStop(1, e);
                                g.fillStyle = a
                            }
                            if (ag) {
                                g.fillRect(o + d, p, m[c], l)
                            } else {
                                g.fillRect(o, p - d - m[c], j, m[c])
                            }
                            if (f && f.name == b[c]) {
                                u.acum = d;
                                u.dimValue = m[c]
                            }
                            d += (m[c] || 0);
                            v += (ab[c] || 0)
                        }
                        if (f) {
                            g.save();
                            g.lineWidth = 2;
                            g.strokeStyle = f.color;
                            if (ag) {
                                g.strokeRect(o + u.acum + 1, p + 1, u.dimValue - 2, l - 2)
                            } else {
                                g.strokeRect(o + 1, p - u.acum - u.dimValue + 1, j - 2, u.dimValue - 2)
                            }
                            g.restore()
                        }
                        if (r.type == "Native") {
                            g.save();
                            g.fillStyle = g.strokeStyle = r.color;
                            g.font = r.style + " " + r.size + "px " + r.family;
                            g.textBaseline = "middle";
                            var s = ad(i.name, v, i);
                            if (s !== false) {
                                s = s !== true ? s : v;
                                if (ag) {
                                    g.textAlign = "right";
                                    g.fillText(s, o + d - ah.labelOffset, p + l / 2)
                                } else {
                                    g.textAlign = "center";
                                    g.fillText(s, o + j / 2, p - l - r.size / 2 - ah.labelOffset)
                                }
                            }
                            if (k(i.name, v, i)) {
                                if (ag) {
                                    g.textAlign = "center";
                                    g.translate(o - ah.labelOffset - r.size / 2, p + l / 2);
                                    g.rotate(Math.PI / 2);
                                    g.fillText(i.name, 0, 0)
                                } else {
                                    g.textAlign = "center";
                                    g.fillText(i.name, o + j / 2, p + r.size / 2 + ah.labelOffset)
                                }
                            }
                            g.restore()
                        }
                    }
                },
                contains: function(a, p) {
                    var m = a.pos.getc(true),
                        d = a.getData("width"),
                        f = a.getData("height"),
                        g = this.getAlignedPos(m, d, f),
                        i = g.x,
                        k = g.y,
                        e = a.getData("dimArray"),
                        c = a.getData("config"),
                        h = p.x - i,
                        l = c.orientation == "horizontal";
                    if (l) {
                        if (p.x < i || p.x > i + d || p.y > k + f || p.y < k) {
                            return false
                        }
                    } else {
                        if (p.x < i || p.x > i + d || p.y > k || p.y < k - f) {
                            return false
                        }
                    }
                    for (var o = 0, q = e.length, j = (l ? i : k); o < q; o++) {
                        var b = e[o];
                        if (l) {
                            j += b;
                            var n = j;
                            if (p.x <= n) {
                                return {
                                    name: a.getData("stringArray")[o],
                                    color: a.getData("colorArray")[o],
                                    value: a.getData("valueArray")[o],
                                    label: a.name
                                }
                            }
                        } else {
                            j -= b;
                            var n = j;
                            if (p.y >= n) {
                                return {
                                    name: a.getData("stringArray")[o],
                                    color: a.getData("colorArray")[o],
                                    value: a.getData("valueArray")[o],
                                    label: a.name
                                }
                            }
                        }
                    }
                    return false
                }
            },
            "barchart-grouped": {
                render: function(h, ag) {
                    var s = h.pos.getc(true),
                        i = h.getData("width"),
                        k = h.getData("height"),
                        m = this.getAlignedPos(s, i, k),
                        n = m.x,
                        o = m.y,
                        l = h.getData("dimArray"),
                        v = h.getData("valueArray"),
                        b = v.length,
                        ad = h.getData("colorArray"),
                        ah = ad.length,
                        al = h.getData("stringArray");
                    var f = ag.getCtx(),
                        u = {},
                        e = h.getData("border"),
                        q = h.getData("gradient"),
                        aj = h.getData("config"),
                        ai = aj.orientation == "horizontal",
                        ae = aj.showAggregates,
                        j = aj.showLabels,
                        p = aj.Label,
                        af = (ai ? k : i) / b;
                    if (ad && l && al) {
                        for (var a = 0, g = b, c = 0, t = 0; a < g; a++) {
                            f.fillStyle = f.strokeStyle = ad[a % ah];
                            if (q) {
                                var ak;
                                if (ai) {
                                    ak = f.createLinearGradient(n + l[a] / 2, o + af * a, n + l[a] / 2, o + af * (a + 1))
                                } else {
                                    ak = f.createLinearGradient(n + af * a, o - l[a] / 2, n + af * (a + 1), o - l[a] / 2)
                                }
                                var d = P.rgbToHex(P.map(P.hexToRgb(ad[a % ah].slice(1)), function(S) {
                                    return (S * 0.5) >> 0
                                }));
                                ak.addColorStop(0, d);
                                ak.addColorStop(0.5, ad[a % ah]);
                                ak.addColorStop(1, d);
                                f.fillStyle = ak
                            }
                            if (ai) {
                                f.fillRect(n, o + af * a, l[a], af)
                            } else {
                                f.fillRect(n + af * a, o - l[a], af, l[a])
                            }
                            if (e && e.name == al[a]) {
                                u.acum = af * a;
                                u.dimValue = l[a]
                            }
                            c += (l[a] || 0);
                            t += (v[a] || 0)
                        }
                        if (e) {
                            f.save();
                            f.lineWidth = 2;
                            f.strokeStyle = e.color;
                            if (ai) {
                                f.strokeRect(n + 1, o + u.acum + 1, u.dimValue - 2, af - 2)
                            } else {
                                f.strokeRect(n + u.acum + 1, o - u.dimValue + 1, af - 2, u.dimValue - 2)
                            }
                            f.restore()
                        }
                        if (p.type == "Native") {
                            f.save();
                            f.fillStyle = f.strokeStyle = p.color;
                            f.font = p.style + " " + p.size + "px " + p.family;
                            f.textBaseline = "middle";
                            var r = ae(h.name, t, h);
                            if (r !== false) {
                                r = r !== true ? r : t;
                                if (ai) {
                                    f.textAlign = "right";
                                    f.fillText(r, n + Math.max.apply(null, l) - aj.labelOffset, o + k / 2)
                                } else {
                                    f.textAlign = "center";
                                    f.fillText(r, n + i / 2, o - Math.max.apply(null, l) - p.size / 2 - aj.labelOffset)
                                }
                            }
                            if (j(h.name, t, h)) {
                                if (ai) {
                                    f.textAlign = "center";
                                    f.translate(n - aj.labelOffset - p.size / 2, o + k / 2);
                                    f.rotate(Math.PI / 2);
                                    f.fillText(h.name, 0, 0)
                                } else {
                                    f.textAlign = "center";
                                    f.fillText(h.name, n + i / 2, o + p.size / 2 + aj.labelOffset)
                                }
                            }
                            f.restore()
                        }
                    }
                },
                contains: function(h, m) {
                    var q = h.pos.getc(true),
                        i = h.getData("width"),
                        j = h.getData("height"),
                        n = this.getAlignedPos(q, i, j),
                        o = n.x,
                        p = n.y,
                        l = h.getData("dimArray"),
                        d = l.length,
                        a = h.getData("config"),
                        r = m.x - o,
                        k = a.orientation == "horizontal",
                        g = (k ? j : i) / d;
                    if (k) {
                        if (m.x < o || m.x > o + i || m.y > p + j || m.y < p) {
                            return false
                        }
                    } else {
                        if (m.x < o || m.x > o + i || m.y > p || m.y < p - j) {
                            return false
                        }
                    }
                    for (var e = 0, f = l.length; e < f; e++) {
                        var b = l[e];
                        if (k) {
                            var c = p + g * e;
                            if (m.x <= o + b && m.y >= c && m.y <= c + g) {
                                return {
                                    name: h.getData("stringArray")[e],
                                    color: h.getData("colorArray")[e],
                                    value: h.getData("valueArray")[e],
                                    label: h.name
                                }
                            }
                        } else {
                            var c = o + g * e;
                            if (m.x >= c && m.x <= c + g && m.y >= p - b) {
                                return {
                                    name: h.getData("stringArray")[e],
                                    color: h.getData("colorArray")[e],
                                    value: h.getData("valueArray")[e],
                                    label: h.name
                                }
                            }
                        }
                    }
                    return false
                }
            }
        });
        $jit.BarChart = new B({
            st: null,
            colors: ["#416D9C", "#70A35E", "#EBB056", "#C74243", "#83548B", "#909291", "#557EAA"],
            selected: {},
            busy: false,
            initialize: function(e) {
                this.controller = this.config = P.merge(E("Canvas", "Margin", "Label", "BarChart"), {
                    Label: {
                        type: "Native"
                    }
                }, e);
                var d = this.config.showLabels,
                    b = P.type(d),
                    a = this.config.showAggregates,
                    c = P.type(a);
                this.config.showLabels = b == "function" ? d : P.lambda(d);
                this.config.showAggregates = c == "function" ? a : P.lambda(a);
                this.initializeViz()
            },
            initializeViz: function() {
                var b = this.config,
                    h = this;
                var c = b.type.split(":")[0],
                    d = b.orientation == "horizontal",
                    a = {};
                var f = new $jit.ST({
                    injectInto: b.injectInto,
                    width: b.width,
                    height: b.height,
                    orientation: d ? "left" : "bottom",
                    levelDistance: 0,
                    siblingOffset: b.barsOffset,
                    subtreeOffset: 0,
                    withLabels: b.Label.type != "Native",
                    useCanvas: b.useCanvas,
                    Label: {
                        type: b.Label.type
                    },
                    Node: {
                        overridable: true,
                        type: "barchart-" + c,
                        align: "left",
                        width: 1,
                        height: 1
                    },
                    Edge: {
                        type: "none"
                    },
                    Tips: {
                        enable: b.Tips.enable,
                        type: "Native",
                        force: true,
                        onShow: function(i, j, l) {
                            var k = l;
                            b.Tips.onShow(i, k, j)
                        }
                    },
                    Events: {
                        enable: true,
                        type: "Native",
                        onClick: function(j, i, l) {
                            if (!b.Events.enable) {
                                return
                            }
                            var k = i.getContains();
                            b.Events.onClick(k, i, l)
                        },
                        onMouseMove: function(j, i, l) {
                            if (!b.hoveredColor) {
                                return
                            }
                            if (j) {
                                var k = i.getContains();
                                h.select(j.id, k.name, k.index)
                            } else {
                                h.select(false, false, false)
                            }
                        }
                    },
                    onCreateLabel: function(o, q) {
                        var i = b.Label,
                            k = q.getData("valueArray"),
                            l = P.reduce(k, function(v, u) {
                                return v + u
                            }, 0);
                        var m = {
                            wrapper: document.createElement("div"),
                            aggregate: document.createElement("div"),
                            label: document.createElement("div")
                        };
                        var t = m.wrapper,
                            j = m.label,
                            s = m.aggregate,
                            r = t.style,
                            n = j.style,
                            p = s.style;
                        a[q.id] = m;
                        t.appendChild(j);
                        t.appendChild(s);
                        if (!b.showLabels(q.name, l, q)) {
                            n.display = "none"
                        }
                        if (!b.showAggregates(q.name, l, q)) {
                            p.display = "none"
                        }
                        r.position = "relative";
                        r.overflow = "visible";
                        r.fontSize = i.size + "px";
                        r.fontFamily = i.family;
                        r.color = i.color;
                        r.textAlign = "center";
                        p.position = n.position = "absolute";
                        o.style.width = q.getData("width") + "px";
                        o.style.height = q.getData("height") + "px";
                        p.left = n.left = "0px";
                        j.innerHTML = q.name;
                        o.appendChild(t)
                    },
                    onPlaceLabel: function(j, o) {
                        if (!a[o.id]) {
                            return
                        }
                        var k = a[o.id],
                            X = k.wrapper.style,
                            Z = k.label.style,
                            p = k.aggregate.style,
                            i = b.type.split(":")[0] == "grouped",
                            Y = b.orientation == "horizontal",
                            t = o.getData("dimArray"),
                            v = o.getData("valueArray"),
                            r = (i && Y) ? Math.max.apply(null, t) : o.getData("width"),
                            s = (i && !Y) ? Math.max.apply(null, t) : o.getData("height"),
                            u = parseInt(X.fontSize, 10),
                            q = j.style;
                        if (t && v) {
                            X.width = p.width = Z.width = j.style.width = r + "px";
                            for (var l = 0, n = v.length, m = 0; l < n; l++) {
                                if (t[l] > 0) {
                                    m += v[l]
                                }
                            }
                            if (b.showLabels(o.name, m, o)) {
                                Z.display = ""
                            } else {
                                Z.display = "none"
                            }
                            var W = b.showAggregates(o.name, m, o);
                            if (W !== false) {
                                p.display = ""
                            } else {
                                p.display = "none"
                            }
                            if (b.orientation == "horizontal") {
                                p.textAlign = "right";
                                Z.textAlign = "left";
                                Z.textIndex = p.textIndent = b.labelOffset + "px";
                                p.top = Z.top = (s - u) / 2 + "px";
                                j.style.height = X.height = s + "px"
                            } else {
                                p.top = (-u - b.labelOffset) + "px";
                                Z.top = (b.labelOffset + s) + "px";
                                j.style.top = parseInt(j.style.top, 10) - s + "px";
                                j.style.height = X.height = s + "px"
                            }
                            k.aggregate.innerHTML = W !== true ? W : m
                        }
                    }
                });
                var g = f.canvas.getSize(),
                    e = b.Margin;
                if (d) {
                    f.config.offsetX = g.width / 2 - e.left - (b.showLabels && (b.labelOffset + b.Label.size));
                    f.config.offsetY = (e.bottom - e.top) / 2
                } else {
                    f.config.offsetY = -g.height / 2 + e.bottom + (b.showLabels && (b.labelOffset + b.Label.size));
                    f.config.offsetX = (e.right - e.left) / 2
                }
                this.delegate = f;
                this.canvas = this.delegate.canvas
            },
            loadJSON: function(d) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                var j = P.time(),
                    p = [],
                    f = this.delegate,
                    a = P.splat(d.label),
                    l = P.splat(d.color || this.colors),
                    c = this.config,
                    k = !!c.type.split(":")[1],
                    e = c.animate,
                    g = c.orientation == "horizontal",
                    r = this;
                for (var h = 0, i = d.values, n = i.length; h < n; h++) {
                    var b = i[h];
                    var q = P.splat(i[h].values);
                    var m = 0;
                    p.push({
                        id: j + b.label,
                        name: b.label,
                        data: {
                            value: q,
                            "$valueArray": q,
                            "$colorArray": l,
                            "$stringArray": a,
                            "$gradient": k,
                            "$config": c
                        },
                        children: []
                    })
                }
                var o = {
                    id: j + "$root",
                    name: "",
                    data: {
                        "$type": "none",
                        "$width": 1,
                        "$height": 1
                    },
                    children: p
                };
                f.loadJSON(o);
                this.normalizeDims();
                f.compute();
                f.select(f.root);
                if (e) {
                    if (g) {
                        f.fx.animate({
                            modes: ["node-property:width:dimArray"],
                            duration: 1500,
                            onComplete: function() {
                                r.busy = false
                            }
                        })
                    } else {
                        f.fx.animate({
                            modes: ["node-property:height:dimArray"],
                            duration: 1500,
                            onComplete: function() {
                                r.busy = false
                            }
                        })
                    }
                } else {
                    this.busy = false
                }
            },
            updateJSON: function(h, f) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                this.select(false, false, false);
                var e = this.delegate;
                var g = e.graph;
                var b = h.values;
                var c = this.config.animate;
                var a = this;
                var d = this.config.orientation == "horizontal";
                P.each(b, function(j) {
                    var i = g.getByName(j.label);
                    if (i) {
                        i.setData("valueArray", P.splat(j.values));
                        if (h.label) {
                            i.setData("stringArray", P.splat(h.label))
                        }
                    }
                });
                this.normalizeDims();
                e.compute();
                e.select(e.root);
                if (c) {
                    if (d) {
                        e.fx.animate({
                            modes: ["node-property:width:dimArray"],
                            duration: 1500,
                            onComplete: function() {
                                a.busy = false;
                                f && f.onComplete()
                            }
                        })
                    } else {
                        e.fx.animate({
                            modes: ["node-property:height:dimArray"],
                            duration: 1500,
                            onComplete: function() {
                                a.busy = false;
                                f && f.onComplete()
                            }
                        })
                    }
                }
            },
            select: function(c, b) {
                if (!this.config.hoveredColor) {
                    return
                }
                var a = this.selected;
                if (a.id != c || a.name != b) {
                    a.id = c;
                    a.name = b;
                    a.color = this.config.hoveredColor;
                    this.delegate.graph.eachNode(function(d) {
                        if (c == d.id) {
                            d.setData("border", a)
                        } else {
                            d.setData("border", false)
                        }
                    });
                    this.delegate.plot()
                }
            },
            getLegend: function() {
                var d = {};
                var c;
                this.delegate.graph.getNode(this.delegate.root).eachAdjacency(function(e) {
                    c = e.nodeTo
                });
                var a = c.getData("colorArray"),
                    b = a.length;
                P.each(c.getData("stringArray"), function(f, e) {
                    d[f] = a[e % b]
                });
                return d
            },
            getMaxValue: function() {
                var a = 0,
                    b = this.config.type.split(":")[0] == "stacked";
                this.delegate.graph.eachNode(function(c) {
                    var e = c.getData("valueArray"),
                        d = 0;
                    if (!e) {
                        return
                    }
                    if (b) {
                        P.each(e, function(f) {
                            d += +f
                        })
                    } else {
                        d = Math.max.apply(null, e)
                    }
                    a = a > d ? a : d
                });
                return a
            },
            setBarType: function(a) {
                this.config.type = a;
                this.delegate.config.Node.type = "barchart-" + a.split(":")[0]
            },
            normalizeDims: function() {
                var l = this.delegate.graph.getNode(this.delegate.root),
                    c = 0;
                l.eachAdjacency(function() {
                    c++
                });
                var a = this.getMaxValue() || 1,
                    h = this.delegate.canvas.getSize(),
                    e = this.config,
                    b = e.Margin,
                    k = b.left + b.right,
                    d = b.top + b.bottom,
                    g = e.orientation == "horizontal",
                    j = (h[g ? "height" : "width"] - (g ? d : k) - (c - 1) * e.barsOffset) / c,
                    f = e.animate,
                    i = h[g ? "width" : "height"] - (g ? k : d) - (!g && e.showAggregates && (e.Label.size + e.labelOffset)) - (e.showLabels && (e.Label.size + e.labelOffset)),
                    m = g ? "height" : "width",
                    n = g ? "width" : "height";
                this.delegate.graph.eachNode(function(q) {
                    var r = 0,
                        p = [];
                    P.each(q.getData("valueArray"), function(s) {
                        r += +s;
                        p.push(0)
                    });
                    q.setData(m, j);
                    if (f) {
                        q.setData(n, r * i / a, "end");
                        q.setData("dimArray", P.map(q.getData("valueArray"), function(s) {
                            return s * i / a
                        }), "end");
                        var o = q.getData("dimArray");
                        if (!o) {
                            q.setData("dimArray", p)
                        }
                    } else {
                        q.setData(n, r * i / a);
                        q.setData("dimArray", P.map(q.getData("valueArray"), function(s) {
                            return s * i / a
                        }))
                    }
                })
            }
        });
        E.PieChart = {
            $extend: true,
            animate: true,
            offset: 25,
            sliceOffset: 0,
            labelOffset: 3,
            type: "stacked",
            hoveredColor: "#9fd4ff",
            Events: {
                enable: false,
                onClick: P.empty
            },
            Tips: {
                enable: false,
                onShow: P.empty,
                onHide: P.empty
            },
            showLabels: true,
            resizeLabels: false,
            updateHeights: false
        };
        L.Radial = new B({
            compute: function(a) {
                var c = P.splat(a || ["current", "start", "end"]);
                M.compute(this.graph, c, this.config);
                this.graph.computeLevels(this.root, 0, "ignore");
                var b = this.createLevelDistanceFunc();
                this.computeAngularWidths(c);
                this.computePositions(c, b)
            },
            computePositions: function(a, d) {
                var i = a;
                var j = this.graph;
                var c = j.getNode(this.root);
                var b = this.parent;
                var h = this.config;
                for (var f = 0, g = i.length; f < g; f++) {
                    var e = i[f];
                    c.setPos(H(0, 0), e);
                    c.setData("span", Math.PI * 2, e)
                }
                c.angleSpan = {
                    begin: 0,
                    end: 2 * Math.PI
                };
                j.eachBFS(this.root, function(u) {
                    var o = u.angleSpan.end - u.angleSpan.begin;
                    var m = u.angleSpan.begin;
                    var n = d(u);
                    var l = 0,
                        X = [],
                        v = {};
                    u.eachSubnode(function(S) {
                        l += S._treeAngularWidth;
                        for (var ab = 0, T = i.length; ab < T; ab++) {
                            var U = i[ab],
                                aa = S.getData("dim", U);
                            v[U] = (U in v) ? (aa > v[U] ? aa : v[U]) : aa
                        }
                        X.push(S)
                    }, "ignore");
                    if (b && b.id == u.id && X.length > 0 && X[0].dist) {
                        X.sort(function(S, T) {
                            return (S.dist >= T.dist) - (S.dist <= T.dist)
                        })
                    }
                    for (var s = 0, q = X.length; s < q; s++) {
                        var V = X[s];
                        if (!V._flag) {
                            var k = V._treeAngularWidth / l * o;
                            var W = m + k / 2;
                            for (var r = 0, t = i.length; r < t; r++) {
                                var p = i[r];
                                V.setPos(H(W, n), p);
                                V.setData("span", k, p);
                                V.setData("dim-quotient", V.getData("dim", p) / v[p], p)
                            }
                            V.angleSpan = {
                                begin: m,
                                end: m + k
                            };
                            m += k
                        }
                    }
                }, "ignore")
            },
            setAngularWidthForNodes: function(a) {
                this.graph.eachBFS(this.root, function(c, b) {
                    var d = c.getData("angularWidth", a[0]) || 5;
                    c._angularWidth = d / b
                }, "ignore")
            },
            setSubtreesAngularWidth: function() {
                var a = this;
                this.graph.eachNode(function(b) {
                    a.setSubtreeAngularWidth(b)
                }, "ignore")
            },
            setSubtreeAngularWidth: function(c) {
                var d = this,
                    a = c._angularWidth,
                    b = 0;
                c.eachSubnode(function(e) {
                    d.setSubtreeAngularWidth(e);
                    b += e._treeAngularWidth
                }, "ignore");
                c._treeAngularWidth = Math.max(a, b)
            },
            computeAngularWidths: function(a) {
                this.setAngularWidthForNodes(a);
                this.setSubtreesAngularWidth()
            }
        });
        $jit.Sunburst = new B({
            Implements: [O, D, L.Radial],
            initialize: function(b) {
                var d = $jit.Sunburst;
                var a = {
                    interpolation: "linear",
                    levelDistance: 100,
                    Node: {
                        type: "multipie",
                        height: 0
                    },
                    Edge: {
                        type: "none"
                    },
                    Label: {
                        textAlign: "start",
                        textBaseline: "middle"
                    }
                };
                this.controller = this.config = P.merge(E("Canvas", "Node", "Edge", "Fx", "Tips", "NodeStyles", "Events", "Navigation", "Controller", "Label"), a, b);
                var c = this.config;
                if (c.useCanvas) {
                    this.canvas = c.useCanvas;
                    this.config.labelContainer = this.canvas.id + "-label"
                } else {
                    if (c.background) {
                        c.background = P.merge({
                            type: "Circles"
                        }, c.background)
                    }
                    this.canvas = new G(this, c);
                    this.config.labelContainer = (typeof c.injectInto == "string" ? c.injectInto : c.injectInto.id) + "-label"
                }
                this.graphOptions = {
                    klass: Q,
                    Node: {
                        selected: false,
                        exist: true,
                        drawn: true
                    }
                };
                this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                this.labels = new d.Label[c.Label.type](this);
                this.fx = new d.Plot(this, d);
                this.op = new d.Op(this);
                this.json = null;
                this.root = null;
                this.rotated = null;
                this.busy = false;
                this.initializeExtras()
            },
            createLevelDistanceFunc: function() {
                var a = this.config.levelDistance;
                return function(b) {
                    return (b._depth + 1) * a
                }
            },
            refresh: function() {
                this.compute();
                this.plot()
            },
            reposition: function() {
                this.compute("end")
            },
            rotate: function(d, c, a) {
                var b = d.getPos(a.property || "current").getp(true).theta;
                this.rotated = d;
                this.rotateAngle(-b, c, a)
            },
            rotateAngle: function(f, e, b) {
                var d = this;
                var c = P.merge(this.config, b || {}, {
                    modes: ["polar"]
                });
                var a = b.property || (e === "animate" ? "end" : "current");
                if (e === "animate") {
                    this.fx.animation.pause()
                }
                this.graph.eachNode(function(g) {
                    var h = g.getPos(a);
                    h.theta += f;
                    if (h.theta < 0) {
                        h.theta += Math.PI * 2
                    }
                });
                if (e == "animate") {
                    this.fx.animate(c)
                } else {
                    if (e == "replot") {
                        this.fx.plot();
                        this.busy = false
                    }
                }
            },
            plot: function() {
                this.fx.plot()
            }
        });
        $jit.Sunburst.$extend = true;
        (function(a) {
            a.Op = new B({
                Implements: N.Op
            });
            a.Plot = new B({
                Implements: N.Plot
            });
            a.Label = {};
            a.Label.Native = new B({
                Implements: N.Label.Native,
                initialize: function(b) {
                    this.viz = b;
                    this.label = b.config.Label;
                    this.config = b.config
                },
                renderLabel: function(c, q, o) {
                    var g = q.getData("span");
                    if (g < Math.PI / 2 && Math.tan(g) * this.config.levelDistance * q._depth < 10) {
                        return
                    }
                    var f = c.getCtx();
                    var e = f.measureText(q.name);
                    if (q.id == this.viz.root) {
                        var h = -e.width / 2,
                            k = 0,
                            j = 0;
                        var i = 0
                    } else {
                        var b = 5;
                        var i = o.levelDistance - b;
                        var l = q.pos.clone();
                        l.rho += b;
                        var d = l.getp(true);
                        var n = l.getc(true);
                        var h = n.x,
                            k = n.y;
                        var p = Math.PI;
                        var m = (d.theta > p / 2 && d.theta < 3 * p / 2);
                        var j = m ? d.theta + p : d.theta;
                        if (m) {
                            h -= Math.abs(Math.cos(d.theta) * e.width);
                            k += Math.sin(d.theta) * e.width
                        } else {
                            if (q.id == this.viz.root) {
                                h -= e.width / 2
                            }
                        }
                    }
                    f.save();
                    f.translate(h, k);
                    f.rotate(j);
                    f.fillText(q.name, 0, 0);
                    f.restore()
                }
            });
            a.Label.SVG = new B({
                Implements: N.Label.SVG,
                initialize: function(b) {
                    this.viz = b
                },
                placeLabel: function(f, c, p) {
                    var k = c.pos.getc(true),
                        g = this.viz,
                        e = this.viz.canvas;
                    var o = e.getSize();
                    var d = {
                        x: Math.round(k.x + o.width / 2),
                        y: Math.round(k.y + o.height / 2)
                    };
                    f.setAttribute("x", d.x);
                    f.setAttribute("y", d.y);
                    var n = f.getBBox();
                    if (n) {
                        var i = f.getAttribute("x");
                        var l = f.getAttribute("y");
                        var h = c.pos.getp(true);
                        var b = Math.PI;
                        var m = (h.theta > b / 2 && h.theta < 3 * b / 2);
                        if (m) {
                            f.setAttribute("x", i - n.width);
                            f.setAttribute("y", l - n.height)
                        } else {
                            if (c.id == g.root) {
                                f.setAttribute("x", i - n.width / 2)
                            }
                        }
                        var j = m ? h.theta + b : h.theta;
                        if (c._depth) {
                            f.setAttribute("transform", "rotate(" + j * 360 / (2 * b) + " " + i + " " + l + ")")
                        }
                    }
                    p.onPlaceLabel(f, c)
                }
            });
            a.Label.HTML = new B({
                Implements: N.Label.HTML,
                initialize: function(b) {
                    this.viz = b
                },
                placeLabel: function(i, e, c) {
                    var k = e.pos.clone(),
                        g = this.viz.canvas,
                        j = e.getData("height"),
                        d = ((j || e._depth == 0) ? j : this.viz.config.levelDistance) / 2,
                        b = g.getSize();
                    k.rho += d;
                    k = k.getc(true);
                    var f = {
                        x: Math.round(k.x + b.width / 2),
                        y: Math.round(k.y + b.height / 2)
                    };
                    var h = i.style;
                    h.left = f.x + "px";
                    h.top = f.y + "px";
                    h.display = this.fitsInCanvas(f, g) ? "" : "none";
                    c.onPlaceLabel(i, e)
                }
            });
            a.Plot.NodeTypes = new B({
                none: {
                    render: P.empty,
                    contains: P.lambda(false),
                    anglecontains: function(h, d) {
                        var c = h.getData("span") / 2,
                            g = h.pos.theta;
                        var f = g - c,
                            b = g + c;
                        if (f < 0) {
                            f += Math.PI * 2
                        }
                        var e = Math.atan2(d.y, d.x);
                        if (e < 0) {
                            e += Math.PI * 2
                        }
                        if (f > b) {
                            return (e > f && e <= Math.PI * 2) || e < b
                        } else {
                            return e > f && e < b
                        }
                    }
                },
                pie: {
                    render: function(c, e) {
                        var j = c.getData("span") / 2,
                            f = c.pos.theta;
                        var d = f - j,
                            b = f + j;
                        var k = c.pos.getp(true);
                        var h = new Q(k.rho, d);
                        var g = h.getc(true);
                        h.theta = b;
                        var l = h.getc(true);
                        var i = e.getCtx();
                        i.beginPath();
                        i.moveTo(0, 0);
                        i.lineTo(g.x, g.y);
                        i.moveTo(0, 0);
                        i.lineTo(l.x, l.y);
                        i.moveTo(0, 0);
                        i.arc(0, 0, k.rho * c.getData("dim-quotient"), d, b, false);
                        i.fill()
                    },
                    contains: function(d, f) {
                        if (this.nodeTypes.none.anglecontains.call(this, d, f)) {
                            var c = Math.sqrt(f.x * f.x + f.y * f.y);
                            var e = this.config.levelDistance,
                                b = d._depth;
                            return (c <= e * b)
                        }
                        return false
                    }
                },
                multipie: {
                    render: function(b, d) {
                        var i = b.getData("height");
                        var p = i ? i : this.config.levelDistance;
                        var k = b.getData("span") / 2,
                            e = b.pos.theta;
                        var c = e - k,
                            n = e + k;
                        var l = b.pos.getp(true);
                        var h = new Q(l.rho, c);
                        var g = h.getc(true);
                        h.theta = n;
                        var m = h.getc(true);
                        h.rho += p;
                        var j = h.getc(true);
                        h.theta = c;
                        var o = h.getc(true);
                        var f = d.getCtx();
                        f.moveTo(0, 0);
                        f.beginPath();
                        f.arc(0, 0, l.rho, c, n, false);
                        f.arc(0, 0, l.rho + p, n, c, true);
                        f.moveTo(g.x, g.y);
                        f.lineTo(o.x, o.y);
                        f.moveTo(m.x, m.y);
                        f.lineTo(j.x, j.y);
                        f.fill();
                        if (b.collapsed) {
                            f.save();
                            f.lineWidth = 2;
                            f.moveTo(0, 0);
                            f.beginPath();
                            f.arc(0, 0, l.rho + p + 5, n - 0.01, c + 0.01, true);
                            f.stroke();
                            f.restore()
                        }
                    },
                    contains: function(c, d) {
                        if (this.nodeTypes.none.anglecontains.call(this, c, d)) {
                            var h = Math.sqrt(d.x * d.x + d.y * d.y);
                            var b = c.getData("height");
                            var g = b ? b : this.config.levelDistance;
                            var f = this.config.levelDistance,
                                e = c._depth;
                            return (h >= f * e) && (h <= (f * e + g))
                        }
                        return false
                    }
                },
                "gradient-multipie": {
                    render: function(e, h) {
                        var i = h.getCtx();
                        var j = e.getData("height");
                        var d = j ? j : this.config.levelDistance;
                        var g = i.createRadialGradient(0, 0, e.getPos().rho, 0, 0, e.getPos().rho + d);
                        var b = P.hexToRgb(e.getData("color")),
                            c = [];
                        P.each(b, function(k) {
                            c.push(parseInt(k * 0.5, 10))
                        });
                        var f = P.rgbToHex(c);
                        g.addColorStop(0, f);
                        g.addColorStop(1, e.getData("color"));
                        i.fillStyle = g;
                        this.nodeTypes.multipie.render.call(this, e, h)
                    },
                    contains: function(b, c) {
                        return this.nodeTypes.multipie.contains.call(this, b, c)
                    }
                },
                "gradient-pie": {
                    render: function(f, e) {
                        var c = e.getCtx();
                        var d = c.createRadialGradient(0, 0, 0, 0, 0, f.getPos().rho);
                        var h = P.hexToRgb(f.getData("color")),
                            g = [];
                        P.each(h, function(i) {
                            g.push(parseInt(i * 0.5, 10))
                        });
                        var b = P.rgbToHex(g);
                        d.addColorStop(1, b);
                        d.addColorStop(0, f.getData("color"));
                        c.fillStyle = d;
                        this.nodeTypes.pie.render.call(this, f, e)
                    },
                    contains: function(b, c) {
                        return this.nodeTypes.pie.contains.call(this, b, c)
                    }
                }
            });
            a.Plot.EdgeTypes = new B({
                none: P.empty,
                line: {
                    render: function(c, e) {
                        var b = c.nodeFrom.pos.getc(true),
                            d = c.nodeTo.pos.getc(true);
                        this.edgeHelper.line.render(b, d, e)
                    },
                    contains: function(c, b) {
                        var d = c.nodeFrom.pos.getc(true),
                            e = c.nodeTo.pos.getc(true);
                        return this.edgeHelper.line.contains(d, e, b, this.edge.epsilon)
                    }
                },
                arrow: {
                    render: function(h, f) {
                        var d = h.nodeFrom.pos.getc(true),
                            e = h.nodeTo.pos.getc(true),
                            g = h.getData("dim"),
                            c = h.data.$direction,
                            b = (c && c.length > 1 && c[0] != h.nodeFrom.id);
                        this.edgeHelper.arrow.render(d, e, g, b, f)
                    },
                    contains: function(c, b) {
                        var d = c.nodeFrom.pos.getc(true),
                            e = c.nodeTo.pos.getc(true);
                        return this.edgeHelper.arrow.contains(d, e, b, this.edge.epsilon)
                    }
                },
                hyperline: {
                    render: function(c, f) {
                        var e = c.nodeFrom.pos.getc(),
                            b = c.nodeTo.pos.getc(),
                            d = Math.max(e.norm(), b.norm());
                        this.edgeHelper.hyperline.render(e.$scale(1 / d), b.$scale(1 / d), d, f)
                    },
                    contains: P.lambda(false)
                }
            })
        })($jit.Sunburst);
        $jit.Sunburst.Plot.NodeTypes.implement({
            "piechart-stacked": {
                render: function(f, aw) {
                    var g = f.pos.getp(true),
                        ar = f.getData("dimArray"),
                        h = f.getData("valueArray"),
                        aj = f.getData("colorArray"),
                        ay = aj.length,
                        n = f.getData("stringArray"),
                        k = f.getData("span") / 2,
                        p = f.pos.theta,
                        al = p - k,
                        r = p + k,
                        i = new Q;
                    var m = aw.getCtx(),
                        o = {},
                        t = f.getData("gradient"),
                        ap = f.getData("border"),
                        a = f.getData("config"),
                        v = a.showLabels,
                        b = a.resizeLabels,
                        av = a.Label;
                    var ao = a.sliceOffset * Math.cos((al + r) / 2);
                    var an = a.sliceOffset * Math.sin((al + r) / 2);
                    if (aj && ar && n) {
                        for (var am = 0, at = ar.length, aB = 0, c = 0; am < at; am++) {
                            var au = ar[am],
                                ak = aj[am % ay];
                            if (au <= 0) {
                                continue
                            }
                            m.fillStyle = m.strokeStyle = ak;
                            if (t && au) {
                                var aq = m.createRadialGradient(ao, an, aB + a.sliceOffset, ao, an, aB + au + a.sliceOffset);
                                var aA = P.hexToRgb(ak),
                                    d = P.map(aA, function(S) {
                                        return (S * 0.8) >> 0
                                    }),
                                    az = P.rgbToHex(d);
                                aq.addColorStop(0, ak);
                                aq.addColorStop(0.5, ak);
                                aq.addColorStop(1, az);
                                m.fillStyle = aq
                            }
                            i.rho = aB + a.sliceOffset;
                            i.theta = al;
                            var ai = i.getc(true);
                            i.theta = r;
                            var l = i.getc(true);
                            i.rho += au;
                            var s = i.getc(true);
                            i.theta = al;
                            var j = i.getc(true);
                            m.beginPath();
                            m.arc(ao, an, aB + 0.01, al, r, false);
                            m.arc(ao, an, aB + au + 0.01, r, al, true);
                            m.fill();
                            if (ap && ap.name == n[am]) {
                                o.acum = aB;
                                o.dimValue = ar[am];
                                o.begin = al;
                                o.end = r
                            }
                            aB += (au || 0);
                            c += (h[am] || 0)
                        }
                        if (ap) {
                            m.save();
                            m.globalCompositeOperation = "source-over";
                            m.lineWidth = 2;
                            m.strokeStyle = ap.color;
                            var ax = al < r ? 1 : -1;
                            m.beginPath();
                            m.arc(ao, an, o.acum + 0.01 + 1, o.begin, o.end, false);
                            m.arc(ao, an, o.acum + o.dimValue + 0.01 - 1, o.end, o.begin, true);
                            m.closePath();
                            m.stroke();
                            m.restore()
                        }
                        if (v && av.type == "Native") {
                            m.save();
                            m.fillStyle = m.strokeStyle = av.color;
                            var e = b ? f.getData("normalizedDim") : 1,
                                u = (av.size * e) >> 0;
                            u = u < +b ? +b : u;
                            m.font = av.style + " " + u + "px " + av.family;
                            m.textBaseline = "middle";
                            m.textAlign = "center";
                            i.rho = aB + a.labelOffset + a.sliceOffset;
                            i.theta = f.pos.theta;
                            var q = i.getc(true);
                            m.fillText(f.name, q.x, q.y);
                            m.restore()
                        }
                    }
                },
                contains: function(e, a) {
                    if (this.nodeTypes.none.anglecontains.call(this, e, a)) {
                        var j = Math.sqrt(a.x * a.x + a.y * a.y);
                        var h = this.config.levelDistance,
                            b = e._depth;
                        var g = e.getData("config");
                        if (j <= h * b + g.sliceOffset) {
                            var i = e.getData("dimArray");
                            for (var c = 0, d = i.length, k = g.sliceOffset; c < d; c++) {
                                var f = i[c];
                                if (j >= k && j <= k + f) {
                                    return {
                                        name: e.getData("stringArray")[c],
                                        color: e.getData("colorArray")[c],
                                        value: e.getData("valueArray")[c],
                                        label: e.name
                                    }
                                }
                                k += f
                            }
                        }
                        return false
                    }
                    return false
                }
            }
        });
        $jit.PieChart = new B({
            sb: null,
            colors: ["#416D9C", "#70A35E", "#EBB056", "#C74243", "#83548B", "#909291", "#557EAA"],
            selected: {},
            busy: false,
            initialize: function(a) {
                this.controller = this.config = P.merge(E("Canvas", "PieChart", "Label"), {
                    Label: {
                        type: "Native"
                    }
                }, a);
                this.initializeViz()
            },
            initializeViz: function() {
                var b = this.config,
                    f = this;
                var c = b.type.split(":")[0];
                var a = new $jit.Sunburst({
                    injectInto: b.injectInto,
                    width: b.width,
                    height: b.height,
                    useCanvas: b.useCanvas,
                    withLabels: b.Label.type != "Native",
                    Label: {
                        type: b.Label.type
                    },
                    Node: {
                        overridable: true,
                        type: "piechart-" + c,
                        width: 1,
                        height: 1
                    },
                    Edge: {
                        type: "none"
                    },
                    Tips: {
                        enable: b.Tips.enable,
                        type: "Native",
                        force: true,
                        onShow: function(g, h, j) {
                            var i = j;
                            b.Tips.onShow(g, i, h)
                        }
                    },
                    Events: {
                        enable: true,
                        type: "Native",
                        onClick: function(h, g, j) {
                            if (!b.Events.enable) {
                                return
                            }
                            var i = g.getContains();
                            b.Events.onClick(i, g, j)
                        },
                        onMouseMove: function(h, g, j) {
                            if (!b.hoveredColor) {
                                return
                            }
                            if (h) {
                                var i = g.getContains();
                                f.select(h.id, i.name, i.index)
                            } else {
                                f.select(false, false, false)
                            }
                        }
                    },
                    onCreateLabel: function(g, h) {
                        var j = b.Label;
                        if (b.showLabels) {
                            var i = g.style;
                            i.fontSize = j.size + "px";
                            i.fontFamily = j.family;
                            i.color = j.color;
                            i.textAlign = "center";
                            g.innerHTML = h.name
                        }
                    },
                    onPlaceLabel: function(i, o) {
                        if (!b.showLabels) {
                            return
                        }
                        var u = o.pos.getp(true),
                            r = o.getData("dimArray"),
                            l = o.getData("span") / 2,
                            t = o.pos.theta,
                            j = t - l,
                            W = t + l,
                            g = new Q;
                        var p = b.showLabels,
                            v = b.resizeLabels,
                            s = b.Label;
                        if (r) {
                            for (var k = 0, n = r.length, m = 0; k < n; k++) {
                                m += r[k]
                            }
                            var h = v ? o.getData("normalizedDim") : 1,
                                X = (s.size * h) >> 0;
                            X = X < +v ? +v : X;
                            i.style.fontSize = X + "px";
                            g.rho = m + b.labelOffset + b.sliceOffset;
                            g.theta = (j + W) / 2;
                            var u = g.getc(true);
                            var V = f.canvas.getSize();
                            var q = {
                                x: Math.round(u.x + V.width / 2),
                                y: Math.round(u.y + V.height / 2)
                            };
                            i.style.left = q.x + "px";
                            i.style.top = q.y + "px"
                        }
                    }
                });
                var d = a.canvas.getSize(),
                    e = Math.min;
                a.config.levelDistance = e(d.width, d.height) / 2 - b.offset - b.sliceOffset;
                this.delegate = a;
                this.canvas = this.delegate.canvas;
                this.canvas.getCtx().globalCompositeOperation = "lighter"
            },
            loadJSON: function(d) {
                var j = P.time(),
                    q = [],
                    f = this.delegate,
                    a = P.splat(d.label),
                    o = a.length,
                    l = P.splat(d.color || this.colors),
                    g = l.length,
                    c = this.config,
                    k = !!c.type.split(":")[1],
                    e = c.animate,
                    m = o == 1;
                for (var h = 0, i = d.values, n = i.length; h < n; h++) {
                    var b = i[h];
                    var r = P.splat(b.values);
                    q.push({
                        id: j + b.label,
                        name: b.label,
                        data: {
                            value: r,
                            "$valueArray": r,
                            "$colorArray": m ? P.splat(l[h % g]) : l,
                            "$stringArray": a,
                            "$gradient": k,
                            "$config": c,
                            "$angularWidth": P.reduce(r, function(t, s) {
                                return t + s
                            })
                        },
                        children: []
                    })
                }
                var p = {
                    id: j + "$root",
                    name: "",
                    data: {
                        "$type": "none",
                        "$width": 1,
                        "$height": 1
                    },
                    children: q
                };
                f.loadJSON(p);
                this.normalizeDims();
                f.refresh();
                if (e) {
                    f.fx.animate({
                        modes: ["node-property:dimArray"],
                        duration: 1500
                    })
                }
            },
            updateJSON: function(g, e) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                var d = this.delegate;
                var f = d.graph;
                var b = g.values;
                var c = this.config.animate;
                var a = this;
                P.each(b, function(j) {
                    var h = f.getByName(j.label),
                        i = P.splat(j.values);
                    if (h) {
                        h.setData("valueArray", i);
                        h.setData("angularWidth", P.reduce(i, function(l, k) {
                            return l + k
                        }));
                        if (g.label) {
                            h.setData("stringArray", P.splat(g.label))
                        }
                    }
                });
                this.normalizeDims();
                if (c) {
                    d.compute("end");
                    d.fx.animate({
                        modes: ["node-property:dimArray:span", "linear"],
                        duration: 1500,
                        onComplete: function() {
                            a.busy = false;
                            e && e.onComplete()
                        }
                    })
                } else {
                    d.refresh()
                }
            },
            select: function(c, b) {
                if (!this.config.hoveredColor) {
                    return
                }
                var a = this.selected;
                if (a.id != c || a.name != b) {
                    a.id = c;
                    a.name = b;
                    a.color = this.config.hoveredColor;
                    this.delegate.graph.eachNode(function(d) {
                        if (c == d.id) {
                            d.setData("border", a)
                        } else {
                            d.setData("border", false)
                        }
                    });
                    this.delegate.plot()
                }
            },
            getLegend: function() {
                var d = {};
                var c;
                this.delegate.graph.getNode(this.delegate.root).eachAdjacency(function(e) {
                    c = e.nodeTo
                });
                var a = c.getData("colorArray"),
                    b = a.length;
                P.each(c.getData("stringArray"), function(f, e) {
                    d[f] = a[e % b]
                });
                return d
            },
            getMaxValue: function() {
                var a = 0;
                this.delegate.graph.eachNode(function(c) {
                    var b = c.getData("valueArray"),
                        d = 0;
                    P.each(b, function(e) {
                        d += +e
                    });
                    a = a > d ? a : d
                });
                return a
            },
            normalizeDims: function() {
                var b = this.delegate.graph.getNode(this.delegate.root),
                    c = 0;
                b.eachAdjacency(function() {
                    c++
                });
                var f = this.getMaxValue() || 1,
                    a = this.config,
                    e = a.animate,
                    d = this.delegate.config.levelDistance;
                this.delegate.graph.eachNode(function(g) {
                    var h = 0,
                        k = [];
                    P.each(g.getData("valueArray"), function(l) {
                        h += +l;
                        k.push(1)
                    });
                    var i = (k.length == 1) && !a.updateHeights;
                    if (e) {
                        g.setData("dimArray", P.map(g.getData("valueArray"), function(l) {
                            return i ? d : (l * d / f)
                        }), "end");
                        var j = g.getData("dimArray");
                        if (!j) {
                            g.setData("dimArray", k)
                        }
                    } else {
                        g.setData("dimArray", P.map(g.getData("valueArray"), function(l) {
                            return i ? d : (l * d / f)
                        }))
                    }
                    g.setData("normalizedDim", h / f)
                })
            }
        });
        L.TM = {};
        L.TM.SliceAndDice = new B({
            compute: function(f) {
                var b = this.graph.getNode(this.clickedNode && this.clickedNode.id || this.root);
                this.controller.onBeforeCompute(b);
                var d = this.canvas.getSize(),
                    e = this.config,
                    a = d.width,
                    c = d.height;
                this.graph.computeLevels(this.root, 0, "ignore");
                b.getPos(f).setc(-a / 2, -c / 2);
                b.setData("width", a, f);
                b.setData("height", c + e.titleHeight, f);
                this.computePositions(b, b, this.layout.orientation, f);
                this.controller.onAfterCompute(b)
            },
            computePositions: function(p, r, b, j) {
                var e = 0;
                p.eachSubnode(function(v) {
                    e += v.getData("area", j)
                });
                var a = this.config,
                    d = a.offset,
                    i = p.getData("width", j),
                    n = Math.max(p.getData("height", j) - a.titleHeight, 0),
                    l = p == r ? 1 : (r.getData("area", j) / e);
                var k, o, f, t, u, q, s;
                var c = (b == "h");
                if (c) {
                    b = "v";
                    k = n;
                    o = i * l;
                    f = "height";
                    t = "y";
                    u = "x";
                    q = a.titleHeight;
                    s = 0
                } else {
                    b = "h";
                    k = n * l;
                    o = i;
                    f = "width";
                    t = "x";
                    u = "y";
                    q = 0;
                    s = a.titleHeight
                }
                var m = r.getPos(j);
                r.setData("width", o, j);
                r.setData("height", k, j);
                var h = 0,
                    g = this;
                r.eachSubnode(function(v) {
                    var T = v.getPos(j);
                    T[t] = h + m[t] + q;
                    T[u] = m[u] + s;
                    g.computePositions(r, v, b, j);
                    h += v.getData(f, j)
                })
            }
        });
        L.TM.Area = {
            compute: function(h) {
                h = h || "current";
                var b = this.graph.getNode(this.clickedNode && this.clickedNode.id || this.root);
                this.controller.onBeforeCompute(b);
                var f = this.config,
                    i = this.canvas.getSize(),
                    g = i.width,
                    j = i.height,
                    a = f.offset,
                    e = g - a,
                    c = j - a;
                this.graph.computeLevels(this.root, 0, "ignore");
                b.getPos(h).setc(-g / 2, -j / 2);
                b.setData("width", g, h);
                b.setData("height", j, h);
                var d = {
                    top: -j / 2 + f.titleHeight,
                    left: -g / 2,
                    width: e,
                    height: c - f.titleHeight
                };
                this.computePositions(b, d, h);
                this.controller.onAfterCompute(b)
            },
            computeDim: function(c, b, i, d, e, g) {
                if (c.length + b.length == 1) {
                    var f = (c.length == 1) ? c : b;
                    this.layoutLast(f, i, d, g);
                    return
                }
                if (c.length >= 2 && b.length == 0) {
                    b = [c.shift()]
                }
                if (c.length == 0) {
                    if (b.length > 0) {
                        this.layoutRow(b, i, d, g)
                    }
                    return
                }
                var a = c[0];
                if (e(b, i) >= e([a].concat(b), i)) {
                    this.computeDim(c.slice(1), b.concat([a]), i, d, e, g)
                } else {
                    var h = this.layoutRow(b, i, d, g);
                    this.computeDim(c, [], h.dim, h, e, g)
                }
            },
            worstAspectRatio: function(g, i) {
                if (!g || g.length == 0) {
                    return Number.MAX_VALUE
                }
                var f = 0,
                    h = 0,
                    c = Number.MAX_VALUE;
                for (var a = 0, b = g.length; a < b; a++) {
                    var e = g[a]._area;
                    f += e;
                    c = c < e ? c : e;
                    h = h > e ? h : e
                }
                var j = i * i,
                    d = f * f;
                return Math.max(j * h / d, d / (j * c))
            },
            avgAspectRatio: function(g, f) {
                if (!g || g.length == 0) {
                    return Number.MAX_VALUE
                }
                var c = 0;
                for (var e = 0, b = g.length; e < b; e++) {
                    var d = g[e]._area;
                    var a = d / f;
                    c += f > a ? f / a : a / f
                }
                return c / b
            },
            layoutLast: function(e, b, d, a) {
                var c = e[0];
                c.getPos(a).setc(d.left, d.top);
                c.setData("width", d.width, a);
                c.setData("height", d.height, a)
            }
        };
        L.TM.Squarified = new B({
            Implements: L.TM.Area,
            computePositions: function(d, a, g) {
                var e = this.config,
                    l = Math.max;
                if (a.width >= a.height) {
                    this.layout.orientation = "h"
                } else {
                    this.layout.orientation = "v"
                }
                var i = d.getSubnodes([1, 1], "ignore");
                if (i.length > 0) {
                    this.processChildrenLayout(d, i, a, g);
                    for (var b = 0, c = i.length; b < c; b++) {
                        var k = i[b],
                            j = e.offset,
                            h = l(k.getData("height", g) - j - e.titleHeight, 0),
                            f = l(k.getData("width", g) - j, 0),
                            m = k.getPos(g);
                        a = {
                            width: f,
                            height: h,
                            top: m.y + e.titleHeight,
                            left: m.x
                        };
                        this.computePositions(k, a, g)
                    }
                }
            },
            processChildrenLayout: function(j, h, b, g) {
                var d = b.width * b.height;
                var c, f = h.length,
                    a = 0,
                    i = [];
                for (c = 0; c < f; c++) {
                    i[c] = parseFloat(h[c].getData("area", g));
                    a += i[c]
                }
                for (c = 0; c < f; c++) {
                    h[c]._area = d * i[c] / a
                }
                var e = this.layout.horizontal() ? b.height : b.width;
                h.sort(function(n, o) {
                    var m = o._area - n._area;
                    return m ? m : (o.id == n.id ? 0 : (o.id < n.id ? 1 : -1))
                });
                var k = [h[0]];
                var l = h.slice(1);
                this.squarify(l, k, e, b, g)
            },
            squarify: function(e, d, b, a, c) {
                this.computeDim(e, d, b, a, this.worstAspectRatio, c)
            },
            layoutRow: function(d, b, a, c) {
                if (this.layout.horizontal()) {
                    return this.layoutV(d, b, a, c)
                } else {
                    return this.layoutH(d, b, a, c)
                }
            },
            layoutV: function(h, i, m, f) {
                var g = 0,
                    d = function(n) {
                        return n
                    };
                P.each(h, function(n) {
                    g += n._area
                });
                var e = d(g / i),
                    l = 0;
                for (var b = 0, c = h.length; b < c; b++) {
                    var a = d(h[b]._area / e);
                    var k = h[b];
                    k.getPos(f).setc(m.left, m.top + l);
                    k.setData("width", e, f);
                    k.setData("height", a, f);
                    l += a
                }
                var j = {
                    height: m.height,
                    width: m.width - e,
                    top: m.top,
                    left: m.left + e
                };
                j.dim = Math.min(j.width, j.height);
                if (j.dim != j.height) {
                    this.layout.change()
                }
                return j
            },
            layoutH: function(g, j, b, f) {
                var h = 0;
                P.each(g, function(m) {
                    h += m._area
                });
                var i = h / j,
                    a = b.top,
                    e = 0;
                for (var c = 0, d = g.length; c < d; c++) {
                    var l = g[c];
                    var j = l._area / i;
                    l.getPos(f).setc(b.left + e, a);
                    l.setData("width", j, f);
                    l.setData("height", i, f);
                    e += j
                }
                var k = {
                    height: b.height - i,
                    width: b.width,
                    top: b.top + i,
                    left: b.left
                };
                k.dim = Math.min(k.width, k.height);
                if (k.dim != k.width) {
                    this.layout.change()
                }
                return k
            }
        });
        L.TM.Strip = new B({
            Implements: L.TM.Area,
            computePositions: function(d, a, g) {
                var i = d.getSubnodes([1, 1], "ignore"),
                    e = this.config,
                    l = Math.max;
                if (i.length > 0) {
                    this.processChildrenLayout(d, i, a, g);
                    for (var b = 0, c = i.length; b < c; b++) {
                        var k = i[b];
                        var j = e.offset,
                            h = l(k.getData("height", g) - j - e.titleHeight, 0),
                            f = l(k.getData("width", g) - j, 0);
                        var m = k.getPos(g);
                        a = {
                            width: f,
                            height: h,
                            top: m.y + e.titleHeight,
                            left: m.x
                        };
                        this.computePositions(k, a, g)
                    }
                }
            },
            processChildrenLayout: function(j, h, c, g) {
                var e = c.width * c.height;
                var d, f = h.length,
                    b = 0,
                    i = [];
                for (d = 0; d < f; d++) {
                    i[d] = +h[d].getData("area", g);
                    b += i[d]
                }
                for (d = 0; d < f; d++) {
                    h[d]._area = e * i[d] / b
                }
                var k = this.layout.horizontal() ? c.width : c.height;
                var l = [h[0]];
                var a = h.slice(1);
                this.stripify(a, l, k, c, g)
            },
            stripify: function(e, d, b, a, c) {
                this.computeDim(e, d, b, a, this.avgAspectRatio, c)
            },
            layoutRow: function(d, b, a, c) {
                if (this.layout.horizontal()) {
                    return this.layoutH(d, b, a, c)
                } else {
                    return this.layoutV(d, b, a, c)
                }
            },
            layoutV: function(g, i, a, f) {
                var h = 0;
                P.each(g, function(l) {
                    h += l._area
                });
                var e = h / i,
                    k = 0;
                for (var c = 0, d = g.length; c < d; c++) {
                    var j = g[c];
                    var b = j._area / e;
                    j.getPos(f).setc(a.left, a.top + (i - b - k));
                    j.setData("width", e, f);
                    j.setData("height", b, f);
                    k += b
                }
                return {
                    height: a.height,
                    width: a.width - e,
                    top: a.top,
                    left: a.left + e,
                    dim: i
                }
            },
            layoutH: function(g, k, b, f) {
                var i = 0;
                P.each(g, function(m) {
                    i += m._area
                });
                var j = i / k,
                    a = b.height - j,
                    e = 0;
                for (var c = 0, d = g.length; c < d; c++) {
                    var l = g[c];
                    var h = l._area / j;
                    l.getPos(f).setc(b.left + e, b.top + a);
                    l.setData("width", h, f);
                    l.setData("height", j, f);
                    e += h
                }
                return {
                    height: b.height - j,
                    width: b.width,
                    top: b.top,
                    left: b.left,
                    dim: k
                }
            }
        });
        L.Icicle = new B({
            compute: function(l) {
                l = l || "current";
                var a = this.graph.getNode(this.root),
                    e = this.config,
                    i = this.canvas.getSize(),
                    h = i.width,
                    j = i.height,
                    d = e.offset,
                    b = e.constrained ? e.levelsToShow : Number.MAX_VALUE;
                this.controller.onBeforeCompute(a);
                N.Util.computeLevels(this.graph, a.id, 0, "ignore");
                var k = 0;
                N.Util.eachLevel(a, 0, false, function(m, n) {
                    if (n > k) {
                        k = n
                    }
                });
                var f = this.graph.getNode(this.clickedNode && this.clickedNode.id || a.id);
                var g = Math.min(k, b - 1);
                var c = f._depth;
                if (this.layout.horizontal()) {
                    this.computeSubtree(f, -h / 2, -j / 2, h / (g + 1), j, c, g, l)
                } else {
                    this.computeSubtree(f, -h / 2, -j / 2, h, j / (g + 1), c, g, l)
                }
            },
            computeSubtree: function(l, i, m, j, f, n, d, k) {
                l.getPos(k).setc(i, m);
                l.setData("width", j, k);
                l.setData("height", f, k);
                var b, g = 0,
                    h = 0;
                var e = N.Util.getSubnodes(l, [1, 1], "ignore");
                if (!e.length) {
                    return
                }
                P.each(e, function(o) {
                    h += o.getData("dim")
                });
                for (var a = 0, c = e.length; a < c; a++) {
                    if (this.layout.horizontal()) {
                        b = f * e[a].getData("dim") / h;
                        this.computeSubtree(e[a], i + j, m, j, b, n, d, k);
                        m += b
                    } else {
                        b = j * e[a].getData("dim") / h;
                        this.computeSubtree(e[a], i, m + f, b, f, n, d, k);
                        i += b
                    }
                }
            }
        });
        $jit.Icicle = new B({
            Implements: [O, D, L.Icicle],
            layout: {
                orientation: "h",
                vertical: function() {
                    return this.orientation == "v"
                },
                horizontal: function() {
                    return this.orientation == "h"
                },
                change: function() {
                    this.orientation = this.vertical() ? "h" : "v"
                }
            },
            initialize: function(b) {
                var a = {
                    animate: false,
                    orientation: "h",
                    offset: 2,
                    levelsToShow: Number.MAX_VALUE,
                    constrained: false,
                    Node: {
                        type: "rectangle",
                        overridable: true
                    },
                    Edge: {
                        type: "none"
                    },
                    Label: {
                        type: "Native"
                    },
                    duration: 700,
                    fps: 45
                };
                var c = E("Canvas", "Node", "Edge", "Fx", "Tips", "NodeStyles", "Events", "Navigation", "Controller", "Label");
                this.controller = this.config = P.merge(c, a, b);
                this.layout.orientation = this.config.orientation;
                var d = this.config;
                if (d.useCanvas) {
                    this.canvas = d.useCanvas;
                    this.config.labelContainer = this.canvas.id + "-label"
                } else {
                    this.canvas = new G(this, d);
                    this.config.labelContainer = (typeof d.injectInto == "string" ? d.injectInto : d.injectInto.id) + "-label"
                }
                this.graphOptions = {
                    klass: C,
                    Node: {
                        selected: false,
                        exist: true,
                        drawn: true
                    }
                };
                this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge, this.config.Label);
                this.labels = new $jit.Icicle.Label[this.config.Label.type](this);
                this.fx = new $jit.Icicle.Plot(this, $jit.Icicle);
                this.op = new $jit.Icicle.Op(this);
                this.group = new $jit.Icicle.Group(this);
                this.clickedNode = null;
                this.initializeExtras()
            },
            refresh: function() {
                var b = this.config.Label.type;
                if (b != "Native") {
                    var a = this;
                    this.graph.eachNode(function(c) {
                        a.labels.hideLabel(c, false)
                    })
                }
                this.compute();
                this.plot()
            },
            plot: function() {
                this.fx.plot(this.config)
            },
            enter: function(d) {
                if (this.busy) {
                    return
                }
                this.busy = true;
                var a = this,
                    b = this.config;
                var c = {
                    onComplete: function() {
                        if (b.request) {
                            a.compute()
                        }
                        if (b.animate) {
                            a.graph.nodeList.setDataset(["current", "end"], {
                                alpha: [1, 0]
                            });
                            N.Util.eachSubgraph(d, function(e) {
                                e.setData("alpha", 1, "end")
                            }, "ignore");
                            a.fx.animate({
                                duration: 500,
                                modes: ["node-property:alpha"],
                                onComplete: function() {
                                    a.clickedNode = d;
                                    a.compute("end");
                                    a.fx.animate({
                                        modes: ["linear", "node-property:width:height"],
                                        duration: 1000,
                                        onComplete: function() {
                                            a.busy = false;
                                            a.clickedNode = d
                                        }
                                    })
                                }
                            })
                        } else {
                            a.clickedNode = d;
                            a.busy = false;
                            a.refresh()
                        }
                    }
                };
                if (b.request) {
                    this.requestNodes(clickedNode, c)
                } else {
                    c.onComplete()
                }
            },
            out: function() {
                if (this.busy) {
                    return
                }
                var h = this,
                    b = N.Util,
                    g = this.config,
                    d = this.graph,
                    a = b.getParents(d.getNode(this.clickedNode && this.clickedNode.id || this.root)),
                    f = a[0],
                    c = f,
                    e = this.clickedNode;
                this.busy = true;
                this.events.hoveredNode = false;
                if (!f) {
                    this.busy = false;
                    return
                }
                callback = {
                    onComplete: function() {
                        h.clickedNode = f;
                        if (g.request) {
                            h.requestNodes(f, {
                                onComplete: function() {
                                    h.compute();
                                    h.plot();
                                    h.busy = false
                                }
                            })
                        } else {
                            h.compute();
                            h.plot();
                            h.busy = false
                        }
                    }
                };
                if (g.animate) {
                    this.clickedNode = c;
                    this.compute("end");
                    this.clickedNode = e;
                    this.fx.animate({
                        modes: ["linear", "node-property:width:height"],
                        duration: 1000,
                        onComplete: function() {
                            h.clickedNode = c;
                            d.nodeList.setDataset(["current", "end"], {
                                alpha: [0, 1]
                            });
                            b.eachSubgraph(e, function(i) {
                                i.setData("alpha", 1)
                            }, "ignore");
                            h.fx.animate({
                                duration: 500,
                                modes: ["node-property:alpha"],
                                onComplete: function() {
                                    callback.onComplete()
                                }
                            })
                        }
                    })
                } else {
                    callback.onComplete()
                }
            },
            requestNodes: function(f, d) {
                var b = P.merge(this.controller, d),
                    c = this.config.constrained ? this.config.levelsToShow : Number.MAX_VALUE;
                if (b.request) {
                    var e = [],
                        a = f._depth;
                    N.Util.eachLevel(f, 0, c, function(g) {
                        if (g.drawn && !N.Util.anySubnode(g)) {
                            e.push(g);
                            g._level = g._depth - a;
                            if (this.config.constrained) {
                                g._level = c - g._level
                            }
                        }
                    });
                    this.group.requestNodes(e, b)
                } else {
                    b.onComplete()
                }
            }
        });
        $jit.Icicle.Op = new B({
            Implements: N.Op
        });
        $jit.Icicle.Group = new B({
            initialize: function(a) {
                this.viz = a;
                this.canvas = a.canvas;
                this.config = a.config
            },
            requestNodes: function(h, b) {
                var f = 0,
                    a = h.length,
                    d = {};
                var g = function() {
                    b.onComplete()
                };
                var c = this.viz;
                if (a == 0) {
                    g()
                }
                for (var e = 0; e < a; e++) {
                    d[h[e].id] = h[e];
                    b.request(h[e].id, h[e]._level, {
                        onComplete: function(i, j) {
                            if (j && j.children) {
                                j.id = i;
                                c.op.sum(j, {
                                    type: "nothing"
                                })
                            }
                            if (++f == a) {
                                N.Util.computeLevels(c.graph, c.root, 0);
                                g()
                            }
                        }
                    })
                }
            }
        });
        $jit.Icicle.Plot = new B({
            Implements: N.Plot,
            plot: function(b, f) {
                b = b || this.viz.controller;
                var c = this.viz,
                    e = c.graph,
                    a = e.getNode(c.clickedNode && c.clickedNode.id || c.root),
                    d = a._depth;
                c.canvas.clear();
                this.plotTree(a, P.merge(b, {
                    withLabels: true,
                    hideLabels: false,
                    plotSubtree: function(h, g) {
                        return !c.config.constrained || (g._depth - d < c.config.levelsToShow)
                    }
                }), f)
            }
        });
        $jit.Icicle.Label = {};
        $jit.Icicle.Label.Native = new B({
            Implements: N.Label.Native,
            renderLabel: function(g, f, d) {
                var a = g.getCtx(),
                    h = f.getData("width"),
                    b = f.getData("height"),
                    i = f.getLabelData("size"),
                    e = a.measureText(f.name);
                if (b < (i * 1.5) || h < e.width) {
                    return
                }
                var c = f.pos.getc(true);
                a.fillText(f.name, c.x + h / 2, c.y + b / 2)
            }
        });
        $jit.Icicle.Label.SVG = new B({
            Implements: N.Label.SVG,
            initialize: function(a) {
                this.viz = a
            },
            placeLabel: function(b, a, g) {
                var e = a.pos.getc(true),
                    d = this.viz.canvas;
                var c = d.getSize();
                var f = {
                    x: Math.round(e.x + c.width / 2),
                    y: Math.round(e.y + c.height / 2)
                };
                b.setAttribute("x", f.x);
                b.setAttribute("y", f.y);
                g.onPlaceLabel(b, a)
            }
        });
        $jit.Icicle.Label.HTML = new B({
            Implements: N.Label.HTML,
            initialize: function(a) {
                this.viz = a
            },
            placeLabel: function(b, h, g) {
                var d = h.pos.getc(true),
                    f = this.viz.canvas;
                var c = f.getSize();
                var e = {
                    x: Math.round(d.x + c.width / 2),
                    y: Math.round(d.y + c.height / 2)
                };
                var a = b.style;
                a.left = e.x+20 + "px";
                a.top = e.y + "px";
                a.display = "";
                g.onPlaceLabel(b, h)
            }
        });
        $jit.Icicle.Plot.NodeTypes = new B({
            none: {
                render: P.empty
            },
            rectangle: {
                render: function(e, i, g) {
                    var f = this.viz.config;
                    var b = f.offset;
                    var k = e.getData("width");
                    var l = e.getData("height");
                    var c = e.getData("border");
                    var m = e.pos.getc(true);
                    var n = m.x + b / 2,
                        a = m.y + b / 2;
                    var h = i.getCtx();
                    if (k - b < 2 || l - b < 2) {
                        return
                    }
                    if (f.cushion) {
                        var d = e.getData("color");
                        var j = h.createRadialGradient(n + (k - b) / 2, a + (l - b) / 2, 1, n + (k - b) / 2, a + (l - b) / 2, k < l ? l : k);
                        var o = P.rgbToHex(P.map(P.hexToRgb(d), function(p) {
                            return p * 0.3 >> 0
                        }));
                        j.addColorStop(0, d);
                        j.addColorStop(1, o);
                        h.fillStyle = j
                    }
                    if (c) {
                        h.strokeStyle = c;
                        h.lineWidth = 3
                    }
                    h.fillRect(n, a, Math.max(0, k - b), Math.max(0, l - b));
                    c && h.strokeRect(m.x, m.y, k, l)
                },
                contains: function(e, b) {
                    if (this.viz.clickedNode && !$jit.Graph.Util.isDescendantOf(e, this.viz.clickedNode.id)) {
                        return false
                    }
                    var d = e.pos.getc(true),
                        a = e.getData("width"),
                        c = e.getData("height");
                    return this.nodeHelper.rectangle.contains({
                        x: d.x + a / 2,
                        y: d.y + c / 2
                    }, b, a, c)
                }
            }
        });
        $jit.Icicle.Plot.EdgeTypes = new B({
            none: P.empty
        });
        L.ForceDirected = new B({
                getOptions: function(d) {
                    var h = this.canvas.getSize();
                    var g = h.width,
                        b = h.height;
                    var f = 0;
                    this.graph.eachNode(function(i) {
                        f++
                    });
                    var c = g * b / f,
                        e = Math.sqrt(c);
                    var a = this.config.levelDistance;
                    return {
                        width: g,
                        height: b,
                        tstart: g * 0.1,
                        nodef: function(i) {
                            return c / (i || 1)
                        },
                        edgef: function(i) {
                            return e * (i - a)
                        }
                    }
                },
                compute: function(a, d) {
                    var c = P.splat(a || ["current", "start", "end"]);
                    var b = this.getOptions();
                    M.compute(this.graph, c, this.config);
                    this.graph.computeLevels(this.root, 0, "ignore");
                    this.graph.eachNode(function(e) {
                        P.each(c, function(g) {
                            var f = e.getPos(g);
                            if (f.equals(C.KER)) {
                                f.x = b.width / 5 * (Math.random() - 0.5);
                                f.y = b.height / 5 * (Math.random() - 0.5)
                            }
                            e.disp = {};
                            P.each(c, function(h) {
                                e.disp[h] = A(0, 0)
                            })
                        })
                    });
                    this.computePositions(c, b, d)
                },
                computePositions: function(b, g, f) {
                    var e = this.config.iterations,
                        a = 0,
                        d = this;
                    if (f) {
                        (function c() {
                                for (var h = f.iter, i = 0; i < h; i++) {
                                    g.t = g.tstart;
                                    if (e) {
                                        g.t *= (1 - a++/(e-1))}d.computePositionStep(b,g);if(e&&a>=e){f.onComplete();return}}f.onStep(Math.round(a/ (e - 1) * 100));
                                    setTimeout(c, 1)
                                })()
                        } else {
                            for (; a < e; a++) {
                                g.t = g.tstart * (1 - a / (e - 1));
                                this.computePositionStep(b, g)
                            }
                        }
                    }, computePositionStep: function(a, h) {
                        var j = this.graph;
                        var f = Math.min,
                            b = Math.max;
                        var c = A(0, 0);
                        j.eachNode(function(k) {
                            P.each(a, function(l) {
                                k.disp[l].x = 0;
                                k.disp[l].y = 0
                            });
                            j.eachNode(function(l) {
                                if (l.id != k.id) {
                                    P.each(a, function(m) {
                                        var o = k.getPos(m),
                                            p = l.getPos(m);
                                        c.x = o.x - p.x;
                                        c.y = o.y - p.y;
                                        var n = c.norm() || 1;
                                        k.disp[m].$add(c.$scale(h.nodef(n) / n))
                                    })
                                }
                            })
                        });
                        var g = !!j.getNode(this.root).visited;
                        j.eachNode(function(k) {
                            k.eachAdjacency(function(m) {
                                var l = m.nodeTo;
                                if (!!l.visited === g) {
                                    P.each(a, function(q) {
                                        var o = k.getPos(q),
                                            p = l.getPos(q);
                                        c.x = o.x - p.x;
                                        c.y = o.y - p.y;
                                        var n = c.norm() || 1;
                                        k.disp[q].$add(c.$scale(-h.edgef(n) / n));
                                        l.disp[q].$add(c.$scale(-1))
                                    })
                                }
                            });
                            k.visited = !g
                        });
                        var i = h.t,
                            e = h.width / 2,
                            d = h.height / 2;
                        j.eachNode(function(k) {
                            P.each(a, function(l) {
                                var n = k.disp[l];
                                var m = n.norm() || 1;
                                var l = k.getPos(l);
                                l.$add(A(n.x * f(Math.abs(n.x), i) / m, n.y * f(Math.abs(n.y), i) / m));
                                l.x = f(e, b(-e, l.x));
                                l.y = f(d, b(-d, l.y))
                            })
                        })
                    }
                }); $jit.ForceDirected = new B({
                Implements: [O, D, L.ForceDirected],
                initialize: function(a) {
                    var b = $jit.ForceDirected;
                    var d = {
                        iterations: 50,
                        levelDistance: 50
                    };
                    this.controller = this.config = P.merge(E("Canvas", "Node", "Edge", "Fx", "Tips", "NodeStyles", "Events", "Navigation", "Controller", "Label"), d, a);
                    var c = this.config;
                    if (c.useCanvas) {
                        this.canvas = c.useCanvas;
                        this.config.labelContainer = this.canvas.id + "-label"
                    } else {
                        if (c.background) {
                            c.background = P.merge({
                                type: "Circles"
                            }, c.background)
                        }
                        this.canvas = new G(this, c);
                        this.config.labelContainer = (typeof c.injectInto == "string" ? c.injectInto : c.injectInto.id) + "-label"
                    }
                    this.graphOptions = {
                        klass: C,
                        Node: {
                            selected: false,
                            exist: true,
                            drawn: true
                        }
                    };
                    this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                    this.labels = new b.Label[c.Label.type](this);
                    this.fx = new b.Plot(this, b);
                    this.op = new b.Op(this);
                    this.json = null;
                    this.busy = false;
                    this.initializeExtras()
                },
                refresh: function() {
                    this.compute();
                    this.plot()
                },
                reposition: function() {
                    this.compute("end")
                },
                computeIncremental: function(a) {
                    a = P.merge({
                        iter: 20,
                        property: "end",
                        onStep: P.empty,
                        onComplete: P.empty
                    }, a || {});
                    this.config.onBeforeCompute(this.graph.getNode(this.root));
                    this.compute(a.property, a)
                },
                plot: function() {
                    this.fx.plot()
                },
                animate: function(a) {
                    this.fx.animate(P.merge({
                        modes: ["linear"]
                    }, a || {}))
                }
            }); $jit.ForceDirected.$extend = true;
            (function(a) {
                a.Op = new B({
                    Implements: N.Op
                });
                a.Plot = new B({
                    Implements: N.Plot
                });
                a.Label = {};
                a.Label.Native = new B({
                    Implements: N.Label.Native
                });
                a.Label.SVG = new B({
                    Implements: N.Label.SVG,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, d, c) {
                        var k = d.pos.getc(true),
                            g = this.viz.canvas,
                            f = g.translateOffsetX,
                            h = g.translateOffsetY,
                            j = g.scaleOffsetX,
                            l = g.scaleOffsetY,
                            b = g.getSize();
                        var e = {
                            x: Math.round(k.x * j + f + b.width / 2),
                            y: Math.round(k.y * l + h + b.height / 2)
                        };
                        i.setAttribute("x", e.x);
                        i.setAttribute("y", e.y);
                        c.onPlaceLabel(i, d)
                    }
                });
                a.Label.HTML = new B({
                    Implements: N.Label.HTML,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, c, b) {
                        var k = c.pos.getc(true),
                            f = this.viz.canvas,
                            e = f.translateOffsetX,
                            g = f.translateOffsetY,
                            j = f.scaleOffsetX,
                            l = f.scaleOffsetY,
                            m = f.getSize();
                        var d = {
                            x: Math.round(k.x * j + e + m.width / 2),
                            y: Math.round(k.y * l + g + m.height / 2)
                        };
                        var h = i.style;
                        h.left = d.x + "px";
                        h.top = d.y + "px";
                        h.display = this.fitsInCanvas(d, f) ? "" : "none";
                        b.onPlaceLabel(i, c)
                    }
                });
                a.Plot.NodeTypes = new B({
                    none: {
                        render: P.empty,
                        contains: P.lambda(false)
                    },
                    circle: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.circle.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.circle.contains(d, b, e)
                        }
                    },
                    ellipse: {
                        render: function(c, f) {
                            var e = c.pos.getc(true),
                                d = c.getData("width"),
                                b = c.getData("height");
                            this.nodeHelper.ellipse.render("fill", e, d, b, f)
                        },
                        contains: function(d, f) {
                            var c = d.pos.getc(true),
                                e = d.getData("width"),
                                b = d.getData("height");
                            return this.nodeHelper.ellipse.contains(c, f, e, b)
                        }
                    },
                    square: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.square.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.square.contains(d, b, e)
                        }
                    },
                    rectangle: {
                        render: function(c, f) {
                            var e = c.pos.getc(true),
                                d = c.getData("width"),
                                b = c.getData("height");
                            this.nodeHelper.rectangle.render("fill", e, d, b, f)
                        },
                        contains: function(d, f) {
                            var c = d.pos.getc(true),
                                e = d.getData("width"),
                                b = d.getData("height");
                            return this.nodeHelper.rectangle.contains(c, f, e, b)
                        }
                    },
                    triangle: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.triangle.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.triangle.contains(d, b, e)
                        }
                    },
                    star: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.star.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.star.contains(d, b, e)
                        }
                    }
                });
                a.Plot.EdgeTypes = new B({
                    none: P.empty,
                    line: {
                        render: function(c, e) {
                            var b = c.nodeFrom.pos.getc(true),
                                d = c.nodeTo.pos.getc(true);
                            this.edgeHelper.line.render(b, d, e)
                        },
                        contains: function(c, b) {
                            var d = c.nodeFrom.pos.getc(true),
                                e = c.nodeTo.pos.getc(true);
                            return this.edgeHelper.line.contains(d, e, b, this.edge.epsilon)
                        }
                    },
                    arrow: {
                        render: function(h, f) {
                            var d = h.nodeFrom.pos.getc(true),
                                e = h.nodeTo.pos.getc(true),
                                g = h.getData("dim"),
                                c = h.data.$direction,
                                b = (c && c.length > 1 && c[0] != h.nodeFrom.id);
                            this.edgeHelper.arrow.render(d, e, g, b, f)
                        },
                        contains: function(c, b) {
                            var d = c.nodeFrom.pos.getc(true),
                                e = c.nodeTo.pos.getc(true);
                            return this.edgeHelper.arrow.contains(d, e, b, this.edge.epsilon)
                        }
                    }
                })
            })($jit.ForceDirected); $jit.TM = {};
            var w = $jit.TM; $jit.TM.$extend = true; w.Base = {
                layout: {
                    orientation: "h",
                    vertical: function() {
                        return this.orientation == "v"
                    },
                    horizontal: function() {
                        return this.orientation == "h"
                    },
                    change: function() {
                        this.orientation = this.vertical() ? "h" : "v"
                    }
                },
                initialize: function(b) {
                    var a = {
                        orientation: "h",
                        titleHeight: 13,
                        offset: 2,
                        levelsToShow: 0,
                        constrained: false,
                        animate: false,
                        Node: {
                            type: "rectangle",
                            overridable: true,
                            width: 3,
                            height: 3,
                            color: "#444"
                        },
                        Label: {
                            textAlign: "center",
                            textBaseline: "top"
                        },
                        Edge: {
                            type: "none"
                        },
                        duration: 700,
                        fps: 45
                    };
                    this.controller = this.config = P.merge(E("Canvas", "Node", "Edge", "Fx", "Controller", "Tips", "NodeStyles", "Events", "Navigation", "Label"), a, b);
                    this.layout.orientation = this.config.orientation;
                    var c = this.config;
                    if (c.useCanvas) {
                        this.canvas = c.useCanvas;
                        this.config.labelContainer = this.canvas.id + "-label"
                    } else {
                        if (c.background) {
                            c.background = P.merge({
                                type: "Circles"
                            }, c.background)
                        }
                        this.canvas = new G(this, c);
                        this.config.labelContainer = (typeof c.injectInto == "string" ? c.injectInto : c.injectInto.id) + "-label"
                    }
                    this.graphOptions = {
                        klass: C,
                        Node: {
                            selected: false,
                            exist: true,
                            drawn: true
                        }
                    };
                    this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                    this.labels = new w.Label[c.Label.type](this);
                    this.fx = new w.Plot(this);
                    this.op = new w.Op(this);
                    this.group = new w.Group(this);
                    this.geom = new w.Geom(this);
                    this.clickedNode = null;
                    this.busy = false;
                    this.initializeExtras()
                },
                refresh: function() {
                    if (this.busy) {
                        return
                    }
                    this.busy = true;
                    var a = this;
                    if (this.config.animate) {
                        this.compute("end");
                        this.config.levelsToShow > 0 && this.geom.setRightLevelToShow(this.graph.getNode(this.clickedNode && this.clickedNode.id || this.root));
                        this.fx.animate(P.merge(this.config, {
                            modes: ["linear", "node-property:width:height"],
                            onComplete: function() {
                                a.busy = false
                            }
                        }))
                    } else {
                        var b = this.config.Label.type;
                        if (b != "Native") {
                            var a = this;
                            this.graph.eachNode(function(c) {
                                a.labels.hideLabel(c, false)
                            })
                        }
                        this.busy = false;
                        this.compute();
                        this.config.levelsToShow > 0 && this.geom.setRightLevelToShow(this.graph.getNode(this.clickedNode && this.clickedNode.id || this.root));
                        this.plot()
                    }
                },
                plot: function() {
                    this.fx.plot()
                },
                leaf: function(a) {
                    return a.getSubnodes([1, 1], "ignore").length == 0
                },
                enter: function(e) {
                    if (this.busy) {
                        return
                    }
                    this.busy = true;
                    var g = this,
                        b = this.config,
                        a = this.graph,
                        c = e,
                        d = this.clickedNode;
                    var f = {
                        onComplete: function() {
                            if (b.levelsToShow > 0) {
                                g.geom.setRightLevelToShow(e)
                            }
                            if (b.levelsToShow > 0 || b.request) {
                                g.compute()
                            }
                            if (b.animate) {
                                a.nodeList.setData("alpha", 0, "end");
                                e.eachSubgraph(function(h) {
                                    h.setData("alpha", 1, "end")
                                }, "ignore");
                                g.fx.animate({
                                    duration: 500,
                                    modes: ["node-property:alpha"],
                                    onComplete: function() {
                                        g.clickedNode = c;
                                        g.compute("end");
                                        g.clickedNode = d;
                                        g.fx.animate({
                                            modes: ["linear", "node-property:width:height"],
                                            duration: 1000,
                                            onComplete: function() {
                                                g.busy = false;
                                                g.clickedNode = c
                                            }
                                        })
                                    }
                                })
                            } else {
                                g.busy = false;
                                g.clickedNode = e;
                                g.refresh()
                            }
                        }
                    };
                    if (b.request) {
                        this.requestNodes(c, f)
                    } else {
                        f.onComplete()
                    }
                },
                out: function() {
                    if (this.busy) {
                        return
                    }
                    this.busy = true;
                    this.events.hoveredNode = false;
                    var b = this,
                        g = this.config,
                        e = this.graph,
                        a = e.getNode(this.clickedNode && this.clickedNode.id || this.root).getParents(),
                        d = a[0],
                        c = d,
                        f = this.clickedNode;
                    if (!d) {
                        this.busy = false;
                        return
                    }
                    callback = {
                        onComplete: function() {
                            b.clickedNode = d;
                            if (g.request) {
                                b.requestNodes(d, {
                                    onComplete: function() {
                                        b.compute();
                                        b.plot();
                                        b.busy = false
                                    }
                                })
                            } else {
                                b.compute();
                                b.plot();
                                b.busy = false
                            }
                        }
                    };
                    if (g.levelsToShow > 0) {
                        this.geom.setRightLevelToShow(d)
                    }
                    if (g.animate) {
                        this.clickedNode = c;
                        this.compute("end");
                        this.clickedNode = f;
                        this.fx.animate({
                            modes: ["linear", "node-property:width:height"],
                            duration: 1000,
                            onComplete: function() {
                                b.clickedNode = c;
                                e.eachNode(function(h) {
                                    h.setDataset(["current", "end"], {
                                        alpha: [0, 1]
                                    })
                                }, "ignore");
                                f.eachSubgraph(function(h) {
                                    h.setData("alpha", 1)
                                }, "ignore");
                                b.fx.animate({
                                    duration: 500,
                                    modes: ["node-property:alpha"],
                                    onComplete: function() {
                                        callback.onComplete()
                                    }
                                })
                            }
                        })
                    } else {
                        callback.onComplete()
                    }
                },
                requestNodes: function(f, d) {
                    var b = P.merge(this.controller, d),
                        c = this.config.levelsToShow;
                    if (b.request) {
                        var e = [],
                            a = f._depth;
                        f.eachLevel(0, c, function(g) {
                            var h = c - (g._depth - a);
                            if (g.drawn && !g.anySubnode() && h > 0) {
                                e.push(g);
                                g._level = h
                            }
                        });
                        this.group.requestNodes(e, b)
                    } else {
                        b.onComplete()
                    }
                },
                reposition: function() {
                    this.compute("end")
                }
            }; w.Op = new B({
                Implements: N.Op,
                initialize: function(a) {
                    this.viz = a
                }
            }); w.Geom = new B({
                Implements: N.Geom,
                getRightLevelToShow: function() {
                    return this.viz.config.levelsToShow
                },
                setRightLevelToShow: function(a) {
                    var c = this.getRightLevelToShow(),
                        b = this.viz.labels;
                    a.eachLevel(0, c + 1, function(d) {
                        var e = d._depth - a._depth;
                        if (e > c) {
                            d.drawn = false;
                            d.exist = false;
                            d.ignore = true;
                            b.hideLabel(d, false)
                        } else {
                            d.drawn = true;
                            d.exist = true;
                            delete d.ignore
                        }
                    });
                    a.drawn = true;
                    delete a.ignore
                }
            }); w.Group = new B({
                initialize: function(a) {
                    this.viz = a;
                    this.canvas = a.canvas;
                    this.config = a.config
                },
                requestNodes: function(h, b) {
                    var f = 0,
                        a = h.length,
                        d = {};
                    var g = function() {
                        b.onComplete()
                    };
                    var c = this.viz;
                    if (a == 0) {
                        g()
                    }
                    for (var e = 0; e < a; e++) {
                        d[h[e].id] = h[e];
                        b.request(h[e].id, h[e]._level, {
                            onComplete: function(i, j) {
                                if (j && j.children) {
                                    j.id = i;
                                    c.op.sum(j, {
                                        type: "nothing"
                                    })
                                }
                                if (++f == a) {
                                    c.graph.computeLevels(c.root, 0);
                                    g()
                                }
                            }
                        })
                    }
                }
            }); w.Plot = new B({
                Implements: N.Plot,
                initialize: function(a) {
                    this.viz = a;
                    this.config = a.config;
                    this.node = this.config.Node;
                    this.edge = this.config.Edge;
                    this.animation = new x;
                    this.nodeTypes = new w.Plot.NodeTypes;
                    this.edgeTypes = new w.Plot.EdgeTypes;
                    this.labels = a.labels
                },
                plot: function(d, a) {
                    var b = this.viz,
                        c = b.graph;
                    b.canvas.clear();
                    this.plotTree(c.getNode(b.clickedNode && b.clickedNode.id || b.root), P.merge(b.config, d || {}, {
                        withLabels: true,
                        hideLabels: false,
                        plotSubtree: function(f, e) {
                            return f.anySubnode("exist")
                        }
                    }), a)
                }
            }); w.Label = {}; w.Label.Native = new B({
                Implements: N.Label.Native,
                initialize: function(a) {
                    this.config = a.config;
                    this.leaf = a.leaf
                },
                renderLabel: function(e, d, c) {
                    if (!this.leaf(d) && !this.config.titleHeight) {
                        return
                    }
                    var a = d.pos.getc(true),
                        g = e.getCtx(),
                        f = d.getData("width"),
                        h = d.getData("height"),
                        i = a.x + f / 2,
                        b = a.y;
                    g.fillText(d.name, i, b, f)
                }
            }); w.Label.SVG = new B({
                Implements: N.Label.SVG,
                initialize: function(a) {
                    this.viz = a;
                    this.leaf = a.leaf;
                    this.config = a.config
                },
                placeLabel: function(i, d, c) {
                    var k = d.pos.getc(true),
                        g = this.viz.canvas,
                        f = g.translateOffsetX,
                        h = g.translateOffsetY,
                        j = g.scaleOffsetX,
                        a = g.scaleOffsetY,
                        b = g.getSize();
                    var e = {
                        x: Math.round(k.x * j + f + b.width / 2),
                        y: Math.round(k.y * a + h + b.height / 2)
                    };
                    i.setAttribute("x", e.x);
                    i.setAttribute("y", e.y);
                    if (!this.leaf(d) && !this.config.titleHeight) {
                        i.style.display = "none"
                    }
                    c.onPlaceLabel(i, d)
                }
            }); w.Label.HTML = new B({
                Implements: N.Label.HTML,
                initialize: function(a) {
                    this.viz = a;
                    this.leaf = a.leaf;
                    this.config = a.config
                },
                placeLabel: function(i, c, b) {
                    var k = c.pos.getc(true),
                        f = this.viz.canvas,
                        e = f.translateOffsetX,
                        g = f.translateOffsetY,
                        j = f.scaleOffsetX,
                        l = f.scaleOffsetY,
                        a = f.getSize();
                    var d = {
                        x: Math.round(k.x * j + e + a.width / 2),
                        y: Math.round(k.y * l + g + a.height / 2)
                    };
                    var h = i.style;
                    h.left = d.x + "px";
                    h.top = d.y + "px";
                    h.width = c.getData("width") * j + "px";
                    h.height = c.getData("height") * l + "px";
                    h.zIndex = c._depth * 100;
                    h.display = "";
                    if (!this.leaf(c) && !this.config.titleHeight) {
                        i.style.display = "none"
                    }
                    b.onPlaceLabel(i, c)
                }
            }); w.Plot.NodeTypes = new B({
                none: {
                    render: P.empty
                },
                rectangle: {
                    render: function(g, k, e) {
                        var a = this.viz.leaf(g),
                            i = this.config,
                            m = i.offset,
                            b = i.titleHeight,
                            n = g.pos.getc(true),
                            l = g.getData("width"),
                            j = g.getData("height"),
                            c = g.getData("border"),
                            f = k.getCtx(),
                            o = n.x + m / 2,
                            q = n.y + m / 2;
                        if (l <= m || j <= m) {
                            return
                        }
                        if (a) {
                            if (i.cushion) {
                                var h = f.createRadialGradient(o + (l - m) / 2, q + (j - m) / 2, 1, o + (l - m) / 2, q + (j - m) / 2, l < j ? j : l);
                                var d = g.getData("color");
                                var p = P.rgbToHex(P.map(P.hexToRgb(d), function(r) {
                                    return r * 0.2 >> 0
                                }));
                                h.addColorStop(0, d);
                                h.addColorStop(1, p);
                                f.fillStyle = h
                            }
                            f.fillRect(o, q, l - m, j - m);
                            if (c) {
                                f.save();
                                f.strokeStyle = c;
                                f.strokeRect(o, q, l - m, j - m);
                                f.restore()
                            }
                        } else {
                            if (b > 0) {
                                f.fillRect(n.x + m / 2, n.y + m / 2, l - m, b - m);
                                if (c) {
                                    f.save();
                                    f.strokeStyle = c;
                                    f.strokeRect(n.x + m / 2, n.y + m / 2, l - m, j - m);
                                    f.restore()
                                }
                            }
                        }
                    },
                    contains: function(d, f) {
                        if (this.viz.clickedNode && !d.isDescendantOf(this.viz.clickedNode.id) || d.ignore) {
                            return false
                        }
                        var b = d.pos.getc(true),
                            e = d.getData("width"),
                            a = this.viz.leaf(d),
                            c = a ? d.getData("height") : this.config.titleHeight;
                        return this.nodeHelper.rectangle.contains({
                            x: b.x + e / 2,
                            y: b.y + c / 2
                        }, f, e, c)
                    }
                }
            }); w.Plot.EdgeTypes = new B({
                none: P.empty
            }); w.SliceAndDice = new B({
                Implements: [O, D, w.Base, L.TM.SliceAndDice]
            }); w.Squarified = new B({
                Implements: [O, D, w.Base, L.TM.Squarified]
            }); w.Strip = new B({
                Implements: [O, D, w.Base, L.TM.Strip]
            }); $jit.RGraph = new B({
                Implements: [O, D, L.Radial],
                initialize: function(b) {
                    var a = $jit.RGraph;
                    var d = {
                        interpolation: "linear",
                        levelDistance: 100
                    };
                    this.controller = this.config = P.merge(E("Canvas", "Node", "Edge", "Fx", "Controller", "Tips", "NodeStyles", "Events", "Navigation", "Label"), d, b);
                    var c = this.config;
                    if (c.useCanvas) {
                        this.canvas = c.useCanvas;
                        this.config.labelContainer = this.canvas.id + "-label"
                    } else {
                        if (c.background) {
                            c.background = P.merge({
                                type: "Circles"
                            }, c.background)
                        }
                        this.canvas = new G(this, c);
                        this.config.labelContainer = (typeof c.injectInto == "string" ? c.injectInto : c.injectInto.id) + "-label"
                    }
                    this.graphOptions = {
                        klass: Q,
                        Node: {
                            selected: false,
                            exist: true,
                            drawn: true
                        }
                    };
                    this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                    this.labels = new a.Label[c.Label.type](this);
                    this.fx = new a.Plot(this, a);
                    this.op = new a.Op(this);
                    this.json = null;
                    this.root = null;
                    this.busy = false;
                    this.parent = false;
                    this.initializeExtras()
                },
                createLevelDistanceFunc: function() {
                    var a = this.config.levelDistance;
                    return function(b) {
                        return (b._depth + 1) * a
                    }
                },
                refresh: function() {
                    this.compute();
                    this.plot()
                },
                reposition: function() {
                    this.compute("end")
                },
                plot: function() {
                    this.fx.plot()
                },
                getNodeAndParentAngle: function(d) {
                    var h = false;
                    var f = this.graph.getNode(d);
                    var b = f.getParents();
                    var e = (b.length > 0) ? b[0] : false;
                    if (e) {
                        var c = e.pos.getc(),
                            g = f.pos.getc();
                        var a = c.add(g.scale(-1));
                        h = Math.atan2(a.y, a.x);
                        if (h < 0) {
                            h += 2 * Math.PI
                        }
                    }
                    return {
                        parent: e,
                        theta: h
                    }
                },
                tagChildren: function(b, e) {
                    if (b.angleSpan) {
                        var g = [];
                        b.eachAdjacency(function(h) {
                            g.push(h.nodeTo)
                        }, "ignore");
                        var c = g.length;
                        for (var d = 0; d < c && e != g[d].id; d++) {}
                        for (var f = (d + 1) % c, a = 0; e != g[f].id; f = (f + 1) % c) {
                            g[f].dist = a++
                        }
                    }
                },
                onClick: function(f, b) {
                    if (this.root != f && !this.busy) {
                        this.busy = true;
                        this.root = f;
                        var e = this;
                        this.controller.onBeforeCompute(this.graph.getNode(f));
                        var d = this.getNodeAndParentAngle(f);
                        this.tagChildren(d.parent, f);
                        this.parent = d.parent;
                        this.compute("end");
                        var c = d.theta - d.parent.endPos.theta;
                        this.graph.eachNode(function(g) {
                            g.endPos.set(g.endPos.getp().add(H(c, 0)))
                        });
                        var a = this.config.interpolation;
                        b = P.merge({
                            onComplete: P.empty
                        }, b || {});
                        this.fx.animate(P.merge({
                            hideLabels: true,
                            modes: [a]
                        }, b, {
                            onComplete: function() {
                                e.busy = false;
                                b.onComplete()
                            }
                        }))
                    }
                }
            }); $jit.RGraph.$extend = true;
            (function(a) {
                a.Op = new B({
                    Implements: N.Op
                });
                a.Plot = new B({
                    Implements: N.Plot
                });
                a.Label = {};
                a.Label.Native = new B({
                    Implements: N.Label.Native
                });
                a.Label.SVG = new B({
                    Implements: N.Label.SVG,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, d, c) {
                        var k = d.pos.getc(true),
                            g = this.viz.canvas,
                            f = g.translateOffsetX,
                            h = g.translateOffsetY,
                            j = g.scaleOffsetX,
                            l = g.scaleOffsetY,
                            b = g.getSize();
                        var e = {
                            x: Math.round(k.x * j + f + b.width / 2),
                            y: Math.round(k.y * l + h + b.height / 2)
                        };
                        i.setAttribute("x", e.x);
                        i.setAttribute("y", e.y);
                        c.onPlaceLabel(i, d)
                    }
                });
                a.Label.HTML = new B({
                    Implements: N.Label.HTML,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, c, b) {
                        var k = c.pos.getc(true),
                            f = this.viz.canvas,
                            e = f.translateOffsetX,
                            g = f.translateOffsetY,
                            j = f.scaleOffsetX,
                            l = f.scaleOffsetY,
                            m = f.getSize();
                        var d = {
                            x: Math.round(k.x * j + e + m.width / 2),
                            y: Math.round(k.y * l + g + m.height / 2)
                        };
                        var h = i.style;
                        h.left = d.x + "px";
                        h.top = d.y + "px";
                        h.display = this.fitsInCanvas(d, f) ? "" : "none";
                        b.onPlaceLabel(i, c)
                    }
                });
                a.Plot.NodeTypes = new B({
                    none: {
                        render: P.empty,
                        contains: P.lambda(false)
                    },
                    circle: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.circle.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.circle.contains(d, b, e)
                        }
                    },
                    ellipse: {
                        render: function(c, f) {
                            var e = c.pos.getc(true),
                                d = c.getData("width"),
                                b = c.getData("height");
                            this.nodeHelper.ellipse.render("fill", e, d, b, f)
                        },
                        contains: function(d, f) {
                            var c = d.pos.getc(true),
                                e = d.getData("width"),
                                b = d.getData("height");
                            return this.nodeHelper.ellipse.contains(c, f, e, b)
                        }
                    },
                    square: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.square.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.square.contains(d, b, e)
                        }
                    },
                    rectangle: {
                        render: function(c, f) {
                            var e = c.pos.getc(true),
                                d = c.getData("width"),
                                b = c.getData("height");
                            this.nodeHelper.rectangle.render("fill", e, d, b, f)
                        },
                        contains: function(d, f) {
                            var c = d.pos.getc(true),
                                e = d.getData("width"),
                                b = d.getData("height");
                            return this.nodeHelper.rectangle.contains(c, f, e, b)
                        }
                    },
                    triangle: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.triangle.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.triangle.contains(d, b, e)
                        }
                    },
                    star: {
                        render: function(e, c) {
                            var b = e.pos.getc(true),
                                d = e.getData("dim");
                            this.nodeHelper.star.render("fill", b, d, c)
                        },
                        contains: function(c, b) {
                            var d = c.pos.getc(true),
                                e = c.getData("dim");
                            return this.nodeHelper.star.contains(d, b, e)
                        }
                    }
                });
                a.Plot.EdgeTypes = new B({
                    none: P.empty,
                    line: {
                        render: function(c, e) {
                            var b = c.nodeFrom.pos.getc(true),
                                d = c.nodeTo.pos.getc(true);
                            this.edgeHelper.line.render(b, d, e)
                        },
                        contains: function(c, b) {
                            var d = c.nodeFrom.pos.getc(true),
                                e = c.nodeTo.pos.getc(true);
                            return this.edgeHelper.line.contains(d, e, b, this.edge.epsilon)
                        }
                    },
                    arrow: {
                        render: function(h, f) {
                            var d = h.nodeFrom.pos.getc(true),
                                e = h.nodeTo.pos.getc(true),
                                g = h.getData("dim"),
                                c = h.data.$direction,
                                b = (c && c.length > 1 && c[0] != h.nodeFrom.id);
                            this.edgeHelper.arrow.render(d, e, g, b, f)
                        },
                        contains: function(c, b) {
                            var d = c.nodeFrom.pos.getc(true),
                                e = c.nodeTo.pos.getc(true);
                            return this.edgeHelper.arrow.contains(d, e, b, this.edge.epsilon)
                        }
                    }
                })
            })($jit.RGraph); C.prototype.moebiusTransformation = function(c) {
                var b = this.add(c);
                var a = c.$conjugate().$prod(this);
                a.x++;
                return b.$div(a)
            }; N.Util.moebiusTransformation = function(e, b, d, a, c) {
                this.eachNode(e, function(h) {
                    for (var i = 0; i < d.length; i++) {
                        var f = b[i].scale(-1),
                            g = a ? a : d[i];
                        h.getPos(d[i]).set(h.getPos(g).getc().moebiusTransformation(f))
                    }
                }, c)
            }; $jit.Hypertree = new B({
                Implements: [O, D, L.Radial],
                initialize: function(b) {
                    var c = $jit.Hypertree;
                    var a = {
                        radius: "auto",
                        offset: 0,
                        Edge: {
                            type: "hyperline"
                        },
                        duration: 1500,
                        fps: 35
                    };
                    this.controller = this.config = P.merge(E("Canvas", "Node", "Edge", "Fx", "Tips", "NodeStyles", "Events", "Navigation", "Controller", "Label"), a, b);
                    var d = this.config;
                    if (d.useCanvas) {
                        this.canvas = d.useCanvas;
                        this.config.labelContainer = this.canvas.id + "-label"
                    } else {
                        if (d.background) {
                            d.background = P.merge({
                                type: "Circles"
                            }, d.background)
                        }
                        this.canvas = new G(this, d);
                        this.config.labelContainer = (typeof d.injectInto == "string" ? d.injectInto : d.injectInto.id) + "-label"
                    }
                    this.graphOptions = {
                        klass: Q,
                        Node: {
                            selected: false,
                            exist: true,
                            drawn: true
                        }
                    };
                    this.graph = new N(this.graphOptions, this.config.Node, this.config.Edge);
                    this.labels = new c.Label[d.Label.type](this);
                    this.fx = new c.Plot(this, c);
                    this.op = new c.Op(this);
                    this.json = null;
                    this.root = null;
                    this.busy = false;
                    this.initializeExtras()
                },
                createLevelDistanceFunc: function() {
                    var b = this.getRadius();
                    var e = 0,
                        c = Math.max,
                        a = this.config;
                    this.graph.eachNode(function(h) {
                        e = c(h._depth, e)
                    }, "ignore");
                    e++;
                    var g = function(h) {
                        return function(k) {
                            k.scale = b;
                            var i = k._depth + 1;
                            var j = 0,
                                l = Math.pow;
                            while (i) {
                                j += l(h, i--)
                            }
                            return j - a.offset
                        }
                    };
                    for (var d = 0.51; d <= 1; d += 0.01) {
                        var f = (1 - Math.pow(d, e)) / (1 - d);
                        if (f >= 2) {
                            return g(d - 0.01)
                        }
                    }
                    return g(0.75)
                },
                getRadius: function() {
                    var b = this.config.radius;
                    if (b !== "auto") {
                        return b
                    }
                    var a = this.canvas.getSize();
                    return Math.min(a.width, a.height) / 2
                },
                refresh: function(a) {
                    if (a) {
                        this.reposition();
                        this.graph.eachNode(function(b) {
                            b.startPos.rho = b.pos.rho = b.endPos.rho;
                            b.startPos.theta = b.pos.theta = b.endPos.theta
                        })
                    } else {
                        this.compute()
                    }
                    this.plot()
                },
                reposition: function() {
                    this.compute("end");
                    var a = this.graph.getNode(this.root).pos.getc().scale(-1);
                    N.Util.moebiusTransformation(this.graph, [a], ["end"], "end", "ignore");
                    this.graph.eachNode(function(b) {
                        if (b.ignore) {
                            b.endPos.rho = b.pos.rho;
                            b.endPos.theta = b.pos.theta
                        }
                    })
                },
                plot: function() {
                    this.fx.plot()
                },
                onClick: function(c, b) {
                    var a = this.graph.getNode(c).pos.getc(true);
                    this.move(a, b)
                },
                move: function(b, e) {
                    var a = A(b.x, b.y);
                    if (this.busy === false && a.norm() < 1) {
                        this.busy = true;
                        var c = this.graph.getClosestNodeToPos(a),
                            d = this;
                        this.graph.computeLevels(c.id, 0);
                        this.controller.onBeforeCompute(c);
                        e = P.merge({
                            onComplete: P.empty
                        }, e || {});
                        this.fx.animate(P.merge({
                            modes: ["moebius"],
                            hideLabels: true
                        }, e, {
                            onComplete: function() {
                                d.busy = false;
                                e.onComplete()
                            }
                        }), a)
                    }
                }
            }); $jit.Hypertree.$extend = true;
            (function(a) {
                a.Op = new B({
                    Implements: N.Op
                });
                a.Plot = new B({
                    Implements: N.Plot
                });
                a.Label = {};
                a.Label.Native = new B({
                    Implements: N.Label.Native,
                    initialize: function(b) {
                        this.viz = b
                    },
                    renderLabel: function(e, g, f) {
                        var c = e.getCtx();
                        var d = g.pos.getc(true);
                        var b = this.viz.getRadius();
                        c.fillText(g.name, d.x * b, d.y * b)
                    }
                });
                a.Label.SVG = new B({
                    Implements: N.Label.SVG,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, c, b) {
                        var k = c.pos.getc(true),
                            f = this.viz.canvas,
                            e = f.translateOffsetX,
                            g = f.translateOffsetY,
                            j = f.scaleOffsetX,
                            l = f.scaleOffsetY,
                            m = f.getSize(),
                            h = this.viz.getRadius();
                        var d = {
                            x: Math.round((k.x * j) * h + e + m.width / 2),
                            y: Math.round((k.y * l) * h + g + m.height / 2)
                        };
                        i.setAttribute("x", d.x);
                        i.setAttribute("y", d.y);
                        b.onPlaceLabel(i, c)
                    }
                });
                a.Label.HTML = new B({
                    Implements: N.Label.HTML,
                    initialize: function(b) {
                        this.viz = b
                    },
                    placeLabel: function(i, b, n) {
                        var k = b.pos.getc(true),
                            e = this.viz.canvas,
                            d = e.translateOffsetX,
                            f = e.translateOffsetY,
                            j = e.scaleOffsetX,
                            l = e.scaleOffsetY,
                            m = e.getSize(),
                            h = this.viz.getRadius();
                        var c = {
                            x: Math.round((k.x * j) * h + d + m.width / 2),
                            y: Math.round((k.y * l) * h + f + m.height / 2)
                        };
                        var g = i.style;
                        g.left = c.x + "px";
                        g.top = c.y + "px";
                        g.display = this.fitsInCanvas(c, e) ? "" : "none";
                        n.onPlaceLabel(i, b)
                    }
                });
                a.Plot.NodeTypes = new B({
                    none: {
                        render: P.empty,
                        contains: P.lambda(false)
                    },
                    circle: {
                        render: function(d, c) {
                            var f = this.node,
                                e = d.getData("dim"),
                                b = d.pos.getc();
                            e = f.transform ? e * (1 - b.squaredNorm()) : e;
                            b.$scale(d.scale);
                            if (e > 0.2) {
                                this.nodeHelper.circle.render("fill", b, e, c)
                            }
                        },
                        contains: function(c, b) {
                            var e = c.getData("dim"),
                                d = c.pos.getc().$scale(c.scale);
                            return this.nodeHelper.circle.contains(d, b, e)
                        }
                    },
                    ellipse: {
                        render: function(c, f) {
                            var e = c.pos.getc().$scale(c.scale),
                                d = c.getData("width"),
                                b = c.getData("height");
                            this.nodeHelper.ellipse.render("fill", e, d, b, f)
                        },
                        contains: function(d, f) {
                            var e = d.getData("width"),
                                c = d.getData("height"),
                                b = d.pos.getc().$scale(d.scale);
                            return this.nodeHelper.circle.contains(b, f, e, c)
                        }
                    },
                    square: {
                        render: function(d, c) {
                            var f = this.node,
                                e = d.getData("dim"),
                                b = d.pos.getc();
                            e = f.transform ? e * (1 - b.squaredNorm()) : e;
                            b.$scale(d.scale);
                            if (e > 0.2) {
                                this.nodeHelper.square.render("fill", b, e, c)
                            }
                        },
                        contains: function(c, b) {
                            var e = c.getData("dim"),
                                d = c.pos.getc().$scale(c.scale);
                            return this.nodeHelper.square.contains(d, b, e)
                        }
                    },
                    rectangle: {
                        render: function(g, f) {
                            var c = this.node,
                                e = g.getData("width"),
                                b = g.getData("height"),
                                d = g.pos.getc();
                            e = c.transform ? e * (1 - d.squaredNorm()) : e;
                            b = c.transform ? b * (1 - d.squaredNorm()) : b;
                            d.$scale(g.scale);
                            if (e > 0.2 && b > 0.2) {
                                this.nodeHelper.rectangle.render("fill", d, e, b, f)
                            }
                        },
                        contains: function(d, f) {
                            var e = d.getData("width"),
                                c = d.getData("height"),
                                b = d.pos.getc().$scale(d.scale);
                            return this.nodeHelper.rectangle.contains(b, f, e, c)
                        }
                    },
                    triangle: {
                        render: function(d, c) {
                            var f = this.node,
                                e = d.getData("dim"),
                                b = d.pos.getc();
                            e = f.transform ? e * (1 - b.squaredNorm()) : e;
                            b.$scale(d.scale);
                            if (e > 0.2) {
                                this.nodeHelper.triangle.render("fill", b, e, c)
                            }
                        },
                        contains: function(c, b) {
                            var e = c.getData("dim"),
                                d = c.pos.getc().$scale(c.scale);
                            return this.nodeHelper.triangle.contains(d, b, e)
                        }
                    },
                    star: {
                        render: function(d, c) {
                            var f = this.node,
                                e = d.getData("dim"),
                                b = d.pos.getc();
                            e = f.transform ? e * (1 - b.squaredNorm()) : e;
                            b.$scale(d.scale);
                            if (e > 0.2) {
                                this.nodeHelper.star.render("fill", b, e, c)
                            }
                        },
                        contains: function(c, b) {
                            var e = c.getData("dim"),
                                d = c.pos.getc().$scale(c.scale);
                            return this.nodeHelper.star.contains(d, b, e)
                        }
                    }
                });
                a.Plot.EdgeTypes = new B({
                    none: P.empty,
                    line: {
                        render: function(c, f) {
                            var e = c.nodeFrom.pos.getc(true),
                                b = c.nodeTo.pos.getc(true),
                                d = c.nodeFrom.scale;
                            this.edgeHelper.line.render({
                                x: e.x * d,
                                y: e.y * d
                            }, {
                                x: b.x * d,
                                y: b.y * d
                            }, f)
                        },
                        contains: function(c, f) {
                            var b = c.nodeFrom.pos.getc(true),
                                d = c.nodeTo.pos.getc(true),
                                e = c.nodeFrom.scale;
                            this.edgeHelper.line.contains({
                                x: b.x * e,
                                y: b.y * e
                            }, {
                                x: d.x * e,
                                y: d.y * e
                            }, f, this.edge.epsilon)
                        }
                    },
                    arrow: {
                        render: function(i, g) {
                            var d = i.nodeFrom.pos.getc(true),
                                e = i.nodeTo.pos.getc(true),
                                c = i.nodeFrom.scale,
                                f = i.getData("dim"),
                                h = i.data.$direction,
                                b = (h && h.length > 1 && h[0] != i.nodeFrom.id);
                            this.edgeHelper.arrow.render({
                                x: d.x * c,
                                y: d.y * c
                            }, {
                                x: e.x * c,
                                y: e.y * c
                            }, f, b, g)
                        },
                        contains: function(c, f) {
                            var b = c.nodeFrom.pos.getc(true),
                                d = c.nodeTo.pos.getc(true),
                                e = c.nodeFrom.scale;
                            this.edgeHelper.arrow.contains({
                                x: b.x * e,
                                y: b.y * e
                            }, {
                                x: d.x * e,
                                y: d.y * e
                            }, f, this.edge.epsilon)
                        }
                    },
                    hyperline: {
                        render: function(c, f) {
                            var e = c.nodeFrom.pos.getc(),
                                b = c.nodeTo.pos.getc(),
                                d = this.viz.getRadius();
                            this.edgeHelper.hyperline.render(e, b, d, f)
                        },
                        contains: P.lambda(false)
                    }
                })
            })($jit.Hypertree)
        })();
