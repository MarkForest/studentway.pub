
$(document).ready(function(){

    //admin head ajax
    $('#TourHeadForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-home',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourFirstBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-first-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourInfoBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-info-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourAboutUniversityBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-about-university-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourOurServicesBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-our-services-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourAboutUsBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-about-us-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourQuestionsBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-questions-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourHaveQuestionsBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-have-questions-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourReviewBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-review-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourPricesBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-prices-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourContactBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-contact-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
    $('#TourFooterBlockForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/tour/save-footer-block',
            type: 'POST',
            data: data,
            success: function (res) {
                if(res == true) {
                    $('.alert-success').fadeToggle(500);
                    $('.alert-success').fadeOut(10000);
                }
                else{
                    $('.alert-danger').fadeToggle(500);
                    $('.alert-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });
})
