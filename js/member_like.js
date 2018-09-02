	function recipeDelete(e){
		var recdel = e.target.id.substr(6);
		// alert(recdel+ "A");
		$(this).parent().parent().remove();
		var xhr =new XMLHttpRequest();
		xhr.onload =function(){
			// alert("刪除收藏");
		}
		var url="recipe-delete.php?recipeNo="+recdel;
		xhr.open("Get",url,true);
		xhr.send(null);
	}



	function memberDelete(e){
		// var del = e.target.id.substr(5);
		// var d_all= document.getElementById("delete");
		var del = e.target.id.substr(6);
		// alert(del);
		$(this).parent().parent().remove();
		var xhr =new XMLHttpRequest();
		xhr.onload =function(){
			// alert("刪除收藏");
		}
		var url="member-delete.php?prodNo="+del;
		xhr.open("Get",url,true);
		xhr.send(null);
		
	}
	function m_delete(){
		var member_delete = document.getElementsByClassName("member_delete");
		for(var i=0; i<member_delete.length; i++){
			member_delete[i].onclick = memberDelete;
		}
		var recipe_delete = document.getElementsByClassName("re_del");
		for(var i=0; i<recipe_delete.length; i++){
			recipe_delete[i].onclick = recipeDelete;
		}

	}
	window.onload = m_delete;

			function recipeDelete(e){
		// var del = e.target.id.substr(5);
		// var d_all= document.getElementById("delete");
		var del = e.target.id.substr(6);
		alert(del);
		// $(this).parent().parent().remove();
		var xhr =new XMLHttpRequest();
		xhr.onload =function(){
			// alert("刪除收藏");
		}
		var url="recipe-delete.php?prodNo="+del;
		xhr.open("Get",url,true);
		xhr.send(null);
		
	}
	function recipe_delete(){
		var member_delete = document.getElementsByClassName("re_del");
		for(var i=0; i<member_delete.length; i++){
			member_delete[i].onclick = recipeDelete;
		}
	}
	window.onload = recipe_delete;