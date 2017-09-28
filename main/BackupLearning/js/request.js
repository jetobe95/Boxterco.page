


setInterval(function() {
  $.ajax({ url: 'learning.php',
   data: {articleId: '2'},
   type: 'post',
    success: function(output) {
      // dynamically append new comments
      console.log(output); // this just logs is
    }
  });
}, 300000); 


