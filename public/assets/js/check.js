function check(){
    var check = document.getElementsByName('checkme');
//var checkBoxList = document.getElementById('checkBoxList');
var inscrire = document.getElementById('confirm');

function allTrue(nodeList) {
for (var i = 0; i < nodeList.length; i++) {
    if (nodeList[i].checked === false) return false;
}
return true;
}
checkBoxList.addEventListener('click', function(event) {
inscrire.disabled = true;
if (allTrue(check)) inscrire.disabled = false;
    
});
}