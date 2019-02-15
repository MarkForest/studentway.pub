/**
 * Created by march on 31.12.2017.
 */
$(document).ready(function(){
    $('#MessageContactForm').submit(function(){
        var data = $(this).serialize();
        $.ajax({
            url:'/institutes/message-contact',
            type: 'POST',
            data: data,
            success:function(res){
                if(res == true){
                    $('.message-success').fadeToggle(1000);
                    $('.message-success').fadeOut(15000);

                }
                else{
                    $('.message-danger').fadeToggle(1000);
                    $('.message-danger').fadeOut(15000);
                }

            },
            error:function(){
                alert('Error');
            }
        });
       return false;
    });
    $('#LevelMessageForm1').submit(function(){
        var data = $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        // alert('asdasd');
        $.ajax({
            url:'/institutes/message-level',
            type: 'POST',
            data: data,
            success:function(res){
                if(res == true){
                    $('.message-success').fadeToggle(1000);
                    $('.message-success').fadeOut(15000);
                }
                else{
                    $('.message-danger').fadeToggle(1000);
                    $('.message-danger').fadeOut(15000);
                }

            },
            error:function(){
                alert('Error');
            }
        });
        return false;
    });
    $('#LevelMessageForm2').submit(function(){
        var data = $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        alert('asdasd');
        $.ajax({
            url:'/institutes/message-level',
            type: 'POST',
            data: data,
            success:function(res){
                if(res == true){
                    $('.message-success').fadeToggle(1000);
                    $('.message-success').fadeOut(15000);
                }
                else{
                    $('.message-danger').fadeToggle(1000);
                    $('.message-danger').fadeOut(15000);
                }

            },
            error:function(){
                alert('Error');
            }
        });
        return false;
    });
    $('#LevelMessageForm3').submit(function(){
        var data = $(this).serialize();

        $('.modal').hide();
        $('body').removeClass('modal-open');
        $('div.modal').removeClass('in');
        $('.modal-backdrop').remove();

        alert('asdasd');
        $.ajax({
            url:'/institutes/message-level',
            type: 'POST',
            data: data,
            success:function(res){
                if(res == true){
                    $('.message-success').fadeToggle(1000);
                    $('.message-success').fadeOut(15000);
                }
                else{
                    $('.message-danger').fadeToggle(1000);
                    $('.message-danger').fadeOut(15000);
                }

            },
            error:function(){
                alert('Error');
            }
        });
        return false;
    });
    //admin home ajax
    $('#IHomeForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-home',
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
    //admin first ajax
    $('#IFirstForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-first',
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
    //admin Second ajax
    $('#ISecondForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-second',
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
    //admin Third ajax
    $('#IThirdForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-third',
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
    //admin Fourth ajax
    $('#IFourthForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-fourth',
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
    //admin Fifth ajax
    $('#IFifthForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-fifth',
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
    //admin Sixth ajax
    $('#ISixthForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-sixth',
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
    //admin Seventh ajax
    $('#ISeventhForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-seventh',
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
    //admin Eighth ajax
    $('#IEighthForm').on('beforeSubmit',function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/admin/institutes/save-eighth',
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

function openNav() {
    document.getElementById("myNav").style.width = "100%";
    $('#btnOpenSpace').hide();
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    $('#btnOpenSpace').show();
}