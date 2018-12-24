
function post4contect() {

    $.ajax({
        //几个参数需要注意一下
        type: "POST",//方法类型
        dataType: "json",//预期服务器返回的数据类型
        url: "./function/contect.php",//url
        data: $('#form1').serialize(),
        success: function (data) {
            alert(data.message);
        },
        error: function (date) {
            alert(data.message);
        }
    })

}
