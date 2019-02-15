/**
 * Created by mark on 25.09.17.
 */
$(document).ready(function () {

    $('.navbar-brand').css('color','white');

    $('[id="RequestCallMeForm"]').on('beforeSubmit',function () {
        $.ajax({
            url:'/course-polish/save-request-call-me',
            type: 'POST',
            data: $(this).serialize(),
            success: function (res) {
                if(res == true) {
                    $('.record-success').fadeToggle(1000);
                    $('.record-success').fadeOut(10000);
                }
                else{
                    $('.record-danger').fadeToggle(1000);
                    $('.record-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });

    $('[id="RequestCallMeForm2"]').on('beforeSubmit',function () {
        var data= $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        $.ajax({
            url:'/course-polish/save-request-call-me',
            type: 'POST',
            data: data,

            success: function (res) {
                if(res == true) {
                    $('.record-success').fadeToggle(1000);
                    $('.record-success').fadeOut(10000);
                }
                else{
                    $('.record-danger').fadeToggle(1000);
                    $('.record-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });

    $('[id="RecordForm"]').on('beforeSubmit',function () {

        var data= $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        $.ajax({
            url:'/course-polish/index',
            type: 'POST',
            data: data,

            success: function (res) {
                if(res == true) {
                    $('.record-success').fadeToggle(1000);
                    $('.record-success').fadeOut(10000);
                }
                else{
                    $('.record-danger').fadeToggle(1000);
                    $('.record-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });

    $('[id="AskQuestionForm"]').on('beforeSubmit',function () {

        var data= $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        $.ajax({
            url:'/course-polish/ask-question',
            type: 'POST',
            data: data,

            success: function (res) {
                if(res == true) {
                    var alertSuccess = $('.alert-success');
                    $('.ask-success').fadeToggle(1000);
                    $('.ask-success').fadeOut(10000);
                }
                else{
                    $('.ask-danger').fadeToggle(1000);
                    $('.ask-danger').fadeOut(20000);
                }
            },
            error:function () {
                alert('Error')
            }
        });
        return false;
    });


    $('[id="HomeForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-home',
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


    $('[id="PrivilegeForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-privilege',
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

    $('[id="AssuranceForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-assurances',
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

    $('[id="GettingFirstForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-getting-first',
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

    $('[id="GettingSecondForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-getting-second',
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

    $('[id="TariffsForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-tariffs',
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


    $('[id="GettingThirdForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-getting-third',
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


    $('[id="ServicesForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-services',
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

    $('[id="GettingFourthForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-getting-fourth',
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

    $('[id="TeamForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-team',
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

    $('[id="QuestionForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-question',
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

    $('[id="GettingFifthForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-getting-fifth',
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

    $('[id="FooterForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/admin-course-polish/save-footer',
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

    //Mobi Forms
    $('[id="MobiHomeForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-home',
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
    $('[id="MobiExploreForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-explore',
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
    $('[id="MobiAdditionallyForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-additionally',
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
    $('[id="MobiAsWellAsForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-as-well-as',
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
    $('[id="MobiConditonsForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-conditons',
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
    $('[id="MobiPriceForm"]').on('beforeSubmit',function () {

        var data = $(this).serialize();

        $.ajax({
            url:'/admin/mobi-course-polish/save-mobi-price',
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
