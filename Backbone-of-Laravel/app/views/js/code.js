//ProductLine Model
App.Models.PLine = Backbone.Model.extend({
    defaults: {
        pLine: 'na',
        pPic: 'na'
    }
});
App.Models.Tabs = Backbone.Model.extend({
    defaults: {
        title: 'defaultView'
    }
});
App.Models.DefaultView = Backbone.Model.extend({
    defaults: {
        title: 'defaultView'
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
//DefoView
App.Views.DefaultView = Backbone.View.extend({

    template: _.template($("#defoTemplate").html()),

    tagName: 'div',


    initialize: function () {
        this.model.on('change', this.render, this);
    },

    render: function () {
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    }
});

App.Views.Tabs = Backbone.View.extend({
    template: _.template($("#tabsTemplate").html()),

    events: {
        'click .fourtab li': 'clicky'

    },

    initialize: function () {
        this.model.on('change', this.render, this);
    },

    clicky: function (e) {
        e.preventDefault();
        console.log(e);
        console.log('click');
        console.log($(this).className);
        /*if(!this.hasClass('.activeTab')) {
         $('.activeTab').removeClass('activeTab');
         this.addClass('activeTab');

         }*/
    },


    render: function () {
        this.$el.html(this.template(this.model.toJSON()));
        return this;
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
        pLineCollection.add({pLine: 'E-Line Sorozat', pPic: 'css/img/eline.jpg'});
        pLineCollection.add({pLine: 'Q-Line Sorozat', pPic: 'css/img/qline.jpg'});
        pLineCollection.add({pLine: 'V-Line Sorozat', pPic: 'css/img/vline.jpg'});
        pLineCollection.add({pLine: 'Videófal Sorozat', pPic: 'css/img/vwall.jpg'});
        pLineCollection.add({pLine: 'Multi-touch Sorozat', pPic: 'css/img/mtouch.jpg'});
        var pLineCollectionView = new App.Views.PLineCollectionView({collection: pLineCollection}).render();
        var tabs = new App.Models.Tabs();
        var defo = new App.Models.DefaultView();
        var tabsView = new App.Views.Tabs({model: tabs}).render();
        var defoView = new App.Views.DefaultView({model: defo}).render();
        $('.productLineSelector').append(pLineCollectionView.$el);
        $('.defoView').append(tabsView.el);
        $('.defoView').append(defoView.el);
    }

});

