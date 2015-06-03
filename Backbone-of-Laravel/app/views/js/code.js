//ProductLine Model
App.Models.PLine = Backbone.Model.extend({
    defaults: {
        pLine: 'na',
        pPic: 'na'
    }
});
//ProductLine View
App.Views.PLine = Backbone.View.extend({
    tagName: 'li',

    className: 'pLineLi',

    template: _.template($("#plineTemplate").html()),

    initialize: function () {
        this.model.on('change', this.render, this);
    },

    render: function () {
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    }
});
//ProductLine Collection
App.Collections.PLineCollection = Backbone.Collection.extend({
    model: App.Models.PLine,

    url: '/productionLines'
});
//ProductLine Collection View
App.Views.PLineCollectionView = Backbone.View.extend({
    tagName: 'ul',

    className: 'productLineSelector',

    initialize: function () {
        //this.collection.on('add', this.addOne, this);
    },

    render: function () {
        this.collection.each(this.addOne, this);
        return this;
    },

    addOne: function (pLine) {
        var pLineView = new App.Views.PLine({model: pLine});
        this.$el.append(pLineView.render().el);

    }
});


/*
 var mod = new App.Models.PLine({pLine: 'P-Line', pPic: 'css/img/eline.jpg'});
 var modV = new App.Views.PLine({model: mod});
 modV.render();
 $(document.body).append(modV.$el);
 */

App.Views.App = Backbone.View.extend({
    initialize: function () {
        var pLineCollection = new App.Collections.PLineCollection;
        pLineCollection.add({pLine: 'E-Line', pPic: 'css/img/eline.jpg'});
        pLineCollection.add({pLine: 'Q-Line', pPic: 'css/img/qline.jpg'});
        pLineCollection.add({pLine: 'V-Line', pPic: 'css/img/vline.jpg'});
        pLineCollection.add({pLine: 'Videowall', pPic: 'css/img/vwall.jpg'});
        pLineCollection.add({pLine: 'Multi-touch', pPic: 'css/img/mtouch.jpg'});
        var pLineCollectionView = new App.Views.PLineCollectionView({collection: pLineCollection}).render();
        $('main').append(pLineCollectionView.$el);
    }

});

