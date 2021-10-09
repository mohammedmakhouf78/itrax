function deleteImage(id, image) {
  console.log(image);
  document.body.innerHTML += `<form action="./delete.php" id ="deleteForm" method="post">
  <input type="hidden" name="id" value="${id}">
  <input type="hidden" name="image" value="${image}">
  </form>`;
  document.getElementById("deleteForm").submit();
}
