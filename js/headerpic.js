
        $(document).ready(

            function () {

                var result = {
                    "0": {
                        "ID": "1",
                        "NAME": "图片1",
                        "URL": "http://baidu.com",
                        "IMAGE": "http://ljtxhz.com/img/s1-p1.png"
                    },
                    "1": {
                        "ID": "2",
                        "NAME": "图片2",
                        "URL": "http://google.com",
                        "IMAGE": "http://ljtxhz.com/img/s1-p1.png"
                    },
                    "2": {
                        "ID": "3",
                        "NAME": "图片3",
                        "URL": "http://baidu.com",
                        "IMAGE": "http://ljtxhz.com/img/s1-p1.png"
                    }
                };
               
            
                function zh(data)//用户将json数组对象解析成二维数组
                {
                    var arr = [];
                    for (var i in data) {
                        arr[i] = [];
                        for (var j in data[i]) {
                            arr[i].push(data[i][j]);
                        }
                    }
                    return arr;
                }

                function addTable(getdata) {//将解析出来的二维数组显示
                    var div1 = $(".swiper-wrapper");
                    var tab = " <div class=\"swiper-slide slider-bg-position\" style=\"background:url('";
                    var tab2 = "')\" data-hash=\"slide";
                    var tab3 = "\"></div>";
                    var arr = [];
                    var tabs="";
                    arr = zh(getdata);

                    for (var i = 0; i < arr.length; i++) {
                        
                    
                        tabs = tabs+tab+arr[i]["3"];
                        tabs += tab2;
                        tabs += i;
                        tabs += tab3;
                       
                    }
                    
            
                     div1.empty();
                    div1.html(tabs);
                }
                addTable(result);
        
            }
        )
