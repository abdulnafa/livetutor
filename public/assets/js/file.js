$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        dotsEach: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });
    $(".scroll_up").click(function () {
        $(window).scrollTop(0);
    });
    AOS.init({
        offset: 100,
        duration: 1200,
    });

    // -------------------------------------Index Form ----------------------------------------------------------------------------------------------------------------------------------------------------
    var total;
    var education;
    var wordspages;
    var days;

    $(".herobox .education select").on("change", function () {
        total = 0;
        education = 0;

        education = parseFloat($(this).val()).toFixed(2);

        total = education;
        total = parseFloat(total).toFixed(2);
        $(".pricecalculationdiv").html(total);
    });
    $(".herobox .wordspages select").on("change", function () {
        total = 0;
        wordspages = 0;
        wordspages = parseInt($(this).val()) * parseFloat(education).toFixed(2);

        total = wordspages;
        total = parseFloat(total).toFixed(2);
        $(".pricecalculationdiv").html(total);
    });

    $(".herobox .days select").on("change", function () {
        days = 0;
        total = 0;

        total = Number(education) * Number(wordspages) + Number($(this).val());
        total = Number(total).toFixed(2);
        $(".pricecalculationdiv").html(total);
    });

    // Order form code Start here------------------------------------
    var total = 0;
    var mycountnumber = 0;

    // Academic Level
    $(".academiclevelrow input").on("change", function () {
        $(".academiclevelrow .col").each(function () {
            $(this).removeClass("academicactive");
        });
        $(this).parent(".col").addClass("academicactive");

        $(".getacademic").html($(this).attr("id"));
        $myval = $(this).attr("data-val");
        $(".singlepricesideboxfixed").html($myval);

        total =
            Number($(".pagesideboxfixed").html()) *
            Number($(".singlepricesideboxfixed").html());
        $(".totalchangedsidebarfixed").html(total.toFixed(2));
        $("#totalamount").val(total.toFixed(2));
    });
    // Academic level End

    // Type of paper

    $("#typeofpaper").on("change", function () {
        $(".gettypeofpaper").html($(this).val());
    });

    // Type of paper End

    // Paper Format
    $(".paperformatrow input").on("change", function () {
        $(".paperformatrow .col").each(function () {
            $(this).removeClass("paperformatactive");
        });
        $(this).parent(".col").addClass("paperformatactive");
    });

    // Paper Format End

    // Double Single
    $(".doublesinglerow input").on("change", function () {
        $(".doublesinglerow .col").each(function () {
            $(this).removeClass("doublesinglerowactive");
        });
        $(this).parent(".col").addClass("doublesinglerowactive");

        if ($(this).val() == 1) {
            total = Number($(".singlepricesideboxfixed").html());
            total = total * 2;
            $(".singlepricesideboxfixed").html(total);

            total = Number($(".pagesideboxfixed").html()) * total;
            $(".totalchangedsidebarfixed").html(total.toFixed(2));
            $("#totalamount").val(total.toFixed(2));
        } else {
            total = Number($(".singlepricesideboxfixed").html());
            total = total / $(this).val();
            $(".singlepricesideboxfixed").html(total);
            total = Number($(".pagesideboxfixed").html()) * total;
            $(".totalchangedsidebarfixed").html(total.toFixed(2));
            $("#totalamount").val(total.toFixed(2));
        }
    });
    // Double Single End

    // Number Of Pages
    $(".countingrowpage .myminus").on("click", function () {
        mycountnumber = parseInt($(".countingrowpage .mycount").html());

        if (mycountnumber == 0) {
            alert("stop");
        } else {
            mycountnumber = mycountnumber - 1;
            $("#noofpages").val(mycountnumber);
            $(".countingrowpage .mycount").html(mycountnumber);
            $(".pagesideboxfixed").html(mycountnumber);
            total =
                mycountnumber *
                Number($(".singlepricesideboxfixed").html()).toFixed(2);
            $(".totalchangedsidebarfixed").html(total.toFixed(2));
            $("#totalamount").val(total.toFixed(2));
        }
    });

    $(".countingrowpage .myplus").on("click", function () {
        mycountnumber = parseInt($(".countingrowpage .mycount").html());

        mycountnumber = mycountnumber + 1;
        $("#noofpages").val(mycountnumber);
        $(".countingrowpage .mycount").html(mycountnumber);

        $(".pagesideboxfixed").html(mycountnumber);

        total =
            mycountnumber *
            Number($(".singlepricesideboxfixed").html()).toFixed(2);
        $(".totalchangedsidebarfixed").html(total.toFixed(2));
        $("#totalamount").val(total.toFixed(2));
    });
    // Number of pages end

    // Currency

    $(".currencyrow input").on("change", function () {
        $(".currencyrow .col").each(function () {
            $(this).removeClass("currencyactive");
        });
        $(this).parent(".col").addClass("currencyactive");

        var getcurrentcurrency = $(".getcurrencydiv").html().toLowerCase();

        if ($(this).attr("id") == getcurrentcurrency) {
        } else {
        }
    });

    // Sources to be cited

    $(".sourcecountingrowpage .myminus").on("click", function () {
        mysourececountnumber = parseInt(
            $(".sourcecountingrowpage .mycount").html()
        );

        if (mysourececountnumber == 1) {
            alert("stop");
        } else {
            mysourececountnumber = mysourececountnumber - 1;
            $("#sourcetobecited").val(mysourececountnumber);
            $(".sourcecountingrowpage .mycount").html(mysourececountnumber);
        }
    });

    $(".sourcecountingrowpage .myplus").on("click", function () {
        mysourececountnumber = parseInt(
            $(".sourcecountingrowpage .mycount").html()
        );

        mysourececountnumber = mysourececountnumber + 1;
        $("#sourcetobecited").val(mysourececountnumber);

        $(".sourcecountingrowpage .mycount").html(mysourececountnumber);
    });

    // Source to be cited End

    // Powerpointsslides

    $(".powerpointslidecountingrowpage .myminus").on("click", function () {
        mycountnumber = Number(
            $(".powerpointslidecountingrowpage .mycount").html()
        );

        if (mycountnumber == 0) {
        } else {
            mycountnumber = mycountnumber - 1;
            $("#powerpointslides").val(mycountnumber);
            if (mycountnumber == 0) {
                $(".pptdiv").addClass("hide");
            }
            $(".powerpointslidecountingrowpage .mycount").html(mycountnumber);

            $(".getppslidenumber").html(mycountnumber);
            var number = mycountnumber * 22.31;
            $(".getpptslidetotal").html(number.toFixed(2));
        }
    });

    $(".powerpointslidecountingrowpage .myplus").on("click", function () {
        mycountnumber = Number(
            $(".powerpointslidecountingrowpage .mycount").html()
        );

        mycountnumber = mycountnumber + 1;
        $("#powerpointslides").val(mycountnumber);
        $(".powerpointslidecountingrowpage .mycount").html(mycountnumber);
        $(".getppslidenumber").html(mycountnumber);
        $(".getpptslidetotal").html((mycountnumber * 22.31).toFixed(2));

        if (mycountnumber > 0) {
            $(".pptdiv").removeClass("hide");
        }
    });

    // Power point slides End

    // Deadline

    $(".deadlinerow input").on("change", function () {
        $(".deadlinerow .col").each(function () {
            $(this).removeClass("deadlinerowactive");
        });
        $(this).parent(".col").addClass("deadlinerowactive");
    });

    // Standard Package

    $(".categorypackagerow input").on("change", function () {
        $(".categorypackagerow .col").each(function () {
            $(this).removeClass("categorypackagerowactive");
        });
        $(this).parent(".col").addClass("categorypackagerowactive");
    });

    $(".paymentloginbutton.new").on("click", function () {
        $(".paymentloginbutton").each(function () {
            $(this).removeClass("active");
        });

        $(this).addClass("active");

        $(".paymentloginform").each(function () {
            $(this).removeClass("active");
        });

        $(".paymentloginform.new").addClass("active");
    });

    $(".paymentloginbutton.old").on("click", function () {
        $(".paymentloginbutton").each(function () {
            $(this).removeClass("active");
        });

        $(this).addClass("active");

        $(".paymentloginform").each(function () {
            $(this).removeClass("active");
        });

        $(".paymentloginform.old").addClass("active");
    });

    // Select Additonal File Js

    $(".dragablefilediv").on("click", function () {
        $("#additionalfile").trigger("click");
    });

    // ------------------------------Sign Up Ajax Code---------------------------------

    $("#buynowsignupformbutton").on("click", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
        });
        e.preventDefault();

        var email = $("#emailsignup").val();
        var name = $("#namesignup").val();
        var password = $("#signuppassword").val();
        var phonecode = $("#signupphonecode").val();
        var phonenumber = $("#signupnumber").val();

        var data = {
            email: email,
            name: name,
            password: password,
            phonecode: phonecode,
            phonenumber: phonenumber,
        };

        $.ajax({
            type: "POST",
            url: "/signupformdata",
            data: data,
            success: function (data) {
                if (data.status) {
                    $(".bottonaccountdiv").addClass("d-none");

                    $(".checkoutbuttonhide button").removeClass("hide");
                    $("#userid").val(data.id);
                    alert("signup successfully");
                }
            },
        });
    });

    // ------------------------------Sign In Ajax Code---------------------------------

    $("#btnsignin").on("click", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
        });
        e.preventDefault();

        var email = $("#signinemail").val();
        var password = $("#signinpassword").val();

        var data = {
            email: email,
            password: password,
        };

        $.ajax({
            type: "POST",
            url: "/signinformdata",
            data: data,
            success: function (data) {
                if (data.status) {
                    $(".bottonaccountdiv").addClass("d-none");

                    $(".checkoutbuttonhide button").removeClass("hide");
                    $("#userid").val(data.id);
                    alert("signup successfully");
                }
            },
        });
    });

    // header code---------------------------------------------------------

    $(".openheaderprofileicon").on("click", function () {
        $(".profileopendiv").toggleClass("d-block");
    });

    // User Admin ---------------------------------------

    $(".dashboardsidebar ul li").on("click", function () {
        $(".dashboardsidebar ul li").each(function () {
            $(this).removeClass("active");
        });

        $(this).addClass("active");
    });

    $("#userhomebtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".home-section").addClass("active");
    });

       $("#placeorderbtn").on("click", function () {
           $(".dashboarddiv").each(function () {
               $(this).removeClass("active");
           });

           $(".placeorderdiv").addClass("active");
       });

    $("#myordersbtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".myorderdiv").addClass("active");
    });

    $("#editprofilesbtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".editprofilediv").addClass("active");
    });

    $("#messagebtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".messagediv").addClass("active");
    });

    //  Admin Dashboard---------------------------------------

    $(".dashboardsidebar ul li").on("click", function () {
        $(".dashboardsidebar ul li").each(function () {
            $(this).removeClass("active");
        });

        $(this).addClass("active");
    });

    $("#allordersbtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".allordersdiv").addClass("active");
    });

    $("#paymentcompletedordersbtn").on("click", function () {
        $(".dashboarddiv").each(function () {
            $(this).removeClass("active");
        });

        $(".paymentcompletedordersdiv").addClass("active");
    });

    // send Message code

    $("#sendmessagebtn").on("click", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
        });
        e.preventDefault();

        var message = $("#sendmessageinput").val();

        var data = {
            message: message,
        };

        $.ajax({
            type: "POST",
            url: "/sendmessage",
            data: data,
            success: function (data) {
                data.each(function () {
                    console.log("kdkkd");
                });

                console.log(data);
            },
        });
    });

    // Hammad Code

    $(".addfiles").click(() => {
        $(".addfiles").addClass("active");
        $(".ins").removeClass("active");
        $(".download").removeClass("active");
        $(".rating").removeClass("active");

        $(".img-upload-section").show();
        $(".send-order-message").hide();
    });

    $(".ins").click(() => {
        $(".ins").addClass("active");
        $(".addfiles").removeClass("active");
        $(".download").removeClass("active");
        $(".rating").removeClass("active");

        $(".img-upload-section").hide();
        $(".send-order-message").show();
    });

    $(".rating").click(() => {
        $(".rating").addClass("active");
        $(".addfiles").removeClass("active");
        $(".ins").removeClass("active");
        $(".download").removeClass("active");

        $(".img-upload-section").hide();
        $(".send-order-message").hide();
    });

    $(".download").click(() => {
        $(".rating").removeClass("active");
        $(".addfiles").removeClass("active");
        $(".ins").removeClass("active");
        $(".download").addClass("active");

        $(".img-upload-section").hide();
        $(".send-order-message").hide();
    });
    $('.in-btn').click(()=>{
         $(".in-btn").addClass("active");
          $(".rv-btn").removeClass("active");
          $(".com-btn").removeClass("active");
        $(".in-progress-table").show();
        $(".revision-table").hide();
        $(".complete-table").hide();
       
    })   
     $('.rv-btn').click(()=>{
         $(".in-btn").removeClass("active");
        
         $(".com-btn").removeClass("active");
         $(".rv-btn").addClass("active");
        $(".in-progress-table").hide();
        $(".revision-table").show();
        $(".complete-table").hide();
       
    })
    $('.com-btn').click(()=>{
         $(".com-btn").addClass("active");
          $(".in-btn").removeClass("active");
          $(".rv-btn").removeClass("active");
         
        $(".in-progress-table").hide();
        $(".revision-table").hide();
        $(".complete-table").show();
       
    })

    // Jquery End Here
});
