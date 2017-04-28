var ft_list;
var cookie = [];

window.onload = function () {
	document.querySelector("#new").addEventListener("click", newTodo);
	ft_list = document.querySelector("#ft_list");
	var temp = document.cookie;
	if (temp) {
		cookie = JSON.parse(temp);
		cookie.forEach(function (e) {
			addTodo(e);
		});
	}
}

window.onunload = function () {
	var todo = ft_list.children;
	var Newcookie = [];
	var i = -1;
	while (++i < todo.length)
		Newcookie.unshift(todo[i].innerHTML);
	document.cookie = JSON.stringify(Newcookie);
};

function newTodo() {
	var todo = prompt("enter to do", "");
	if (todo !== "")
		addTodo(todo);
}

function addTodo(todo) {
	var tmp = document.createElement("div");
	tmp.innerHTML = todo;
	tmp.addEventListener("click", deleteTodo);
	ft_list.insertBefore(tmp, ft_list.firstChild);
}

function deleteTodo () {
	if (confirm("do you want remove this?"))
		this.parentElement.removeChild(this);
}
