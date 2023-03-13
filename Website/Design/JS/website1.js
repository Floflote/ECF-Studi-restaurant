/* Product category switch */

function showCategoryProduct(evt, categoryName) {
  var i, choice_category_content, choice_category_link;

  choice_category_content = document.getElementsByClassName(
    "choice_category_content"
  );
  choice_category_link = document.getElementsByClassName(
    "choice_category_link"
  );

  for (i = 0; i < choice_category_content.length; i++) {
    choice_category_content[i].style.display = "none";
  }

  for (i = 0; i < choice_category_link.length; i++) {
    choice_category_link[i].className = choice_category_link[
      i
    ].className.replace(" active_category", "");
  }

  document.getElementById(categoryName).style.display = "block";
  evt.currentTarget.className += " active_category";
}
