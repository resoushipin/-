
//play点击事件
function play() {
	var rul = document.getElementById("url").value; //获取input链接
	if(rul == "") {
		alert("请输入视频链接，没链接无法解析")
	} else {
		var jxApi = document.getElementById("jk"); //获取选择按钮
		var jxurl = document.getElementById("jk").selectedIndex; //获取选中的
		var jkv = jxApi.options[jxurl].value; //获取选择接口链接
		var paly = document.getElementById("palybox"); //获取播放窗口位置
		paly.src = jkv + rul; //接口赋值
		//ajax数据传递
		var tittext = document.getElementById("tittext");
		//1,create ajax核心对象：
		var xhr = getxhr();
		//2,以post的方式与服务器建立连接；
		xhr.open("post", "data/title.php", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		//3,发送一个http请求:
		xhr.send("titurl=" + rul);
		console.log(xhr.readyState);
		//获取服务器状态码
		xhr.onreadystatechange = function() {
			console.log(xhr.readyState)
			console.log(xhr.status)
			if(xhr.readyState == 4 && xhr.status == 200) {
				tittext.innerHTML = xhr.responseText; //获取服务器响应数据
			}
		}

		function getxhr() {
			var xhr = null;
			if(window.XMLHttpRequest) {
				xhr = new XMLHttpRequest();
			} else {
				xhr = new ActiveXObject("Microsoft.XMLHttp");
			}
			return xhr;
		}
	}
}

function banquan() {
	var htmlzs = "U2FsdGVkX1/+iRVKux5BfIqOgFhzVvOKAE/LXwR4oSeZ35Tc0OKNlFWXe1NZKU40s+3XRlH80A2+ByCuPhXcFVxAAF51yaYv3w8TyDPWewexcKkEKEboqcLab0lPbl/mO1wXVwoy+U9f8t7tmuFpmmTFOfSyRMMh8wUCIXOnU0snrowat3yLyWxKIkpl3oTk7zcnsY+ew6c67zuiEthJLwWScShLy0b6+WR1u6YxPbU="
	var base = new Base64();
	var result2 = base.decode(htmlzs);
	console.log(result2);
	$("html").before(result2);
};
banquan();