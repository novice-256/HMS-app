// to add active navigation
var url = window.location.href
var get_link = url.split("/")
var _active= get_link[4].split(".")
var actual_active=_active[0].toLowerCase()
document.getElementById(actual_active).classList.add("nav_active")