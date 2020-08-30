function display() {
	
 
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myModal_btn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
function display1() {
	
 
  // Get the modal
  var modal1 = document.getElementById("myModal1");
  
  // Get the button that opens the modal
  var btn1 = document.getElementById("myModal_signu");
  
  // Get the <span> element that closes the modal
  var span1 = document.getElementsByClassName("close1")[0];
  
  // When the user clicks the button, open the modal 
  btn1.onclick = function() {
    modal1.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span1.onclick = function() {
    modal1.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal1.style.display = "none";
    }
  }
}
 

$(document).ready(function(){

  var maxLength = 349;

  $(".show-read-more").each(function(){

      var myStr = $(this).text();

      if($.trim(myStr).length > maxLength){

          var newStr = myStr.substring(0, maxLength);

          var removedStr = myStr.substring(maxLength, $.trim(myStr).length);

          $(this).empty().html(newStr);

          $(this).append(' <a href="javascript:void(0);" class="read-more" style="color:green;">Learn More...</a>');

          $(this).append('<span class="more-text">' + removedStr + '</span>');

      }

  });

  $(".read-more").click(function(){

      $(this).siblings(".more-text").contents().unwrap();

      $(this).remove();

  });

});
