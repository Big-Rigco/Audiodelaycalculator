 "delay-calculator": function(e, t) {
                    var l,
                        r,
                        n = parseFloat(e[0].value),
                        o = parseFloat(e[1].value),
                        c = {},
                        d = t.dist,
                        v = t.temp;
                    if (n || (c.distance = "Please enter a distance"), o || (c.temperature = "Please enter a temperature"), n && o) {
                        if ("Feet" === d && (n *= .3048), l = o, "Fahrenheit" === v && (o = 5 / 9 * (o - 32)), o >= -273)
                            return r = 331.5 * Math.sqrt((o + 273.15) / 273.15), "Delay ".concat((n * (1e3 / r)).toFixed(2), "mS in dry air at ").concat(l, "° ").concat(v);
                        c.temperature = "Temperature must be above absolute zero"
                    }
                    return c
                },
