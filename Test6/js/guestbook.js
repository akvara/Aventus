"use strict";

var fadeOutIn = 2000;
var currentPage = 1;
var totalPages = 1;

var fieldIsEmpty = function(field) {
    if ($('#' + field).val().trim() == '') {
        $('#messenger').html('<div id="fade" class="messenger-error"><p>Must enter ' + field + '</p></div>');
        $('#fade').fadeOut(fadeOutIn);
        return true;
    }
    return false;
};

var postComment = function() {
    if (fieldIsEmpty('name')) return;
    if (fieldIsEmpty('comment')) return;

    $.ajax({
        url: 'php/ajax-post.php',
        type: 'post',
        data: {
            'action': 'add',
            'name': $('#name').val(),
            'comment': $('#comment').val()
        },
        success: function (data, status) {
            if (data == "ok") {
                $('#messenger').html('<div id="fade" class="messenger-ok"><p>Comment added successfully</p></div>');
                $('#fade').fadeOut(fadeOutIn);
                $('#name').val('');
                $('#comment').val('');
                currentPage = 1;
                load();
            }
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    }); // end ajax call
};

var load = function() {
    $.ajax({
        url: 'php/ajax-get.php',
        type: 'get',
        data: {
            'action': 'count'
        },
        success: function (data, status) {
            totalPages = Math.ceil(data / 3);
            if (currentPage > totalPages) currentPage = totalPages;
            goToPageNo(currentPage);
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    }); // end ajax call
};

var goToPageNo = function (page) {
    currentPage = page;
    $.ajax({
        url: 'php/ajax-get.php',
        type: 'get',
        data: {
            'action': 'page',
            'page_no': currentPage
        },
        success: function(data, status) {
            displayPage(data);
            displayPaginator();
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    }); // end ajax call
};

var deleteItem = function (id) {
    $.ajax({
        url: 'php/ajax-post.php',
        type: 'post',
        data: {
            'action': 'delete',
            'id': id
        },
        success: function(data, status) {
            load();
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    }); // end ajax call
};

var displayPage = function(data) {
    var result = jQuery.parseJSON(data);
    var new_html = "";
    $.each(result, function(i, item) {
        if(typeof item == 'object') {
            new_html += "<tr>";
            new_html += "  <td>" + item.name + "</td>";
            new_html += "  <td>" + item.text + "</td>";
            new_html += "  <td>" + item.date + "</td>";
            new_html += "  <td><button onclick='deleteItem(" + item.id + ")'>Delete</button></td>";
            new_html += "<tr>";
        }
        else {
            return false;
        }
    });
    $('#output').html(new_html);
};

var displayPaginator = function() {
    if (totalPages > 1) {
        var new_html = "Pages: ";
        for (var i = 1; i<= totalPages; i++) {
            if (i === currentPage) {
                new_html += "&nbsp;" + i + "&nbsp;";
            } else {
                new_html += "<button onclick='goToPageNo(" + i + ")'>" + i + "</button>" ;
            }
        }
        $('#pages').html(new_html);
    } else {
        $('#pages').html('');
    }
};

$(function() {
    load();
    $('#add').on('click', function (e) {
        e.preventDefault();
        postComment();
    });
});
