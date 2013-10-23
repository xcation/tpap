KISSY.add(function(S, D, E, LimitFixed) {

    function init(frameGroup) {

        function SafeLimitFixed(elFixed, elLimit, config) {
            this.inner = new LimitFixed(
                elFixed,
                elLimit,
                cajaAFTB.untame(config)
            );
        }

        SafeLimitFixed.prototype.on = function() {
            var params = S.makeArray(arguments);//参数转成数组,第一个参数为type，第二个参数为回调函数

            this.inner.on(params[0],
                frameGroup.markFunction(function(e){
                    //这里因为用户肯定不需要用到e.halt这些函数，所以简单的将event封装一下（frameGroup.tame）即可
                    var event = {
                        isFixed: e.isFixed
                    };
                    params[1].call(this, frameGroup.tame(event));
                })
            );
        }

        SafeLimitFixed.prototype.scroll = function() {
            this.inner.scroll();
        }

        SafeLimitFixed.prototype.getViewRange = function() {
            return this.inner.getViewRange();
        }

        SafeLimitFixed.prototype.getLimitRange = function(refresh) {
            var params = S.makeArray(arguments);//参数转成数组
            return this.inner.getLimitRange(!!params[0]);
        }


        frameGroup.markCtor(SafeLimitFixed);

        frameGroup.grantMethod(SafeLimitFixed, 'on');
        frameGroup.grantMethod(SafeLimitFixed, 'scroll');
        frameGroup.grantMethod(SafeLimitFixed, 'getViewRange');
        frameGroup.grantMethod(SafeLimitFixed, 'getLimitRange');

        return function(context) {

            return {
                LimitFixed: frameGroup.markFunction(function () {
                    var args = S.makeArray(arguments), rt = [],
                        fixhook = args[0],
                        limithook = args[1],
                        cfg = args[2],
                        elLimits = D.query(limithook, context.mod);

                    S.each(elLimits, function(elLimit) {
                        var elFixed = D.get(fixhook, elLimit),
                            instance = new SafeLimitFixed(elFixed, elLimit, cfg)
                        rt.push(instance);
                    });
                    return rt;
                }),
                kissy: true
            }
        }

    }


    return init;

}, {
    requires: ['dom', 'event','gallery/limitfixed/1.0/']
})