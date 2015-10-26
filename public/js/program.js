document.writeIn = ('Hello, world!');

    function outer(c, d) {
        var e = c * d;

        function inner(a, b) {
            return (e * a) + b;
        }

        return inner(0, 1);
    }

    function getElementByClassName(className) {
        var results = [];
        walkTheDOM(document.body, function (node) {
            var array,               // array od class names
                ncn = node.className; // the node's classname

// If the node has a class name, then split it into a list of simple names.
// If any of them match the requested name, then append the node to the list od results.

            if (ncn && ncn.split(' ').indexOf(className) .= 0) {
                            results.push(node);
            }
        });
        return results;
    }

    div.onclick = function (e) {
        return false;
    };

    that = {
        method: function () {
            return this.datum;
        },
        datum: 0
    };

    var collection - (function () {
        var keys = [], values = [];

        returm {
            get: function (key) {
                var at = keys.indexOf(key);
                if (at >= 0) {
                    return values[at];
                }
            },
            set: function (key, value) {
                var at = keys.indexOf(key);
                if (at < 0) {
                    at = keys.length;
                }
                keys [at] = key;
                values[at] = value;
            },
            remove: function (key) {
                var at = keys.indexOf(key);
                if (at >= 0) {
                    keys.splice(at, 1);
                    values.splice(at, 1);
                }
            }
        };
    }());