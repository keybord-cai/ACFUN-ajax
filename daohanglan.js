// 导航栏跟随
$(function () {
  var nav = $(".head-nav"); //得到导航对象
  var win = $(window); //得到窗口对象
  var sc = $(document);//得到document文档对象。
  // 判断页面滚动了多少  数值只要稍稍大于导航的高度即可，
  win.scroll(function () {
    if (sc.scrollTop() >= 180) {
      nav.addClass("fixednav");
      nav.removeClass("back")
    } else {
      nav.removeClass("fixednav");
      nav.addClass("back");
    }
  })
});

var json;
$(document).ready(function () {
    $.ajax({
        type:'GET',
        url:"JSON.php",
        dateType:"json",
        success:function (data) {
            json = JSON.parse(data);
            // console.log(json);
            var htm1 = '';
            for (let index = 0; index < json.length; index++) {
                var htm ='<a href="' +json[index].url+ '">' +json[index].name+ '</a>';
                htm1 += '<li onmouseover="showSecond(' + index + ')" onmouseout="closeSecond()">' +htm+ '</li>';
                console.log(htm1);
            }
            $("#menus1").html(htm1);
        },
        error: function(jqXHR){
            alert("发生错误：" + jqXHR.status);
        },
    })
});



function showSecond(index) {
    var htm2 = '';
    for (const menu of json[index].childrens) {
        var htm ='<a href=' +menu.url+ '>' +menu.name +'</a>';
        htm2 += '<li>' + htm + '</li>';
    }
    $("#menus2").html(htm2);
    // console.log(htm2);
    if (htm2 !== "") {
        var p = document.getElementById("nav");
        p.style.display = "block";
    }
}


var i;
function closeSecond() {
    clearTimeout(i);
    i = setTimeout("close$()", 2000);
}
function close$() {
    menus2.innerHTML = " ";
    var p = document.getElementById("nav");
    p.style.display = "none";
}

// function showSecond(index) {
//     $.ajax({
//         type:'GET',
//         url:"http://localhost/ACFUN%5bAjax%5d/JSON.php",
//         dateType:"json",
//         success:function (data) {
//             var json = JSON.parse(data);
//             var htm2 = '';
//             for (const menu of json[index].childrens) {
//                 var htm ='<a href=' +menu.children+ '>' +menu.name +'</a>';
//                 htm2 += '<li>' + htm + '</li>';
//             }
//             $("#menus2").html(htm2);
//             // console.log(htm2);
//             if (htm2 !== "") {
//                 var p = document.getElementById("nav")
//                 p.style.display = "block";
//             }
//         }
//     })
// }
