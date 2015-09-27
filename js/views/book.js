var app = app || {};
app.BookView = Backbone.View.extend({
    tagName: 'div',
    className: 'bookContainer',
    template: _.template( $('#bookTemplate').html() ),
    render: function() {
// tmpl – это функция, которая принимает JSON-объект и возвращает html
// мы определили this.el в tagName. Используйте $el для доступа
// к jQuery-функции html()
        this.$el.html( this.template( this.model.toJSON() ));
        return this;
    },
    events: {
        'click .delete': 'deleteBook'
    },
    deleteBook: function() {
// удаление модели
        this.model.destroy();
// удаление представления
        this.remove();
    },
});