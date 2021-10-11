// function deleteImage(id, image) {
//   document.body.innerHTML += `<form action="./delete.php" id ="deleteForm" method="post">
//   <input type="hidden" name="id" value="${id}">
//   <input type="hidden" name="image" value="${image}">
//   </form>`;
//   document.getElementById("deleteForm").submit();
// }

function deleteImage(id, image) {
  const data = JSON.stringify({ id: id, image: image });
  const xmlhttp = new XMLHttpRequest();

  xmlhttp.onload = function () {
    const res = JSON.parse(this.responseText);
    console.log(res);
  };

  xmlhttp.open("POST", "./delete.php");
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("data=" + data);
}
