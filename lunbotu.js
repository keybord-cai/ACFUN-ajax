
onload=play();
  //轮播图
  // 获取到所有需要操作的对象
  var imgs_div = document.getElementById("imgs");
  var nav_div = document.getElementById("buttons");
  //获取到图片轮播的ul对象数组
  var imgsUl = imgs_div.getElementsByTagName("ul")[0];
  //获取到远点的ul对象数组
  var nav = nav_div.getElementsByTagName("ul")[0];
  //上一个
  var prious = document.getElementById("preous");
  //下一个
  var next = document.getElementById("next");
  //图片切换函数
  var index = 1;//表示默认当前就是展示的第一张图片
  var animTimer;
  var timer;
  play();
  // function prious() {
  //   initImgs(index)
  //   index -= 1;
  //   if (index < 1) {
  //     index = 5;
  //   }
  //   //这里需要判断当前的下标是否小于1，小于了，则说明现在当前是第一张图片，再返回，就是要到第5张图片，让index=5，每次点击之后让index的值减1
  //   animate(482);
  //   //上一张，图片需要向右移动，（X轴正轴方向），所以加482
  //   btnShow(index);
  // }
  function next() {
    initImgs(index)
    index += 1;
    if (index > 5) {
      index = 1;
    }
    //这里需要判断当前的下标是否大于5，大于了，则说明现在当前是第5张图片，再返下一张，就是要到第一张图片，让index=1，每次点击之后让index的值+1
    animate(-482);
    btnShow(index);
  }

  //让圆点标签的CLSS随当前图片变动
  function btnShow(cur_index) {
    var list = nav.children;
    for (var i = 0; i < nav.children.length; i++) {
      nav.children[i].children[0].className = "hidden";
    }
    nav.children[cur_index - 1].children[0].className = "current";
  }

  //图片位移距离
  function animate(offset) {
    var newLeft = parseInt(imgsUl.offsetLeft) + offset;
    // imgsUl.style.left=newLeft;
    // console.log("定时器外面:此时offsetLeft"+imgsUl.offsetLeft+">>newLeft:"+newLeft);
    if (newLeft > -482) {
      donghua(-2410);
    } else if (newLeft < -2410) {
      donghua(-482);
    } else {
      donghua(newLeft);
    }
  }

  //动画效果
  function donghua(offset) {
    clearInterval(animTimer);
    animTimer = setInterval(function () {
      imgsUl.style.left = imgsUl.offsetLeft + (offset - imgsUl.offsetLeft) / 10 + "px";
      if (imgsUl.offsetLeft - offset < 10 && imgsUl.offsetLeft - offset > -10) {//如果偏移量已经等于指定好的偏移量，则秦楚定时器
        imgsUl.style.left = offset + "px";
        clearInterval(animTimer);
        //开启定时轮播
        play();
      }
    }, 20);
  }

  function play() {
    timer = setInterval(next, 2000)
  }

  function initImgs(cur_index) {
    clearInterval(timer);
    clearInterval(animTimer);
    var off = cur_index * 482;
    imgsUl.style.left = -off + "px";
  }

  for (var i = 0; i < nav.children.length; i++) {
    nav.children[i].index = i;
    var sd = nav.children[i].index;
    nav.children[i].onmouseover = function () {
      var now_index = this.index;
      //这里很重要，要让当前的图片的index的值等于鼠标选中的图片 
      index = this.index + 1;
      initImgs(this.index + 1);
      btnShow(this.index + 1);
    }
    nav.children[i].onmouseout = function () {
      play();
    }
  }