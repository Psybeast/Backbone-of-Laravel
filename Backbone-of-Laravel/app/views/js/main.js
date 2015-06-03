/**
 * Created by psybe on 6/3/2015.
 */
(function () {
    window.App = {
        Models: {},
        Collections: {},
        Views: {},
        Router: {}
    };

    window.vent = _.extend({}, Backbone.Events);

    window.template = function (id) {
        return _.template($('#' + id).html());
    };
})();
