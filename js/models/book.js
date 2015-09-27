var app = app || {};
app.Book = Backbone.Model.extend({
    defaults: {
        coverImage: 'img/item.png',
        title: 'No title',
        author: 'Unknown',
        releaseDate: 'Unknown',
        keywords: 'None'
    },
    parse: function( response ) {
        console.warn(
            response
        );
        //response.id = response._id;
        return response;
    }
});
