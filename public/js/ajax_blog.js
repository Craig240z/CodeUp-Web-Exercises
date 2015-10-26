$(document).ready(function(){
    'use strict';

    var blogRequests = $.get('data/blog.json');

    blogRequests.always(function() {
        console.log("Request Sent");
    });
    blogRequests.fail(function(data, error) {
        console.log(error);
        console.log(data);
    });
    blogRequests.done(function(data) {
        console.log(data);

        var populateBlog = [];

        data.forEach(function(object, index, array) {
            console.log(object.title + " " + object.categories);
            console.log(index);
            console.log(array);
            populateBlog += '<div>'
                        + '<h1>' + object.title + '</h1>'
                        + '<p>' + object.content + '</p>'
                        + '<p>' + object.categories + '</p>'
                        + '<p>' + object.date + '</p></div>';
        });

        $('#posts').html(populateBlog);
    });
});