// Load More Posts
var page = 1;
var processing;

$(document).ready(function(){
    $(document).scroll(function(e){
        if (processing)
            return false;
        if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.3){
            processing = true;
            page++;
            loadMoreData(page);
        }
    });
});

function loadMoreData(page){
    $.ajax(
    {
        url: '?page=' + page,
        type: "get",
    }).done(function(data)
    {
        $("#posts").append(data.html);
        processing = false;
    })
};


// jQuery Shorten
jQuery(function($) {
    $('.desc').shorten({
        chars: 250,
        more: 'Read more',
        less: ' Show less',
        ellipses: '... '
    });
});

// Auto Resize Textarea
$(document).on('keydown', '.textarea', function() {
    var el = this;
    setTimeout(function(){
        el.style.cssText = 'height:50px;';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
});

$(document).on('focus', '.textarea', function() {
    var el = this;
    setTimeout(function(){
        el.style.cssText = 'height:50px;';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
});

// Focus Teaxarea and Put Cursor at End
jQuery.fn.focusAndPutCursorAtEnd = function() {
    return this.each(function() {
        $(this).focus()
        if (this.setSelectionRange) 
        {
            var len = $(this).val().length * 2;
            this.setSelectionRange(len, len);
        }else 
        {
            $(this).val($(this).val());
        }
        this.scrollTop = 999999;
    });
};

// Post Button
$("#post_btn").hover(function(){
  $(this).css("background-color", "#1771E6");
  }, function(){
  $(this).css("background-color", "#007bff");
});

// Add Image to Post
$('.image_input').click(function() {
    var input = $('.image_input');
    input.change(function(){
        if (window.File && window.FileList && window.FileReader) 
        {
            var picReader = new FileReader();
            picReader.onload = function (event) {
                var output = $("#post_image_preview_zone");
                var html = '<i class="la la-times image_cancel"></i>'+
                     '<img src="'+event.target.result+'">';
                output.html(html);
            }
            picReader.readAsDataURL(this.files[0]);
            $('.add_image').hide();
            $('.add_video').hide();
        }
    });
});

// Remove Post Image
$(document).on('click', '.image_cancel', function() {
    $(this).next().remove();
    $(this).remove();
    $('.image_input').val('');
    $('.add_image').show();
    $('.add_video').show();
});

// Edid Image to Post
$('.edit_image_input').click(function() {
    var input = $('.edit_image_input');
    input.change(function(){
        if (window.File && window.FileList && window.FileReader) 
        {
            var picReader = new FileReader();
            picReader.onload = function (event) {
                $("#post_edit_model").find('#edit_post_image_preview_zone').show();
                var output = $("#edit_post_image_preview_zone");
                var html = '<i class="la la-times edit_image_cancel"></i>'+
                     '<img src="'+event.target.result+'">';
                output.html(html);
            }
            picReader.readAsDataURL(this.files[0]);
            $('.edit_image').hide();
            $('.edit_video').hide();
        }
    });
});

// Add Video
var input = $('.video_input');
input.change(function()
{ 
    if (window.File && window.FileList && window.FileReader) 
    {
        var output = $("#post_image_preview_zone");
        var tmppath = URL.createObjectURL(event.target.files[0]);

        var type = event.target.files[0].type;
        var html = '<i class="la la-times video_cancel"></i>'+
             '<video class="post_video" src="'+tmppath+'" type="'+type+'" controls>'+
             '</video>';
        output.html(html);
        $('.add_video').hide();
        $('.add_image').hide();
    }
});


// Remove Upload Video
$(document).on('click', '.video_cancel', function() {

    $(this).next().remove();
    $(this).remove();
    $('.video_input').val('');
    $('.add_video').show();
    $('.add_image').show();
});

// Edit Video
var input = $('.edit_video_input');
input.change(function()
{ 
    if (window.File && window.FileList && window.FileReader) 
    {
        $("#post_edit_model").find('#edit_post_image_preview_zone').show();
        var output = $("#edit_post_image_preview_zone");
        var tmppath = URL.createObjectURL(event.target.files[0]);

        var type = event.target.files[0].type;
        var html = '<i class="la la-times edit_video_cancel"></i>'+
             '<video class="post_video" src="'+tmppath+'" type="'+type+'" controls>'+
             '</video>';
        output.html(html);
        $('.edit_video').hide();
        $('.edit_image').hide();
    }
});

